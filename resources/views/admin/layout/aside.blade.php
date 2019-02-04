<div id="aside" class="app-aside fade box-shadow-x nav-expand white" aria-hidden="true">
    <div class="sidenav modal-dialog dk">
        <!-- sidenav top -->
       @include("admin.layout.aside.asidenav_top")
    <!-- Flex nav content -->
        <div class="flex hide-scroll">
            <div class="scroll">

                <div class="nav-border b-primary" data-nav>
                    @include("admin.layout.aside.asidenav_main_first")
                    @include("admin.layout.aside.asidenav_main_second")
                </div>

            </div>
        </div>

        <!-- sidenav bottom -->
        @include("admin.layout.aside.asidenav_bottom")
    </div>
</div>
