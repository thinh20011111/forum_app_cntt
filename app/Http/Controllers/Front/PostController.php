<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Subject;
use App\Services\PostCategories\PostCategoriesServiceInterface;
use App\Services\Posts\PostsServiceInterface;
use App\Services\Specialized\SpecializedServiceInterface;
use App\Services\Subject\SubjectServiceInterface;
use App\Services\Topic\TopicServiceInterface;
use App\Services\Type\TypeServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
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
        $types = $this->typeService->all();
        $subjecs = $this->subjecService->all();
        $topics = $this->topicService->all();
        $specialized = $this->specializedService->all();
        $categories = $this->categoriesService->all();
        $posts = $this->postsService->all();

        return view('front.create_post.index', compact('types', 'subjecs', 'topics', 'specialized', 'categories', 'posts'));
    }

    public function create()
    {
        $types = $this->typeService->all();
        $subjects = $this->subjecService->all();
        $topics = $this->topicService->all();
        $specialized = $this->specializedService->all();
        $categories = $this->categoriesService->all();
        $posts = $this->postsService->all();

        return view('front.create_post.index', compact('types', 'subjects', 'topics', 'specialized', 'categories', 'posts'));
    }

    public function store(Request $request)
    {
        $messages = [
            'type.required' => 'Trường này không được để trống.',
            'category.required' => 'Trường này không được để trống.',
            'topic.required' => 'Trường này không được để trống.',
            'title.required' => 'Trường này không được để trống.',
            'content.required' => 'Trường này không được để trống.',
        ];

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'category' => 'required',
            'topic' => 'required',
            'title' => 'required',
            'content' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/create_post')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        $path_document = 'front/files';
        $get_file = $request->file('file_path');

        if ($get_file) {
            $get_name_file = $get_file->getClientOriginalName();
            $name_file =  current(explode('.', $get_name_file));
            $new_name_file = $name_file . rand(0, 99) . '.' . $get_file->getClientOriginalExtension();
            $get_file->move($path_document, $new_name_file);
            $data['file_path'] =  $new_name_file;
        }


        $data['user_id'] = Auth::user()->id;
        $data['story_post'] = 0;

        $post = $this->postsService->create($data);

        return redirect('')->with('success', 'Post created successfully!');
    }

    public function findSubjectName(Request $request)
    {
        $data = Subject::select('name', 'id')->where('specialized_id', $request->specialized)->get();
        return response()->json($data); //then sent this data to ajax
    }

    public function show($id)
    {
        $types = $this->typeService->all();
        $subjects = $this->subjecService->all();
        $topics = $this->topicService->all();
        $specialized = $this->specializedService->all();
        $categories = $this->categoriesService->all();
        $post = $this->postsService->find($id);

        $relatedPosts = Post::where('topic', $post->topic)->where('id' , '<>', $id)->get();

        $count_comments = Comment::where('post_id', $id)->count();

        $post->view_count += 1;
        $post->save();

        if (Auth::check()) {
            $loggedInUserId = Auth::user()->id;

            $postId = $id;

            $liked = DB::table('likes')
                ->where('user_id', $loggedInUserId)
                ->where('post_id', $postId)
                ->exists();
        }
        else
        {
            $liked = false;
        }


        return view('front.what_news.show_post', compact('types', 'subjects', 'topics', 'specialized', 'categories', 'post', 'liked', 'count_comments', 'relatedPosts'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
