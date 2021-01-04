<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RubricRepository;
use App\Repositories\TraitRepository;
use App\Repositories\UserRepository;
use App\Repositories\AssessedLabelRepository;
use App\Repositories\ScriibiLevelRepository;
use App\Repositories\SkillRepository;
use App\Repositories\CurriculumRepository;
use App\Repositories\SchoolTypeRepository;
use App\Repositories\SchoolRepository;
use App\Repositories\Interfaces\RubricRepositoryInterface;
use App\Repositories\Interfaces\TraitRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\Interfaces\CurriculumRepositoryInterface;
use App\Repositories\Interfaces\SchoolTypeRepositoryInterface;
use App\Repositories\Interfaces\SchoolRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(RubricRepositoryInterface::class, RubricRepository::class);
        $this->app->bind(TraitRepositoryInterface::class, TraitRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AssessedLabelRepositoryInterface::class, AssessedLabelRepository::class);
        $this->app->bind(ScriibiLevelRepositoryInterface::class, ScriibiLevelRepository::class);
        $this->app->bind(SkillRepositoryInterface::class, SkillRepository::class);
        $this->app->bind(CurriculumRepositoryInterface::class, CurriculumRepository::class);
        $this->app->bind(SchoolTypeRepositoryInterface::class, SchoolTypeRepository::class);
        $this->app->bind(SchoolRepositoryInterface::class, SchoolRepository::class);
    }
}
