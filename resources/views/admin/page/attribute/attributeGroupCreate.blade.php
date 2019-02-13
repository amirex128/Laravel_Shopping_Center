@extends('admin.master')


@section('main')
<div class="row">
    <div class="col-sm">
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
            @if (session('success'))
                <div class="alert alert-success mt-5">
                    {{session('success')}}
                </div>
            @endif
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header primary">
                            <h3>ایجاد دسته بندی ویژگی ها</h3>
                            <div class="box-tool">
                                <ul class="nav nav-xs">
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="fa fa-fw fa-refresh"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body">


                            <div class="container">
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
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-sm">
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header primary">
                            <h3>دسته بندی ویژگی ها</h3>
                            <div class="box-tool">
                                <ul class="nav nav-xs">
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="fa fa-fw fa-refresh"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="container">

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
                                                <td>
                                                    
                                                </td>
                                            </tr>


                                            @empty
                                            <tr>
                                                <td class="text-bold text-center bg-info text-white" colspan="3">هیچ دسته بندی موجود نیست</td>
                                            </tr>
                                         @endforelse
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop