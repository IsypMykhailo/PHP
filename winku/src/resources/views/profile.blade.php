@extends('layouts.app')

@section('content')
    <section>
        <div class="feature-photo">
            <figure><img src="{{asset('/storage/'.Auth::user()->profile->profileBackground)}}" alt=""></figure>
            <div class="add-btn">
                <span>1205 followers</span>
                <a href="#" title="" data-ripple="">Add Friend</a>
            </div>
            <form class="edit-phto" id="editBackground" method="POST" action="{{url('/' . Auth::user()->username . '/updateBackground')}}" enctype="multipart/form-data">
                @csrf
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Edit Cover Photo
                    <input onchange="this.form.submit();" id="background" name="background" type="file"/>
                </label>
            </form>
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="{{asset('/storage/'.Auth::user()->avatar)}}" alt="">
                                <form class="edit-phto" id="editAvatar" method="POST" action="{{url('/' . Auth::user()->username . '/updateAvatar')}}" enctype="multipart/form-data">
                                    @csrf
                                    <i class="fa fa-camera-retro"></i>
                                    <label class="fileContainer">
                                        Edit Display Photo
                                        <input onchange="this.form.submit();" id="avatar" name="avatar" type="file"/>
                                    </label>
                                </form>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="timeline-info">
                            <ul>
                                <li class="admin-name">
                                    <h5>Janice Griffith</h5>
                                    <span>Group Admin</span>
                                </li>
                                <li>
                                    <a class="" href="time-line.html" title="" data-ripple="">time line</a>
                                    <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                    <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                    <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                    <a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
                                    <a class="active" href="about.html" title="" data-ripple="">about</a>
                                    <a class="" href="#" title="" data-ripple="">more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area -->

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                            <div class="col-lg-3">

                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Edit info</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-info-alt"></i>
                                                <a title="" href="edit-profile-basic.html">Basic info</a>
                                            </li>
                                            <li>
                                                <i class="ti-mouse-alt"></i>
                                                <a title="" href="edit-work-eductation.html">Education &amp; Work</a>
                                            </li>
                                            <li>
                                                <i class="ti-heart"></i>
                                                <a title="" href="edit-interest.html">My interests</a>
                                            </li>
                                            <li>
                                                <i class="ti-settings"></i>
                                                <a title="" href="edit-account-setting.html">account setting</a>
                                            </li>
                                            <li>
                                                <i class="ti-lock"></i>
                                                <a title="" href="edit-password.html">change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <h4 class="widget-title">Socials</h4>
                                        <ul class="socials">
                                            <li class="facebook">
                                                <a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                                            </li>
                                            <li class="twitter">
                                                <a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                                            </li>
                                            <li class="google">
                                                <a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="about">
                                        <div class="personal">
                                            <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
                                                <li class="nav-item">
                                                    <a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#location" class="nav-link" data-toggle="tab" >location</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#work" class="nav-link" data-toggle="tab" >work and education</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#interest" class="nav-link" data-toggle="tab"  >interests</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#lang" class="nav-link" data-toggle="tab" >languages</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="basic" >
                                                    <ul class="basics">
                                                        <li><i class="ti-user"></i>sarah grey</li>
                                                        <li><i class="ti-map-alt"></i>live in Dubai</li>
                                                        <li><i class="ti-mobile"></i>+1-234-345675</li>
                                                        <li><i class="ti-email"></i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c4553494e515d55507c59515d5550125f5351">[email&#160;protected]</a></li>
                                                        <li><i class="ti-world"></i>www.yoursite.com</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="location" role="tabpanel">
                                                    <div class="location-map">
                                                        <div id="map-canvas"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="work" role="tabpanel">
                                                    <div>

                                                        <a href="#" title="">Envato</a>
                                                        <p>work as autohr in envato themeforest from 2013</p>
                                                        <ul class="education">
                                                            <li><i class="ti-facebook"></i> BSCS from Oxford University</li>
                                                            <li><i class="ti-twitter"></i> MSCS from Harvard Unversity</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="interest" role="tabpanel">
                                                    <ul class="basics">
                                                        <li>Footbal</li>
                                                        <li>internet</li>
                                                        <li>photography</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="lang" role="tabpanel">
                                                    <ul class="basics">
                                                        <li>english</li>
                                                        <li>french</li>
                                                        <li>spanish</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Your page</h4>
                                        <div class="your-page">
                                            <figure>
                                                <a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a class="underline" title="" href="#">My page</a>
                                                <span><i class="ti-comment"></i>Messages <em>9</em></span>
                                                <span><i class="ti-bell"></i>Notifications <em>2</em></span>
                                            </div>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div id="link1" class="tab-pane active fade show">
                                                        <span><i class="ti-heart"></i>884</span>
                                                        <a title="weekly-likes" href="#">35 new likes this week</a>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                                <img alt="" src="images/resources/userlist-6.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                                <img alt="" src="images/resources/userlist-7.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="link2" class="tab-pane fade">
                                                        <span><i class="ti-eye"></i>445</span>
                                                        <a title="weekly-likes" href="#">440 new views this week</a>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                                <img alt="" src="images/resources/userlist-6.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                                <img alt="" src="images/resources/userlist-7.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Allen</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- who's following -->
                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

