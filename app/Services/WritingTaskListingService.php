<?php

namespace App\Services;

use Exception;
use App\Repositories\Interfaces\RubricRepositoryInterface;
use App\Repositories\Interfaces\TraitRepositoryInterface;

class WritingTaskListingService
{
    /**
     * @var RubricRepositoryInterface
     */
    protected $rubricRepositoryInterface;
    /**
     * @var TraitRepositoryInterface
     */
    protected $traitRepositoryInterface;

    public function __construct(RubricRepositoryInterface $rubricRepoInt, TraitRepositoryInterface $traitRepoInt)
    {
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->traitRepositoryInterface = $traitRepoInt;
    }
}
?>
