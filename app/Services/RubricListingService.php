<?php

namespace App\Services;

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
    * Return a list of all rubrics and their skills grouped by traits
    * @param $id
    * @return array
    */
    public function getTeacherTemplateList($id): array
    {
        try
        {
            $responseList = [];
            $traits = [];
            $rubrics = $this->rubricRepositoryInterface->getTeacherTemplates($id);

            foreach($this->traitRepositoryInterface->all() as $trait){
                $traits[$trait['id']] = [
                    'name' => $trait['name'],
                    'color' => $trait['color'],
                    'icon' => $trait['icon'],
                    'skills' => []
                ];
            }

            foreach($this->rubricRepositoryInterface->getRubrics($rubrics) as $rubric){
                $responseList[$rubric['id']] = [
                    'name' => $rubric['name'],
                    'scriibi_level_id' => $rubric['scriibi_level_id'],
                    'traits' => $traits
                ];
            }

            $rubricsWithSkills = $this->rubricRepositoryInterface->getRubricsWithSkills($rubrics);
            $length = count($rubricsWithSkills);

            for($i = 0; $i < $length; $i++){
                $skillSet = $rubricsWithSkills[$i]['skills'];
                $skilllCount = count($rubricsWithSkills[$i]['skills']);

                for($j = 0; $j < $skilllCount; $j++){
                    array_push($responseList[ $rubricsWithSkills[$i]['id'] ]['traits'][ $skillSet[$j]['traits'][0]['id'] ]['skills'], $skillSet[$j]);
                }
            }
            return $responseList;
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    /**
    * Return a teacher rubric template and its associated skills grouped by traits
    * @param $id
    * @return array
    */
    public function getTeacherTemplate($id): array
    {
        try
        {
            $traitsList = [];
            $rubric = $this->rubricRepositoryInterface->getRubricWithSkills($id);
            $responseList =
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
                    $traitsList[$trait['id']]  = [
                        'name' => $trait['name'],
                        'color' => $trait['color'],
                        'icon' => $trait['icon'],
                        'skills' => []
                    ];
                }
                array_push($traitsList[$trait['id']]['skills'], $rubric['skills'][$i]);

            }
            $responseList['traits'] = $traitsList;
            return $responseList;
        }
        catch(Exception $e)
        {
            return [];
        }
    }
}
?>
