@extends('front.layout.master')

@section('title', 'Diễn đàn khoa CNTT - FITA VNUA || Đăng bài')

@section('body')
<div class="col-lg-6">
    <div class="central-meta">
        <div class="new-postbox">
            <form method="post" enctype="multipart/form-data" class="d-grid gap-3">
                @csrf
                <div class="mb-3">
                    <div class="font-weight-bold">Chọn nội dung bài đăng <span class="text-danger">*</span></div>
                    <select class="custom-select @error('type') is-invalid @enderror" name="type">
                        <option selected value="">---Chọn nội dung bài đăng---</option>

                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach

                    </select>
                    @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="font-weight-bold">Danh mục<span class="text-danger">*</span></div>
                    <select class="custom-select @error('category') is-invalid @enderror" name="category">
                        <option selected value="">---Chọn danh mục---</option>

                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                    @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="font-weight-bold">Chủ đề<span class="text-danger">*</span></div>
                    <select class="custom-select @error('topic') is-invalid @enderror" name="topic">
                        <option selected value="">---Chọn chủ đề---</option>
                        @foreach($topics as $topic)
                        <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                        @endforeach
                    </select>
                    @error('topic')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="font-weight-bold">Bộ môn</div>
                    <select id="specialized" class="custom-select mb-3" name="specialized">
                        <option selected value="">---Bộ môn---</option>

                        @foreach($specialized as $specialized)
                        <option value="{{ $specialized->id }}">{{ $specialized->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <div class="font-weight-bold">Môn học</div>
                    <select id="subject" class="custom-select" name="subject">
                    </select>
                </div>


                <div class="mb-3">
                    <div class="font-weight-bold">Tiêu đề <span class="text-danger">*</span></div>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Tiêu đề bài đăng" aria-label="tiêu đề" name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="font-weight-bold">Tệp</div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file_path">
                        <label class="custom-file-label" for="inputGroupFile01">Chọn tệp</label>
                    </div>
                </div>

                <div class="font-weight-bold">Nội dung <span class="text-danger">*</span></div>
                <textarea class="@error('content') is-invalid @enderror" rows="2" placeholder="write something" id="content" name="content">{{ old('content') }}</textarea>
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="attachments">
                    <ul>
                        <li>
                            <button type="submit">Đăng bài</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div><!-- add post new box -->
</div><!-- centerl meta -->

<div class="col-lg-3">
    <aside class="sidebar static">
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

        @if(Auth::check())
        <div class="widget friend-list stick-widget">
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

    </aside>
</div><!-- sidebar -->


<script src="front/js/tinimce.js"></script>
<script>
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $(this).next('.custom-file-label').html(fileName);
    });

    $(document).ready(function() {
        $(document).on('change', '#specialized', function() {
            // console.log('changed');

            var spec_id = $(this).val();
            // console.log(spec_id);

            var div = $(this).parent();
            var op = " ";

            $.ajax({
                type: 'GET',
                url: "post/findSubjectName",
                data: {
                    'specialized': spec_id
                },
                success: function(data) {
                    console.log('success');
                    console.log(data);
                    op += '<option value="" selected disabled>---Chọn môn học---</option>';

                    for (var i = 0; i < data.length; i++) {
                        op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }
                    console.log(op);

                    $("#subject").empty();
                    $("#subject").append(op);
                },
                error: function() {

                }
            });
        })
    });
</script>
@endsection