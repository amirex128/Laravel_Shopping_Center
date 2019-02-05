@extends("admin.master")

@section("main")
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


                        <form action="{{route("admin.article.store")}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">عنوان</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{old('title',$Article->title)}}" name="title" class="form-control" placeholder="عنوان مقاله را وارد نمایید ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="formGroupInputLarge">توضیحات مختصر</label>
                                <div class="col-sm-10">
                                    <input class="form-control form-control-lg" value="{{old('description',$Article->description)}}" name="description" type="text" id="formGroupInputLarge" placeholder="خلاصه مقاله را وارد نمایید ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="formGroupInputLarge">
                                    <h6>متن مقاله</h6>
                                    <p>برای افزودن تصویر از گذینه چند رسانه ای استفاده نمایید</p>
                                </label>
                                <div class="col-sm-10">
                                    <textarea name="body" placeholder="متن مقاله را وارد نمایید ..." name="content" id="editor">{{old('body',$Article->body)}}</textarea>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-4 mt-5">
                                    <label class=" col-form-label">انتخاب تصویر شاخص</label>

                                    <div class="form-file">
                                        <input name="imageUrl" type="file">
                                        <button class="btn btn-fw primary">افزودن فایل</button>
                                    </div>
                                </div>
                                <div class="col-sm-4 offset-3 mb-3">
                                    <img src="{{old('thumbnail',$Article->thumbnail)}}" alt="" class="img-thumbnail">
                                </div>
                            </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="submit" value="ارسال مقاله" class="btn btn-fw accent btn-block">

                                    </div>
                                </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section("script")

    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection