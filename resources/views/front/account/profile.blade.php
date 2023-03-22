@extends('front.layout.master')

@section('title', 'ACOUNT')

@section('body')
<!-- =======MAIN MID======= -->
<div class="main-mid">
    <div class="storys">
        <div class="story" style="background-image: url('front/img/profile-1.jpeg'); background-repeat: no-repeat; background-size: cover;">
            <div class="profile-phots" style="background-color: white;">
                <img src="front/img/plus.png" alt="">
            </div>
            <p>thêm story</p>
        </div>
        <div class="story">
            <div class="profile-phots">
                <img src="front/img/profile-1.jpeg" alt="">
            </div>
            <p>your story</p>
        </div>
        <div class="story">
            <div class="profile-phots">
                <img src="front/img/s2.jpg" alt="">
            </div>
            <p>jami sia</p>
        </div>
        <div class="story">
            <div class="profile-phots">
                <img src="front/img/s3.jpg" alt="">
            </div>
            <p>newton</p>
        </div>
        <div class="story">
            <div class="profile-phots">
                <img src="front/img/s4.jpg" alt="">
            </div>
            <p>lana fox</p>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="#">Xem thêm</a>
    </div>
    <!-- storys..end.. -->

    <form class="creatPost">
        <div class="profile-phots">
            <img src="front/img/profile-1.jpeg" alt="">
        </div>
        <div class="text-post">
            <input type="text" placeholder="Hãy chia sẻ ngày của bạn" class="creatPost">
        </div>

        <div>
            <input type="submit" value="post" class="btn-theme btn-theme-primary">
        </div>
    </form>

    <!--..................feeds..start...............................-->
    <div class="feeds">
        <div class="feed">
            <div class="head">
                <div class="user">
                    <div class="profile-phots">
                        <img src="front/img/p7.png" alt="">
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
                <img src="front/img/feed1.jpeg" alt="">
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
        <div class="d-flex justify-content-center">
            <a href="#">Xem thêm</a>
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