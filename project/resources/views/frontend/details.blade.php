@php
    $seo=DB::table('seotools')->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$data->title}}</title>

    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="keywords" content="{{ $seo->meta_keys }}">
    <!-- Open Graph -->
    <meta property="og:title" content="{{ $data->title }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{asset('assets/images/post/'.$data->image_big)}}"/>
    <meta property="og:description" content="{{ Str::limit(strip_tags($data->description), 100) }}"/>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $data->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($data->description), 100) }}">
    <meta name="twitter:image" content="{{asset('assets/images/post/'.$data->image_big)}}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/'.$gs->favicon)}}" type="image/x-icon">

    @if ($default_font->font_value)
        <link href="https://fonts.googleapis.com/css?family={{ $default_font->font_value }}&display=swap"
              rel="stylesheet">
    @else
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    @endif
    <!--==== BASE CSS ====-->
    <link href="{{asset('assets/frontend/asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/asset/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/asset/css/menu.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/asset/css/owl.carousel.css')}}" rel="stylesheet">
    <!--==== CUSTOM CSS ====-->
    <link href="{{asset('assets/frontend/asset/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/asset/css/responsive.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/eror/css/style.css')}}"/>

    @if(DB::table('languages')->where('is_default','=',1)->first()->rtl == 1)
        <link rel="stylesheet" href="{{asset('assets/front/css/rtl/style.css')}}">
    @endif
    <link rel="stylesheet" id="color"
          href="{{ asset('assets/front/css/color.php?base_color='.str_replace('#','', $gs->theme_color).'&'.'footer_color='.str_replace('#','',$gs->footer_color).'&'.'copyright_color='.str_replace('#','',$gs->copyright_color)) }}">
    <link rel="stylesheet" id="color"
          href="{{ asset('assets/front/css/font.php?font_familly='.$default_font->font_family) }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @stack('css')
    {!!$gs->adsense_code!!}
    {!!$gs->adsense_code!!}
    {!! $seo->google_analytics !!}
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
<style>
    .main-logo {
        padding: 22px 0 20px 0;
    }

    @media only screen and (max-width: 767px) {
        .main-logo {
            padding: 10px 0 13px 0;
            text-align: center;
        }
    }

    .social-share-icons ul {
        list-style: none;
        padding: 0;
        margin: 5px;
        display: flex;
        gap: 2px;
    }

    .social-share-icons li {
        display: inline-block;
    }

    .social-share-icons a {
        width: 35px;
        height: 35px;
        background-color: #fbfbfb;
        /* light gray */
        color: #585858;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 4px;
        font-size: 20px;
        text-decoration: none;
        transition: background 0.3s, color 0.3s;
    }

    .social-share-icons a:hover {
        background-color: #007bff;
        color: white;
    }
</style>
<!--/========== START SCROLLUP ============-->
<div class="scrollup">
    <i aria-hidden="true" class="fa fa-chevron-up"></i>
</div><!--back-to-top-->
<!--/========== END SCROLLUP ============-->
<header>

    <script>
    setInterval(displayTimeAndDate, 1000);

    function displayTimeAndDate() {
        const timeNow = new Date();
        const gregorianDay = timeNow.getDate();
        const gregorianMonth = timeNow.getMonth() + 1; // January = 1
        const gregorianYear = timeNow.getFullYear();
        const weekDay = timeNow.getDay();

        // Bangla weekdays
        const weekDaysBangla = ["রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার"];
        const todayBangla = weekDaysBangla[weekDay];

        // Gregorian months in Bangla
        const monthsBangla = ["জানুয়ারি", "ফেব্রুয়ারি", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"];
        const monthBangla = monthsBangla[gregorianMonth - 1];

        // Bangla month names
        const banglaMonths = ["বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ", "পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র"];

        // Determine Bangla year
        let banglaYear = gregorianYear - 593;
        if (gregorianMonth < 4 || (gregorianMonth === 4 && gregorianDay < 14)) {
            banglaYear -= 1;
        }

        // Bangla month start dates (per Bangla Academy calendar)
        const banglaMonthStartDates = [
            { gMonth: 4, gDay: 14, bMonth: 0 },  // Boishakh
            { gMonth: 5, gDay: 15, bMonth: 1 },  // Joishtho
            { gMonth: 6, gDay: 15, bMonth: 2 },  // Asharh
            { gMonth: 7, gDay: 16, bMonth: 3 },  // Srabon
            { gMonth: 8, gDay: 17, bMonth: 4 },  // Bhadro
            { gMonth: 9, gDay: 17, bMonth: 5 },  // Ashwin
            { gMonth: 10, gDay: 18, bMonth: 6 }, // Kartik
            { gMonth: 11, gDay: 17, bMonth: 7 }, // Agrahayan
            { gMonth: 12, gDay: 16, bMonth: 8 }, // Poush
            { gMonth: 1, gDay: 15, bMonth: 9 },  // Magh
            { gMonth: 2, gDay: 14, bMonth: 10 }, // Falgun
            { gMonth: 3, gDay: 15, bMonth: 11 }  // Chaitro
        ];

        let banglaMonthIndex = 0;
        let banglaDay = gregorianDay;

        for (let i = 0; i < banglaMonthStartDates.length; i++) {
            const entry = banglaMonthStartDates[i];
            const nextEntry = banglaMonthStartDates[(i + 1) % 12];

            const thisStart = new Date(gregorianYear, entry.gMonth - 1, entry.gDay);
            const nextStart = new Date(
                nextEntry.gMonth < entry.gMonth ? gregorianYear + 1 : gregorianYear,
                nextEntry.gMonth - 1,
                nextEntry.gDay
            );

            if (timeNow >= thisStart && timeNow < nextStart) {
                banglaMonthIndex = entry.bMonth;
                banglaDay = Math.floor((timeNow - thisStart) / (1000 * 60 * 60 * 24)) + 1;
                break;
            }
        }

        // Leap year adjustment for Falgun
        if (banglaMonthIndex === 10) { // Falgun
            const isLeap = ((gregorianYear % 4 === 0 && gregorianYear % 100 !== 0) || (gregorianYear % 400 === 0));
            if (!isLeap && banglaDay > 29) banglaDay = 29;
        }

        // English to Bangla number converter
        function toBanglaDigits(input) {
            const chars = { '0': '০', '1': '১', '2': '২', '3': '৩', '4': '৪', '5': '৫', '6': '৬', '7': '৭', '8': '৮', '9': '৯' };
            return input.toString().replace(/\d/g, d => chars[d]);
        }

        const banglaMonth = banglaMonths[banglaMonthIndex];
        const gregorianDate = `${todayBangla}, ${toBanglaDigits(gregorianDay)} ${monthBangla} ${toBanglaDigits(gregorianYear)}`;
        const banglaDate = `${toBanglaDigits(banglaDay)} ${banglaMonth} ${toBanglaDigits(banglaYear)} বঙ্গাব্দ`;

        document.getElementById("Clock").innerHTML = `${gregorianDate} | ${banglaDate}`;
    }

    displayTimeAndDate();
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const shareLinks = document.querySelectorAll('.social-share-icons a');
            shareLinks.forEach(link => {
                link.setAttribute('target', '_blank');
                link.setAttribute('rel', 'noopener noreferrer');
            });
        });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Header Part-->
    @include('partial.front.header')
    <!-- Header Part End-->


    <div class="container custom-container">
        <div class="row custom-row">
            <div class="left-content-area details-left-content-area">
                <div class="col-lg-12 custom-padding">
                    <ol class="breadcrumb details-page-breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">{{$data->category->title}} </a></li>
                    </ol><!--/.details-page-breadcrumb-->
                    <div class="details-content">
                        <h3>{{$data->title}}</h3>

                        <hr>
                        <small class="small">


    <!--                        <img style="width: 50px;-->
    <!--height: 50px;-->
    <!--border-radius: 21px;float: left;margin-right: 9px;" class="img-fluid writer-image"-->
    <!--                             src="{{asset('assets/images/admin/'.$data->admin->photo)}}" alt="FavIcon">-->


                            <div class="writer-name">
                                <!--{{$data->admin->name}} <br>-->
                                নিউজ প্রকাশের তারিখ : {{$data->createdAt()}} ইং
                            </div>


                        </small>
                        <div class="social-share-icons">
                            {!! Share::page(
                                url()->current(),
                                'Check out this article!'
                            )->facebook()->twitter()->linkedin()->telegram()->whatsapp()->reddit(); !!}
                        </div>
                        <img class="img-fluid" src="{{asset('assets/images/post/'.$data->image_big)}}"
                             alt="ছবির ক্যাপশন: {{$data->image_caption}}">
                        {!!$gs->section_ten_point_two_ads!!}
                        @if ($data->post_type == 'audio')
                            <p style="text-align: center;"><b>&nbsp;অডিও&nbsp; ফাইল</b></p>
                            <audio controls="" style="width:100%">
                                <source src="{{asset('assets/audios/'.$data->audio)}}" type="audio/mp3">
                            </audio>
                        @endif
                        <p style="text-align: justify;">{!! $data->description !!}</p>
                        <p style="text-align: justify;">{!! $data->video_embed !!}</p>

                        <p>
                        @php
                            $youtubeUrl = $data->video_link;
                            parse_str(parse_url($youtubeUrl, PHP_URL_QUERY), $queryParams);
                            $videoId = $queryParams['v'] ?? null;
                            $embedUrl = $videoId ? "https://www.youtube.com/embed/$videoId" : null;
                        @endphp

                        @if($embedUrl)
                            <div class="video-container" style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
                                <iframe src="{{ $embedUrl }}" frameborder="0" allowfullscreen
                                        style="position:absolute; top:0; left:0; width:100%; height:100%;">
                                </iframe>
                            </div>
                            @endif

                        </p>

                        <ul class="tag-ul">
                            <li> সংবাদটি প্রিন্ট করুন:</li>
                            <li><a href="{{ URL::to('print/'.$data->id.'/'.$data->slug)}}">প্রিন্ট করুন</a></li>
                        </ul>
                    </div><!--/.details-content-->
<!-- DC-new-Ads Section 10.2-->
<div class="dc-feature-news-wrapper bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12  custom-padding">
				{!!$gs->section_ten_point_two_ads!!}
			</div>
		</div>
	</div>
</div>
<!-- DC-new-Ads Section 10.2-->
                    <div class="facebook-comment-box">
                        <h2 class="fb-h2" style="">আপনার মতামত লিখুন :</h2>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v20.0&appId=1716117305495236"
                                nonce="OKS9Fdbx"></script>
                        <div class="fb-comments" data-href="{{ URL::to('details/'.$data->id.'/'.$data->slug)}}"
                             data-width="700" data-numposts="10">
                        </div>
                    </div><!--/.facebook-comment-box-->
                </div><!--/.col-lg-12-->
            </div><!--/.left-content-area-->



            <div class="right-content-area details-right-content-area">
                <div class="details-tab-container">
                    @php
                        $latestpost=DB::table('posts')->orderBy('id','DESC')->limit(20)->get();
                    @endphp
                    <ul class="nav nav-pills side-tab-main" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">সর্বশেষ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false">জনপ্রিয়</a>
                        </li>
                    </ul>

                    <div class="tab-content alokitonews-tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="least-news">
                                <ul class="least-news-ul detail-least-news-ul">


                                    @foreach($latestpost as $row)
                                        <li><a href="{{ route('frontend.details',[$row->id,$row->slug])}}">
                                                <div class="least-news-left">
                                                    <img src="{{asset('assets/images/post/'.$row->image_big)}}"
                                                         class="img-fluid" alt="{{ $row->title}}"
                                                         title="{{ $row->title}}"/>
                                                </div>
                                                <div class="least-news-right">
                                                    <h3>{{ $row->title}}</h3>
                                                </div>
                                            </a></li>
                                    @endforeach


                                </ul><!--/.least-news-ul-->
                            </div><!--/.least-news-->
                        </div><!--/.tab-pane-->

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="least-news">
                                <ul class="least-news-ul detail-least-news-ul">

                                    @php
                                        $favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->skip(5)->limit(20)->get();
                                    @endphp

                                    @foreach($favourite as $row)
                                        <li><a href="{{ route('frontend.details',[$row->id,$row->slug])}}">
                                                <div class="least-news-left">
                                                    <img src="{{asset('assets/images/post/'.$row->image_big)}}"
                                                         class="img-fluid" alt="{{ $row->title}}"
                                                         title="{{ $row->title}}"/>
                                                </div>
                                                <div class="least-news-right">
                                                    <h3>{{ $row->title}}</h3>
                                                </div>
                                            </a></li>
                                    @endforeach


                                </ul><!--/.least-news-ul-->
                            </div><!--/.least-news-->
                        </div><!--/.tab-pane-->

                    </div><!--/.tab-content-->
                </div><!--/.details-tab-container-->
                <div class="col-lg-12 custom-padding">
                    <div class="footer-facebook-like mt-2 mb-2">

                        <div class="fb-page" data-href="https://www.facebook.com/{{$gs->facebookpage_id}}" data-tabs="timeline"
                             data-width="418" data-height="300" data-small-header="false" data-adapt-container-width="false"
                             data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/{{$gs->facebookpage_id}}" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/{{$gs->facebookpage_id}}">{{ $gs->title }}</a>
                            </blockquote>
                        </div>
                    </div>
                    <div class="details-page-side-banner">
                         {!!$gs->sidebar_ads!!}
                    </div><!--/.details-page-side-banner-->

                    <div class="details-right-news-heading">
                        @php
                            $favourite45=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(6)->get();
                        @endphp
                        <h2>আলোচিত শীর্ষ ১০ সংবাদ </h2>
                    </div><!--/.details-right-news-heading-->
                    <div class="row custom-row">


                        @foreach($favourite45 as $row)
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="details-news-single">
                                    <a href="{{ route('frontend.details',[$row->id,$row->slug])}}">
                                        <img src="{{asset('assets/images/post/'.$row->image_big)}}" class="img-fluid"
                                             alt="{{ $row->title}}" title="{{ $row->title}}"/>
                                        <div class="details-news-single-text">
                                            <span></span>
                                            <h3>{{ $row->title}}</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div><!--/.row-->
					<div class="details-page-side-banner">
                        {!!$gs->sidebar1_ads!!}
                    </div><!--/.details-page-side-banner-->
                </div><!--/.details-right-news-->
            </div><!--/.col-lg-12-->
        </div><!--/.right-content-area-->
    </div><!--/.row-->
    <div class="container mb-5 mt-3">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="related-section">
                    <div class="related-new-cat">
                        <span><a href="#"> এ জাতীয় আরো খবর </a></span>
                    </div>
                    <div class="single-white">
                        <div class="related-news-content2"> <!--Related News start-->
                            <div class="row">
                                @foreach ($related_posts as $slider)
                                    <div class="col-md-3">
                                        <div class=""> <!--Related Wrpp start-->
                                            <div class="">
                                                <img class="img-fluid lazyload"
                                                     src="{{asset('assets/images/post/'.$slider->image_big)}}"
                                                     data-src="{{asset('assets/images/post/'.$slider->image_big)}}"
                                                     alt="{{strlen($slider->title)>40 ? mb_substr($slider->title,0,40,"utf-8") : $slider->title}}"
                                                     title="{{strlen($slider->title)>40 ? mb_substr($slider->title,0,40,"utf-8") : $slider->title}}">


                                            </div>
                                            <h4 class="relatedTitle2"><a
                                                    href="{{ route('frontend.details',[$slider->id,$slider->slug])}}">{{strlen($slider->title)>40 ? mb_substr($slider->title,0,40,"utf-8") : $slider->title}}</a>
                                            </h4>

                                        </div> <!--Related Wrpp End-->
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->


    <!-- Footer Area Start -->
    @include('partial.front.footer')
    <!-- Footer Area End -->


    <!--===== JAVASCRIPT FILES =====-->
    <script src="{{asset('assets/frontend/asset/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/menu.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/jquery-stick.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/custom.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/jquery.marquee.min.js')}}"></script>
    <script src="{{asset('assets/frontend/asset/js/jquery.pause.js')}}"></script>

    <div id='fb-root'/>
    <script type='text/javascript'>
        //<![CDATA[
        window.fbAsyncInit = function () {
            FB.init({
                appId: 'FB APP ID',
                status: true, // check login status
                cookie: true, // enable cookies
                xfbml: true // parse XFBML
            });
        };
        (function () {
            var e = document.createElement('script');
            e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
            e.async = true;
            document.getElementById('fb-root').appendChild(e);
        }());
        //]]>
    </script>


    <script>
        //get getSubCatList Bangla
        $(function () {
            /*-------------------------------------
            jQuery Marquee
            -------------------------------------*/
            $('.marquee').marquee({
                pauseOnHover: true,
                duration: 20000
            });

            $('.marquee-breaking').marquee({
                pauseOnHover: true,
                duration: 25000
            });

        });
        //to move active class
        $('#home').addClass('active')
    </script>
</body>

</html>
