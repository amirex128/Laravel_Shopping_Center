@extends('admin.master')

@section('main')
    <div class="row">
        <div class="col-sm">
            @component('component.errors')
            @endcomponent
            @component('component.alert')
                @slot('session')
                    success
                @endslot
                success
            @endcomponent
            @component('component.alert')
                @slot('session')
                    destroy
                @endslot
                danger
            @endcomponent
        </div>
        <div class="w-100"></div>
        <div class="col-sm">
            @component('component.box')
                @slot('title')
                    ایجاد عناوین دسته بندی ویژگی {{$attributeGroup->title}}
                @endslot
                <form class="row" method="post">
                    @csrf
                    <div class="col form-group">
                        <label class="text-bold" for="attribute">انتخاب عنوان</label>
                        <input class="form-control w-100" type="text" placeholder="عنوان ویژگی خود را انتخاب نمایید..." name="attribute" id="attribute">
                    </div>
                    <div class="col form-group">
                        <label class="text-bold" for="attribute">توضیح مختصر</label>
                        <input class="form-control w-100" type="text" placeholder="توضیحی مختصر وارد نمایید..." name="description" id="attribute">
                    </div>
                    <div class="w-100"></div>
                    <input type="submit" value="ثبت عنوان ویژگی" class="btn btn-primary btn-block mx-3">


                </form>
            @endcomponent
        </div>
        <div class="w-100"></div>
        <div class="col-sm">

            @component('component.box')
                @slot('title')
                    عنوان های ویژگی {{$attributeGroup->title}}
                @endslot
                <table class="table table-bordered ">

                    <thead class="thead-light">
                    <tr>
                        <td class="text-bold"> عنوان ویژگی</td>
                        <td class="text-bold">عملیات</td>
                    </tr>
                    </thead>

                    <tbody>
                    {{--@forelse($attributes as $attribute)--}}
                        {{--<tr>--}}
                            {{--<td>{{$attribute->title}}</td>--}}
                            {{--<td class="row justify-content-center">--}}
                                {{--<div class="btn-group btn-group-sm " role="group" aria-label="Basic example">--}}
                                    {{--<a href="{{route('admin.attributeItem.create',['attribute'=>$attribute->id])}}" class="btn btn-primary text-white">افزودن ویژگی های محصول</a>--}}
                                    {{--<a class="btn btn-primary text-white">ویرایش نام</a>--}}
                                    {{--<a onclick="document.getElementById('attribute-delete').submit()" class="btn btn-primary text-white">حذف عنوان</a>--}}
                                {{--</div>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--<form method="post" id="attribute-delete" action="{{route('admin.attribute.destroy',['id'=>$attribute->id])}}">--}}
                            {{--@csrf--}}
                            {{--@method('delete')--}}
                        {{--</form>--}}


                    {{--@empty--}}
                        {{--<tr>--}}
                            {{--<td class="text-bold text-center bg-info text-white" colspan="3">هیچ عنوانی موجود نیست</td>--}}
                        {{--</tr>--}}
                    {{--@endforelse--}}
                    </tbody>


                </table>
            @endcomponent
        </div>
    </div>
@endsection