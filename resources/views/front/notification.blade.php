@extends('front.layout.master')

@section('title', 'Home')

@section('body')
<!-- =======MAIN MID======= -->
<div class="main-mid">
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded bg-white" id="list-notification">
        <a href="#home" class="NP d-flex justify-content-start align-items-center m-3">
            <div class="profile-phots me-3">
                <img src="front/img/p2.jpg" alt="">
            </div>
            <div class="notification-body">
                <b>melody</b> accepted your firend request
                <small class="text-gry"> 1 minutes ago</small>
            </div>
        </a>
        <a href="#menu" class="NP d-flex justify-content-start align-items-center m-3">
            <div class="profile-phots me-3">
                <img src="front/img/p3.png" alt="">
            </div>
            <div class="notification-body">
                <b>jhon lew</b> commented your post
                <small class="text-gry"> 4 minutes ago</small>
            </div>
        </a>
        <a class="NP d-flex justify-content-start align-items-center m-3">
            <div class="profile-phots me-3">
                <img src="front/img/p4.png" alt="">
            </div>
            <div class="notification-body">
                <b>leah pry</b> liked your post
                <small class="text-gry"> 10 minutes ago</small>
            </div>
        </a>
        <a class="NP d-flex justify-content-start align-items-center m-3">
            <div class="profile-phots me-3">
                <img src="front/img/p5.png" alt="">
            </div>
            <div class="notification-body">
                <b>david</b> liked your post
                <small class="text-gry"> 20 minutes ago</small>
            </div>
        </a>
        <a class="NP d-flex justify-content-start align-items-center m-3">
            <div class="profile-phots me-3">
                <img src="front/img/profile-4.jpg" alt="">
            </div>
            <div class="notification-body">
                <b>angla fox</b> reacted your post
                <small class="text-gry"> 1 hour ago</small>
            </div>
        </a>
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
    <!--firend request-->
    <div class="firend-requests">
        <h4>request</h4>
        <div class="request">
            <div class="info">
                <div class="profile-phots">
                    <img src="front/img/f1.png" alt="">
                </div>
                <div class="request-body">
                    <h5>adam fight</h5>
                    <p class="text-gry">10 mutual firend</p>
                </div>
            </div>

            <div class="action">
                <button class="btn-theme btn-theme-primary" id="add">accept</button>
                <button class="btn-theme btn-theme" id="del">delete</button>
            </div>
        </div>
        <div class="request">
            <div class="info">
                <div class="profile-phots">
                    <img src="front/img/s3.jpg" alt="">
                </div>
                <div class="request-body">
                    <h5>alex jnoy</h5>
                    <p class="text-gry">10 mutual firend</p>
                </div>
            </div>

            <div class="action">
                <button class="btn-theme btn-theme-primary" id="add">accept</button>
                <button class="btn-theme " id="del">delete</button>
            </div>
        </div>
        <div class="request">
            <div class="info">
                <div class="profile-phots">
                    <img src="front/img/f3.png" alt="">
                </div>
                <div class="request-body">
                    <h5>eval milk</h5>
                    <p class="text-gry">10 mutual firend</p>
                </div>
            </div>
            <div class="action">
                <button class="btn-theme btn-theme-primary" id="add">accept</button>
                <button class="btn-theme " id="del">delete</button>
            </div>
        </div>
        <div class="request">
            <div class="info">
                <div class="profile-phots">
                    <img src="front/img/f4.png" alt="">
                </div>
                <div class="request-body">
                    <h5>dude putin</h5>
                    <p class="text-gry">10 mutual firend</p>
                </div>
            </div>
            <div class="action">
                <button class="btn-theme btn-theme-primary" id="add">accept</button>
                <button class="btn-theme " id="del">delete</button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <a href="#">Xem thêm</a>
        </div>
    </div>
</div>
@endsection