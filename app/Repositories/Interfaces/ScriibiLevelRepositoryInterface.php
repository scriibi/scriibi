<?php

namespace App\Repositories\Interfaces;

interface ScriibiLevelRepositoryInterface
{
    /**
    * Return the scriibi level value of a given scriibi level id
    * @param $id
    * @return int
    */
    public function getScriibiLevelValue($id): ?int;

    /**
    * Return a list of scriibi level ids for a given list of scriibi level values
    * @param array
    * @return array
    */
    public function getScriibiLevelRange($id): array;
}

?>
