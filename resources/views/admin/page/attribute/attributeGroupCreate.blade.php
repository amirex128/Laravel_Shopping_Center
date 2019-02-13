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
                    ایجاد دسته بندی ویژگی ها
            @endslot
                <form class="row" action="{{route('admin.attributeGroup.store')}}" method="post">
                    @csrf
                    <div class="col form-group">
                        <label class="text-bold" for="categories">انتخاب دسته بندی</label>
                        <select class="form-control w-100" name="categories" id="categories">
                            @forelse($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @empty
                                <option>دسته بندی ای نیست</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="w-100"></div>
                    <div class="col form-group">
                        <label class="text-bold" for="attributeGroup">نام دسته بندی ویژگی</label>
                        <input type="text" id="attributeGroup" name="attributeGroup" placeholder="نام دسته بندی ویژگی خود را انتخاب نمایید..." class="form-control">

                    </div>
                    <div class="w-100"></div>
                    <input type="submit" value="ثبت دسته بندی ویژگی" class="btn btn-primary btn-block mx-3">


                </form>
            @endcomponent
    </div>
    <div class="w-100"></div>
    <div class="col-sm">

        @component('component.box')
            @slot('title')
                دسته بندی ویژگی ها
                @endslot
                <table class="table table-bordered ">

                    <thead class="thead-light">
                    <tr>
                        <td class="text-bold">نام دسته بندی ویژگی</td>
                        <td class="text-bold">نام دسته بندی محصولات</td>
                        <td class="text-bold">عملیات</td>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($attributeGroups as $attributeGroup)
                        <tr>
                            <td>{{$attributeGroup->title}}</td>
                            <td>{{$attributeGroup->category->title}}</td>
                            <td class="row justify-content-center">
                                <div class="btn-group btn-group-sm " role="group" aria-label="Basic example">
                                    <a href="{{route('admin.attribute.create',['attributeGroup'=>$attributeGroup->id])}}" class="btn btn-primary text-white">افزودن عناوین</a>
                                    {{--<a class="btn btn-primary text-white">ویرایش نام</a>--}}
                                    <a onclick="document.getElementById('attributeGroup-delete').submit()" class="btn btn-primary text-white">حذف گروه</a>
                                </div>
                            </td>
                        </tr>
                        <form method="post" id="attributeGroup-delete" action="{{route('admin.attributeGroup.destroy',['id'=>$attributeGroup->id])}}">
                            @csrf
                            @method('delete')
                        </form>


                    @empty
                        <tr>
                            <td class="text-bold text-center bg-info text-white" colspan="3">هیچ دسته بندی موجود نیست</td>
                        </tr>
                    @endforelse
                    </tbody>


                </table>
        @endcomponent
    </div>
</div>
@stop