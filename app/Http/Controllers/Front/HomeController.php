<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subject;
use App\Services\PostCategories\PostCategoriesServiceInterface;
use App\Services\Posts\PostsServiceInterface;
use App\Services\Specialized\SpecializedServiceInterface;
use App\Services\Subject\SubjectServiceInterface;
use App\Services\Topic\TopicServiceInterface;
use App\Services\Type\TypeServiceInterface;

class HomeController extends Controller
{
    private $topicService;
    private $typeService;
    private $specializedService;
    private $subjecService;
    private $categoriesService;
    private $postsService;

    public function __construct(
        TopicServiceInterface $topicService,
        SpecializedServiceInterface $specializedService,
        SubjectServiceInterface $subjecService,
        TypeServiceInterface $typeService,
        PostCategoriesServiceInterface $categoriesService,
        PostsServiceInterface $postsService,
    ) {
        $this->typeService =  $typeService;
        $this->subjecService = $subjecService;
        $this->topicService = $topicService;
        $this->specializedService = $specializedService;
        $this->categoriesService = $categoriesService;
        $this->postsService = $postsService;
    }

    public function index()
    {
        $posts = $this->postsService->all();
        return view('front.index', compact('posts'));
    }

    public function what_news()
    {

        $posts = $this->postsService->all();
        return view('front.what_news.what_news', compact('posts'));
    }

    public function new_posts(Request $request)
    {
        try {
            $posts = $this->postsService->getPostsOnIndex($request);
            $types = $this->typeService->all();
            $subjects = $this->subjecService->all();
            $topics = $this->topicService->all();
            $specialized = $this->specializedService->all();
            $categories = $this->categoriesService->all();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    
        return view('front.what_news.new_posts', compact('posts','specialized', 'categories', 'topics', 'subjects', 'types'));
    }

    public function findSubjectName(Request $request)
    {
        $data = Subject::select('name', 'id')->where('specialized_id', $request->specialized)->get();
        return response()->json($data); //then sent this data to ajax
    }

    public function new_images()
    {
        $posts = $this->postsService->all();
        return view('front.what_news.new_images', compact('posts'));
    }

    public function new_documents()
    {
        $posts = $this->postsService->all();
        return view('front.what_news.new_documents', compact('posts'));
    }

    public function new_status()
    {
        $posts = $this->postsService->all();
        return view('front.what_news.new_status', compact('posts'));
    }
}
