<?php

namespace App\Services;

use Exception;
use App\Repositories\Interfaces\TraitRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\CurriculumRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;

class RubricBuilderService
{
    /**
     * @var TraitRepositoryInterface
     */
    protected $traitRepositoryInterface;
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepositoryInterface;
    /**
     * @var AssessedLabelRepositoryInterface
     */
    protected $assessedLabelRepositoryInterface;
    /**
     * @var ScriibiLevelRepositoryInterface
     */
    protected $scriibiLevelRepositoryInterface;
    /**
     * @var CurriculumRepositoryInterface
     */
    protected $curriculumRepositoryInterface;

    public function __construct(TraitRepositoryInterface $traitRepoInt, UserRepositoryInterface $userRepoInt, AssessedLabelRepositoryInterface $assessedLabelRepoInt, ScriibiLevelRepositoryInterface $scriibiLevelRepoInt, CurriculumRepositoryInterface $curriculumRepoInt)
    {
        $this->traitRepositoryInterface = $traitRepoInt;
        $this->userRepositoryInterface = $userRepoInt;
        $this->assessedLabelRepositoryInterface = $assessedLabelRepoInt;
        $this->scriibiLevelRepositoryInterface = $scriibiLevelRepoInt;
        $this->curriculumRepositoryInterface = $curriculumRepoInt;
    }

    /**
    * Return a list of all available traits and a list of all assessed labels of the current user's school
    * @param $teacherId
    * @return object
    */
    public function getUnpopulatedUserRubricBuilder($teacherId): ?object
    {
        try
        {
            $traits = $this->traitRepositoryInterface->all();
            $assessedLabels = $this->assessedLabelRepositoryInterface->getAssessedLabels($this->userRepositoryInterface->getTeacherSchool($teacherId)[0]->curriculum_school_type_id);
            return (object)
                [
                    'traits' => $traits,
                    'assessedLabels' => $assessedLabels
                ];
        }
        catch(Exception $e)
        {
            return null;
        }
    }

    /**
    * Return a list of all available traits with their associated skills belonging to the passed
    * in scriibi level and a list of all assessed labels of the current user's school
    * @param $level
    * @param $teacherId
    * @return object
    */
    public function getPopulatedUserRubricBuilder($level, $teacherId): ?object
    {
        try
        {
            $traitsWithSkills = $this->traitRepositoryInterface->getSkillsInScriibiLevelRange(RubricBuilderService::getScriibiRange($level));
            $curriculumSchoolType = $this->userRepositoryInterface->getTeacherSchool($teacherId)[0]['curriculum_school_type_id'];
//            $curriculumId = $this->curriculumRepositoryInterface->getCurriculumFromCurriculumSchoolType($curriculumSchoolType);
//            if(!empty($curriculumId))
//            {
//                $flaggedSkills = $this->setStatusFlag($traitsWithSkills, $level, $curriculumId[0]);
//            }
//            dd($flaggedSkills);
            $assessedLabels = $this->assessedLabelRepositoryInterface->getAssessedLabels($curriculumSchoolType);

            if(empty($traitsWithSkills))
            {
                throw new Exception('Method getSkillsInScriibiLevelRange() returned an empty array');
            }
            return (object)
                [
                    'traits' => $traitsWithSkills,
                    'assessedLabels' => $assessedLabels
                ];
        }
        catch(Exception $e)
        {
            return null;
        }
    }

    protected function setStatusFlag($traitsWithSkills, $currentLevel, $curriculumId): array
    {
        try
        {
            $skills = [];
            $traitsWithSkillsCount = count($traitsWithSkills);
            for ($i = 0; $i < $traitsWithSkillsCount; $i++)
            {
                $skills = array_merge($skills, $traitsWithSkills[$i]['skills']);
            }
            dd($skills);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
    * Return a range of scriibi levels (ids) for a given scriibi level.
    * @param $level
    * @return array
    */
    public function getScriibiRange($level): array
    {
        try
        {
            $scriibiValue = $this->scriibiLevelRepositoryInterface->getScriibiLevelValue($level);
            if($scriibiValue !== null)
            {
                $range = $scriibiValue === 0 ? [$scriibiValue - 0.5, $scriibiValue, $scriibiValue + 1.0] : [$scriibiValue - 1.0, $scriibiValue, $scriibiValue + 1.0];
                return $this->scriibiLevelRepositoryInterface->getScriibiLevelRangeIds($range);
            }
            else
            {
                throw new Exception('Scriibi Level parameter is null');
            }
        }
        catch(Exception $e)
        {
            return [];
        }
    }

}
?>
