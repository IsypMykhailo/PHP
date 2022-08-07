@extends('layouts.app')

@section('content')
    @php
        use App\Models\User;
        $username = str_replace('/posts','',$_SERVER['REQUEST_URI']);
        $username = str_replace('/','',$username)
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
                                    <a class="active" href="{{url('/'.$username.'/posts')}}" title="" data-ripple="">Posts</a>
                                    <a class="" href="{{url('/'.$username.'/followers')}}" title="" data-ripple="">Followers</a>
                                    <a class="" href="{{url('/'.$username.'/following')}}" title="" data-ripple="">Following</a>
                                    <!--<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>-->
                                    <a class="" href="{{url('/'.$username)}}" title="" data-ripple="">about</a>

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
                                                    <a title=""
                                                       href="{{url('/'.Auth::user()->username.'/changePassword')}}">change
                                                        password</a>
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
                                @if(Auth::user()->username === User::query()->where('username',$username)->first()->username)
                                    <div class="central-meta">
                                        <div class="new-postbox">
                                            <figure>
                                                <img
                                                    src="{{asset('/storage/'.User::query()->where('username',$username)->first()->avatar)}}"
                                                    alt="">
                                            </figure>
                                            <div class="newpst-input">
                                                <form method="post" id="addPost"
                                                      action="{{url('/'.Auth::user()->username.'/posts/addPost')}}"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <textarea rows="2" name="description"
                                                              placeholder="write something"></textarea>
                                                    <div class="attachments">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-image"></i>
                                                                <label class="fileContainer">
                                                                    <input name="image" type="file">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <button type="submit">Post</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- add post new box -->
                                @endif

                                <div class="loadMore">
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{asset('/storage/'.Auth::user()->avatar)}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="{{url('/'.Auth::user()->username)}}"
                                                            title="">{{Auth::user()->name}}</a></ins>
                                                    <span>published: {{Auth::user()->publications->first()->created_at}}</span>
                                                </div>
                                                <div class="post-meta">
                                                    <img
                                                        src="{{asset('/storage/'.Auth::user()->publications->first()->image)}}"
                                                        alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                @if(Auth::user()->like === null)
                                                                <form id="formLike" action="{{url('/like')}}" method="post">
                                                                    @csrf
                                                                    <div onclick="document.getElementById('formLike').submit();">
                                                                <span class="like" data-toggle="tooltip" title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>{{count(Auth::user()->publications->first()->likes->all())}}</ins>
                                                                </span>
                                                                    </div>
                                                                    <input name="publication_id" type="hidden" value="{{Auth::user()->publications->first()->id}}"/>
                                                                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}"/>
                                                                </form>
                                                                @else
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>{{count(Auth::user()->publications->first()->likes->all())}}</ins>
                                                                </span>
                                                                @endif
                                                            </li>
                                                            <li>
															<span class="comment" data-toggle="tooltip"
                                                                  title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>{{count(Auth::user()->publications->first()->comments->all())}}</ins>
															</span>
                                                            </li>
                                                            <!--<li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            {{Auth::user()->publications->first()->description}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    @if(Auth::user()->publications->first()->comments->first() !== null)
                                                        @foreach(\App\Models\Publication::query()->where('user_id', Auth::user()->id)->first()->comments->all() as $comment)
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img
                                                                        src="{{asset('/storage/'.$comment->user->avatar)}}"
                                                                        alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">Jason
                                                                                borne</a></h5>
                                                                        <span>1 year ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i
                                                                                class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>we are working for the dance and sing songs. this
                                                                        car is very awesome for the youngster. please
                                                                        vote this car and like our post</p>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments</a>
                                                        </li>
                                                    @endif
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class=""> <!--post-comt-box-->
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <button type="submit">Send</button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
    </section>
@endsection


