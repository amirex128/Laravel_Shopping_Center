<ul class="nav bg">

    <li class="nav-header">
        <div class="py-3">
            <a href="#" class="btn btn-sm success theme-accent btn-block">
                <i class="fa fa-fw fa-plus"></i>
                <span class="hidden-folded d-inline">مقاله جدید</span>
            </a>
        </div>
        <span class="text-xs hidden-folded">مدیریت</span>
    </li>
    <li>
        <a href="{{route("admin.panel")}}">
		                  <span class="nav-icon">
		                    <i class="fa fa-dashboard"></i>
		                  </span>
            <span class="nav-text">داشبورد</span>
        </a>
    </li>
    <li>
        <a>
		                  <span class="nav-caret">
		                    <i class="fa fa-caret-down"></i>
		                  </span>
            <span class="nav-icon">
		                    <i class="fa fa-align-left"></i>
		                  </span>
            <span class="nav-text">مقالات</span>
        </a>
        <ul class="nav-sub">
            <li>
                <a href="{{route("admin.article.create")}}">
                    <span class="nav-text">ایجاد مقاله</span>
                </a>
            </li>
            <li>
                <a href="{{route("admin.article.index")}}">
                    <span class="nav-text">تمام مقالات</span>
                </a>
            </li>
            <li>
                <a href="{{route("admin.comment.index")}}">
                    <span class="nav-text">نظرات</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="nav-text">گالری</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a>
		                  <span class="nav-caret">
		                    <i class="fa fa-caret-down"></i>
		                  </span>
            <span class="nav-icon">
		                    <i class="fa fa-align-left"></i>
		                  </span>
            <span class="nav-text">دوره های آموزشی</span>
        </a>
        <ul class="nav-sub">
            <li>
                <a href="{{route("admin.course.create")}}">
                    <span class="nav-text">ایجاد دوره</span>
                </a>
            </li>
            <li>
                <a href="{{route("admin.course.index")}}">
                    <span class="nav-text">تمام دوره ها</span>
                </a>
            </li>
            <li>
                <a>
                    		                  <span class="nav-caret">
		                    <i class="fa fa-caret-down"></i>
		                  </span>
                    <span class="nav-text">قسمت ها</span>
                </a>
                <ul class="nav-sub">
                    <li>
                        <a href="{{route("admin.episode.create")}}">
                            <span class="nav-text">ایجاد قسمت</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route("admin.episode.index")}}">
                            <span class="nav-text">تمام قسمت ها</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="{{route("admin.comment.index")}}">
                    <span class="nav-text">نظرات</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="nav-text">ویدیو ها</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a>
		                  <span class="nav-caret">
		                    <i class="fa fa-caret-down"></i>
		                  </span>
            <span class="nav-icon">
		                    <i class="fa fa-align-left"></i>
		                  </span>
            <span class="nav-text">کاربران</span>
        </a>
        <ul class="nav-sub">
            <li>
                <a href="{{route("admin.user.create")}}">
                    <span class="nav-text">کاربر جدید</span>
                </a>
            </li>
            <li>
                <a href="{{route("admin.user.index")}}">
                    <span class="nav-text">تمام کاربران</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a>
		                  <span class="nav-caret">
		                    <i class="fa fa-caret-down"></i>
		                  </span>
            <span class="nav-icon">
		                    <i class="fa fa-align-left"></i>
		                  </span>
            <span class="nav-text">محصولات</span>
        </a>
        <ul class="nav-sub">
            <li>
                <a href="layout.header.html">
                    <span class="nav-text">ایجاد مقاله</span>
                </a>
            </li>
            <li>
                <a href="layout.sidenav.html">
                    <span class="nav-text">تمام مقالات</span>
                </a>
            </li>
            <li>
                <a href="layout.aside.html">
                    <span class="nav-text">نظرات</span>
                </a>
            </li>
            <li>
                <a href="layout.flex.html">
                    <span class="nav-text">گالری</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="app.inbox.html">
		                  <span class="nav-badge">
		                    <b class="badge badge-sm badge-pill success">6</b>
		                  </span>
            <span class="nav-icon">
		                    <i class="fa fa-envelope"></i>
		                  </span>
            <span class="nav-text">نظرات جدید</span>
        </a>
    </li>
    <li class="pb-2 hidden-folded"></li>
</ul>
