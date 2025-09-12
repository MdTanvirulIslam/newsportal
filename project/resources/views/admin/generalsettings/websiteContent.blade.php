@extends('layouts.admin')

@section('content')

    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">{{ __('Website Contents') }}</h4>
                    <ul class="links">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('General Settings') }}</a>
                        </li>
                        <li>
                            <a href="">{{ __('Website Contents') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="add-product-content">
            @include('includes.admin.form-both')
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-description">
                        <div class="body-area">
                            <div class="gocover"
                                 style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                            <form class="uplogo-form" id="elitedesignform"
                                  action="{{ route('admin.generalsettings.update')}}" method="POST"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Website Title') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field"
                                               placeholder="{{ __('Write Your Site Title Here') }}" name="title"
                                               value="{{$data->title}}" required="">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Website Base Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="form-control input-field color-field cp"
                                                       name="theme_color" value="{{$data->theme_color}}"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Footer Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="form-control input-field color-field cp"
                                                       name="footer_color" value="{{$data->footer_color}}"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Copyright Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="form-control input-field color-field cp"
                                                       name="copyright_color" value="{{$data->copyright_color}}"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('TimeZone') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        @php
                                            $timezone_identifiers =
                                                DateTimeZone::listIdentifiers(DateTimeZone::ALL);

                                            echo "<select name='time_zone'>";

                                            echo "<option disabled selected>
                                                    Please Select Timezone
                                                  </option>";

                                            $n = 425;
                                            for($i = 0; $i < $n; $i++) {
                                              if($data->time_zone == $timezone_identifiers[$i]){
                                                    $msg = 'selected';
                                                }else{
                                                    $msg = '';
                                                }
                                                echo "<option value='" . $timezone_identifiers[$i] ."' ".$msg.">" . $timezone_identifiers[$i] . "</option>";
                                            }

                                            echo "</select>";
                                        @endphp
                                    </div>
                                </div>


                                {{--<div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Hot News') }} </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="checkbox" class="schedule" name="hot_news" value="1"
                                               @if($data->hot_news == 1) checked @endif>
                                    </div>
                                </div>--}}


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Fazar Time') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field" placeholder="{{ __('Fazar Time') }}"
                                               name="fazar" value="{{$data->fazar}}" required="">
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Jahar Time') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field" placeholder="{{ __('Jahar Time') }}"
                                               name="jahar" value="{{$data->jahar}}" required="">
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Achor Time') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field" placeholder="{{ __('Achor Time') }}"
                                               name="achar" value="{{$data->achar}}" required="">
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Magrib Time') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field" placeholder="{{ __('Magrib Time') }}"
                                               name="magrib" value="{{$data->magrib}}" required="">
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Esha Time') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field" placeholder="{{ __('Esha Time') }}"
                                               name="esha" value="{{$data->esha}}" required="">
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Jumma Time') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field" placeholder="{{ __('Jumma Time') }}"
                                               name="jumma" value="{{$data->jumma}}" required="">
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">
                                                Search Console Verification Code
                                                <p class="sub-heading">{{(__('In Any Language'))}}</p>
                                            </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tawk-area">
                                            <textarea name="search_console"
                                                      required="">{{$data->search_console}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">
                                                Adsense Verification Code
                                                <p class="sub-heading">{{(__('In Any Language'))}}</p>
                                            </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tawk-area">
                                            <textarea name="adsense_code" required="">{{$data->adsense_code}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="addProductSubmit-btn" type="submit">{{ __('Save') }}</button>
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
    <script src="{{asset('assets/admin/js/notify.js')}}"></script>
    <script src="{{asset('assets/admin/js/distawk.js')}}"></script>

@endsection
