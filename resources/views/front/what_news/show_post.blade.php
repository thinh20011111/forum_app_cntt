@extends('front.layout.master')

@section('title', 'Diễn đàn khoa CNTT - FITA VNUA || Bài viết mới')

@section('body')
<div class="col-lg-6">
    <div class="central-meta item">
        <p><span class="font-weight-bold text-dark">Môn học: </span>{{ $post->subject_->name ?? 'Không có' }}</p>
        <p><span class="font-weight-bold text-dark">Tiêu đề: </span>{{ $post->title }}</p>
    </div>
    <div class="central-meta item">
        <div class="user-post">
            <div class="friend-info">
                <figure>
                    <img src="front/img/users/{{ $post->user->avatar }}" alt="" style="min-width: 50px;min-height: 50px;max-width: 50px;max-height: 50px;object-fit: cover;" />
                </figure>
                <div class="friend-name">
                    <ins><a href="time-line.html" title="">{{ $post->user->name }}</a> -

                        @if( $post->user->level == 0 )
                        <span class="badge bg-danger text-white">Người kiểm duyệt</span>
                        @elseif( $post->user->level == 1 )
                        <span class="badge bg-success text-white">Giảng viên</span>
                        @else
                        <span class="badge bg-primary text-white">Sinh viên</span>
                        @endif
                    </ins>
                    <span class="float-ri">{{ date('H:i, d/m/Y',strtotime($post->created_at)) }}</span>
                </div>
                <div class="post-meta">
                    <input type="text" class="d-none" id="post_id_show" value="{{$post->id}}">
                    <div>
                        {!! $post->content !!}
                    </div>
                    <br>
                    <hr>
                    <div class="we-video-info">
                        <ul>
                            <li>
                                @if(Auth::check())
                                <span class="like like-btn {{ $post->likes->contains(auth()->user()->id) ? 'liked' : '' }}" data-toggle="tooltip" title="like" data-post-id="{{ $post->id }}" data-user-id="{{ auth()->user()->id }}">
                                    <i class="fa-sharp fa-thumbs-up icon_like {{ $liked ? 'fa-solid' : 'fa-regular' }}"></i>
                                    <ins class="likes-count" data-post-id="{{ $post->id }}">{{ format_number($post->likes->count()) }}</ins>
                                </span>
                                @else
                                <span data-toggle="tooltip" title="like">
                                    <i class="fa-sharp fa-thumbs-up fa-regular"></i>
                                    <ins>{{ format_number($post->likes->count()) }}</ins>
                                </span>
                                @endif
                            </li>
                            <li>
                                <span class="comment" data-toggle="tooltip" title="Comments">
                                    <i class="fa fa-comments-o"></i>
                                    <ins id="count_comment">{{ format_number($count_comments) }}</ins>
                                </span>
                            </li>
                            <li>
                                <span class="views" data-toggle="tooltip" title="views">
                                    <i class="fa fa-eye"></i>
                                    <ins>{{ format_number($post->view_count ?? 0) }}</ins>
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="coment-area">
                <ul class="we-comet" id="comment" style="padding-top: 15px;">
                    <!-- Bình luận bài viết -->
                    @include('front.what_news.list-comment', ['comments' => $post->comments])
                </ul>
                <ul>
                    @if(Auth::check())
                    <div class="central-meta item">
                        <nav>
                            <div class="nav nav-tabs" id="myTab" role="tablist">
                                <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><span><i class="fa-solid fa-comment"></i></span> Bình luận</a>
                                <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><span><i class="fa-sharp fa-solid fa-circle-exclamation"></i></span> Báo cáo</a>
                            </div>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                <li class="post-comment" style="margin-top: 10px;">
                                    <div class="comet-avatar">
                                        <img src="front/img/users/{{ Auth::user()->avatar }}" alt="" style="min-width: 40px;min-height: 40px;max-width: 40px;max-height: 40px;object-fit: cover;" />
                                    </div>
                                    <div class="post-comt-box">
                                        <form method="post">
                                            <textarea style="height: 100px;" class="@error('content') is-invalid @enderror" placeholder="write something" id="comment-content" name="content"></textarea>
                                            <small id="comment-error" class="text-danger"></small>

                                            <div class="attachments">
                                                <button type="submit" id="btn-comment" data-post-id="{{ $post->id }}">Bình luận</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                <form id="report-post-form">
                                    <div class="form-group">
                                        <textarea class="@error('content') is-invalid @enderror form-control border" id="content_report_post" name="content_report_post" rows="3" placeholder="Lý do báo cáo..."></textarea>
                                        <small id="report-post-error" class="text-danger"></small>
                                    </div>
                                    <div class="attachments">
                                        <button type="submit" class="bg-danger">Báo cáo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-warning central-meta item" role="alert">
                        <a href="./account/login">Đăng nhập để bình luận bài viết</a>
                    </div>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div><!-- centerl meta -->
<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title"><span><i class="fa-solid fa-chart-simple mr-3"></i></span>Bài viết liên quan</h4>
            <div class="m-3">
                @if($relatedPosts->count() > 0)
                @foreach($relatedPosts->slice(0, 15) as $post)
                <a href="./new_posts/post_{{ $post->id }}" class="list-group-item list-group-item-action" style="overflow: auto;">
                    <div class="media d-flex justify-content-start">
                        <div class="media-body" style="max-width: 100%;">
                            <h5 class="font-weight-bold text-dark">{{ $post->title }}</h5>
                            <p>{{ $post->user->name }}</p>
                            <p>{{ date('H:i, d/m/Y',strtotime($post->created_at)) }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
                @else
                <div class="text-center">Không có bài viết nào</div>
                @endif
            </div>
        </div>

        <div class="widget">
            <h4 class="widget-title"><span><i class="fa-solid fa-chart-simple mr-3"></i></span>Thống kê</h4>
            <div class="m-3">
                <div class="row">
                    <h6 class="col-6">Chủ đề:</h6>
                    <p class="col-6 text-center">2222</p>
                </div>
                <div class="row">
                    <h6 class="col-6">Thành viên:</h6>
                    <p class="col-6 text-center">2222</p>
                </div>
                <div class="row">
                    <h6 class="col-6">Bài viết:</h6>
                    <p class="col-6 text-center">2222</p>
                </div>
            </div>
        </div>
    </aside>
</div><!-- sidebar -->

<script src="front/js/reaction-post.js"></script>
<script src="front/js/tinimce.js"></script>
@endsection