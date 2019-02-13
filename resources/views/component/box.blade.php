<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header primary">
                    <h3>{{$title}}</h3>
                    <div class="box-tool">
                        <ul class="nav nav-xs">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="fa fa-fw fa-refresh"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <div class="container">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>