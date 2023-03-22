@extends('front.layout.master')

@section('title', 'Profile')

@section('body')
<div class="main-mid">
    <div class="card-profile shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="upper" style="background-image: url('front/img/feed4.jpg'); background-size: cover;">
        </div>
        <div class="user-profile text-center">
            <div class="profile-user">
                <img src="front/img/f1.png" class="rounded-circle" width="80">
            </div>
        </div>
        <div class="mt-5 text-center">
            <h4 class="mb-0">Benjamin Tims</h4>
            <span class="text-muted d-block mb-2">Los Angles</span>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary btn-sm follow m-2 d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill me-2" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <p>Theo dõi</p>
                </button>
                <button class="btn btn-primary btn-sm follow m-2 follow m-2 d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send me-2" viewBox="0 0 16 16">
                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                    </svg>
                    <p>Nhắn tin</p>
                </button>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                <div class="stats">
                    <h6 class="mb-0">Người theo dõi</h6>
                    <span>8,797</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Lượt thích</h6>
                    <span>142</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Bài viết</h6>
                    <span>129</span>
                </div>
            </div>
        </div>
    </div>
    <!--..................feeds..start...............................-->
    <h1 class="h2">Bài viết</h1>
    <div class="feeds">
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/p5.png" alt="">
                    </div>
                    <div class="info">
                        <h3>javed ali</h3>
                        <small>india, 15 minutes ago</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed8.jpg" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/feed4.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>liah joli</h3>
                        <small>america, updated profile</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed4.jpg" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/p2.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>Deniel Rivar</h3>
                        <small>america, just now</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed3.png" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/s1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>mack since</h3>
                        <small>cannada, 15 minutes ago</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed2.jpg" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/profile-4.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>chatrin dia</h3>
                        <small>cannada, 15 minutes ago</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed6.png" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>

        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/p3.png" alt="">
                    </div>
                    <div class="info">
                        <h3>jhon milar</h3>
                        <small>cannada, 15 minutes ago</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed7.jpg" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/s7.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>dr. lony</h3>
                        <small>cannada, 15 minutes ago</small>
                    </div>
                </div>
                <span class="edit">
                    <img src="front/img/three-dots.svg" class="icon1">
                </span>
            </div>
            <div class="feed-phots">
                <img src="front/img/feed5.jpeg" alt="">
            </div>
            <div class="action-buttons">
                <div class="inter-action-button">
                    <span><img src="front/img/heart.svg" class="icon2"></span>
                    <span><img src="front/img/chat-dots.svg" class="icon2"></span>
                    <span><img src="front/img/share.svg" class="icon2"></span>
                </div>
                <div class="book-mark">
                    <span><img src="front/img/bookmark.svg" class="icon2"></span>
                </div>
            </div>
            <div class="liked-by">
                <span><img src="front/img/p2.jpg" alt=""></span>
                <span><img src="front/img/p4.png" alt=""></span>
                <span><img src="front/img/p5.png" alt=""></span>
                <p>like by <b>deniel rivar </b> and<b> 105 others pepoles</b></p>
            </div>
            <div class="caption">
                <p><b>angela rose</b>Lorem, ipsum dolor sit amet consectetur. <span class="hash-teg">#lifestyle</span></p>
            </div>
            <div class="text-gry comment">view all comments</div>
        </div>
    </div>
    <!--..................feeds.end................................-->
</div>
<!-- =======MAIN RIGHT======= -->
<div class="main-right">
    <div class="bg-white p-3">
        <div class="message-heading">Ảnh</div>
        <div class="d-flex flex-wrap">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s1.jpg" alt="" style="max-width: 100px;">
            <img src="front/img/s6.jpg" alt="">
            <img src="front/img/s7.jpg" alt="">
            <img src="front/img/s1.jpg" alt="">
            <img src="front/img/s1.jpg" alt="">
            <img src="front/img/s1.jpg" alt="">
            <img src="front/img/s1.jpg" alt="">
            <img src="front/img/s1.jpg" alt="">
            <img src="front/img/s1.jpg" alt="">
        </div>
    </div>
</div>
</div>

@endsection