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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
