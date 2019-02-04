
    @extends('layouts.app')

    @section('auth-content')
    <div class="d-flex flex-column flex">


        <div class="box">
            <div class="navbar navbar-expand-lg">
                <!-- btn to toggle sidenav on small screen -->
                <a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z"/>
                    </svg>
                </a>
                <!-- Page title -->
                <div class="navbar-text nav-title " id="pageTitle">{{config("app.name")}}</div>

                @guest
                    <ul class="nav flex-row order-lg-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown">
                                ورود سریع
                            </a>
                            <!-- dropdown -->
                            <div class="dropdown-menu mt-2 dropdown-menu-right">
                                <form role="form" class="px-4 py-3">
                                    <div class="form-group">
                                        <label> ایمیل :</label>
                                        <input type="email" name="email" class="form-control"
                                               placeholder="ایمیل خود را وارد نمایید">
                                    </div>
                                    <div class="form-group">
                                        <label>پسورد :</label>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="پسورد خود را وارد نمایید">
                                    </div>
                                    <div class="checkbox mb-3">
                                        <label class="md-check">
                                            <input name="remember" type="checkbox"><i></i> مرا به خاطر بسپار
                                        </label>
                                    </div>
                                    <button class="btn btn-sm primary text-u-c">ورود</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">هنوز ثبت نام نکرده اید ؟</a>
                                <a class="dropdown-item" href="#">رمز خود را فراموش کرده اید ؟</a>
                            </div>
                            <!-- / dropdown -->
                        </li>

                        <li class="d-flex align-items-center">
                            <a href="{{ route('register') }}"
                               class="btn btn-rounded btn-sm primary btn-theme d-none d-lg-block">
                                ثبت نام
                            </a>
                        </li>
                        <li class="d-flex align-items-center">
                            <a href="{{ route('login') }}"
                               class="btn btn-rounded btn-sm warn btn-theme d-none d-lg-block mr-2">
                                ورود
                            </a>
                        </li>
                        <!-- Navarbar toggle btn -->
                        <li class="d-lg-none d-flex align-items-center">
                            <a href="#" class="mx-2" data-toggle="collapse" data-target="#navbarToggler">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                    <path d="M64 144h384v32H64zM64 240h384v32H64zM64 336h384v32H64z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                @else
                    <ul class="nav flex-row order-lg-2">

                        <li class="d-flex align-items-center">
                            <a href="{{ route('login') }}"
                               class="btn btn-rounded btn-sm warn btn-theme d-none d-lg-block mr-2 success">
                                {{auth()->user()->name}}
                            </a>
                        </li>

                    </ul>
                    <ul class="nav flex-row order-lg-2">

                        <li class="d-flex align-items-center">
                            <a href="{{ route('login') }} "
                               class="btn btn-rounded btn-sm warn btn-theme d-none d-lg-block mr-2 success">
                                خروج
                            </a>
                        </li>

                    </ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
            @endguest

            <!-- Navbar collapse -->
                <div class="collapse navbar-collapse  order-lg-1" id="navbarToggler">
                    <ul class="navbar-nav mt-2 mt-lg-0 mx-0 mx-lg-2 ">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                پنل مدیریت
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                دسترسی سریع
                            </a>
                            <div class="dropdown-menu mt-2 text-color" role="menu">
                                <a class="dropdown-item">
                                    <i class="fa fa-tag"></i>
                                    محصولات
                                </a>
                                <a class="dropdown-item">
                                    <i class="fa fa-pencil"></i>
                                    مقالات
                                </a>
                                <a class="dropdown-item">
                                    <i class="fa fa-reply"></i>
                                    دوره های آموزشی
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item">
                                    <i class="fa fa-ellipsis-h"></i>
                                    ارتباط با مدیریت
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div id="content-body">
            <div class="py-5 text-center w-100">
                <div class="mx-auto w-xxl w-auto-xs">
                    <div class="px-3">
                        <div>
                            <a href="#" class="btn btn-block indigo text-white mb-2">
                                <i class="fa fa-facebook float-left"></i>
                                عضویت از طریق Facebook
                            </a>
                            <a href="#" class="btn btn-block red text-white">
                                <i class="fa fa-google-plus float-left"></i>
                                عضویت از طریق Google+
                            </a>
                        </div>
                        <div class="my-3 text-sm">
                            یا
                        </div>
                        {{--<form name="form" method="post" action="{{route("register")}}">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<div class="form-group">--}}
                        {{--<input name="name" type="text" class="form-control" placeholder="نام کامل خود را وارد نمایید..." required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="email" name="email" class="form-control" placeholder="ایمیل خود را وارد نمایید..." required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="password" name="password" class="form-control" placeholder="پسورد خود را وارد نمایید..." required>--}}
                        {{--</div>--}}
                        {{--<div class="mb-3 text-sm">--}}
                        {{--<span class="text-muted">با کلیک کردن بر روی دکمه ثبت نام بدین معنی ست که شما</span>--}}
                        {{--<a href="#">سیاست ها</a>--}}
                        {{--<span class="text-muted">و</span>--}}
                        {{--<a href="#">مقرارات ما را پذیرفته اید .</a>--}}
                        {{--</div>--}}
                        {{--<input type="submit" value="ثبت نام" class="btn primary">--}}
                        {{--</form>--}}

                        <form action="{{route("register")}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="name">
                            <input type="text" name="email">
                            <input type="text" name="password">
                            <input type="submit" value="send">
                        </form>
                        <div class="py-4 text-center">
                            <div>آیا قبلا ثبت نام کرده اید ؟ <a href="{{ route('login') }}" class="text-primary _600">ورود</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">{{ __('Register') }}</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<form method="POST" action="{{ route('register') }}">--}}
                            {{--@csrf--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row mb-0">--}}
                                {{--<div class="col-md-6 offset-md-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--{{ __('Register') }}--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



@endsection
