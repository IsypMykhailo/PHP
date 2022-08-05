@extends('layouts.app')

@section('content')
    @php
        use App\Models\User;
        $username = str_replace('/changePassword','',$_SERVER['REQUEST_URI']);
        $username = str_replace('/','',$username)
    @endphp
    <section>
        <div class="feature-photo">
            <figure><img src="{{asset('/storage/'.User::query()->where('username', $username)->first()->profile->profileBackground)}}" alt=""></figure>
            <div class="add-btn">
                <span>1205 followers</span>
                @if($username !== Auth::user()->username)
                    <a href="#" title="" data-ripple="">Add Friend</a>
                @endif
            </div>
            <form class="edit-phto" id="editBackground" method="POST"
                  action="{{url('/' . $username . '/updateBackground')}}" enctype="multipart/form-data">
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
                                <img
                                    src="{{asset('/storage/'.User::query()->where('username', $username)->first()->avatar)}}"
                                    alt="">
                                <form class="edit-phto" id="editAvatar" method="POST"
                                      action="{{url('/' . $username . '/updateAvatar')}}" enctype="multipart/form-data">
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
                                    <h5>{{User::query()->where('username', $username)->first()->name}}</h5>
                                    <span>
                                        @if(User::query()->where('username', $username)->first()->role_id===1)
                                            Admin
                                        @endif
                                    </span>
                                </li>
                                <li>
                                    <!--<a class="" href="time-line.html" title="" data-ripple="">time line</a>-->
                                    <a class="" href="timeline-photos.html" title="" data-ripple="">Posts</a>
                                    <a class="" href="timeline-videos.html" title="" data-ripple="">Followers</a>
                                    <a class="" href="timeline-friends.html" title="" data-ripple="">Following</a>
                                    <!--<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>-->
                                    <a class="active" href="{{url('/'.$username)}}" title="" data-ripple="">about</a>

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
                                    @if($username === Auth::user()->username)
                                        <div class="widget">
                                            <h4 class="widget-title">Edit info</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-info-alt"></i>
                                                    <a title=""
                                                       href="{{url('/'.Auth::user()->username.'/edit-profile-basic')}}">Basic
                                                        info</a>
                                                </li>
                                                <li>
                                                    <i class="ti-lock"></i>
                                                    <a title="" href="{{url('/changePassword')}}">change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                    <!--<div class="widget">
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
                                    </div>-->
                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="editing-info">
                                        <h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>

                                        <form method="POST" action="{{url('/'.Auth::user()->username.'/updatePassword')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="password" id="newPassword" required="required" name="password"/>
                                                <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group" id="confdiv">
                                                <input type="password" id="confirmPassword" required="required" onchange="checkPassword()"/>
                                                <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="submit-btns">
                                                <button type="button" onclick="this.form.reset();" class="mtr-btn"><span>Cancel</span></button>
                                                <button type="submit" id="submitBtn" class="mtr-btn"><span>Update</span></button>
                                            </div>
                                        </form>
                                        <script>
                                            function checkPassword(){
                                                let newpassword = document.getElementById('newPassword');
                                                let confpassword = document.getElementById('confirmPassword');
                                                let confdiv = document.getElementById('confdiv');
                                                let submit = document.getElementById('submitBtn');
                                                if(newpassword.value !== confpassword.value){
                                                    submit.disabled=true;
                                                }
                                            }
                                        </script>
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
