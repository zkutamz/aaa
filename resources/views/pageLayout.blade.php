<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Robb Report Vietnam</title>
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
            src: url('fonts/ArnhemFinePro-Normal.woff2') format('woff2'),
                url('fonts/ArnhemFinePro-Normal.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'fbold';
            src: url('fonts/ArnhemFinePro-Bold.woff2') format('woff2'),
                url('fonts/ArnhemFinePro-Bold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'fboldi';
            src: url('fonts/ArnhemFinePro-BoldItalic.woff2') format('woff2'),
                url('fonts/ArnhemFinePro-BoldItalic.woff') format('woff');
            font-weight: bold;
            font-style: italic;
            font-display: fallback;
        }

        @font-face {
            font-family: 'fitalic';
            src: url('fonts/ArnhemFinePro-NormalItalic.woff2') format('woff2'),
                url('fonts/ArnhemFinePro-NormalItalic.woff') format('woff');
            font-weight: normal;
            font-style: italic;
            font-display: fallback;
        }

        @font-face {
            font-family: 'blme';
            src: url('fonts/Barlow-Medium.woff2') format('woff2'),
                url('fonts/Barlow-Medium.woff') format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'blre';
            src: url('fonts/Barlow-Regular.woff2') format('woff2'),
                url('fonts/Barlow-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: fallback;
        }
        #loadding {color:red; font-size: 20px; font-weight: bold; text-align: center}
            .item {height: 500px; border: solid 2px blue; background: #CCCCCC; 
                  line-height: 500px; color: blue; text-align: center; font-weight: bold; margin: 20px 0px;}
            .hidden {display: none}
    </style>
</head>

<body>
    <header>
        <div class="header__content">
            <div class="header__content-top">
                <h2>Longform</h2>
            </div>
            <div class="container">
                <div class="head_mobile logo">
                    <a href="https://www.robbreport.com.vn/">
                        <img src="{{asset('public/fontend/img/RR_LogoSG.png')}}" alt="RobbReport VietNam">
                    </a>
                    <div id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo__content">
                        <ul>
                            <li><a href="https://www.robbreport.com.vn/best-of-the-best/">Best Of The Best</a></li>
                            <li><a href="https://www.robbreport.com.vn/package/">Ultimate Gift Guide</a></li>
                            <li><a href="https://www.robbreport.com.vn/video/">Videos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="desktop-nav">
                <div class="container">
                   <div class="desktop-nav__content">
                        <div class="nav-left">
                            <ul>
                                <li>
                                    <a href="https://www.robbreport.com.vn/vehicles/">Vehicles</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href=" / ">Land
                                                <img src="{{asset('public/fontend/img/card-thumbails.jpg')}}" alt="Content of Picture">
                                            </a>
                                        </li>
                                        <li>
                                            <a href=" / ">Air
                                                <img src="{{asset('public/fontend/img/card-thumbails.jpg')}}" alt="Content of Picture">
                                            </a>
                                        </li>
                                        <li>
                                            <a href=" / ">Sea
                                                <img src="{{asset('public/fontend/img/card-thumbails.jpg')}}" alt="Content of Picture">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://www.robbreport.com.vn/watches-jewellery/">Watches & Jewellery</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href=" / ">Watches
                                                <img src="{{asset('public/fontend/img/card-thumbails.jpg')}}" alt="Content of Picture">
                                            </a>
                                        </li>
                                        <li>
                                            <a href=" / ">Jewellery
                                                <img src="{{asset('public/fontend/img/card-thumbails.jpg')}}" alt="Content of Picture">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://www.robbreport.com.vn/lifestyle/">LifeStyle</a></li>
                                <li><a href="https://www.robbreport.com.vn/style/">Style</a></li>
                                <li><a href="https://www.robbreport.com.vn/space/">Spaces</a></li>
                                <li><a href="https://www.robbreport.com.vn/money/">Money</a></li>
                                <li><a href="https://www.robbreport.com.vn/robb-society/">Robb Society</a></li>
                            </ul>
                        </div>
                        <div class="nav-right">
                            <form action="" method="post">
                                <label for="search" hidden></label>
                                <input type="text" name="search" placeholder="SEARCH">
                                <button type="submit"><img src="{{asset('public/fontend/img/search.svg')}}" alt=""></button>
                            </form>
                            <div class="social-group">
                                <a href="https://www.facebook.com/robbreportvietnam/" class="social-item">
                                    <img src="{{asset('public/fontend/img/facebook.svg')}}" alt="">
                                </a>
                                <a href="https://www.instagram.com/robbreport_vietnam/" class="social-item">
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
                    <a href="https://www.robbreport.com.vn/vehicles/">Vehicles</a>
                    <div><img src="{{asset('public/fontend/img/drop-down.svg')}}" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Land</a></li>
                    <li><a href=" / ">Air</a></li>
                    <li><a href=" / ">Sea</a></li>
                </ul>
            </li>
            <li>
                <div class="inner">
                    <a href="https://www.robbreport.com.vn/watches-jewellery/">Watches & Jewellery</a>
                    <div><img src="{{asset('public/fontend/img/drop-down.svg')}}" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Watches</a></li>
                    <li><a href=" / ">Jewellery</a></li>
                </ul>
            </li>
            <li>
                <div class="inner">
                    <a href="https://www.robbreport.com.vn/lifestyle/">LifeStyle</a>
                    <div><img src="{{asset('public/fontend/img/drop-down.svg')}}" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Arts</a></li>
                    <li><a href=" / ">Savour</a></li>
                    <li><a href=" / ">Travel</a></li>
                </ul>
            </li>
            <li><a href="https://www.robbreport.com.vn/style/">Style</a></li>
            <li>
                <div class="inner">
                    <a href="https://www.robbreport.com.vn/space/">Spaces</a>
                    <div><img src="{{asset('public/fontend/img/drop-down.svg')}}" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Interious</a></li>
                    <li><a href=" / ">Real Estate</a></li>
                </ul>
            </li>
            <li><a href="https://www.robbreport.com.vn/money/">Money</a></li>
            <li>
                <div class="inner">
                    <a href="https://www.robbreport.com.vn/robb-society/">Robb Society</a>
                    <div><img src="{{asset('public/fontend/img/drop-down.svg')}}" alt=""></div>
                </div>
                <ul class="sub-menu">
                    <li><a href=" / ">Event</a></li>
                    <li><a href=" / ">People</a></li>
                    <li><a href=" / ">Columnist</a></li>
                </ul>
            </li>
            <li><a href="https://www.robbreport.com.vn/best-of-the-best/">Best Of The Best</a></li>
            <li><a href="https://www.robbreport.com.vn/package/">Ultimate Gift Guide</a></li>
            <li><a href="https://www.robbreport.com.vn/video/">Videos</a></li>
            <li class="social-group">
                <a href="https://www.facebook.com/robbreportvietnam/" class="social-item">
                    <img src="{{asset('public/fontend/img/facebook.svg')}}" alt="">
                </a>
                <a href="https://www.instagram.com/robbreport_vietnam/" class="social-item">
                    <img src="{{asset('public/fontend/img/instagram.svg')}}" alt="">
                </a>
            </li>
        </ul>
    </nav>
    
      
       <main class="home">
                
        <section class="slider">
          <div class="container">
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <img src="{{asset('public/backend/images/posts/'.$firstSlide->img)}}" alt="{{$firstSlide->name}} | Maccalan">
                        </div>

                        @foreach($endSlide as $slide)
                        <div class="swiper-slide">
                            <img src="{{asset('public/backend/images/posts/'.$slide->img)}}" alt="{{$slide->name}} | Maccalan">
                        </div>
                        @endforeach
                      
                        
                    </div>
                   
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
                <div class="swiper__content">
                    <a href="{{$firstSlide->link}}">  
                        <div class="text-box">
                            <div class="categories">
                                <h5>{{$firstSlide->name}}</h5>
                                <h5 class="--red">Maccalan</h5>
                            </div>
                            <h2 class="title">{{$firstSlide->title}}</h2>
                            <p>{{$firstSlide->description}}</p>
                            <a href="{{$firstSlide->link}}" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                        </div>
                    </a>
                    @if($endSlide)
                    @foreach($endSlide as $slide)
                         <a href="{{$slide->link}}">  
                        <div class="text-box">
                            <div class="categories">
                                <h5>{{$slide->name}}</h5>
                                <h5 class="--red">{{$slide->brand_name}}</h5>
                            </div>
                            <h2 class="title">{{$slide->title}}</h2>
                            <p>{{$slide->description}}</p>
                            <a href="{{$slide->link}}" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                        </div>
                    </a>
                    @endforeach
                    @endif
                    
                </div>
            </div>
          </div>
        </section>
        <section class="recommend pd">
            <div class="container">
                <div class="recommend__content">
                    <h2 class="title-main --has-line">
                        You might also like
                    </h2>
                    <div class="main-content">
                       <div class="row">
                           @foreach($youMightAlsoLike as $post)
                           <div class="col-md-6">
                              <div class="card--vertical">
                                    <a href="{{$post->link}}">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="{{asset('public/backend/images/posts/'.$post->img)}}" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5 class="catetogry">{{$post->name}}</h5>                                               </h3>
                                                    <h5 class="brand">{{$post->brand_name}}</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">{{$post->title}}</h2>
                                                <a href="{{$post->link}}" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                           </div>
                          @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="stories">
            <div class="container">
                <h2 class="title-main --has-line">More Stories</h2>
                <div class="stories__carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                         @foreach($moreStories as $moreStory)
                            <div class="swiper-slide">
                                <div class="card--vertical">
                                    <a href="{{$moreStory->link}}">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="{{asset('public/backend/images/posts/'.$moreStory->img)}}" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5 class="catetogry">{{$moreStory->name}}</h5>                                               </h3>
                                                    <h5 class="brand">{{$moreStory->brand_name}}</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">{{$moreStory->title}}</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                           </div>
                           @endforeach
                        </div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="footer__top">
            <div class="container">
                <div class="inner">
                    <h2 class="title"> >>Discover more in <a href="https://www.robbreport.com.vn/">Robbreport.com.vn</a></h2>
                    <div class="content">
                        <h3>Phiên bản thử nghiệm</h3>
                        <h3>Công ty cổ phần Indochine Media Ventures Việt Nam</h3>
                        <h3>GCNĐT số: 411032000105</h3>
                        <div class="contact">
                            <p>Địa chỉ liên hệ: Biệt thự số A2.02 Saigon Pearl, 92 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, TP Hồ Chí Minh.</p>
                            <p>Email: info@indochinemedia.com</p>
                        </div>
                        <img src="{{asset('public/fontend/img/bct.png')}}" alt="Bộ công thương">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="inner">
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
                        <li><a href=" / ">
                            <svg fill="#FFF" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"/><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"/></svg>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{asset('public/fontend/dest/jsmain.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/fontend/js/main.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('public/fontend/js/ajax.js')}}"></script> -->
</body>

</html>
