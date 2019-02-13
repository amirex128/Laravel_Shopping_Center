@extends('admin.master')

@section('main')
    <link rel="stylesheet" href="{{asset('libs/bootstrap-tagsinput.css')}}">
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
                    ثبت سطر های جدول ویژگی {{$attribute->title}}

                @endslot
                <form id="form-send" action="{{route('admin.attributeItem.store',["attribute"=>$attribute->id])}}" class="row" method="post">
                    @csrf
                    <div class="col form-group">
                        <label class="text-bold" for="attribute">نام ویژگی </label>
                        <input class="form-control w-100" type="text" placeholder="برای مثال : نوع پردازنده..." name="attribute" id="attribute">
                    </div>
                    <div class="col form-group">
                        <label class="text-bold" for="attribute"> لیبل انتهایی ویژگی  </label>
                        <input class="form-control w-100" type="text" placeholder="برای مثال میلی متر..." name="description" id="attribute">
                    </div>
                    <div class="w-100"></div>
                    <div class="col form-group">
                        <label class="text-bold" for="value-default"> مقادیر پیش فرض برای ویژگی  </label>
                        <input placeholder="با زدن دکمه Enter میتوانید چند مقدار انتخاب کنید" id="value-default"type="text" name="value" data-role="tagsinput">
                    </div>
                    <div class="w-100"></div>
                    <div onclick="document.getElementById('form-send').submit()"  class="btn btn-primary btn-block mx-3"> ثبت عنوان ویژگی</div>


                </form>
            @endcomponent
        </div>
        <div class="w-100"></div>
        <div class="col-sm">

            @component('component.box')
                @slot('title')
            سطر های جدول ویژگی  {{$attribute->title}}
                @endslot
                <table class="table table-bordered ">

                    <thead class="thead-light">
                    <tr>
                        <td class="text-bold"> عنوان سطر</td>
                        <td class="text-bold"> لیبل سطر</td>
                        <td class="text-bold">مقادیر</td>
                        <td class="text-bold">عملیات</td>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($attributeItems as $attributeItem)
                        <tr >
                            <td >{{$attributeItem->title}}</td>
                            <td>{{$attributeItem->label}}</td>
                            <td>
                                <ul>
                                    @forelse ($attributeItem->value as $value)
                                        <li>
                                            {{$value}}
                                            @if (($loop->index == 2))
                                                <br>
                                                ...
                                                @break
                                            @endif
                                        </li>
                                    @empty
                                    مقدار پیش فرضی موجود نیست
                                    @endforelse
                                </ul>
                            </td>
                            <td class="row justify-content-center">
                                <div class="btn-group btn-group-sm " role="group" aria-label="Basic example">
                                    <a href="{{route('admin.attributeItem.edit',['attributeItem'=>$attributeItem->id])}}" class="btn btn-primary text-white">ویرایش</a>
                                    <a onclick="document.getElementById('attributeItem-delete').submit()" class="btn btn-primary text-white">حذف</a>
                                </div>
                            </td>
                        </tr>
                        <form method="post" id="attributeItem-delete" action="{{route('admin.attributeItem.destroy',['id'=>$attribute->id])}}">
                            @csrf
                            @method('delete')
                        </form>


                    @empty
                        <tr>
                            <td class="text-bold text-center bg-info text-white" colspan="4">هیچ عنوانی موجود نیست</td>
                        </tr>
                    @endforelse
                    </tbody>


                </table>
            @endcomponent
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('libs/bootstrap-tagsinput.js')}}"></script>

@stop