<?php

namespace App\Services;

use Exception;
use App\Repositories\Interfaces\RubricRepositoryInterface;
use App\Repositories\Interfaces\TraitRepositoryInterface;

class RubricListingService
{
    /**
     * @var RubricRepositoryInterface
     */
    protected $rubricRepositoryInterface;
    /**
     * @var TraitRepositoryInterface
     */
    protected $traitRepositoryInterface;

    public function __construct(RubricRepositoryInterface $rubricRepoInt, TraitRepositoryInterface $traitRepoInt)
    {
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->traitRepositoryInterface = $traitRepoInt;
    }

    /**
     * Return a specified rubric and its associated skills grouped by traits
     * @param $rubricId
     * @return array
     */
    public function getRubricDetails($rubricId): array
    {
        try
        {
            $traitsList = [];
            $rubric = $this->rubricRepositoryInterface->getRubricWithGroupedSkills($rubricId);
            $returnList =
                [
                    'id' => $rubric['id'],
                    'name' => $rubric['name'],
                    'scriibiLevel' => $rubric['scriibi_level_id']
                ];
            $length = count($rubric['skills']);

            for($i = 0; $i < $length; $i++)
            {
                $trait = $rubric['skills'][$i]['traits'][0];
                if(!array_key_exists($trait['id'], $traitsList))
                {
                    $traitsList[$trait['id']]  =
                        [
                            'name' => $trait['name'],
                            'color' => $trait['color'],
                            'icon' => $trait['icon'],
                            'skills' => []
                        ];
                }
                array_push($traitsList[$trait['id']]['skills'], $rubric['skills'][$i]);
            }
            $returnList['traits'] = $traitsList;
            return $returnList;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
    * Return a list of all rubrics and their skills grouped by traits
    * @param $teacherId
    * @return array
    */
    public function getTeacherTemplates($teacherId): array
    {
        try
        {
            $rubrics = $this->rubricRepositoryInterface->getTeacherTemplateIds($teacherId);
            return $this->getRubricsWithSkills($rubrics);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return a list of all scriibi rubrics and their skills grouped by traits for a specified level`
     * @param $level
     * @param $curriculumSchoolType
     * @return array
     */
    public function getScriibiRubrics($level, $curriculumSchoolType): array
    {
        try
        {
            $rubrics = $this->rubricRepositoryInterface->getScriibiRubricIds($level, $curriculumSchoolType);
            return $this->getRubricsWithSkills($rubrics);
        }
        catch (Exception $e)
        {
            return  [];
        }
    }

    /**
     * Return a list of all rubrics and their skills grouped by traits which were
     * shared with a specified teacher(user)
     * @param $teacherId
     * @return array
     */
    public function getSharedRubrics($teacherId): array
    {
        try
        {
            $rubrics = $this->rubricRepositoryInterface->getSharedRubricIds($teacherId);
            return $this->getRubricsWithSkills($rubrics);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Accepts a list of rubric ids and returns an array of rubrics
     * with associated skills grouped by traits
     * @param $rubricIds
     * @return array
     */
    public function getRubricsWithSkills($rubricIds): array
    {
        try
        {
            $returnList = [];
            $traits = $this->getTraitsStruct();
            $rubrics = $this->rubricRepositoryInterface->getRubrics($rubricIds);
            $rubricsLength = count($rubrics);

            for($i = 0; $i < $rubricsLength; $i++)
            {
                $returnList[$rubrics[$i]['id']] =
                    [
                        'name' => $rubrics[$i]['name'],
                        'scriibi_level_id' => $rubrics[$i]['scriibi_level_id'],
                        'traits' => $traits
                    ];
            }

            $rubricsWithSkills = $this->rubricRepositoryInterface->getRubricsWithGroupedSkills($rubricIds);
            $rubricsWSkillslength = count($rubricsWithSkills);

            for($j = 0; $j < $rubricsWSkillslength; $j++)
            {
                $skillSet = $rubricsWithSkills[$j]['skills'];
                $skilllCount = count($rubricsWithSkills[$j]['skills']);

                for($k = 0; $k < $skilllCount; $k++)
                {
                    array_push($returnList[ $rubricsWithSkills[$j]['id'] ]['traits'][ $skillSet[$k]['traits'][0]['id'] ]['skills'], $skillSet[$k]);
                }
            }
            return $returnList;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Returns all available traits as key value pairs with the trait id as the
     * key and trait data and an empty skills array as the value
     * @return array
     */
    protected function getTraitsStruct(): array
    {
        try
        {
            $returnList = [];
            $traits = $this->traitRepositoryInterface->all();
            $length = count($traits);
            for($i = 0; $i < $length; $i++)
            {
                $returnList[$traits[$i]['id']] =
                    [
                        'name' => $traits[$i]['name'],
                        'color' => $traits[$i]['color'],
                        'icon' => $traits[$i]['icon'],
                        'skills' => []
                    ];
            }
            return $returnList;
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}
?>
