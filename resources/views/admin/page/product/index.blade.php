@extends("admin.master")

@section("main")


	@component('component.box')
		@slot('title')
			آخرین محصولات
			@endslot
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>شناسه</th>
				<th>عنوان</th>
				<th>تعداد نظرات</th>
				<th>تاریخ انتشار</th>
				<th>تاریخ بروزرسانی</th>
				<th>تنظیمات</th>
			</tr>
			</thead>
			<tbody>
			@forelse($products as $article_item)
				
				<tr>
					<td>{{$article_item->id}}</td>
					<td>{{str_limit($article_item->title,100)}}</td>
					<td>{{$article_item->commentCount}}</td>
					<td>{{$article_item->created_at}}</td>
					<td>{{$article_item->updated_at}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{route("admin.article.edit",[$article_item->slug])}}" class="btn btn-primary text-white">ویرایش</a>
							<a onclick="document.getElementById('form-delete').submit()" class="btn btn-primary text-white">حذف</a>
							<a  class="btn btn-primary text-white">مشاهده</a>
						</div>
					</td>
				</tr>
				
				<form id="form-delete" action="{{route("admin.article.destroy",[$article_item->slug])}}" method="post">
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
		
		{{$products->render()}}
	@endcomponent
@endsection