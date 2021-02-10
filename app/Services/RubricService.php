<?php

namespace App\Services;

use DB;
use Exception;
use App\Repositories\Interfaces\RubricRepositoryInterface;
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

    public function __construct(RubricRepositoryInterface $rubricRepoInt, SkillRepositoryInterface $skillRepoInt)
    {
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->skillRepositoryInterface = $skillRepoInt;
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
            return false;
        }
    }
}
?>
