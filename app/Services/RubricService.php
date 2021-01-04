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
    * @param $templateName
    * @param $templateLevel
    * @param $templateSkills
    * @return bool
    */
    public function saveTeacherTemplate($teacherId, $templateName, $templateLevel, $templateSkills): bool
    {
        try
        {
            $rubric = $this->rubricRepositoryInterface->addRubric($templateName, $templateLevel);
            $rubric->skills()->attach($templateSkills);
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
     * @param $rubricName
     * @param $rubricLevel
     * @param $curriculum
     * @param $schoolType
     * @param $rubricSkills
     * @return bool
     */
    public function saveScriibiRubric($rubricName, $rubricLevel, $rubricSkills, $curriculum, $schoolType): bool
    {
        try
        {
            $rubric = $this->rubricRepositoryInterface->addRubric($rubricName, $rubricLevel);
            $rubric->skills()->attach($rubricSkills);
            $curriculumSchoolType = DB::table('curriculum_school_type')
                ->where('curriculum_id', $curriculum)
                ->where('school_type_id', $schoolType)
                ->get()
                ->toArray();
            $rubric->curriculumSchoolType()->attach($curriculumSchoolType[0]->id);
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
                throw new Exception('Rubric Could not be updated');
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
}
?>
