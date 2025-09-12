@extends('layouts.admin')

@section('styles')

@endsection

@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">{{__('Adds')}}</h4>
                    <ul class="links">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">{{__('Dashboard')}} </a>
                        </li>
                        <li>
                            <a href="javascript:;">{{__('General Settings')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.general-settings.adds')}}">{{__('Adds')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="add-product-content">
            @include('includes.admin.form-both')
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="product-description">
                        <div class="body-area">
                            <div class="gocover"
                                 style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                            <form class="uplogo-form" id="elitedesignform"
                                  action="{{route('admin.generalsettings.update')}}" method="POST"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="tawk-area">
                                            <h4 class="heading">
                                                Header Top (728px × 90 px) *
                                            </h4>
                                            <textarea name="header_top_ads"
                                                      required="">{{$data->header_top_ads}}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 1.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_one_point_one_ads" required="">{{$data->section_one_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 1.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_one_point_two_ads" required="">{{$data->section_one_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 2.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_two_point_one_ads" required="">{{$data->section_two_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 2.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_two_point_two_ads" required="">{{$data->section_two_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 3.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_three_point_one_ads" required="">{{$data->section_three_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 3.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_three_point_two_ads" required="">{{$data->section_three_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 4.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_four_point_one_ads" required="">{{$data->section_four_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 4.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_four_point_two_ads" required="">{{$data->section_four_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 4.3 (L) (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_four_point_three_ads" required="">{{$data->section_four_point_three_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 5.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_five_point_one_ads" required="">{{$data->section_five_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 5.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_five_point_two_ads" required="">{{$data->section_five_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 6.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_six_point_one_ads" required="">{{$data->section_six_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 6.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_six_point_two_ads" required="">{{$data->section_six_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 6.3 (L) (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_six_point_three_ads" required="">{{$data->section_six_point_three_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 7.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_seven_point_one_ads" required="">{{$data->section_seven_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 7.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_seven_point_two_ads" required="">{{$data->section_seven_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="heading">
                                            Section 7.3 (L) (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_seven_point_three_ads" required="">{{$data->section_seven_point_three_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 8.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_eight_point_one_ads" required="">{{$data->section_eight_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 8.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_eight_point_two_ads" required="">{{$data->section_eight_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 9.1 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_nine_point_one_ads" required="">{{$data->section_nine_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 9.2 (460px × 60 px) Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_nine_point_two_ads" required="">{{$data->section_nine_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 10.1 (728px × 90 px) Single Page Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_ten_point_one_ads" required="">{{$data->section_ten_point_one_ads}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="heading">
                                            Section 10.2 (728px × 90 px) Single Page Ads *
                                        </h4>
                                        <div class="tawk-area">
                                            <textarea name="section_ten_point_two_ads" required="">{{$data->section_ten_point_two_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="left-area">
                                            <h4 class="heading">
                                                Sidebar 1 (300 × 250) Single Page Ads*

                                            </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tawk-area">
                                            <textarea name="sidebar_ads" required="">{{$data->sidebar_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="left-area">
                                            <h4 class="heading">
                                                Sidebar 2 (300 × 250) Single Page Ads *

                                            </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tawk-area">
                                            <textarea name="sidebar1_ads" required="">{{$data->sidebar1_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>


                                {{--<div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="left-area">
                                            <h4 class="heading">
                                                Sidebar 3 Ads *
                                            </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tawk-area">
                                            <textarea name="sidebar2_ads" required="">{{$data->sidebar2_ads}}</textarea>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <button class="addProductSubmit-btn" type="submit">{{__('Save')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('assets/admin/js/tagify.js')}}"></script>
    <script>
        $('.tags').tagify();
    </script>
@endsection
