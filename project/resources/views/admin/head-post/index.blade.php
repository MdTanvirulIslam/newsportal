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
                            <a href="javascript:;">{{ __('Header Post') }}</a>
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
                                  action="{{ route('admin.generalsettings.updateHeaderPost')}}" method="POST"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Active/Inactive') }} </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="checkbox" class="schedule" name="status" value="1"
                                               @if($data->status == 1) checked @endif>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Category') }} </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="category_id" id="article_parent_id">
                                            <option value="">Please select category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $data->category_id == $category->id ? 'selected' : '' }}> {{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Header Title') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field"
                                               placeholder="{{ __('Write Your Header Title Here') }}" name="title"
                                               value="{{$data->title}}">
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
                                                       name="bg_color" value="{{$data->bg_color}}"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Date') }} *
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="input-field"
                                               placeholder="{{ __('Write a date here') }}" name="post_date"
                                               value="{{$data->post_date}}">
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">
                                                Description
                                            </h4>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tawk-area">
                                            <textarea name="description">{{$data->description}}</textarea>
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
