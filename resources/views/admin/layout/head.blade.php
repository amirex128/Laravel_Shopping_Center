<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{asset("assets/images/logo.svg")}}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset("assets/images/logo.svg")}}">

    <!-- style -->

    <link rel="stylesheet" href="{{asset("libs/font-awesome/css/font-awesome.min.css")}}" type="text/css" />

    <!-- build:css /assets/css/app.min.css -->
    <link rel="stylesheet" href="{{asset("libs/bootstrap/dist/css/bootstrap.min.css")}}" type="text/css" />
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}" type="text/css" />
    <link rel="stylesheet" href="{{asset("style-combo.css")}}" type="text/css" />
    <!-- endbuild -->
    <link href="{{asset("assets/css/app.rtl.css")}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset("WebFonts/css/style_font.css")}}">
</head>