<?php

namespace App\Repositories;

use Exception;
use App\Traits;
use App\Repositories\Interfaces\TraitRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class TraitRepository implements TraitRepositoryInterface
{
    /**
     * @var Traits
     */
    protected $trait;

    public function __construct(Traits $trait)
    {
        $this->trait = $trait;
    }

    /**
    * Return all traits in the system
    * @return array
    */
    public function all(): array
    {
        try
        {
            return $this->trait::all()->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }

    /**
    * Return the skills within a given scriibi level range grouped by traits
    * @param array
    * @return array
    */
    public function getSkillsInScriibiLevelRange(array $range): array
    {
        try
        {
            return $this->trait::with(
                [
                    'skills' => function($query) use($range)
                    {
                        $query->whereHas('scriibiLevels', function ($query) use($range)
                        {
                            $query->whereIn('scriibi_level.id', $range);
                        }
                        );
                    }
                ]
            )
            ->get()
            ->map(function($trait)
            {
                $skills = [];
                foreach($trait->skills as $skill)
                {
                    $skills[$skill->id] =
                        [
                            'id' => $skill->id,
                            'name' => $skill->name,
                            'description' => $skill->description,
                            'flag' => false
                        ];
                }
                return
                    [
                        'id' => $trait->id,
                        'name' => $trait->name,
                        'color' => $trait->color,
                        'icon' => $trait->icon,
                        'skills' => $skills
                    ];
            })
            ->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }

}

?>
