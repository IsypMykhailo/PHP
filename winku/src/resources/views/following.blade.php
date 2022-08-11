@extends('layouts.profileLayout')

@section('content2')
    @php
        use App\Models\User;
        //$username = str_replace('/following','',$_SERVER['REQUEST_URI']);
        //$username = str_replace('/','',$username);
    @endphp
{{--    <section>--}}
{{--        <div class="feature-photo">--}}
{{--            <figure><img--}}
{{--                    src="{{asset('/storage/'.User::query()->where('username', $username)->first()->profile->profileBackground)}}"--}}
{{--                    alt=""></figure>--}}
{{--            <div class="add-btn">--}}
{{--                @if(User::query()->where('username', $username)->first()->followers !== null)--}}
{{--                    <span>{{count(User::query()->where('username', $username)->first()->followers)}} followers</span>--}}
{{--                @else--}}
{{--                    <span>0 followers</span>--}}
{{--                @endif--}}
{{--                @if($username !== Auth::user()->username &&--}}
{{--                    \App\Models\Follower::query()->where('follower_id', Auth::user()->id)->--}}
{{--                        where('user_id', User::query()->where('username', $username)->first()->id)->first() === null)--}}
{{--                    <form method="post" action="{{url('/'.$username.'/follow')}}">--}}
{{--                        @csrf--}}
{{--                        <input type="submit" value="Follow"/>--}}
{{--                        <!--<a href="#" title="" data-ripple="">Follow</a>-->--}}
{{--                    </form>--}}
{{--                @elseif($username !== Auth::user()->username &&--}}
{{--                        \App\Models\Follower::query()->where('follower_id', Auth::user()->id)->--}}
{{--                        where('user_id', User::query()->where('username', $username)->first()->id)->first() !== null)--}}
{{--                    <form method="post" action="{{url('/'.$username.'/unfollow')}}">--}}
{{--                        @csrf--}}
{{--                        <input type="submit" value="Unfollow"/>--}}
{{--                        <!--<a href="#" title="" data-ripple="">Follow</a>-->--}}
{{--                    </form>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            @if(Auth::user()->username === $username)--}}
{{--            <form class="edit-phto" id="editBackground" method="POST"--}}
{{--                  action="{{url('/' . $username . '/updateBackground')}}" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <i class="fa fa-camera-retro"></i>--}}
{{--                <label class="fileContainer">--}}
{{--                    Edit Cover Photo--}}
{{--                    <input onchange="this.form.submit();" id="background" name="background" type="file"/>--}}
{{--                </label>--}}
{{--            </form>--}}
{{--            @endif--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row merged">--}}
{{--                    <div class="col-lg-2 col-sm-3">--}}
{{--                        <div class="user-avatar">--}}
{{--                            <figure>--}}
{{--                                <img--}}
{{--                                    src="{{asset('/storage/'.User::query()->where('username', $username)->first()->avatar)}}"--}}
{{--                                    alt="">--}}
{{--                                @if(Auth::user()->username === $username)--}}
{{--                                <form class="edit-phto" id="editAvatar" method="POST"--}}
{{--                                      action="{{url('/' . $username . '/updateAvatar')}}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <i class="fa fa-camera-retro"></i>--}}
{{--                                    <label class="fileContainer">--}}
{{--                                        Edit Display Photo--}}
{{--                                        <input onchange="this.form.submit();" id="avatar" name="avatar" type="file"/>--}}
{{--                                    </label>--}}
{{--                                </form>--}}
{{--                                @endif--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-10 col-sm-9">--}}
{{--                        <div class="timeline-info">--}}
{{--                            <ul>--}}
{{--                                <li class="admin-name">--}}
{{--                                    <h5>{{User::query()->where('username', $username)->first()->name}}</h5>--}}
{{--                                    <span>--}}
{{--                                        @if(User::query()->where('username', $username)->first()->role_id===1)--}}
{{--                                            Admin--}}
{{--                                        @endif--}}
{{--                                    </span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <!--<a class="" href="time-line.html" title="" data-ripple="">time line</a>-->--}}
{{--                                    <a class="" href="{{url('/'.$username.'/posts')}}" title="" data-ripple="">Posts</a>--}}
{{--                                    <a class="" href="{{url('/'.$username.'/followers')}}" title="" data-ripple="">Followers</a>--}}
{{--                                    <a class="active" href="{{url('/'.$username.'/following')}}" title="" data-ripple="">Following</a>--}}
{{--                                    <!--<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>-->--}}
{{--                                    <a class="" href="{{url('/'.$username)}}" title="" data-ripple="">about</a>--}}

{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section><!-- top area -->--}}

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
                            <div class="col-lg-1">

                            </div>
                            <div class="col-lg-4">
                                <div class="central-meta">
                                    <div class="about">
                                        <div class="centerBlock d-flex flex-column personal">
                                            @foreach(\App\Models\Follower::query()->where('follower_id', User::query()->where('username',$username)->first()->id)->get() as $follower)
                                                <p class="m-2" style="cursor:pointer;" onclick="window.location.href='{{url('/'.$follower->user->username)}}'">
                                                    <img class="follower_img" src="{{asset('/storage/'.$follower->user->avatar)}}" align="middle">
                                                    <span class="username">{{$follower->user->username}}</span><br>
                                                    <span>{{$follower->user->name}}</span>
                                                </p>
                                            @endforeach
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


