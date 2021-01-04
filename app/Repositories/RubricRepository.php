<?php

namespace App\Repositories;

use Exception;
use App\Rubric;
use App\Repositories\Interfaces\RubricRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class RubricRepository implements RubricRepositoryInterface
{
    /**
     * @var Rubric
     */
    protected $rubric;

    public function __construct(Rubric $rubric)
    {
        $this->rubric = $rubric;
    }

    /**
    * Return all rubrics in the system
    * @return array
    */
    public function all(): array
    {
        try
        {
            return $this->rubric::all()
                ->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }

    /**
    * Return a specified rubric
    * @param $id
    * @return array
    */
    public function getRubric($id): array
    {
        try
        {
            return $this->rubric::findOrFail($id)
                ->toArray();
        }
        catch(ModelNotFoundException | QueryException $e)
        {
            return [];
        }
    }

    /**
    * Return all specified rubrics
    * @param array
    * @return array
    */
    public function getRubrics(array $ids): array
    {
        try
        {
            return $this->rubric->whereIn('id', $ids)
                ->get()
                ->toArray();
        }
        catch(QueryException $e)
        {
           return [];
        }
    }

    /**
    * Return all specified rubrics with their associated skills and traits
    * @param array
    * @return array
    */
    public function getRubricsWithSkills(array $ids): array
    {
        try
        {
            return $this->rubric->whereIn('id', $ids)
                ->with('skills.traits')
                ->get()
                ->toArray();
        }
        catch(QueryException $e)
        {
           return [];
        }
    }

    /**
    * Return a specific rubric with its associated skills and traits
    * @param $id
    * @return array
    */
    public function getRubricWithSkills($id): array
    {
        try
        {
            return $this->rubric::where('id', $id)
                ->with('skills.traits')
                ->first()
                ->toArray();
        }
        catch(QueryException | ModelNotFound $e)
        {
            return [];
        }
    }

    /**
    * Return all rubrics (ids) that belong to a specific teacher
    * @param $id
    * @return array
    */
    public function getTeacherTemplateIds($id): array
    {
        try
        {
            return $this->rubric
                ->select('rubric.id')
                ->whereHas('teachers', function($query) use ($id)
                {
                    $query->where('user.id', $id);
                })
                ->get()
                ->map(function($rubric)
                {
                    return $rubric->id;
                })
                ->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }

    /**
     * Returns all scriibi rubrics (ids) that belong to a specific
     * scriibi level and curriculum school type
     * @param $level
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getScriibiRubricIds($level, $curriculumSchoolTypeId): array
    {
        try
        {
            return $this->rubric
                ->where('scriibi_level_id', $level)
                ->whereHas('curriculumSchoolType', function ($query) use($curriculumSchoolTypeId)
                {
                    $query->where('curriculum_school_type.id', $curriculumSchoolTypeId);
                })
                ->get()
                ->map(function ($rubric)
                {
                    return $rubric->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
    * Create and save a new Rubric instance
    * @param $name
    * @param $scriibiLevel
    * @return Rubric
    */
    public function addRubric($name, $scriibiLevel): ?Rubric
    {
        try
        {
            $rubric = new $this->rubric;
            $rubric->name = $name;
            $rubric->scriibi_level_id = $scriibiLevel;
            $rubric->save();
            return $rubric;
        }
        catch(QueryException $e)
        {
            return null;
        }
    }

    /**
     * Update an existing Rubric instance
     * @param $id
     * @param $name
     * @param $scriibiLevel
     * @return Rubric
     */
    public function updateRubric($id, $name, $scriibiLevel): ?Rubric
    {
        try
        {
            $rubric = $this->rubric::findOrFail($id);
            $rubric->name = $name;
            $rubric->scriibi_level_id = $scriibiLevel;
            $rubric->save();
            return $rubric;
        }
        catch (QueryException | ModelNotFound $e)
        {
            return null;
        }
    }
}

?>
