<?php

namespace App\Services;

use DB;
use Exception;
use App\Repositories\Interfaces\RubricRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;

class RubricService
{
    /**
     * @var RubricRepositoryInterface
     */
    protected $rubricRepositoryInterface;
    /**
     * @var SkillRepositoryInterface
     */
    protected $skillRepositoryInterface;
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepositoryInterface;

    public function __construct(RubricRepositoryInterface $rubricRepoInt, SkillRepositoryInterface $skillRepoInt, UserRepositoryInterface $userRepoInt)
    {
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->skillRepositoryInterface = $skillRepoInt;
        $this->userRepositoryInterface = $userRepoInt;
    }

    /**
    * Creates a new teacher rubric template and attaches the associations to the
    * appropriate skills and teacher
    * @param $teacherId
    * @param $template
    * @return bool
    */
    public function saveTeacherTemplate($teacherId, $template): bool
    {
        try
        {
            $rubric = $this->rubricRepositoryInterface->addRubric($template['name'], $template['level']);
            $rubric->skills()->attach($template['skills']);
            $rubric->teachers()->attach($teacherId);
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    /**
     * Creates a new scriibi rubric template and attaches the associations to the
     * appropriate skills and curriculum school type
     * @param $rubric
     * @return bool
     */
    public function saveScriibiRubric($rubric): bool
    {
        try
        {
            $newRubric = $this->rubricRepositoryInterface->addRubric($rubric['name'], $rubric['level']);
            $newRubric->skills()->attach($rubric['skills']);
            $curriculumSchoolType = DB::table('curriculum_school_type')
                ->where('curriculum_id', $rubric['curriculum'])
                ->where('school_type_id', $rubric['schoolType'])
                ->get()
                ->toArray();
            $newRubric->curriculumSchoolType()->attach($curriculumSchoolType[0]->id);
            return true;
        }
        catch (Exception $e)
        {
            return  false;
        }
    }

    /**
     * Returns a specified rubric
     * @param $id
     * @return array
     */
    public function getRubric($id): array
    {
        try
        {
            return $this->rubricRepositoryInterface->getRubric($id);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Update a specified teacher rubric template and its associated skills
     * @param $id
     * @param $name
     * @param $scriibiLevel
     * @param $skills
     * @return bool
     */
    public function updateTeacherTemplate($id, $name, $scriibiLevel, $skills): bool
    {
        try
        {
            $updatedRubric = $this->rubricRepositoryInterface->updateRubric($id, $name, $scriibiLevel);
            if($updatedRubric === null)
            {
                throw new Exception('Rubric could not be updated');
            }
            $skillsUpdated = RubricService::updateRubricSkills($updatedRubric, $skills);
            if($skillsUpdated)
            {
                return true;
            }
            else
            {
                throw new Exception('Skills of the Rubric could not be updated');
            }
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Update the skills of a specified rubric
     * @param $rubric
     * @param $newSkills
     * @return bool
     */
    protected function updateRubricSkills($rubric, $newSkills): bool
    {
        try
        {
            $newSkillsHashMap = $skillsToAdd = $skillsToRemove = [];
            $oldSkills = $this->skillRepositoryInterface->getSkillIdsOfRubric($rubric->id);
            $newLength = count($newSkills);

            for($i = 0; $i < $newLength; $i++)
            {
                $newSkillsHashMap[$newSkills[$i]] = true;
            }

            $oldLength = count($oldSkills);
            for($j = 0; $j < $oldLength; $j++)
            {
                if(array_key_exists($oldSkills[$j], $newSkillsHashMap))
                {
                    unset($newSkillsHashMap[$oldSkills[$j]]);
                }
                else
                {
                    array_push($skillsToRemove, $oldSkills[$j]);
                }
            }
            $skillsToAdd = array_keys($newSkillsHashMap);
            $rubric->skills()->detach($skillsToRemove);
            $rubric->skills()->attach($skillsToAdd);
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Destroys a specified rubric resource and detaches associated skills
     * and teachers
     * @param $rubricId
     * @return bool
     */
    public function deleteRubric($rubricId): bool
    {
        try
        {
            return $this->rubricRepositoryInterface->destroyRubric($rubricId);
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }

    /**
     * Accept a list of school teachers and a rubric id and add a shared
     * flag to all users who already have been associated with the rubric
     * as sharees
     * @param $rubricId
     * @param $teachers
     * @return array
     */
    public function markSharedUsers($rubricId, $teachers): array
    {
        try
        {
            $sharees = $this->getShareeHashMap($rubricId);
            $teacherCount = count($teachers);
            for($i = 0; $i < $teacherCount; $i++)
            {
                if(array_key_exists($teachers[$i]['id'], $sharees))
                {
                    $teachers[$i]['shared'] = true;
                }
                else
                {
                    $teachers[$i]['shared'] = false;
                }
            }
            return $teachers;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function getShareeHashMap($rubricId): array
    {
        try
        {
            $sharedTeachersHashMap = [];
            $sharedTeacherIds = DB::table('rubric_shared')
                ->select('sharee_teacher_id')
                ->where('rubric_id', $rubricId)
                ->get()
                ->toArray();

            foreach ($sharedTeacherIds as $teacherId)
            {
                $sharedTeachersHashMap[$teacherId->sharee_teacher_id] = true;
            }
            return $sharedTeachersHashMap;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Share a specified rubric with all specified teachers or remove
     * prexisting teachers no longer available
     * @param $rubricId
     * @param $sharerId
     * @param $teachers
     * @return bool
     */
    public function shareRubricWithIndividuals($rubricId, $sharerId, $teachers)
    {
        try
        {
            $attach = [];
            $detach = [];
            $teacherCount = count($teachers);
            $existingSharees = $this->getShareeHashMap($rubricId);
            for ($i = 0; $i < $teacherCount; $i++)
            {
                if(array_key_exists($teachers[$i], $existingSharees))
                {
                    unset($existingSharees[$teachers[$i]]);
                }
                else
                {
                    array_push($attach,
                    [
                        'rubric_id' => $rubricId,
                        'sharer_teacher_id' => $sharerId,
                        'sharee_teacher_id' => $teachers[$i]
                    ]);
                }
            }
            $detach = array_keys($existingSharees);

            DB::table('rubric_shared')
                ->insert($attach);
            DB::table('rubric_shared')
                ->where('sharer_teacher_id',  $sharerId)
                ->where('rubric_id', $rubricId)
                ->whereIn('sharee_teacher_id', $detach)
                ->delete();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Share a specified rubric with all teachers of all specified
     * grades(teams) of a given school
     * @param $rubricId
     * @param $sharerId
     * @param $schoolId
     * @param $grades
     * @return bool
     */
    public function shareRubricWithTeams($rubricId, $sharerId, $schoolId, $grades)
    {
        try
        {
            $attach = [];
            $teachersOfGrades = $this->userRepositoryInterface->getAllTeacherOfSpecifiedGrades($grades, $schoolId);
            $existingSharees = $this->getShareeHashMap($rubricId);
            $teacherCount = count($teachersOfGrades);

            for($i = 0; $i < $teacherCount; $i++)
            {
                if(!array_key_exists($teachersOfGrades[$i]['id'], $existingSharees))
                {
                    array_push($attach,
                    [
                        'rubric_id' => $rubricId,
                        'sharer_teacher_id' => $sharerId,
                        'sharee_teacher_id' => $teachersOfGrades[$i]['id']
                    ]);
                }
            }
            DB::table('rubric_shared')
                ->insert($attach);
            return true;
        }
        catch (Exception $e)
        {
            return $e;
        }
    }
}
?>
