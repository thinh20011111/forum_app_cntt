<?php

namespace App\Repositories\Posts;

use App\Models\Post;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class PostsRepository extends BaseRepository implements PostsRepositoryInterface
{
  public function getModel()
  {
    return Post::class;
  }

  public function getPostsOnIndex($request)
  {
    $search = $request->search ?? '';
    $posts = $this->model->where('title', 'like', '%' . $search . '%');

    $posts = $this->filter($posts, $request);
    $posts = $this->sortAndPagination($posts, $request);

    if ($posts->count() == 0) {
      throw new \Exception('Không tìm thấy bài post nào.');
    }

    return $posts;
  }

  private function sortAndPagination($posts, Request $request)
  {
    $perPage = 10;
    $sortBy = $request->sort_by ?? 'oldest';

    switch ($sortBy) {
      case 'latest':
        $posts = $posts->orderBy('id');
        break;
      case 'oldest':
        $posts = $posts->orderByDesc('id');
        break;
      default:
        $posts = $posts->orderBy('id');
        break;
    }

    $posts = $posts->paginate($perPage);
    $posts->appends(['sort_by' => $sortBy]);

    return $posts;
  }

  public function filter($posts, Request $request)
  {
    //Lọc theo bộ môn
    $specialized = $request->specialized;
    $posts = $specialized != null
      ? $posts->where('specialized', $specialized)
      : $posts;

    //Lọc theo môn học
    $subject = $request->subject;
    $posts = $subject != null
      ? $posts->where('subject', $subject)
      : $posts;

    //Lọc theo chủ đề
    $topic = $request->topic;
    $posts = $topic != null
      ? $posts->where('topic', $topic)
      : $posts;

    //Lọc theo danh mục
    $category = $request->category;
    $posts = $category != null
      ? $posts->where('category', $category)
      : $posts;

    return $posts;
  }
}
