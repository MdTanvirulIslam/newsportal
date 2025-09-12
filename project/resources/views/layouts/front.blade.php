@php
	$seo=DB::table('seotools')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	@if ($gs->title)
	<title> {{ $gs->title }}</title>
	@endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="keywords" content="{{ $seo->meta_keys }}">
    <meta property="og:title" content="{{ $gs->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:URL" content="{{route('frontend.index')}}" />
    <meta property="og:image" content="{{asset('assets/images/logo/'.$gs->og_images)}} />
    <meta property="og:description" content="{{ $seo->meta_description }}" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/'.$gs->favicon)}}" type="image/x-icon">

	@if ($default_font->font_value)
		<link href="https://fonts.googleapis.com/css?family={{ $default_font->font_value }}&display=swap" rel="stylesheet">
	@else
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	@endif
  <!--==== BASE CSS ====-->
  <link href="{{asset('assets/frontend/asset/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/frontend/asset/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!--<link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome.css')}}">-->
  <link href="{{asset('assets/frontend/asset/css/menu.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/frontend/asset/css/owl.carousel.css')}}" rel="stylesheet">
  <!--==== CUSTOM CSS ====-->
  <link href="{{asset('assets/frontend/asset/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/asset/css/responsive.css')}}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/eror/css/style.css')}}" />

	@if(DB::table('languages')->where('is_default','=',1)->first()->rtl == 1)
		<link rel="stylesheet" href="{{asset('assets/front/css/rtl/style.css')}}">
	@endif
	<link rel="stylesheet" id="color" href="{{ asset('assets/front/css/color.php?base_color='.str_replace('#','', $gs->theme_color).'&'.'footer_color='.str_replace('#','',$gs->footer_color).'&'.'copyright_color='.str_replace('#','',$gs->copyright_color)) }}">
	<link rel="stylesheet" id="color" href="{{ asset('assets/front/css/font.php?font_familly='.$default_font->font_family) }}">
    @stack('css')
    {!!$gs->adsense_code!!}
	 {!!$gs->adsense_code!!}
	{!! $seo->google_analytics !!}
</head>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
  <style>
.main-logo {padding: 22px 0 20px 0;}
@media only screen and (max-width: 767px) {
  .main-logo {padding: 10px 0 13px 0;text-align: center;}
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

     <!-- Header Part-->
    @include('partial.front.header')
    <!-- Header Part End-->








     <!--Content of each page-->
    @yield('contents')
	<!--Content of each page end-->





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
window.fbAsyncInit = function() {
FB.init({
appId : 'FB APP ID',
status : true, // check login status
cookie : true, // enable cookies
xfbml : true // parse XFBML
});
};
(function() {
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
    <script>
        $(document).on('click', '.post-click', function () {
            let postId = $(this).data('id');

            $.ajax({
                url: '{{ route("post.click") }}',
                type: 'POST',
                data: {
                    post_id: postId,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.success) {
                        $('#click-count-' + postId).text(response.click_count);
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr) {
                    console.error('AJAX error:', xhr.responseText);
                }
            });
        });

    </script>
</body>

</html>
