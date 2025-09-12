@extends('layouts.front')
@section('contents')




    <div class="container custom-container">
        <div class="row custom-row">
            <div class="left-content-area details-left-content-area">
                <div class="col-lg-12 custom-padding">

                    <ol class="breadcrumb details-page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="#">{{$data->title}}</a></li>
                    </ol><!--/.details-page-breadcrumb-->
                    <div class="category-page">
                        <div class="category-content">

                            {{-- Featured Post (first post) --}}
                            @if ($firstPost)
                                <div class="category-content-lead">
                                    <a href="{{ route('frontend.details', [$firstPost->id, $firstPost->slug]) }}"
                                       class="post-click" data-id="{{ $firstPost->id }}">
                                        <div class="category-content-lead-left">
                                            <img class="img-fluid"
                                                 src="{{ asset('assets/images/post/'.$firstPost->image_big) }}"
                                                 alt="{{ Str::limit($firstPost->title, 50) }}">
                                        </div>
                                        <div class="category-content-lead-right">
                                            <div class="category-content-lead-right-text">
                                                <h1>{{ Str::limit($firstPost->title, 50) }}</h1>
                                                <p>{{ $firstPost->short_description }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="category-content-lead">
                                    <a href="#">
                                        <div class="category-content-lead-left">
                                            <img class="img-fluid" src="{{ asset('assets/images/nopic.png') }}" alt="No Post">
                                        </div>
                                        <div class="category-content-lead-right">
                                            <div class="category-content-lead-right-text">
                                                <h1>No Post Available</h1>
                                                <p>No description available</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif

                        </div><!--/.category-content-->

                        {{-- Remaining Posts --}}
                        <div class="row custom-row content_list">
                            @forelse ($posts as $post)
                                <div class="col-md-6 custom-padding">
                                    <div class="category-content-single">
                                        <a href="{{ route('frontend.details', [$post->id, $post->slug]) }}"
                                           class="post-click" data-id="{{ $post->id }}">
                                            <div class="category-content-single-left">
                                                <img class="img-fluid"
                                                     src="{{ asset('assets/images/post/'.$post->image_big) }}"
                                                     alt="{{ Str::limit($post->title, 50) }}">
                                            </div>
                                            <div class="category-content-single-right">
                                                <h2>{{ Str::limit($post->title, 50) }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-6 custom-padding">
                                    <div class="category-content-single">
                                        <a href="#">
                                            <div class="category-content-single-left">
                                                <img class="img-fluid" src="{{ asset('assets/images/nopic.png') }}" alt="No Post">
                                            </div>
                                            <div class="category-content-single-right">
                                                <h2>No posts available.</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        {{-- Pagination --}}
                        <div class="row" style="margin-bottom:30px;">
                            <div class="col-sm-12 text-center">
                                <div class="mt-3">{{ $posts->links() }}</div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="category-content-btn">
                      <div class="details-btn">
                        <a href="#" class="btn btn-more-details hvr-bounce-to-right">আরও খবর </a>
                      </div>
                    </div> -->

                </div><!--/.col-lg-12-->
            </div><!--/.left-content-area-->

            <div class="right-content-area details-right-content-area">
                <div class="col-lg-12 custom-padding">
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
                    <div class="footer-facebook-like mt-2 mb-2">

                        <div class="fb-page" data-href="https://www.facebook.com/{{$gs->facebookpage_id}}"
                             data-tabs="timeline"
                             data-width="418" data-height="300" data-small-header="false"
                             data-adapt-container-width="false"
                             data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/{{$gs->facebookpage_id}}"
                                        class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/{{$gs->facebookpage_id}}">{{ $gs->title }}</a>
                            </blockquote>
                        </div>
                    </div>
                    <div class="details-page-side-banner mb-2">
                        {!!$gs->sidebar_ads!!}
                    </div><!--/.details-page-side-banner-->
                </div><!--/.col-lg-12-->
            </div><!--/.right-content-area-->
        </div><!--/.row-->
    </div><!--/.container-->




@endsection
