@extends('layouts.app')

@section('content')
    @php
        use App\Models\User;
        $username = str_replace('/','',$_SERVER['REQUEST_URI'])
    @endphp
    <section>
        <div class="feature-photo">
            <figure><img
                    src="{{asset('/storage/'.User::query()->where('username', $username)->first()->profile->profileBackground)}}"
                    alt=""></figure>
            <div class="add-btn">
                @if(User::query()->where('username', $username)->first()->followers !== null)
                    <span>{{count(User::query()->where('username', $username)->first()->followers)}} followers</span>
                @else
                    <span>0 followers</span>
                @endif
                @if($username !== Auth::user()->username &&
                    \App\Models\Follower::query()->where('follower_id', Auth::user()->id)->
                        where('user_id', User::query()->where('username', $username)->first()->id)->first() === null)
                    <form method="post" action="{{url('/'.$username.'/follow')}}">
                        @csrf
                        <input type="submit" value="Follow"/>
                        <!--<a href="#" title="" data-ripple="">Follow</a>-->
                    </form>
                @elseif($username !== Auth::user()->username &&
                        \App\Models\Follower::query()->where('follower_id', Auth::user()->id)->
                        where('user_id', User::query()->where('username', $username)->first()->id)->first() !== null)
                        <form method="post" action="{{url('/'.$username.'/unfollow')}}">
                            @csrf
                            <input type="submit" value="Unfollow"/>
                            <!--<a href="#" title="" data-ripple="">Follow</a>-->
                        </form>
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
                                    <a class="" href="{{url('/'.$username.'/posts')}}" title="" data-ripple="">Posts</a>
                                    <a class="" href="{{url('/'.$username.'/followers')}}" title="" data-ripple="">Followers</a>
                                    <a class="" href="{{url('/'.$username.'/following')}}" title="" data-ripple="">Following</a>
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
                                                    <a title="" href="{{url('/'.Auth::user()->username.'/changePassword')}}">change password</a>
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
                                    <div class="about">
                                        <div class="personal">
                                            <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                            <p>
                                                @if(User::query()->where('username', $username)->first()->profile->description != null)
                                                    {{User::query()->where('username', $username)->first()->profile->description}}
                                                @endif
                                                <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                                                <li class="nav-item">
                                                    <a href="#basic" class="nav-link active" data-toggle="tab">Basic
                                                        info</a>
                                                </li>
                                                <!--<li class="nav-item">
                                                    <a href="#location" class="nav-link" data-toggle="tab" >location</a>
                                                </li>-->
                                                <!--<li class="nav-item">
                                                    <a href="#work" class="nav-link" data-toggle="tab" >work and education</a>
                                                </li>-->
                                                <li class="nav-item">
                                                    <a href="#interest" class="nav-link" data-toggle="tab">interests</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#lang" class="nav-link" data-toggle="tab">languages</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="basic">
                                                    <ul class="basics">

                                                        <li>
                                                            <i class="ti-user"></i> {{ User::query()->where('username', $username)->first()->name }}
                                                        </li>
                                                        <li><i class="ti-map-alt"></i>
                                                            @if(User::query()->where('username', $username)->first()->profile->location !==null)
                                                                {{User::query()->where('username', $username)->first()->profile->location}}
                                                            @else
                                                                Not specified
                                                            @endif
                                                        </li>
                                                        <li><i class="ti-mobile"></i>
                                                            @if(User::query()->where('username', $username)->first()->profile->phone !==null)
                                                                {{User::query()->where('username', $username)->first()->profile->phone}}
                                                            @else
                                                                Not specified
                                                            @endif
                                                        </li>
                                                        <!--<li><i class="ti-email"></i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c4553494e515d55507c59515d5550125f5351">[email&#160;protected]</a></li>-->
                                                        <!--<li><i class="ti-world"></i>www.yoursite.com</li>-->
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
                                                            <li><i class="ti-facebook"></i> BSCS from Oxford University
                                                            </li>
                                                            <li><i class="ti-twitter"></i> MSCS from Harvard Unversity
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="interest" role="tabpanel">
                                                    <p class="p-3">{{User::query()->where('username', $username)->first()->profile->interests}}</p>
                                                    <!--<ul class="basics">
                                                        <li>Footbal</li>
                                                        <li>internet</li>
                                                        <li>photography</li>
                                                    </ul>-->
                                                </div>
                                                <div class="tab-pane fade" id="lang" role="tabpanel">
                                                    <p class="p-3">{{User::query()->where('username', $username)->first()->profile->languages}}</p>
                                                    <!--<ul class="basics">
                                                        <li>english</li>
                                                        <li>french</li>
                                                        <li>spanish</li>
                                                    </ul>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- centerl meta -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

