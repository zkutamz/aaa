<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Grunt Project</title>
    <link rel="icon" href="https://www.vivosmartphone.vn/themes/vivo/favicon.ico">
    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <link rel="stylesheet" href="{{asset('public/fontend/dest/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/dest/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/dest/stylelibs.min.css')}}">
    <style>
        @font-face {
            font-family: 'fmain';
            src: url('public/fontend/fonts/ArnhemFinePro-Normal.woff2') format('woff2'),
                url('public/fontend/fonts/ArnhemFinePro-Normal.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'fbold';
            src: url('public/fontend/fonts/ArnhemFinePro-Bold.woff2') format('woff2'),
                url('public/fontend/fonts/ArnhemFinePro-Bold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'fboldi';
            src: url('public/fontend/fonts/ArnhemFinePro-BoldItalic.woff2') format('woff2'),
                url('public/fontend/fonts/ArnhemFinePro-BoldItalic.woff') format('woff');
            font-weight: bold;
            font-style: italic;
            font-display: fallback;
        }

        @font-face {
            font-family: 'fitalic';
            src: url('public/fontend/fonts/ArnhemFinePro-NormalItalic.woff2') format('woff2'),
                url('public/fontend/fonts/ArnhemFinePro-NormalItalic.woff') format('woff');
            font-weight: normal;
            font-style: italic;
            font-display: fallback;
        }

        @font-face {
            font-family: 'blme';
            src: url('public/fontend/fonts/Barlow-Medium.woff2') format('woff2'),
                url('public/fontend/fonts/Barlow-Medium.woff') format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'blre';
            src: url('public/fontend/fonts/Barlow-Regular.woff2') format('woff2'),
                url('public/fontend/fonts/Barlow-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: fallback;
        }


    </style>
</head>

<body>
    <header>
        <div class="header__content">
            <div class="container">
                <div class="head_mobile logo">
                    <img src="{{asset('public/fontend/img/RR_LogoSG.png')}}" alt="RobbReport VietNam">
                    <div id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo__content">
                        <ul>
                            <li><a href="/">Best Of The Best</a></li>
                            <li><a href="/">Ultimate Gift Guide</a></li>
                            <li><a href="/">Videos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           
            <nav class="desktop-nav">
                <div class="container">
                   <div class="desktop-nav__content">
                        <div class="nav-left">
                            <ul>
                                @foreach($categories as $category)
                                <li><a href=" / ">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="nav-right">
                            <form action="" method="post">
                                <label for="search" hidden></label>
                                <input type="text" name="search" placeholder="SEARCH">
                                <button type="submit"><img src="{{asset('public/fontend/img/search.svg')}}" alt=""></button>
                            </form>
                            <div class="social-group">
                                <a href=" / " class="social-item">
                                    <img src="{{asset('public/fontend/img/facebook.svg')}}" alt="">
                                </a>
                                <a href=" / " class="social-item">
                                    <img src="{{asset('public/fontend/img/instagram.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                   </div>
                </div>
            </nav>
        </div>
    </header>
    <nav class="mobile-nav">
        <ul class="menu">
            <li>
                <div class="inner">
                    <a href="">Vehicles</a>
                    <div><img src="img/drop-down.svg" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Land</a></li>
                    <li><a href=" / ">Air</a></li>
                    <li><a href=" / ">Sea</a></li>
                </ul>
            </li>
            <li>
                <div class="inner">
                    <a href="">Watches & Jewellery</a>
                    <div><img src="img/drop-down.svg" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Watches</a></li>
                    <li><a href=" / ">Jewellery</a></li>
                </ul>
            </li>
            <li>
                <div class="inner">
                    <a href="">LifeStyle</a>
                    <div><img src="img/drop-down.svg" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Arts</a></li>
                    <li><a href=" / ">Savour</a></li>
                    <li><a href=" / ">Travel</a></li>
                </ul>
            </li>
            <li><a href=" / ">Style</a></li>
            <li>
                <div class="inner">
                    <a href="">Spaces</a>
                    <div><img src="img/drop-down.svg" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Interious</a></li>
                    <li><a href=" / ">Real Estate</a></li>
                </ul>
            </li>
            <li><a href=" / ">Money</a></li>
            <li>
                <div class="inner">
                    <a href="">Robb Society</a>
                    <div><img src="img/drop-down.svg" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Event</a></li>
                    <li><a href=" / ">People</a></li>
                    <li><a href=" / ">Columnist</a></li>
                </ul>
            </li>
            <li><a href="/">Best Of The Best</a></li>
            <li><a href="/">Ultimate Gift Guide</a></li>
            <li><a href="/">Videos</a></li>
            <li class="social-group">
                <a href=" / " class="social-item">
                    <img src="{{asset('public/fontend/img/facebook.svg')}}" alt="">
                </a>
                <a href=" / " class="social-item">
                    <img src="{{asset('public/fontend/img/instagram.svg')}}" alt="">
                </a>
            </li>
        </ul>
    </nav>
    <main class="home">
        <section class="slider">
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/slider.jpg" alt="Dream MAchines | Maccalan">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/slider-2.jpg" alt="Dream MAchines | Maccalan">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/slider-3.jpg" alt="Dream MAchines | Maccalan">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
                <div class="swiper__content">
                    <a href=" / ">  
                        <div class="text-box">
                            <div class="categories">
                                <h5>Dream Machines</h5>
                                <h5 class="--red">Maccalan</h5>
                            </div>
                            <h2 class="title">Title longform article main story thum</h2>
                            <p>Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                seque vent quiam qui necabo. Et eat.
                                Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                        </div>
                    </a>
                    <a href=" / ">  
                        <div class="text-box">
                            <div class="categories">
                                <h5>Dream Machines</h5>
                                <h5 class="--red">Maccalan</h5>
                            </div>
                            <h2 class="title">Title longform thum 1</h2>
                            <p>Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                seque vent quiam qui necabo. Et eat.
                                Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                        </div>
                    </a>
                    <a href=" / ">  
                        <div class="text-box">
                            <div class="categories">
                                <h5>Dream Machines</h5>
                                <h5 class="--red">Maccalan</h5>
                            </div>
                            <h2 class="title">Title longform article thum 2</h2>
                            <p>Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                seque vent quiam qui necabo. Et eat.
                                Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="recommend pd">
            <div class="container">
                <div class="recommend__content">
                    <div class="row">
                        <div class="banner">
                            <h2 class="title-main">
                                You might also like
                            </h2>
                        </div>
                    </div>
                    <div class="main-content">
                       <div class="row">
                       @foreach($posts  as   $post)
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href="{{$post->link}}">
                                        <div class="card-thumnails">
                                            <img src="{{asset('public/backend/images/posts/'.$post->img)}}" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">{{$post->title}}</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           @endforeach
                           <!-- <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div> -->
                           <!-- <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="card--horizontal">
                                   <a href=" / ">
                                        <div class="card-thumnails">
                                            <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                        </div>
                                        <div class="card-content">
                                            <div class="categories">
                                                <h5>Dream Machines</h5>                                               </h3>
                                                <h5>Maccalan</h5>                                               </h3>
                                            </div>
                                            <h2 class="title">This is card content</h2>
                                            <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                            seque vent quiam qui necabo. Et eat.
                                            Em earciis dolor aut etur, qu,hjawfe abfeae. Et pro qui cum eosam volori</p>
                                        </div>
                                    </a>
                               </div>
                           </div> -->
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="stories">
            <div class="container">
                <h2 class="title-main">More Stories</h2>
                <div class="stories__carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card--vertical">
                                    <a href="/ ">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5>Dream Machines</h5>                                               </h3>
                                                    <h5>Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">This is card content</h2>
                                                <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                seque vent quiam qui necabo. Et eat.
                                                Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card--vertical">
                                    <a href="/ ">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5>Dream Machines</h5>                                               </h3>
                                                    <h5>Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">This is card content</h2>
                                                <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                seque vent quiam qui necabo. Et eat.
                                                Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card--vertical">
                                    <a href="/ ">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5>Dream Machines</h5>                                               </h3>
                                                    <h5>Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">This is card content</h2>
                                                <p class="content">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                seque vent quiam qui necabo. Et eat.eque vent quiam qui necabo. Et eat.
                                                Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="logo">
                <a href=" / ">
                    <img src="img/RR_LogoSG-white.png" alt="">
                </a>
            </div>
            <ul class="site-map">
                <li><a href=" / ">About Us</a></li>
                <li><a href=" / ">Contact Us</a></li>
                <li><a href=" / ">Advertise</a></li>
                <li><a href=" / ">Distribution</a></li>
            </ul>
            <ul class="social">
                <li>Follow us</li>
                <li><a href=" / "><svg viewBox="0 0 512 512"><path d="m512 256c0-141.4-114.6-256-256-256s-256 114.6-256 256 114.6 256 256 256c1.5 0 3 0 4.5-.1v-199.2h-55v-64.1h55v-47.2c0-54.7 33.4-84.5 82.2-84.5 23.4 0 43.5 1.7 49.3 2.5v57.2h-33.6c-26.5 0-31.7 12.6-31.7 31.1v40.8h63.5l-8.3 64.1h-55.2v189.5c107-30.7 185.3-129.2 185.3-246.1z"/></svg></a></li>
                <li><a href=" / "><img src="img/instagram.svg" alt=""></a></li>
            </ul>
        </div>
    </footer>
    <script type="text/javascript" src="{{asset('public/fontend/dest/jsmain.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/fontend/js/main.js')}}"></script>
</body>

</html>
