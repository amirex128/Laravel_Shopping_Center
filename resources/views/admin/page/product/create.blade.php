@extends('admin.master')

@section('main')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <link rel="stylesheet" href="{{asset("libs/bootstrap-colorpicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/fSelect.css")}}">
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
                        <h3>ایجاد محصول</h3>
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
                                       aria-selected="true">توضیحات محصول</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                       href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                       aria-selected="false">مقادیر محصول</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                       href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                       aria-selected="false">تصاویر محصول</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                       href="#v-pills-property" role="tab" aria-controls="v-pills-settings"
                                       aria-selected="false">ویژگی های محصول</a>
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
                                                <label for="editor" class="text-bold">متن معرفی محصول</label>
                                                <textarea name="body" class="form-control"
                                                          placeholder="متن مقاله را وارد نمایید ..." name="body"
                                                          id="editor"></textarea>
                                                <small id="title" class="form-text text-muted">عنوان محصول باید بین 500
                                                    تا 5000 کارکتر باشد .
                                                </small>

                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="text-bold">آدرس ویدیو از آپارات</label>
                                                <input type="text" name="video" class="form-control"
                                                       id="description" placeholder="لینک ویدیو محصول ...">
                                                <small id="title" class="form-text text-muted">
                                                    لطفا ویدیو خود را در <a class="text-bold text-primary" href="https://www.aparat.com/" rel="nofollow">آپارات</a> آپلود نمایید و لینک آن را در اینجا قرار دهید.
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
                                                        <input type="text" name="offer"
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
                                                                       name="special"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadioInline1">فروش فوق العاده
                                                                    باشد</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline2"
                                                                       name="special"
                                                                       value="off"
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
                                                <div class="w-100"><hr></div>
                                                <div class="col">
                                                    <label class="text-bold" for=""> شرکت گارانتی محصول را وارد نمایید :<span id="add-warranty" class=" m-3 btn btn-sm btn-info">افزودن فیلد</span> <span id="remove-warranty" class=" m-3 btn btn-sm btn-danger">حذف فیلد</span></label>
                                                    <div class="w-100"></div>

                                                    <div class="col" id="added-warranty">
                                                        {{--<div class="row w-100">--}}
                                                        {{--<div class="col-6 col-sm-4 col-md-4">--}}
                                                        {{--<div class="form-group">--}}
                                                        {{--<label class="text-bold" for="price">نام گارانتی</label>--}}
                                                        {{--<input type="TEXT" name="warranty[name][]"--}}
                                                        {{--placeholder="نام شرکت گارانتی محصول را وارد نمایید..."--}}
                                                        {{--class="form-control">--}}
                                                        {{--</div>--}}

                                                        {{--</div>--}}

                                                        {{--<div class="col-6 col-sm-4 col-md-4">--}}
                                                        {{--<div class="form-group">--}}
                                                        {{--<label class="text-bold" for="price">توضیحات گارانتی</label>--}}
                                                        {{--<input type="TEXT" name="warranty[desc][]"--}}
                                                        {{--placeholder="توضیحی در مورد شرکت گارانتی محصول..."--}}
                                                        {{--class="form-control">--}}
                                                        {{--</div>--}}

                                                        {{--</div>--}}

                                                        {{--<div class="col-6 col-sm-4 col-md-4">--}}
                                                        {{--<div class="form-group">--}}
                                                        {{--<label class="text-bold" for="price">تعداد ماه گارانتی</label>--}}
                                                        {{--<input type="number" name="warranty[time][]"--}}
                                                        {{--placeholder="مدت زمان گارانتی ..."--}}
                                                        {{--class="form-control">--}}
                                                        {{--</div>--}}

                                                        {{--</div>--}}
                                                        {{--</div>--}}


                                                    </div>
                                                </div>
                                                <div class="w-100"></div>
                                                <div class="col">
                                                    <hr>
                                                    <label class="text-bold" for=""> رنگ محصول خود را انتخاب نمایید :<span id="add-color" class=" m-3 btn btn-sm btn-info">افزودن فیلد</span> <span id="remove-color" class=" m-3 btn btn-sm btn-danger">حذف فیلد</span></label>

                                                    <div class="row" id="added-color">
                                                        {{--<div class="col-4">--}}
                                                        {{--<div class="form-group">--}}
                                                        {{--<input  type="text" name="color[]" class="form-control color--"  />--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
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
                                            <a onclick="document.getElementById('v-pills-settings-tab').click()"
                                               class="btn btn-primary text-white mt-3">بعدی</a>

                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                             aria-labelledby="v-pills-settings-tab">
                                            <div class="row">
                                                <div class="col">

                                                    <label for="myselectpublicsh" class="text-bold">وضعیت انتشار محصول </label>
                                                    <select id="myselectpublicsh" name="status" class="custom-select">
                                                        <option selected value="1">انتشار</option>
                                                        <option value="2">پیش نویس</option>

                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="myselectstatus" class="text-bold">وضعیت محصول </label>
                                                    <select id="myselectstatus" name="situation" class="custom-select">
                                                        <option selected value="1">بدون لیبل</option>
                                                        <option value="2">توقف تولید</option>
                                                        <option value="3">به زودی</option>
                                                        <option value="4">ناموجود</option>
                                                    </select>
                                                </div>
                                                <div class="w-100"></div>
                                                <div class="col mt-3">
                                                    <label class="text-bold" for="">دسته بندی های محصول خود را مشخص نمایید</label>
                                                    <div class="form-group">
                                                        <select class="demo w-100 " style="" multiple="multiple">
                                                            <optgroup label="Languages">
                                                                <option value="cp">C++</option>
                                                                <option value="cs">C#</option>
                                                                <option value="oc">Object C</option>
                                                                <option value="c">C</option>
                                                            </optgroup>
                                                            <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                            </optgroup>
                                                            <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                            </optgroup>
                                                            <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                            </optgroup>
                                                            <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                            </optgroup>
                                                            <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                            </optgroup>
                                                            <optgroup label="Scripts">
                                                                <option value="js">JavaScript</option>
                                                                <option value="php">PHP</option>
                                                                <option value="asp">ASP</option>
                                                                <option value="jsp">JSP</option>
                                                            </optgroup>
                                                        </select>                                                            </div>

                                                </div>
                                                <div class="w-100"><hr></div>
                                                <div class="col">
                                                    <label class="text-bold" for=""> معایب و مزایای محصول خود را وارد نمایید :<span id="add-advantage" class=" m-3 btn btn-sm btn-info">افزودن فیلد</span> <span id="remove-advantage" class=" m-3 btn btn-sm btn-danger">حذف فیلد</span></label>
                                                    <div class="w-100"></div>

                                                    <div class="col" id="added-advantage">
                                                


                                                    </div>





                                                </div>




                                                <input type="submit" class="btn btn-dark btn-block mt-3 " value="ثبت محصول">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-property" role="tabpanel"
                                             aria-labelledby="v-pills-messages-tab">
                                            <div class="row">
                                                <div class="col" id="help"><h6 class="lead text-center">لطفا ابتدا دسته بندی محصول را انتخاب نمایید</h6></div>
                                            </div>



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
    <script src="{{asset("/libs/bootstrap-colorpicker.min.js")}}"></script>
    <script src="{{asset("/libs/fSelect.js")}}"></script>
    <script src="{{asset("/libs/dynamic-form.js")}}"></script>
    <script>

        $(document).ready(function () {
            $('#add-advantage').click(function () {
                $('#added-advantage').append('                                                        <div class="row w-100">\n' +
                    '                                                            <div class="w-100"></div>\n' +
                    '                                                            <div class="col-12 col-md-6">\n' +
                    '                                                                <div class="form-group">\n' +
                    '                                                                    <input class="form-control"  placeholder="مزیت های محصول شما..." type="text" name="advantages[advantage][]">\n' +
                    '                                                                </div>\n' +
                    '                                                            </div>\n' +
                    '                                                            <div class="col-12 col-md-6">\n' +
                    '                                                                <div class="form-group">\n' +
                    '                                                                    <input class="form-control" placeholder="معایب محصول شما..." type="text" name="advantages[disadvantage][]">\n' +
                    '                                                                </div>\n' +
                    '                                                            </div>\n' +
                    '                                                        </div>');
            });
            $('#remove-advantage').click(function () {
                $('#added-advantage > :last-child').remove();

            })
            $('.demo').fSelect();

            $('.color--').colorpicker({
                color: "انتخاب رنگ",
                format: "hex"
            });
            $('.dropify').dropify({
                messages: {
                    'default': 'تصاویر محصول را اینجا بکشید',
                    'replace': 'برای تغییر عکس فعلی تصویر جدید را اینجا بکشید',
                    'remove': 'حذف کردن',
                    'error': 'مشکل در ارسال تصویر.'
                }
            });

            $('#add-color').click(function () {
                $('#added-color').append('                                                        <div class="col-4">\n' +
                    '                                                            <div class="form-group">\n' +
                    '                                                                <input name="color[]" type="text" class="form-control color--"  />\n' +
                    '                                                            </div>\n' +
                    '                                                        </div>');

                $('.color--').colorpicker({
                    color: "انتخاب رنگ",
                    format: "hex",

                });
            });
            $('#remove-color').click(function () {
                $('#added-color > :last-child').remove();
            });

            $('#add-warranty').click(function () {
                $('#added-warranty').append('                                                        <div class="row w-100">\n' +
                    '                                                            <div class="col-6 col-sm-4 col-md-4">\n' +
                    '                                                                <div class="form-group">\n' +
                    '                                                                    <label class="text-bold" for="price">نام گارانتی</label>\n' +
                    '                                                                    <input type="TEXT" name="warranty[name][]"\n' +
                    '                                                                           placeholder="نام شرکت گارانتی محصول را وارد نمایید..."\n' +
                    '                                                                           class="form-control">\n' +
                    '                                                                </div>\n' +
                    '\n' +
                    '                                                            </div>\n' +
                    '\n' +
                    '                                                            <div class="col-6 col-sm-4 col-md-4">\n' +
                    '                                                                <div class="form-group">\n' +
                    '                                                                    <label class="text-bold" for="price">توضیحات گارانتی</label>\n' +
                    '                                                                    <input type="TEXT" name="warranty[desc][]"\n' +
                    '                                                                           placeholder="توضیحی در مورد شرکت گارانتی محصول..."\n' +
                    '                                                                           class="form-control">\n' +
                    '                                                                </div>\n' +
                    '\n' +
                    '                                                            </div>\n' +
                    '\n' +
                    '                                                            <div class="col-6 col-sm-4 col-md-4">\n' +
                    '                                                                <div class="form-group">\n' +
                    '                                                                    <label class="text-bold" for="price">تعداد ماه گارانتی</label>\n' +
                    '                                                                    <input type="number" name="warranty[time][]"\n' +
                    '                                                                           placeholder="مدت زمان گارانتی ..."\n' +
                    '                                                                           class="form-control">\n' +
                    '                                                                </div>\n' +
                    '\n' +
                    '                                                            </div>\n' +
                    '                                                        </div>\n') ;
            });

            $('#remove-warranty').click(function () {
                $('#added-warranty > :last-child').remove();
            })

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