<?php

namespace App\Repositories\Interfaces;

interface ScriibiLevelRepositoryInterface
{
    /**
     * Return all scriibi levels in the system
     * @return array
     */
    public function all(): array;

    /**
    * Return the scriibi level value of a given scriibi level id
    * @param $id
    * @return int
    */
    public function getScriibiLevelValue($id): ?int;

    /**
     * Return the scriibi level value as it is of a given scriibi level id
     * @param $id
     * @return float
     */
    public function getScriibiLevelValueAsFloat($id): ?float;

    /**
    * Return a list of scriibi level ids for a given list of scriibi level values
    * @param $scriibiValues
    * @return array
    */
    public function getScriibiLevelRangeIds($scriibiValues): array;

    /**
     * Return a list of scriibi level details for a given list of scriibi level ids
     * @param $ids
     * @return array
     */
    public function getScriibiLevelRangeDetails($ids): array;

    /**
     * Return the minimum scriibi level (id) of a specified teacher
     * @param $id
     * @return int
     */
    public function getMinScriibiLevelOfTeacher($id): ?int;

    /**
     * Return all the scriibi levels (ids) of a specified teacher
     * @param $id
     * @return array
     */
    public function getScriibiLevelsOfTeacher($id): array;
}

?>
