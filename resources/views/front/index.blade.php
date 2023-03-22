@extends('front.layout.master')

@section('title', 'Diễn đàn khoa CNTT - FITA VNUA || Trang chủ')

@section('body')
<div class="col-lg-6">
    <div class="central-meta item">
        <h4 class="font-weight-bold mb-2">Story mới</h4>
        <hr>
        <br>
        <div class="slider">
            @if(Auth::check())
            <a class="d-flex justify-content-center" href="#">
                <div class="mr-3 d-flex align-items-end justify-content-center blur-story rounded" style="background-image: url('front/img/users/{{ Auth::user()->avatar }}'); width: 150px; height: 150px; background-position: center;">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <img src="front/img/addStory.jpg" alt="Add story" title="thêm mới story" style="width: 50px;height: 50px;object-fit: cover; border-radius: 50%;">
                    </div>
                </div>
            </a>
            @endif
            <a class="d-flex justify-content-center" href="#">
                <div class="mr-3 blur-story rounded" style="background-image: url('https://source.unsplash.com/random/1'); width: 150px; height: 150px;">
                    <div class="d-flex align-items-start flex-column bd-highlight mb-3 h-100">
                        <img class="mb-auto p-2 bd-highlight" src="front/img/users/user1.jpg" alt="" style="width: 50px;height: 50px;object-fit: cover; border-radius: 50%;">
                        <p class="text-white align-middle m-2 fw-bolder">Tên ở đây</p>
                    </div>
                </div>
            </a>
            <a class="d-flex justify-content-center" href="#">
                <div class="mr-3 blur-story rounded" style="background-image: url('https://source.unsplash.com/random/1'); width: 150px; height: 150px;">
                    <div class="d-flex align-items-start flex-column bd-highlight mb-3 h-100">
                        <img class="mb-auto p-2 bd-highlight" src="front/img/users/user1.jpg" alt="" style="width: 50px;height: 50px;object-fit: cover; border-radius: 50%;">
                        <p class="text-white align-middle m-2 fw-bolder">Tên ở đây</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="central-meta item">
        <nav>
            <div class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">CNPM</a>
                <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">KHMT</a>
                <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Mạng và HTTT</a>
                <a class="nav-item nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Toán</a>
                <a class="nav-item nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Vật lý</a>
            </div>
        </nav>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                <div class="list-group">
                    @foreach($posts->slice(0, 15) as $post)
                    @if($post->story_post == '0')
                    @if($post->specialized == '1')
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
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel">
                <div class="list-group">
                    @foreach($posts->slice(0, 15) as $post)
                    @if($post->story_post == '0')
                    @if($post->specialized == '2')
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
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel">
                <div class="list-group">
                    @foreach($posts->slice(0, 15) as $post)
                    @if($post->story_post == '0')
                    @if($post->specialized == '3')
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
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel">
                <div class="list-group">
                    @foreach($posts->slice(0, 15) as $post)
                    @if($post->story_post == '0')
                    @if($post->specialized == '4')
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
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="tab5" role="tabpanel">
                <div class="list-group">
                    @foreach($posts->slice(0, 15) as $post)
                    @if($post->story_post == '0')
                    @if($post->specialized == '5')
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
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="central-meta item">
        <h4 class="font-weight-bold mb-2">Chia sẻ ngày của bạn</h4>
        @if(Auth::check())
        <form action="">
            <textarea type="text" id="content" class="form-control" placeholder="Hãy chia sẻ ngày của bạn...."></textarea>
            <div class="attachments">
                <button type="submit">Đăng bài</button>
            </div>
        </form>
        @endif
        <hr>
        <br>
        <div class="media">
            <div class="rounded-img mr-3" style="background-image: url('front/img/users/user1.jpg')"></div>
            <div class="media-body">
                <div>
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="" class="align-middle fw-bold">Nguyễn Minh tuấn</a>
                    </div>
                    <p>Hello cả nhà</p>
                    <div class="d-flex justify-content-between">
                        <p>20/11/2022</p>
                        <i class="fa-solid fa-ellipsis" data-toggle="modal" data-target="#myModal"></i>
                        <div class="modal" style="background-color: rgba(0, 0, 0, 0.75);" tabindex="-1" role="dialog" id="myModal">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content bg-light text-dark">
                                    <!-- Modal header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title">Được đăng bởi Nguyễn Minh Tuấn</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="front/img/users/user1.jpg" alt="" style="width: 50px;height: 50px;object-fit: cover;">
                                                <!-- <div class="rounded-img mr-3" style="background-image: url('front/img/users/user1.jpg')"></div> -->
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a href="" class="align-middle">Nguyễn Minh tuấn</a>
                                                    <strong>-</strong>
                                                    <div>20/11/2023</div>
                                                </div>
                                                <hr>
                                                <div>
                                                    bài đăng ở đây
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer d-flex justify-content-between">
                                        <div class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span><i class="fa-solid fa-exclamation"></i></span> Report
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn"><span><i class="fa-sharp fa-regular fa-thumbs-up"></i></span> Like</div>
                                            <div class="btn"><span><i class="fa-solid fa-comment"></i></span> Comment</div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" style="background-color: rgba(0, 0, 0, 0.75);" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Report content</h5>

                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tr>
                                                                <th scope="col">Lý do báo cáo:</th>
                                                                <th scope="col">
                                                                    <textarea class="form-control" placeholder="Nội dung báo cáo..." id="floatingTextarea"></textarea>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Report</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="media">
            <div class="rounded-img mr-3" style="background-image: url('front/img/users/user2.jpg')"></div>
            <div class="media-body">
                <div>
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="" class="align-middle fw-bold">Nguyễn Minh tuấn</a>
                        <i class="fa-sharp fa-solid fa-caret-right m-2"></i>
                        <a href="" class="align-middle fw-bold">Trân Ngọc</a>
                    </div>
                    <p>Hello cả nhà</p>
                    <div class="d-flex justify-content-between">
                        <p>20/11/2022</p>
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="central-meta item">
        <h5>Cộng đồng</h5>
        <div class="container">
            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>

            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>

            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>

            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="central-meta item">
        <h5>Học tập</h5>
        <div class="container">
            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>

            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>

            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>

            <div class="row border">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="col-7">
                    <h6><a class="align-middle" href="">Bộ môn công nghệ phần mềm</a></h6>
                    <a href="">- Hỏi đáp</a><br>
                    <a href="">- Thảo luận</a><br>
                    <a href="">- Đề Thi</a><br>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Môn học
                        <br>
                        <h6>32</h6>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        Bài viết
                        <br>
                        <h6>1.2K</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- centerl meta -->

<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title"><span><i class="fa-solid fa-magnifying-glass mr-3"></i></i></span> Tìm kiếm thành viên</h4>
            <div class="input-group mb-3 p-2">
                <input type="text" class="form-control" placeholder="Tên thành viên...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="widget">
            <div class="banner medium-opacity bluesh">
                <div class="bg-image" style="background-image: url(front/img/resources/baner-widgetbg.jpg)"></div>
                <div class="baner-top">
                    <span><img alt="" src="front/img/book-icon.png"></span>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
                <div class="banermeta">
                    <p>
                        create your own favourit page.
                    </p>
                    <span>like them all</span>
                </div>
            </div>
        </div>

        <div class="widget">
            <h4 class="widget-title"><span><i class="fa-solid fa-users mr-3"></i></span>Đang online</h4>
            <div class="m-3">
                <div>Đang trực tuyến: 155</div><br>
                <p>Giảng viên: 12</p>
                <p>Sinh viên: 222</p>
                <p>Admin: 2</p>
            </div>
        </div>

        @if(Auth::check())
        <div class="widget friend-list">
            <h4 class="widget-title">Người theo dõi</h4>
            <div id="searchDir"></div>
            <ul id="people-list" class="friendz-list">
                <li>
                    <figure>
                        <img src="front/img/resources/friend-avatar.jpg" alt="">
                        <span class="status f-online"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">bucky barnes</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d7c9ced4c5d2d3cfccc4c5d2e0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>
                    <figure>
                        <img src="front/img/resources/friend-avatar2.jpg" alt="">
                        <span class="status f-away"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">Sarah Loren</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d6d5c6dad1c7f4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>
                    <figure>
                        <img src="front/img/resources/friend-avatar3.jpg" alt="">
                        <span class="status f-off"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">jason borne</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d777c6e72737f5d7a707c7471337e7270">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>
                    <figure>
                        <img src="front/img/resources/friend-avatar4.jpg" alt="">
                        <span class="status f-off"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">Cameron diaz</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bed4dfcdd1d0dcfed9d3dfd7d290ddd1d3">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>

                    <figure>
                        <img src="front/img/resources/friend-avatar5.jpg" alt="">
                        <span class="status f-online"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">daniel warber</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="553f34263a3b37153238343c397b363a38">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>

                    <figure>
                        <img src="front/img/resources/friend-avatar6.jpg" alt="">
                        <span class="status f-away"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">andrew</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5933382a36373b193e34383035773a3634">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>

                    <figure>
                        <img src="front/img/resources/friend-avatar7.jpg" alt="">
                        <span class="status f-off"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">amy watson</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5933382a36373b193e34383035773a3634">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>

                    <figure>
                        <img src="front/img/resources/friend-avatar5.jpg" alt="">
                        <span class="status f-online"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">daniel warber</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbb1baa8b4b5b99bbcb6bab2b7f5b8b4b6">[email&#160;protected]</a></i>
                    </div>
                </li>
                <li>

                    <figure>
                        <img src="front/img/resources/friend-avatar2.jpg" alt="">
                        <span class="status f-away"></span>
                    </figure>
                    <div class="friendz-meta">
                        <a href="time-line.html">Sarah Loren</a>
                        <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2644475448435566414b474f4a0845494b">[email&#160;protected]</a></i>
                    </div>
                </li>
            </ul>
        </div><!-- friends list sidebar -->
        @endif

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

<script>
    $(document).ready(function() {
        $('.slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    });
</script>
@endsection