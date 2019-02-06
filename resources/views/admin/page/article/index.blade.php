@extends("admin.master")

@section("main")

    <div class="container">
        <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header primary">
                            <h3>آخرین مقالات</h3>
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
                                @forelse($articles as $article_item)

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


                                @endforelse
                                </tbody>
                            </table>

                            {{$articles->render()}}

                        </div>
                    </div>
            </div>

        </div>
    </div>

@endsection