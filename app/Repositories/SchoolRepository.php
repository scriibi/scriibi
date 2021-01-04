<?php

namespace App\Repositories;

use Exception;
use App\School;
use App\Repositories\Interfaces\SchoolRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class SchoolRepository implements SchoolRepositoryInterface
{
    /**
     * @var School
     */
    protected $school;

    public function __construct(School $school)
    {
        $this->school = $school;
    }

    /**
     * Return all the schools in the system
     * @return array
     */
    public function all(): array
    {
        try
        {
            return $this->school::all()->toArray();
        }
        catch(Exception $e)
        {
            return [];
        }
    }
}

?>
