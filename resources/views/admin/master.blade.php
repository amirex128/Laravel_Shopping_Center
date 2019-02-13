<!DOCTYPE html>
<html lang="en">
@include("admin.layout.head")
<body style="overflow-x: hidden">


<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- ############ Aside START-->
@include("admin.layout.aside")
<!-- ############ Aside END-->

    <!-- ############ Content START-->
    <div id="content" class="app-content box-shadow-0" role="main">
        <!-- Header -->
    @include("admin.layout.header")
    <!-- Main -->
        <div class="content-main " id="content-main">

            <!-- ############ Main START-->


            <div>
                @yield("main")
            </div>


            <!-- ############ Main END-->

        </div>
        <!-- Footer -->
      @include("admin.layout.footer")
    </div>
    <!-- ############ Content END-->

    <!-- ############ LAYOUT END-->
</div>


<!-- build:js scripts/app.min.js -->
@include("admin.layout.script_core")
@yield("script")
<!-- endbuild -->
</body>
</html>
