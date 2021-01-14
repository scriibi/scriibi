<?php

namespace App\Services;

use Exception;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\Interfaces\ClassRepositoryInterface as ClassRepository;
use App\Repositories\Interfaces\StudentRepositoryInterface as StudentRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as WritingTaskRepository;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface as ScriibiLevelRepository;

class StudentListingService
{
    /**
     * @var ScriibiLevelRepository
     */
    protected $scriibiLevelRepositoryInterface;

    /**
     * @var UserRepository
     */
    protected $userRepositoryInterface;

    /**
     * @var ClassRepository
     */
    protected $classRepositoryInterface;

    /**
     * @var StudentRepository
     */
    protected $studentRepositoryInterface;

    /**
     * @var WritingTaskRepository
     */
    protected $writingTaskRepositoryInterface;

    public function __construct(ScriibiLevelRepository $scriibiLevelRepoInt, UserRepository $userRepoInt, ClassRepository $classRepoInt, StudentRepository $studentRepoInt, WritingTaskRepository $writingTaskRepoInt)
    {
        $this->scriibiLevelRepositoryInterface = $scriibiLevelRepoInt;
        $this->userRepositoryInterface = $userRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
        $this->studentRepositoryInterface = $studentRepoInt;
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
    }

    /**
     * Return all students who belong to classes (within the teacher's school)
     * which possess the same scriibi levels as the specified teacher
     * @param $teacherId
     * @param $taskId
     * @return array
     */
    public function getStudentsOfTeam($teacherId, $taskId): array
    {
        try
        {
            $scriibiLevels = $this->scriibiLevelRepositoryInterface->getScriibiLevelsOfTeacher($teacherId);
            $school = $this->userRepositoryInterface->getTeacherSchool($teacherId);
            $classes = $this->classRepositoryInterface->getClassesOfScriibiLevels($scriibiLevels, $school[0]['id']);
            $classIds = [];
            $length = count($classes);

            for($i = 0; $i < $length; $i++)
            {
                array_push($classIds, $classes[$i]['id']);
            }
            return $this->filterTeamStudentsFromTaskStudents($this->studentRepositoryInterface->getStudentsOfClasses($classIds), $taskId);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function filterTeamStudentsFromTaskStudents($teamStudentsList, $taskId): array
    {
        try
        {
            $studentIdHashMap = [];
            $writingTaskStudents = $this->writingTaskRepositoryInterface->getStudentsOfWritingTask($taskId);
            $taskStudentsCount = count($writingTaskStudents);
            $teamStudentsCount = count($teamStudentsList);
            for ($j = 0; $j < $taskStudentsCount; $j++)
            {
                $studentIdHashMap[$writingTaskStudents[$j]['id']] = true;
            }
            for ($j = 0; $j < $taskStudentsCount; $j++)
            {
                $studentIdHashMap[$writingTaskStudents[$j]['id']] = true;
            }
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
