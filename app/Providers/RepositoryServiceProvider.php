<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RubricRepository;
use App\Repositories\TraitRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\AssessedLabelRepository;
use App\Repositories\ScriibiLevelRepository;
use App\Repositories\SkillRepository;
use App\Repositories\Interfaces\RubricRepositoryInterface;
use App\Repositories\Interfaces\TraitRepositoryInterface;
use App\Repositories\Interfaces\TeacherRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;

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
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        $this->app->bind(AssessedLabelRepositoryInterface::class, AssessedLabelRepository::class);
        $this->app->bind(ScriibiLevelRepositoryInterface::class, ScriibiLevelRepository::class);
        $this->app->bind(SkillRepositoryInterface::class, SkillRepository::class);
    }
}
