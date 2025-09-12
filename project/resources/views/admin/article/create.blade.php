@extends('layouts.admin')

@section('content')

<div class="content-area">
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">{{ __('Add Articles') }}</h4>
                <ul class="links">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}">{{ __('Articles') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('includes.admin.form-both')
    <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
    <form id="elitedesignformdata2" action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="is_pending">
    <input type="hidden" name="post_type">
    <div class="row">
        <div class="col-lg-8">
            <div class="add-product-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-description">
                            <div class="body-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Language') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        {{--<select name="language_id" id="article_language_id">--}}
                                        <select name="language_id" id="">
                                            @foreach ($languages as $language)
                                                <option value="{{$language->id}}" selected>{{$language->language}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Title') }} *</h4>
                                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" class="input-field" name="title"
                                                placeholder="{{ __('Title') }}" id="title" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Slug') }} *</h4>
                                                <p class="sub-heading">{{ __('In English') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" class="input-field" id="slug" name="slug"
                                                placeholder="{{ __('Slug') }}" value="">
                                                <p id="slugCheck"></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Keyword meta tag') }} *</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="input-field textarea" name="meta_tag" placeholder="{{__('Keyword meta tag')}}"></textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Tags') }} *</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" placeholder="{{__('Tags')}}" class="tags input-field" id="tags" name="tags" value="">
                                        </div>
                                    </div>


									<div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Short News') }} *</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="input-field textarea" name="short_description" placeholder="{{__('Type here short news.')}}"></textarea>
                                        </div>
                                    </div>
																		<div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('News Video Embed Code Optional') }} </h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="input-field textarea" name="video_embed" placeholder="{{__('Enetr Your Video Embed Code.')}}"></textarea>
                                        </div>
                                    </div>


									<div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Youtube Video Link Optional 600X400 Size') }}</h4>
                                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" class="input-field" name="video_link"
                                                placeholder="{{ __('Youtube Video Link') }}" id="video_link" autocomplete="off">
                                        </div>
                                    </div>

																			<div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">{{ __('Images Caption') }} *</h4>
                                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" class="input-field" name="image_caption"
                                                placeholder="{{ __('Images Caption') }}" id="image_caption" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-area">
                                                <h4 class="heading">
                                                    {{__('Description')}} *
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" name="description" id="kb-description"></textarea>
                                        </div>
                                      </div>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
           <div class="row">
               <div class="col-lg-12">
                <div class="add-product-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-description">
                                <div class="body-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div class="left-area">
                                              <h4 class="heading">{{__('Current Featured Image')}} *</h4>
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="img-upload custom-image-upload">
                                              <div id="image-preview" class="img-preview" style="background: url({{ asset('assets/admin/images/upload.png') }});">
                                                <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{__('Upload')}}</label>
                                                  <input type="file" name="image_big" class="img-upload" id="image-upload">
                                              </div>
                                                <p class="text">{{__('Prefered Size: (600x600) or Square Sized Image')}}</p>
                                          </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>

           {{--<div class="row mt-4 categoryDiv" style="display:none;">
                <div class="col-lg-12">
                    <div class="add-product-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="body-area">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>--}}
                   <div class="row mt-4">
                       <div class="col-lg-12">
                           <div class="add-product-content">
                               <div class="row">
                                   <div class="col-lg-12">
                                       <div class="product-description">
                                           <div class="body-area">
                                               <div class="row">
                                                   <div class="col-lg-4">
                                                       <div class="left-area">
                                                           <h4 class="heading">{{ __('Category') }} *</h4>
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-7">
                                                       {{--<select name="category_id" id="article_parent_id">
                                                       </select>--}}

                                                       <select name="category_id" id="article_parent_id">
                                                           <option value="">Please select category</option>
                                                           @foreach($categories as $category)
                                                               <option value="{{ $category->id }}"> {{ $category->title }}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>
                                               </div>

                                               <div class="row">
                                                   <div class="col-lg-4">
                                                       <div class="left-area">
                                                           <h4 class="heading">{{ __('Sub Category') }} *</h4>
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-7">
                                                       <select name="subcategories_id" id="subcategory_id">
                                                           <option value="">{{__('Please add a subcategory(if any)')}}</option>
                                                       </select>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

           <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="add-product-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="body-area">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="left-area">
                                                    <h4 class="heading">{{ __('Add to Feature') }} *</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="is_feature1"  name="is_feature" value="1">
                                                <label class="custom-control-label" for="is_feature1">{{__('Yes')}}</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block">
                                                <input type="radio" class="custom-control-input" id="is_feature2"  name="is_feature" value="0" checked>
                                                <label class="custom-control-label" for="is_feature2">{{__('No')}}</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="featureTextBox" style="display: none;">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="feature_serial">{{ __('Feature Serial') }}</label>
                                                    <input type="number" name="feature_serial" id="feature_serial" class="form-control" placeholder="{{ __('Enter feature serial no') }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="row">
                                            <div class="col-lg-6">
                                                <div class="left-area">
                                                    <h4 class="heading">{{ __('Add to Slider') }} *</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="is_slider"  name="is_slider" value="1">
                                                <label class="custom-control-label" for="is_slider">{{__('Yes')}}</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="is_slider2"  name="is_slider" value="0" checked>
                                                <label class="custom-control-label" for="is_slider2">{{__('No')}}</label>
                                            </div>

                                            </div>
                                        </div>--}}

                                        {{--<div class="row">
                                            <div class="col-lg-6">
                                                <div class="left-area">
                                                    <h4 class="heading">{{ __('Slider Right Post') }} *</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="slider_right"  name="slider_right" value="1">
                                                <label class="custom-control-label" for="slider_right">{{__('Yes')}}</label>
                                            </div>

                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="slider_right2"  name="slider_right" value="0" checked>
                                                <label class="custom-control-label" for="slider_right2">{{__('No')}}</label>
                                            </div>

                                            </div>
                                        </div>--}}

                                        {{--<div class="row">
                                            <div class="col-lg-6">
                                                <div class="left-area">
                                                    <h4 class="heading">{{ __('Add to Feature Video') }}</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="is_video"  name="is_video" value="1">
                                                <label class="custom-control-label" for="is_video">{{__('Yes')}}</label>
                                            </div>

                                            <div class="custom-control custom-radio d-inline-block mr-5">
                                                <input type="radio" class="custom-control-input" id="is_video2"  name="is_video" value="0" checked>
                                                <label class="custom-control-label" for="is_video2">{{__('No')}}</label>
                                            </div>

                                            </div>
                                        </div>--}}

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="left-area">
                                                    <h4 class="heading">{{ __('Add to Lead News') }} *</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="custom-control custom-radio d-inline-block mr-5">
                                                    <input type="radio" class="custom-control-input" id="is_trending" name="hot_news" value="1">
                                                    <label class="custom-control-label" for="is_trending">{{__('Yes')}}</label>
                                                </div>

                                                <div class="custom-control custom-radio d-inline-block mr-5">
                                                    <input type="radio" class="custom-control-input" id="is_trending2" name="hot_news" value="0" checked>
                                                    <label class="custom-control-label" for="is_trending2">{{__('No')}}</label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>

           <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="add-product-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="body-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="left-area">
                                                    <h4 class="heading">{{ __('Schedule Post') }} *</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="checkbox" class="schedule" name="schedule_post" value="1">
                                            </div>
                                        </div>

                                        <div class="row datepick" style="display:none;">
                                            <div class="col-lg-12">
                                                <div class="left-area">
                                                    <h4 class="heading"></h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="from" class="input-field" type="text" name="schedule_post_date" autocomplete="off" placeholder="{{__('Start Date')}}" required="" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">

                                            </div>
                                            <div class="col-lg-12">

                                                <input type="submit" data-draft="1" class="btn btn-warning submit-btn1 saveAsDraft" value="Save as Drafts">
                                                <input type="submit" data-draft="0" class="btn btn-success submit-btn1 addPost" value="Add Post">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</form>
</div>

<div class="modal fade-scale" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Image Gallery') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="top-area">
                <div class="row">
                    <div class="col-sm-6 text-right">
                        <div class="upload-img-btn">
                            <label id="article_gallery"><i class="icofont-upload-alt"></i>{{ __('Upload File') }}</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <a href="javascript:;" class="upload-done" data-dismiss="modal"> <i class="fas fa-check"></i> {{ __('Done') }}</a>
                    </div>
                    <div class="col-sm-12 text-center">( <small>{{ __('You can upload multiple Images.') }}</small> )</div>
                </div>
            </div>
            <div class="gallery-images">
                <div class="selected-image">
                    <div class="row">


                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

    <script>
        // Initialize CKEditor
        CKEDITOR.replace('kb-description', {
            height: 260,
            width: "100%",
            filebrowserUploadUrl: '{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}',
            filebrowserUploadMethod: "form"
        });
    </script>




<script src="{{asset('assets/admin/js/page.js')}}"></script>
<script src="{{asset('assets/admin/js/articleCreate.js')}}"></script>
<script src="{{asset('assets/admin/js/tagify.js')}}"></script>
<script>
    $('.tags').tagify();
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const yesRadio = document.getElementById('is_feature1');
            const noRadio = document.getElementById('is_feature2');
            const featureTextBox = document.getElementById('featureTextBox');

            function toggleTextBox() {
                if (yesRadio.checked) {
                    featureTextBox.style.display = 'block';
                } else {
                    featureTextBox.style.display = 'none';
                }
            }

            yesRadio.addEventListener('change', toggleTextBox);
            noRadio.addEventListener('change', toggleTextBox);

            // Initial check on page load
            toggleTextBox();
        });
    </script>




@endsection
