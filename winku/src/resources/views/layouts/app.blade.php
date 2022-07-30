<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="{{asset('images/fav.png')}}" type="image/png" sizes="16x16">

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

    <!-- Scripts -->
    <!--@vite(['resources/sass/app.scss', 'resources/js/app.js'])-->
</head>
<body>
    <div id="app">
        <!--<div class="se-pre-con"></div>-->
        <div class="theme-layout">

            <div class="responsive-header">
                <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
                    <span class="mh-text">
				<a href="newsfeed.html" title=""><img src="{{asset('images/logo2.png')}}" alt=""></a>
			</span>
                    <span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
                </div>
                <div class="mh-head second">
                    <form class="mh-form">
                        <input placeholder="search" />
                        <a href="#/" class="fa fa-search"></a>
                    </form>
                </div>
                <nav id="menu" class="res-menu">
                    <ul>
                        <li><span>Home</span>
                            <ul>
                                <li><a href="index-2.html" title="">Home Social</a></li>
                                <li><a href="index2.html" title="">Home Social 2</a></li>
                                <li><a href="index-company.html" title="">Home Company</a></li>
                                <li><a href="landing.html" title="">Login page</a></li>
                                <li><a href="logout.html" title="">Logout Page</a></li>
                                <li><a href="newsfeed.html" title="">news feed</a></li>
                            </ul>
                        </li>
                        <li><span>Time Line</span>
                            <ul>
                                <li><a href="time-line.html" title="">timeline</a></li>
                                <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                                <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                                <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                                <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                                <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                                <li><a href="fav-page.html" title="">favourit page</a></li>
                                <li><a href="groups.html" title="">groups page</a></li>
                                <li><a href="page-likers.html" title="">Likes page</a></li>
                                <li><a href="people-nearby.html" title="">people nearby</a></li>


                            </ul>
                        </li>
                        <li><span>Account Setting</span>
                            <ul>
                                <li><a href="create-fav-page.html" title="">create fav page</a></li>
                                <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                                <li><a href="edit-interest.html" title="">edit-interest</a></li>
                                <li><a href="edit-password.html" title="">edit-password</a></li>
                                <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                                <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                                <li><a href="messages.html" title="">message box</a></li>
                                <li><a href="inbox.html" title="">Inbox</a></li>
                                <li><a href="notifications.html" title="">notifications page</a></li>
                            </ul>
                        </li>
                        <li><span>forum</span>
                            <ul>
                                <li><a href="forum.html" title="">Forum Page</a></li>
                                <li><a href="forums-category.html" title="">Fourm Category</a></li>
                                <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                                <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                            </ul>
                        </li>
                        <li><span>Our Shop</span>
                            <ul>
                                <li><a href="shop.html" title="">Shop Products</a></li>
                                <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                                <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                                <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                                <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                            </ul>
                        </li>
                        <li><span>Our Blog</span>
                            <ul>
                                <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                                <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                                <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                                <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                                <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                                <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                                <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                                <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                            </ul>
                        </li>
                        <li><span>Portfolio</span>
                            <ul>
                                <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                                <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                                <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                            </ul>
                        </li>
                        <li><span>Support & Help</span>
                            <ul>
                                <li><a href="support-and-help.html" title="">Support & Help</a></li>
                                <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                                <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
                            </ul>
                        </li>
                        <li><span>More pages</span>
                            <ul>
                                <li><a href="careers.html" title="">Careers</a></li>
                                <li><a href="career-detail.html" title="">Career Detail</a></li>
                                <li><a href="404.html" title="">404 error page</a></li>
                                <li><a href="404-2.html" title="">404 Style2</a></li>
                                <li><a href="faq.html" title="">faq's page</a></li>
                                <li><a href="insights.html" title="">insights</a></li>
                                <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html" title="">about</a></li>
                        <li><a href="about-company.html" title="">About Us2</a></li>
                        <li><a href="contact.html" title="">contact</a></li>
                        <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                        <li><a href="widgets.html" title="">Widgts</a></li>
                    </ul>
                </nav>
                <nav id="shoppingbag">
                    <div>
                        <div class="">
                            <form method="post">
                                <div class="setting-row">
                                    <span>use night mode</span>
                                    <input type="checkbox" id="nightmode"/>
                                    <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Notifications</span>
                                    <input type="checkbox" id="switch2"/>
                                    <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Notification sound</span>
                                    <input type="checkbox" id="switch3"/>
                                    <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>My profile</span>
                                    <input type="checkbox" id="switch4"/>
                                    <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Show profile</span>
                                    <input type="checkbox" id="switch5"/>
                                    <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                            <h4 class="panel-title">Account Setting</h4>
                            <form method="post">
                                <div class="setting-row">
                                    <span>Sub users</span>
                                    <input type="checkbox" id="switch6" />
                                    <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>personal account</span>
                                    <input type="checkbox" id="switch7" />
                                    <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Business account</span>
                                    <input type="checkbox" id="switch8" />
                                    <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Show me online</span>
                                    <input type="checkbox" id="switch9" />
                                    <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Delete history</span>
                                    <input type="checkbox" id="switch10" />
                                    <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Expose author name</span>
                                    <input type="checkbox" id="switch11" />
                                    <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div><!-- responsive header -->

            <div class="topbar stick">
                <div class="logo">
                    <a title="" href="{{url('/home')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>

                <div class="top-area">
                    <ul class="main-menu">
                        <li>
                            <a href="#" title="">Home</a>
                            <ul>
                                <li><a href="index-2.html" title="">Home Social</a></li>
                                <li><a href="index2.html" title="">Home Social 2</a></li>
                                <li><a href="index-company.html" title="">Home Company</a></li>
                                <li><a href="landing.html" title="">Login page</a></li>
                                <li><a href="logout.html" title="">Logout Page</a></li>
                                <li><a href="newsfeed.html" title="">news feed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="">timeline</a>
                            <ul>
                                <li><a href="time-line.html" title="">timeline</a></li>
                                <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                                <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                                <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                                <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                                <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                                <li><a href="fav-page.html" title="">favourit page</a></li>
                                <li><a href="groups.html" title="">groups page</a></li>
                                <li><a href="page-likers.html" title="">Likes page</a></li>
                                <li><a href="people-nearby.html" title="">people nearby</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="">account settings</a>
                            <ul>
                                <li><a href="create-fav-page.html" title="">create fav page</a></li>
                                <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                                <li><a href="edit-interest.html" title="">edit-interest</a></li>
                                <li><a href="edit-password.html" title="">edit-password</a></li>
                                <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                                <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                                <li><a href="messages.html" title="">message box</a></li>
                                <li><a href="inbox.html" title="">Inbox</a></li>
                                <li><a href="notifications.html" title="">notifications page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="">more pages</a>
                            <ul>
                                <li><a href="404.html" title="">404 error page</a></li>
                                <li><a href="about.html" title="">about</a></li>
                                <li><a href="contact.html" title="">contact</a></li>
                                <li><a href="faq.html" title="">faq's page</a></li>
                                <li><a href="insights.html" title="">insights</a></li>
                                <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                                <li><a href="widgets.html" title="">Widgts</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="setting-area">
                        <li>
                            <a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
                            <div class="searched">
                                <form method="post" class="form-search">
                                    <input type="text" placeholder="Search Friend">
                                    <button data-ripple><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </li>
                        <li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                        <li>
                            <a href="#" title="Notification" data-ripple="">
                                <i class="ti-bell"></i><span>20</span>
                            </a>
                            <div class="dropdowns">
                                <span>4 New Notifications</span>
                                <ul class="drops-menu">
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-1.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>sarah Loren</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag green">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-2.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Jhon doe</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag red">Reply</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-3.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Andrew</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag blue">Unseen</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-4.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Tom cruse</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-5.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Amy</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                </ul>
                                <a href="notifications.html" title="" class="more-mesg">view more</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                            <div class="dropdowns">
                                <span>5 New Messages</span>
                                <ul class="drops-menu">
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-1.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>sarah Loren</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag green">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-2.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Jhon doe</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag red">Reply</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-3.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Andrew</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag blue">Unseen</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-4.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Tom cruse</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="{{asset('images/resources/thumb-5.jpg')}}" alt="">
                                            <div class="mesg-meta">
                                                <h6>Amy</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                </ul>
                                <a href="messages.html" title="" class="more-mesg">view more</a>
                            </div>
                        </li>
                        <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                            <div class="dropdowns languages">
                                <a href="#" title=""><i class="ti-check"></i>English</a>
                                <a href="#" title="">Arabic</a>
                                <a href="#" title="">Dutch</a>
                                <a href="#" title="">French</a>
                            </div>
                        </li>
                    </ul>
                    <div class="user-img">
                        <img src="{{asset('images/resources/admin.jpg')}}" alt="">
                        <span class="status f-online"></span>
                        <div class="user-setting">
                            <a href="#" title=""><i class="ti-user"></i> view profile</a>
                            <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                            <a href="#" title=""><i class="ti-target"></i>activity log</a>
                            <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                            <a href="{{ route('logout') }}" title="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!--<span class="ti-menu main-menu" data-ripple=""></span>-->
                </div>
            </div><!-- topbar -->

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="index-2.html" title=""><img src="{{asset('images/logo.png')}}" alt=""></a>
                                </div>
                                <p>
                                    The trio took this simple idea and built it into the world’s leading carpooling platform.
                                </p>
                            </div>
                            <ul class="location">
                                <li>
                                    <i class="ti-map-alt"></i>
                                    <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+1-56-346 345</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>follow</h4></div>
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                                <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>Navigate</h4></div>
                            <ul class="list-style">
                                <li><a href="about.html" title="">about us</a></li>
                                <li><a href="contact.html" title="">contact us</a></li>
                                <li><a href="terms.html" title="">terms & Conditions</a></li>
                                <li><a href="#" title="">RSS syndication</a></li>
                                <li><a href="sitemap.html" title="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>useful links</h4></div>
                            <ul class="list-style">
                                <li><a href="#" title="">leasing</a></li>
                                <li><a href="#" title="">submit route</a></li>
                                <li><a href="#" title="">how does it work?</a></li>
                                <li><a href="#" title="">agent listings</a></li>
                                <li><a href="#" title="">view All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>download apps</h4></div>
                            <ul class="colla-apps">
                                <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                        <i><img src="{{asset('images/credit-cards.png')}}" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1"/>
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel -->

    <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="js/main.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/map-init.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    </div>
</body>
</html>
