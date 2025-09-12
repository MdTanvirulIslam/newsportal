<footer class="footer-new">
  <div class="container jagaran-container">
        <div class="row custom-row">
             <div class="col-lg-12 custom-padding">
                <div class="contact-details">
                    
                </div>
            </div>
            
        </div>
      
      
    <div class="row custom-row">
      <div class="col-lg-4 custom-padding">
        <div class="contact-details">
          <h3> <span> আমাদের পরিচিতি </span>  </h3>
          <!--<p>সম্পাদক ও প্রকাশক : {{$gs->sompadok}}</p>-->
          <!--<p>নির্বাহী সম্পাদক : {{$gs->nirbahi_sompadok}}</p>-->
          <!--<p>বার্তা সম্পাদক : {{$gs->barta_sompadok}}</p>-->

<p> প্রকাশক: ফাতেহা ভূঁইয়া প্রভা, </p> 
<p> প্রধান সম্পাদক: শরফুদ্দিন ভূঁইয়া রাব্বি, </p> 
<p> সম্পাদক: রেজাউল করিম বাবুল,</p> 
<p> ব্যবস্থাপনা সম্পাদক: মুহাম্মদ আলমগীর হোসাইন,</p> 


        </div><!--/.contact-details-->
        <ul class="social-icon footer-icon footer-icon-2">

		@foreach ($social_links as $social_link)
          <li><a target="_blank" href="{{ $social_link->link}}" class="{{$social_link->name}}"><i class="{{$social_link->icon}}"></i></a></li>
         @endforeach
        </ul><!--/.social-icon-->
      </div><!--/.col-lg-4-->
      <div class="col-lg-4 custom-padding">
        <div class="contact-details">
          <h3> <span> বার্তা বিভাগ: </span>  </h3>
          <ul class="footer-address-ul">
            <!--<li>-->
            <!--  <span class="size-w-3">-->
            <!--    <i class="fa fa-home" aria-hidden="true"></i>-->
            <!--  </span>-->
            <!--  <span class="size-w-4">-->
              <!--{{$gs->address}}-->
            <!--  </span>-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span class="size-w-3">-->
            <!--    <i class="fa fa-phone" aria-hidden="true"></i>-->
            <!--  </span>-->
            <!--  <span class="size-w-4">-->
            <!--মোবাইল: ০১৯৭২-৭৭৮২৪৪-->
            <!--  </span>-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span class="size-w-3">-->
            <!--    <i class="fa fa-phone" aria-hidden="true"></i>-->
            <!--  </span>-->
            <!--  <span class="size-w-4">-->
            <!--  {{$gs->mobile}}-->
            <!--  </span>-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span class="size-w-3">-->
            <!--    <i class="fa fa-envelope-o" aria-hidden="true"></i>-->
            <!--  </span>-->
            <!--  <span class="size-w-4">-->
            <!--    {{$gs->email_address}}-->
            <!--  </span>-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span class="size-w-3">-->
            <!--    <i class="fa fa-internet-explorer" aria-hidden="true"></i>-->
            <!--  </span>-->
            <!--  <span class="size-w-4">-->
            <!--    {{ route('frontend.index')}}-->
            <!--  </span>-->
            <!--</li>-->
          </ul>
        </div><!--/.contact-details-->
      </div><!--/.col-md-4-->


      <div class="col-lg-4 custom-padding">
        <div class="contact-details">
          <h3> <span>  সম্পাদকীয় ও বাণিজ্যিক কার্যালয়:  </span>  </h3>
          <ul class="footer-address-ul">
            <li>
              <span class="size-w-3">
                <i class="fa fa-home" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
            ১২ পুরানা পল্টন, এল. মল্লিক কমপ্লেক্স (৩য় তলা), ঢাকা-১০০০। বিসমিল্লাহ প্রিন্টিং প্রেস, ফকিরাপুল ১ম গলি, ঢাকা-১০০০ থেকে প্রকাশক কর্তৃক প্রকাশিত। 
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
                <span class="size-w-4">
             ফোন: ০২-৯৫১৫৮৬৩
  </span>
  <span class="size-w-4">
            মোবাইল: ০১৯৭২-৭৭৮২৪৪
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
               <!--{{$gs->email_address}}--> dailygonojagoron1@gmail.com
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-internet-explorer" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
                {{ route('frontend.index')}}
              </span>
            </li>
          </ul>
        </div><!--/.contact-details-->
      </div><!--/.col-md-4-->

    </div><!--/.row-->
  </div><!--/.container-->
</footer><!--/.footer-new-->
<div class="footer">
  <div class="container custom-container">
    <div class="row custom-row footer-bottom-row">
        <div class="col-md-4 footer-copy-text">

        </div>
        <div class="col-md-8 footer-copy-text">
          <p>{{$gs->copyright_text}}</p>
        </div>
        <div class="col-md-4">
          <div class="design-link">

          </div>
        </div>
    </div><!--/.custom-row-->
  </div><!--/.custom-container-->
</div><!--/.footer-->
