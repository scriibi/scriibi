<?php

namespace App\Repositories;

use Exception;
use App\Skill;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class SkillRepository implements SkillRepositoryInterface
{
    /**
     * @var Skill
     */
    protected $skill;

    public function __construct(Skill $skill)
    {
        $this->skill = $skill;
    }

    /**
    * Return the id values of all skills which are associated with a given rubric
    * @param $id
    * @return array
    */
    public function getSkillIdsOfRubric($id): array
    {
        try
        {
            return $this->skill
                ->whereHas('rubrics', function($query) use($id)
                {
                    $query->where('rubric.id', $id);
                })
                ->get()
                ->map(function($skill)
                {
                    return $skill->id;
                })
                ->toArray();
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    /**
     * Return the id values of all skills
     * @return array
     */
    public function getAllSkillIds(): array
    {
        try
        {
            return $this->skill::all()
                ->map(function($skill)
                {
                    return $skill->id;
                })
                ->toArray();
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all skills
     * @return array
     */
    public function getAllSkills(): array
    {
        try
        {
            return $this->skill::all()->toArray();
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all skill Ids that are associated with a writing task
     * @param $writingTaskId
     * @return array
     */
    public function getSkillsIdsOfWritingTask($writingTaskId): array
    {
        try
        {
            return $this->skill
                ->whereHas('writingTasks',  function ($query) use($writingTaskId)
                {
                    $query->where('writing_task.id', $writingTaskId);
                })
                ->get()
                ->map(function ($skill)
                {
                    return $skill->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all specified skill details along with the associated
     * traits
     * @param $skillIds
     * @return array
     */
    public  function getSkillsWithTraits($skillIds): array
    {
        try
        {
            return $this->skill
                ->whereIn('id', $skillIds)
                ->with('traits')
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
