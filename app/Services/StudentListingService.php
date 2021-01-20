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
     * Return all details of the student specified by the passed in id value
     * @param $id
     * @return array
     */
    public function getStudent($id): array
    {
        try
        {
            return $this->studentRepositoryInterface->getStudent($id);
        }
        catch (Exception $e)
        {
            return [];
        }
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
            $classIds = [];
            $school = $this->userRepositoryInterface->getTeacherSchool($teacherId);
            $scriibiLevels = $this->scriibiLevelRepositoryInterface->getScriibiLevelsOfTeacher($teacherId);
            $classes = $this->classRepositoryInterface->getClassesOfScriibiLevels($scriibiLevels, $school[0]['id']);
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

    /**
     * Filters the team students from the students who are already associated
     * with the writing task and order the resultant data set
     * @param $teamStudentsList
     * @param $taskId
     * @return array
     */
    protected function filterTeamStudentsFromTaskStudents($teamStudentsList, $taskId): array
    {
        try
        {
            $taskStudentIdHashMap = [];
            $writingTaskStudents = $this->writingTaskRepositoryInterface->getStudentsOfWritingTask($taskId);
            $taskStudentsCount = count($writingTaskStudents);
            $teamStudentsCount = count($teamStudentsList);

            for ($i = 0; $i < $taskStudentsCount; $i++)
            {
                $taskStudentIdHashMap[$writingTaskStudents[$i]['id']] = true;
            }

            for ($j = 0; $j < $teamStudentsCount; $j++)
            {
                if(array_key_exists($teamStudentsList[$j]['id'], $taskStudentIdHashMap))
                {
                    unset($teamStudentsList[$j]);
                }
            }

            usort($teamStudentsList, function ($a, $b)
            {
                return strcmp($a['first_name'], $b['first_name']);
            });
            return $teamStudentsList;
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
