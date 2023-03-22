@extends('front.layout.master')

@section('title', 'Messages')

@section('body')
<!-- =======MAIN MID======= -->
<div class="main-mid">
    <div id="chat-box">
        <div class="d-flex justify-content-center mb-3">
            <button type="button" class="btn-theme btn-theme-primary shadow p-3 bg-body-tertiary rounded" data-bs-toggle="modal" data-bs-target="#create-post" id="btn-create-post">
                Viết tin nhắn mới
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="create-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="create-postLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal_post">Tin nhắn</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="shadow p-3 mb-5 bg-body rounded">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email người nhận</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <label for="content" class="form-label">Nội dung</label>
                            <div class="mb-3" id="content">
                                <textarea style="text-transform: none;" class="form-control" id="content"></textarea>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <input type="submit" value="Gửi" class="btn-theme btn-theme-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- =======header chatbox ======= -->
        <div class="row shadow p-3 mb-5 bg-body-tertiary rounded bg-white">
            <div class="col-sm-1 d-flex justify-content-center align-items-center">
                <div class="message">
                    <div class="profile-phots">
                        <img src="front/img/m1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-10 d-flex justify-content-center align-items-center">
                <p>Tên user</p>
            </div>
            <div class="col-sm-1 bg-red d-flex justify-content-center align-items-center">
                <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Xóa đoạn chat</a></li>
                        <li><a class="dropdown-item" href="#">Xem thông tin cá nhân</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- ======body======= -->
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded bg-white">
            <div class="panel panel-primary">
                <div class="panel-body" style="min-height: 500px;">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                                <img src="front/img/f1.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                                <img src="front/img/f1.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                                <img src="front/img/f1.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                                <img src="front/img/f1.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer mt-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-theme btn-theme-primary">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =======MAIN RIGHT======= -->
<div class="main-right">
    <div class="messages" id="message-box">
        <div class="message-heading">
            <h4>message</h4>
        </div>
        <!-- searchbar -->
        <div class="search-bar">
            <span><img src="front/img/search.svg" class="icon2"></span>
            <input type="search" placeholder="search message" class="message-search">
        </div>
        <!-- messgae -->
        <div style="min-height: 100px;
                    height: 250px;
                    overflow: auto;">
            <div class="message">
                <div class="profile-phots">
                    <div class="ac"></div>
                    <img src="front/img/f3.png" alt="">
                </div>
                <div class="messgae-body">
                    <h5>lion mesi</h5>
                    <p class="text-gry">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="message">
                <div class="profile-phots">
                    <img src="front/img/m1.jpg" alt="">
                </div>
                <div class="messgae-body">
                    <h5>emaly wills</h5>
                    <p class="text-gry">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="message">
                <div class="profile-phots">
                    <div class="ac"></div>
                    <img src="front/img/m2.png" alt="">
                </div>
                <div class="messgae-body">
                    <h5>dani liza</h5>
                    <p class="text-gry">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="message">
                <div class="profile-phots">
                    <img src="front/img/m3.jpg" alt="">
                </div>
                <div class="messgae-body">
                    <h5>prince jhoo</h5>
                    <p class="text-gry">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="message ">
                <div class="profile-phots">
                    <div class="ac"></div>
                    <img src="front/img/m4.png" alt="">
                </div>
                <div class="messgae-body">
                    <h5>daniel river</h5>
                    <p class="text-gry">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endsection