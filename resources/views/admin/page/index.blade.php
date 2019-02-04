@extends("admin.master")

@section("main")

    <div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="padding">

                    <h6>Sales Statistical Overview</h6>
                    <p class="text-muted my-3">Sale information on advertising, exhibitions, market research, online media, customer desires, PR and much more</p>
                    <p><i class="fa fa-arrow-circle-o-up text-success mr-1"></i><span class="text-success">15%</span> more than last week</p>
                    <a href="#" class="btn btn-sm btn-rounded success">Update</a>
                    <a href="#" class="btn btn-sm btn-rounded white">See detail</a>

                </div>
            </div>
            <div class="col-md-8">
                <div class="padding">
                    <canvas id="chart-line" height="120">
                    </canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters align-items-stretch">
        <div class="col-md-4 white lt">
            <div class="padding">
                <span class="badge success float-right">5</span>
                <h6 class="mb-3">Activity</h6>
                <div class="streamline streamline-dotted">
                    <div class="sl-item  b- ">
                        <div class="sl-left">
                            <img src="/assets/images/a9.jpg" class="circle" alt=".">
                        </div>
                        <div class="sl-content">
                            <span class="sl-date text-muted">15:00</span>
                            <div>
                                <a href="#" class="text-primary">Pablo Nouvelle</a>
                                Added API call to update track element
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b- ">
                        <div class="sl-left">
                            <img src="/assets/images/a10.jpg" class="circle" alt=".">
                        </div>
                        <div class="sl-content">
                            <span class="sl-date text-muted">08:00</span>
                            <div>
                                <a href="#" class="text-primary">Postiljonen</a>
                                Add Google Cast support
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b- ">
                        <div class="sl-left">
                            <img src="/assets/images/a7.jpg" class="circle" alt=".">
                        </div>
                        <div class="sl-content">
                            <span class="sl-date text-muted">05:35</span>
                            <div>
                                <a href="#" class="text-primary">Fifth Harmony</a>
                                Bug fixes
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b- ">
                        <div class="sl-left">
                            <img src="/assets/images/a6.jpg" class="circle" alt=".">
                        </div>
                        <div class="sl-content">
                            <span class="sl-date text-muted">13:23</span>
                            <div>
                                <a href="#" class="text-primary">Rita Ora</a>
                                Sent you an email
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b- ">
                        <div class="sl-left">
                            <img src="/assets/images/a1.jpg" class="circle" alt=".">
                        </div>
                        <div class="sl-content">
                            <span class="sl-date text-muted">July 21</span>
                            <div>
                                <a href="#" class="text-primary">Summerella</a>
                                Submit a support ticket
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 light bg">
            <div class="padding">
                <h6 class="mb-3">Tasks</h6>
                <div class="streamline streamline-dotted">
                    <div class="sl-item  b-primary ">
                        <div class="sl-content">
                            <span class="sl-date text-muted">13:23</span>
                            <div>
                                <a href="#" class="text-primary">Rita Ora</a>
                                Sent you an email
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b-success ">
                        <div class="sl-content">
                            <span class="sl-date text-muted">13:00</span>
                            <div>
                                <a href="#" class="text-primary">Garrett Winters</a>
                                Followed by Jessic
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b- ">
                        <div class="sl-content">
                            <span class="sl-date text-muted">12:05</span>
                            <div>
                                <a href="#" class="text-primary">Judith Garcia</a>
                                Follow up to close deal
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b- ">
                        <div class="sl-content">
                            <span class="sl-date text-muted">15:00</span>
                            <div>
                                <a href="#" class="text-primary">Pablo Nouvelle</a>
                                Added API call to update track element
                            </div>
                        </div>
                    </div>
                    <div class="sl-item  b-primary ">
                        <div class="sl-content">
                            <span class="sl-date text-muted">08:00</span>
                            <div>
                                <a href="#" class="text-primary">Postiljonen</a>
                                Add Google Cast support
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <a href="#" class="btn btn-sm btn-block white">Load More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 dk">
            <div class="padding">
                <h6>Friends</h6>
                <div class="list inset">
                    <div class="list-item " data-id="item-15">
	                    <span class="w-24 avatar circle indigo">
	                          GW
	                    </span>
                        <div class="list-body">
                            <a href="" class="item-title _500">Garrett Winters</a>


                            <div class="item-tag tag hide">
                            </div>
                        </div>
                        <div>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                    <a class="dropdown-item">
                                        <i class="fa fa-tag"></i>
                                        Action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-pencil"></i>
                                        Another action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-reply"></i>
                                        Something else here
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-ellipsis-h"></i>
                                        Separated link
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item " data-id="item-9">
	                    <span class="w-24 avatar circle cyan">
	                        <img src="/assets/images/a9.jpg" alt=".">
	                    </span>
                        <div class="list-body">
                            <a href="" class="item-title _500">Pablo Nouvelle</a>


                            <div class="item-tag tag hide">
                            </div>
                        </div>
                        <div>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                    <a class="dropdown-item">
                                        <i class="fa fa-tag"></i>
                                        Action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-pencil"></i>
                                        Another action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-reply"></i>
                                        Something else here
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-ellipsis-h"></i>
                                        Separated link
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item " data-id="item-2">
	                    <span class="w-24 avatar circle light-blue">
	                        <img src="/assets/images/a2.jpg" alt=".">
	                    </span>
                        <div class="list-body">
                            <a href="" class="item-title _500">Kygo</a>


                            <div class="item-tag tag hide">
                            </div>
                        </div>
                        <div>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                    <a class="dropdown-item">
                                        <i class="fa fa-tag"></i>
                                        Action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-pencil"></i>
                                        Another action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-reply"></i>
                                        Something else here
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-ellipsis-h"></i>
                                        Separated link
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item " data-id="item-5">
	                    <span class="w-24 avatar circle blue-grey">
	                        <img src="/assets/images/a5.jpg" alt=".">
	                    </span>
                        <div class="list-body">
                            <a href="" class="item-title _500">Radionomy</a>


                            <div class="item-tag tag hide">
                            </div>
                        </div>
                        <div>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                    <a class="dropdown-item">
                                        <i class="fa fa-tag"></i>
                                        Action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-pencil"></i>
                                        Another action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-reply"></i>
                                        Something else here
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-ellipsis-h"></i>
                                        Separated link
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item " data-id="item-7">
	                    <span class="w-24 avatar circle indigo">
	                        <img src="/assets/images/a7.jpg" alt=".">
	                    </span>
                        <div class="list-body">
                            <a href="" class="item-title _500">Fifth Harmony</a>


                            <div class="item-tag tag hide">
                            </div>
                        </div>
                        <div>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                    <a class="dropdown-item">
                                        <i class="fa fa-tag"></i>
                                        Action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-pencil"></i>
                                        Another action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-reply"></i>
                                        Something else here
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-ellipsis-h"></i>
                                        Separated link
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item " data-id="item-14">
	                    <span class="w-24 avatar circle brown">
	                          BW
	                    </span>
                        <div class="list-body">
                            <a href="" class="item-title _500">Brielle Williamson</a>


                            <div class="item-tag tag hide">
                            </div>
                        </div>
                        <div>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                    <a class="dropdown-item">
                                        <i class="fa fa-tag"></i>
                                        Action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-pencil"></i>
                                        Another action
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="fa fa-reply"></i>
                                        Something else here
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-ellipsis-h"></i>
                                        Separated link
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection