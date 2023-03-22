@extends('front.layout.master')

@section('title', 'Diễn đàn khoa CNTT - FITA VNUA || Bài viết mới')

@section('body')
<div class="col-lg-6">
    <div class="central-meta item">
        <nav>
            <div class="nav nav-tabs" id="myTab" role="tablist">
                <a class="nav-item nav-link" href="./what_news" role="tab">Có gì mới?</a>
                <a class="nav-item nav-link active" href="./new_posts">Bài viết mới</a>
                <a class="nav-item nav-link" href="./new_images">Hình ảnh</a>
                <a class="nav-item nav-link" href="./new_documents">Tài liệu</a>
                <a class="nav-item nav-link" href="./new_status">Status thành viên</a>
            </div>
        </nav>
        <div class="tab-content">
            <div class="tab-pane fade show active">
                @if (session()->has('error'))
                <div class="alert alert-danger mt-2">
                    {{ session('error') }}
                </div>
                @else
                <div class="list-group mb-3">
                    @foreach($posts as $post)
                    @if($post->story_post == '0')
                    <a href="./new_posts/post_{{ $post->id }}" class="list-group-item list-group-item-action">
                        <div class="media d-flex justify-content-start">
                            <div class="rounded-img mr-3" style="background-image: url('front/img/users/{{ $post->user->avatar }}');"></div>
                            <div class="media-body overflow-hidden">   
                                <p class="font-weight-bold text-dark"><span title="{{ $post->subject_->name ?? '' }}" class="badge bg-{{ collect(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark'])->random()}} text-white tag-subject">{{ $post->subject_->name ?? '' }}</span> {{ $post->title }}</p>
                                <p>{{ $post->user->name }}</p>
                                <p>{{ date('H:i, d/m/Y',strtotime($post->created_at)) }}</p>
                                <p>{{ $post->topic_->name }}</p>
                                <p><i class="fa-solid fa-thumbs-up"></i> : {{ $post->like_count ?? 0 }}<span> . <i class="fa-sharp fa-solid fa-comments"></i></span> : {{ $post->comment_count ?? 0 }} . <span><i class="fa-solid fa-eye"></i></span> : {{ $post->view_count ?? 0 }}</p>
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
                <div>
                    {{ $posts->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div><!-- centerl meta -->

<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <form action="">
                <h4 class="widget-title"><span><i class="fa-solid fa-magnifying-glass mr-3"></i></i></span> Tìm kiếm bài viết</h4>
                <div class="input-group mb-3 p-2">
                    <input name="search" value="{{request('search')}}" id="search" type="text" class="form-control" placeholder="Nhập tiêu đề bài viết...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="widget">
            <h4 class="widget-title"><span><i class="fa-solid fa-filter mr-2"></i></span>Lọc bài viết</h4>
            <div class="your-page ">
                <form action="">
                    <div class="mb-3">
                        <div class="font-weight-bold">Sắp xếp</div>
                        <select name="sort_by" class="custom-select" onchange="this.form.submit();">
                            <option {{ request('sort_by') ==  'oldest' ? 'selected' : ''}} value="oldest">Bài viết mới nhất</option>
                            <option {{ request('sort_by') ==  'latest' ? 'selected' : ''}} value="latest">Bài viết cũ nhât</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="font-weight-bold">Bộ môn</div>
                        <select id="specialized" class="custom-select" name="specialized" onchange="this.form.submit();">
                            <option selected value="">---Bộ môn---</option>
                            @foreach($specialized as $specialized)
                            <option value="{{ $specialized->id }}" {{ request('specialized') ==  $specialized->id ? 'selected' : ''}}>{{ $specialized->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="font-weight-bold">Môn học</div>
                        <select id="subject" class="custom-select" name="subject" onchange="this.form.submit();">
                            <option selected value="">---Môn học---</option>
                            @if(request('specialized') != "")
                            @foreach($subjects as $subject)
                            @if($subject->specialized_id == request('specialized'))
                            <option value="{{ $subject->id }}" {{ request('subject') ==  $subject->id ? 'selected' : ''}}>{{ $subject->name }}</option>
                            @endif
                            @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="font-weight-bold">Chủ đề</div>
                        <select class="custom-select" name="topic" onchange="this.form.submit();">
                            <option selected value="">---Chọn chủ đề---</option>
                            @foreach($topics as $topic)
                            <option value="{{ $topic->id }}" {{ request('topic') ==  $topic->id ? 'selected' : ''}}>{{ $topic->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="font-weight-bold">Danh mục</div>
                        <select class="custom-select" name="category" onchange="this.form.submit();">
                            <option selected value="">---Chọn danh mục---</option>

                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') ==  $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </form>

                <a href="./new_posts" class="btn btn-warning">Bỏ lọc</a>
            </div>
        </div>

    </aside>
</div><!-- sidebar -->
@endsection