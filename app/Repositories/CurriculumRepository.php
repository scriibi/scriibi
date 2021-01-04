<?php

namespace App\Repositories;

use Exception;
use App\Curriculum;
use App\Repositories\Interfaces\CurriculumRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class CurriculumRepository implements CurriculumRepositoryInterface
{
    /**
     * @var Curriculum
     */
    protected $curriculum;

    public function __construct(Curriculum $curriculum)
    {
        $this->curriculum = $curriculum;
    }

    /**
     * Return all curriculums in the system
     * @return array
     */
    public function all(): array
    {
        try
        {
            return $this->curriculum::all()->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
