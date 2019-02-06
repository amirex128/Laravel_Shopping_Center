@extends('admin.master')

@section('main')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <div class="container">
        @if(count($errors) > 0)
            <div class="col-sm-12 mt-5">
                <div class="box-color warn">
                    <div class="box-header">
                        <h3>لطفا نکات گفته شده در زیر را رعایت نمایید :</h3>
                        <small>با دقت پر نمایید :)</small>
                    </div>
                    <div class="box-body">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header primary">
                        <h3>ایجاد مقاله</h3>
                        <div class="box-tool">
                            <ul class="nav nav-xs">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="fa fa-fw fa-refresh"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">


                        <div class="row">
                            <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                       href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                       aria-selected="true">اطلاعات محصول</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                       href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                       aria-selected="false">مقادیر محصول</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                       href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                       aria-selected="false">تصاویر محصول</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                       href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                       aria-selected="false">وضعیت محصول</a>
                                </div>
                            </div>
                            <div class="col-9">
                                <form action="{{route("admin.product.store")}}" method="post">
                                    @csrf


                                    <div class="tab-content" id="v-pills-tabContent">


                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                             aria-labelledby="v-pills-home-tab">
                                            <div class="form-group">
                                                <label for="title" class="text-bold">عنوان محصول</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                       aria-describedby="emailHelp" placeholder="عنوان محصول ...">
                                                <small id="title" class="form-text text-muted">عنوان محصول باید بین 100
                                                    تا 255 کارکتر باشد .
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="text-bold">توضیحات محصول</label>
                                                <input type="text" name="description" class="form-control"
                                                       id="description" placeholder="توضیحات محصول ...">
                                                <small id="title" class="form-text text-muted">توضیحات محصول باید بین
                                                    100 تا 255 کارکتر باشد .
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="editor" class="text-bold">توضیحات محصول</label>
                                                <textarea name="body" class="form-control"
                                                          placeholder="متن مقاله را وارد نمایید ..." name="body"
                                                          id="editor"></textarea>
                                                <small id="title" class="form-text text-muted">عنوان محصول باید بین 500
                                                    تا 5000 کارکتر باشد .
                                                </small>

                                            </div>

                                            <a onclick="document.getElementById('v-pills-profile-tab').click()"
                                               class="btn btn-primary text-white">بعدی</a>

                                        </div>


                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                             aria-labelledby="v-pills-profile-tab">

                                            <div class="row">

                                                <div class="col">

                                                    <div class="form-group">
                                                        <label class="text-bold" for="price">قیمت محصول</label>
                                                        <input type="text" name="price"
                                                               placeholder="قیمت محصول را وارد نمایید..."
                                                               class="form-control">
                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="text-bold" for="price">قیمت تخفیف</label>
                                                        <input type="text" name="price"
                                                               placeholder="قیمت تخفیف را وارد نمایید..."
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="w-100"></div>
                                                <div class="col">

                                                    <div class="row align-items-center h-100">

                                                        <div class="col">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline1"
                                                                       name="customRadioInline1"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadioInline1">فروش فوق العاده
                                                                    باشد</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline2"
                                                                       name="customRadioInline1"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadioInline2">فروش فوق العاده
                                                                    نباشد</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="text-bold" for="price">موجودی انبار</label>
                                                        <input type="number" name="stock"
                                                               placeholder="تعداد محصول موجود در انبار"
                                                               class="form-control">
                                                    </div>

                                                </div>

                                            </div>

                                            <a onclick="document.getElementById('v-pills-messages-tab').click()"
                                               class="btn btn-primary text-white">بعدی</a>


                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                             aria-labelledby="v-pills-messages-tab">


                                            <div id="imagee">

                                                <input type="file" name="imageGallery[]" class="dropify m-3" data-height="200"/>


                                            </div>

                                            <a id="add-image" class="mt-4 btn btn-block btn-info text-white ">افزودن
                                                تصویر</a>

                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                             aria-labelledby="v-pills-settings-tab">
                                            <input type="submit" class="btn btn-dark btn-block" value="ثبت محصول">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>

        $(document).ready(function () {

            $('.dropify').dropify({
                messages: {
                    'default': 'تصاویر محصول را اینجا بکشید',
                    'replace': 'برای تغییر عکس فعلی تصویر جدید را اینجا بکشید',
                    'remove': 'حذف کردن',
                    'error': 'مشکل در ارسال تصویر.'
                }
            });
            $('#add-image').click(function () {

                var item = "<input type=\"file\" name=\"imageGallery[]\" class=\"dropify m-3\" data-height=\"200\"/>";

                $('#imagee').append(item)

                $('.dropify').dropify({
                    messages: {
                        'default': 'تصاویر محصول را اینجا بکشید',
                        'replace': 'برای تغییر عکس فعلی تصویر جدید را اینجا بکشید',
                        'remove': 'حذف کردن',
                        'error': 'مشکل در ارسال تصویر.'
                    }
                });
            });

        })


        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection