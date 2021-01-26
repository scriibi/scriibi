<?php

namespace App\Repositories\Interfaces;

interface TraitRepositoryInterface
{
    /**
    * Return all traits in the system
    * @return array
    */
    public function all(): array;

    /**
    * Return the skills within a given scriibi level range grouped by traits
    * @param array
    * @return array
    */
    public function getSkillsInScriibiLevelRange(array $range): array;
}

?>