<?php

namespace App\Repositories;

use Exception;
use App\ScriibiLevel;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class ScriibiLevelRepository implements ScriibiLevelRepositoryInterface
{
    /**
     * @var ScriibiLevel
     */
    protected $scriibiLevel;

    public function __construct(ScriibiLevel $scriibiLevel)
    {
        $this->scriibiLevel = $scriibiLevel;
    }

    /**
     * Return all scriibi levels in the system
     * @return array
     */
    public function all(): array
    {
        try
        {
            return $this->scriibiLevel::all()->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
    * Return the scriibi level value of a given scriibi level id
    * @param $id
    * @return int
    */
    public function getScriibiLevelValue($id): ?int
    {
        try
        {
            return (int) $this->scriibiLevel::findOrFail($id)->scriibi_level;
        }
        catch(ModelNotFound | QueryException | Exception $e)
        {
            return null;
        }
    }

    /**
     * Return the scriibi level value as it is of a given scriibi level id
     * @param $id
     * @return int
     */
    public function getScriibiLevelValueAsFloat($id): ?float
    {
        try
        {
            return (float) $this->scriibiLevel::findOrFail($id)->scriibi_level;
        }
        catch(ModelNotFound | QueryException | Exception $e)
        {
            return null;
        }
    }

    /**
    * Return a list of scriibi level ids for a given list of scriibi level values
    * @param $scriibiValues
    * @return array
    */
    public function getScriibiLevelRangeIds($scriibiValues): array
    {
        try
        {
            return $this->scriibiLevel
                ->whereIn('scriibi_level', $scriibiValues)
                ->get()
                ->map(
                    function($scriibiLevel)
                    {
                        return $scriibiLevel->id;
                    }
                )
                ->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }

    /**
     * Return a list of scriibi level details for a given list of scriibi level ids
     * @param $ids
     * @return array
     */
    public function getScriibiLevelRangeDetails($ids): array
    {
        try
        {
            return $this->scriibiLevel
                ->whereIn('id', $ids)
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return the minimum scriibi level (id) of a specified teacher
     * @param $id
     * @return int
     */
    public function getMinScriibiLevelOfTeacher($id): ?int
    {
        try
        {
            return $this->scriibiLevel
                ->whereHas('teachers', function($query) use($id)
                {
                    $query->where('user.id', $id);
                })
                ->min('id');
        }
        catch (Exception $e)
        {
            return null;
        }
    }

    /**
     * Return all the scriibi levels (ids) of a specified teacher
     * @param $id
     * @return array
     */
    public function getScriibiLevelsOfTeacher($id): array
    {
        try
        {
            return $this->scriibiLevel
                ->whereHas('teachers', function ($query) use($id)
                {
                    $query->where('user.id', $id);
                })
                ->get()
                ->map(function($scriibiLevel)
                {
                    return $scriibiLevel->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the scriibi levels (ids) of a specified class
     * @param $id
     * @return array
     */
    public function getScriibiLevelsOfClass($id): array
    {
        try
        {
            return $this->scriibiLevel
                ->whereHas('classes', function ($query) use($id)
                {
                    $query->where('class.id', $id);
                })
                ->get()
                ->map(function($scriibiLevel)
                {
                    return $scriibiLevel->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
