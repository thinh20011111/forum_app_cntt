<?php

namespace App\Providers;

use App\Repositories\Comment\CommentRepository;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\PostCategories\PostCategoriesRepository;
use App\Repositories\PostCategories\PostCategoriesRepositoryInterface;
use App\Repositories\Posts\PostsRepository;
use App\Repositories\Posts\PostsRepositoryInterface;
use App\Repositories\Report\ReportRepository;
use App\Repositories\Report\ReportRepositoryInterface;
use App\Repositories\Specialized\SpecializedRepository;
use App\Repositories\Specialized\SpecializedRepositoryInterface;
use App\Repositories\Subject\SubjectRepository;
use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Repositories\Topic\TopicRepository;
use App\Repositories\Topic\TopicRepositoryInterface;
use App\Repositories\Type\TypeRepository;
use App\Repositories\Type\TypeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Comment\CommentService;
use App\Services\Comment\CommentServiceInterface;
use App\Services\PostCategories\PostCategoriesService;
use App\Services\PostCategories\PostCategoriesServiceInterface;
use App\Services\Posts\PostsService;
use App\Services\Posts\PostsServiceInterface;
use App\Services\Report\ReportService;
use App\Services\Report\ReportServiceInterface;
use App\Services\Specialized\SpecializedService;
use App\Services\Specialized\SpecializedServiceInterface;
use App\Services\Subject\SubjectService;
use App\Services\Subject\SubjectServiceInterface;
use App\Services\Topic\TopicService;
use App\Services\Topic\TopicServiceInterface;
use App\Services\Type\TypeService;
use App\Services\Type\TypeServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //User
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );

        //Posts
        $this->app->singleton(
            PostsRepositoryInterface::class,
            PostsRepository::class
        );

        $this->app->singleton(
            PostsServiceInterface::class,
            PostsService::class
        );

        //Topic
        $this->app->singleton(
            TopicRepositoryInterface::class,
            TopicRepository::class
        );

        $this->app->singleton(
            TopicServiceInterface::class,
            TopicService::class
        );

        //Type
        $this->app->singleton(
            TypeRepositoryInterface::class,
            TypeRepository::class
        );

        $this->app->singleton(
            TypeServiceInterface::class,
            TypeService::class
        );

        //Subject
        $this->app->singleton(
            SubjectRepositoryInterface::class,
            SubjectRepository::class
        );

        $this->app->singleton(
            SubjectServiceInterface::class,
            SubjectService::class
        );

        //Specialized
        $this->app->singleton(
            SpecializedRepositoryInterface::class,
            SpecializedRepository::class
        );

        $this->app->singleton(
            SpecializedServiceInterface::class,
            SpecializedService::class
        );

        //PostCategories
        $this->app->singleton(
            PostCategoriesRepositoryInterface::class,
            PostCategoriesRepository::class
        );

        $this->app->singleton(
            PostCategoriesServiceInterface::class,
            PostCategoriesService::class
        );

        //Comment
        $this->app->singleton(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );

        $this->app->singleton(
            CommentServiceInterface::class,
            CommentService::class
        );

        //Report
        $this->app->singleton(
            ReportRepositoryInterface::class,
            ReportRepository::class
        );

        $this->app->singleton(
            ReportServiceInterface::class,
            ReportService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
