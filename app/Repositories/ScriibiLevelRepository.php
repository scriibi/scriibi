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
    * Return a list of scriibi level ids for a given list of scriibi level values
    * @param array
    * @return array
    */
    public function getScriibiLevelRange($range): array
    {
        try
        {
            return $this->scriibiLevel
                ->whereIn('scriibi_level', $range)
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
}

?>
