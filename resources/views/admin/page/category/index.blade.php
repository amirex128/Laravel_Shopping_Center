@extends('admin.master')


@section('main')
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
	@component('component.errors')
	#@endcomponent
	@component('component.box')
	
		@slot('title')
		ایجاد دسته بندی جدید
		@endslot
	
		<form action="{{route('admin.category.store')}}" method="post" class="form-row">
			@csrf
			<div class="col form-group">
				<label for="category" class="text-bold">نام دسته بندی</label>
				<input type="text" placeholder="نام دسته بندی خود را وارد نمایید..." class="form-control" name="name-category" id="category">
			</div>
			<div class="w-100"></div>
			<div class="col form-group">
				<label for="sub-categories" class="text-bold">نام دسته بندی</label>
				<select name="sub-categories" class="custom-select">
					<option selected value="0">دسته مادر</option>
					@foreach ($categories as $category)
						<option value="{{$category->id}}">{{$category->title}}</option>
					@endforeach
				</select>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<input  type="submit" class=" btn btn-block btn-primary" value="ایجاد دسته بندی">
			
			</div>
		</form>
	@endcomponent
	@component('component.box')
		
		@slot('title')
			 دسته بندی ها
		@endslot
		
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>شناسه</th>
				<th>عنوان</th>
				<th>پدر</th>
				<th>تاریخ انتشار</th>
				<th>تاریخ بروزرسانی</th>
				<th>تنظیمات</th>
			</tr>
			</thead>
			<tbody>
			@forelse($page_categories as $cate)
				
				<tr>
					<td>{{$cate->id}}</td>
					<td>{{$cate->title}}</td>
					<td>
						@if ($cate->parent == 0)
						    دسته بندی مادر
						@else
						{{$categories->where('id',$cate->parent)->first()->title}}
						@endif
					</td>
					<td>{{$cate->created_at}}</td>
					<td>{{$cate->updated_at}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{route("admin.category.edit",[$cate->id])}}" class="btn btn-primary text-white">ویرایش</a>
							<a onclick="document.getElementById('form-delete').submit()" class="btn btn-primary text-white">حذف</a>
							<a  class="btn btn-primary text-white">مشاهده</a>
						</div>
					</td>
				</tr>
				
				<form id="form-delete" action="{{route("admin.category.destroy",[$cate->id])}}" method="post">
					@method('DELETE')
					@csrf
				</form>
			@empty
				<tr>
					<td colspan="5">هیچ محصولی موجود نیست</td>
				</tr>
			
			@endforelse
			</tbody>
		</table>
		
		{{$page_categories->render()}}

	@endcomponent

@endsection

@section('script')

@endsection