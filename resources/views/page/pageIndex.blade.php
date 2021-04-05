@Extends('page')
@section('page_content')

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
                    @foreach($endSlide as $slide)
                         <a href="{{$slide->link}}">  
                        <div class="text-box">
                            <div class="categories">
                                <h5>{{$slide->name}}</h5>
                                <h5 class="--red">Maccalan</h5>
                            </div>
                            <h2 class="title">{{$slide->title}}</h2>
                            <p>{{$slide->description}}</p>
                            <a href="{{$slide->link}}" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                        </div>
                    </a>
                    @endforeach
                    
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
                           @foreach($contents as $content)
                           <div class="col-md-6">
                              <div class="card--vertical">
                                    <a href="{{$content->link}}">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="{{asset('public/backend/images/posts/'.$content->img)}}" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5 class="catetogry">{{$content->name}}</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">{{$content->title}}</h2>
                                                <a href="{{$content->link}}" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                           </div>
                          @endforeach
                    </div>
                    <div id="loadding" class="hidden">
                        LOADDING ...
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
                            <div class="swiper-slide">
                                <div class="card--vertical">
                                    <a href="/ ">
                                        <div class="inner">
                                            <div class="card-thumnails">
                                                <img src="img/card-thumbails.jpg" alt="Add Title Of Post Here">
                                            </div>
                                            <div class="card-content">
                                                <div class="categories">
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
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
                                                    <h5 class="catetogry">Dream Machines</h5>                                               </h3>
                                                    <h5 class="brand">Maccalan</h5>                                               </h3>
                                                </div>
                                                <h2 class="title">Ex eliqui doluptas est, cuptatem duciisitiam es dolorep erion-
                                                    seque vent quiam qui necabo. Et eat.
                                                    Em earciis dolor aut etur, quae. Et pro qui cum eosam volori</h2>
                                                <a href="/" class="btn--learn-more">Xem thêm<meta http-equiv="X-UA-Compatible" content="ie=edge"></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                           </div>
                        </div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            </div>
        </section>
 
@endsection