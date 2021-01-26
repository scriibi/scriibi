<?php

namespace App\Repositories;

use Exception;
use App\SchoolType;
use App\Repositories\Interfaces\SchoolTypeRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class SchoolTypeRepository implements SchoolTypeRepositoryInterface
{
    /**
     * @var SchoolType
     */
    protected $schoolType;

    public function __construct(SchoolType $schoolType)
    {
        $this->schoolType = $schoolType;
    }

    /**
     * Returns all school types in the system
     * @return array
     */
    public function all(): array
    {
        try
        {
            return $this->schoolType::all()->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
