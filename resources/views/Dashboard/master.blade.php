<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="Mast Ticket admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('img/mast-ticket.png')}}">
    <link rel="shortcut icon" href="{{asset('img/mast-ticket.png')}}">

    <link rel="stylesheet" href="{{asset('dashboard/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/pe-icon-7-filled.css')}}">


    <link href="{{asset('dashboard/assets/weather/css/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/calendar/fullcalendar.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css')}}">
    <link href="{{asset('dashboard/assets/css/charts/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">


    <style>
        #weatherWidget .currentDesc {
            color: #ffffff!important;
        }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
    @yield('sohag')

</head>
<body>


<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#"><i class="menu-icon fa fa-home"></i>Visit Home </a>
                </li>
                <li class="menu-title">#</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="#">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="#">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="#">Tabs</a></li>

                        <li><i class="fa fa-id-card-o"></i><a href="#">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="#">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="#">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="#">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="#">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="#">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="#">Typography</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Purchases</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('PurchaseCRUD')}}">Purchase CRUD</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('AddPurchase')}}">Add New Purchase</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('ViewPurchase')}}">View Purchase List</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Products</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('ProductsCRUD')}}">Products CRUD</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('StoreProducts')}}">Store Product</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('ViewProducts')}}">View Products</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Customers</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('CustomerCRUD')}}">Customer CRUD</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('AddCustomer')}}">Add Customer</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('ViewCustomers')}}">View Customers</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sales</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('SalesCRUD')}}">Sales CRUD</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('SellProducts')}}">Sell Products</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('ViewSales')}}">View Sales</a></li>
                    </ul>
                </li>

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="#">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="#">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="#">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="#">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="#">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="#">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="#">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="#">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Left Panel -->



<!-- Right Panel -->
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="{{asset('dashboard/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('dashboard/images/logo2.png')}}" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">{{count(auth()->user()->unreadNotifications)}}</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have {{count(auth()->user()->unreadNotifications)}} Notifications</p>
                                {{--<i class="fa fa-check"></i>--}}
                                @foreach(auth()->user()->unreadNotifications as $notification)
                                    @foreach($notification->data as $d)
                                       <a class="dropdown-item media" href="#">
                                           <p>{{$d}}</p>
                                       </a>
                                    @endforeach
                                @endforeach
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{--{{ Auth::user()->username }}--}}
                        <img class="user-avatar rounded-circle" src="/dashboard/images/Admin/{{ Auth::user()->username }}.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        {{--<a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>--}}

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                        <a class="nav-link" href="{{route('AdminLogout')}}"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- /header -->
    <!-- Header-->
    @yield('breadcrumbs')
    @yield('content')
    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2019 Sohag Rana
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Sohag Rana</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->


<script src="{{asset('dashboard/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins.js')}}"></script>
<script src="{{asset('dashboard/assets/js/main.js')}}"></script>

<script src="{{asset('dashboard/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>


<!--Chartist Chart-->
<script src="{{asset('dashboard/assets/js/lib/chartist/chartist.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/chartist/chartist-plugin-legend.js')}}"></script>


<script src="{{asset('dashboard/assets/js/lib/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/flot-chart/jquery.flot.spline.js')}}"></script>


<script src="{{asset('dashboard/assets/weather/js/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('dashboard/assets/weather/js/weather-init.js')}}"></script>


<script src="{{asset('dashboard/assets/js/lib/moment/moment.js')}}"></script>
<script src="{{asset('dashboard/assets/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('dashboard/assets/calendar/fullcalendar-init.js')}}"></script>






<script>
    jQuery(document).ready(function($) {
        "use strict";

        // Pie chart flotPie1
        var piedata = [
            { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
            { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
            { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
        ];

        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2/3,
                        threshold: 1
                    },
                    stroke: {
                        width: 0
                    }
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        });

        // Pie chart flotPie1  End




        var cellPaiChart = [
            { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
            { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
        ];
        $.plot('#cellPaiChart', cellPaiChart, {
            series: {
                pie: {
                    show: true,
                    stroke: {
                        width: 0
                    }
                }
            },
            legend: {
                show: false
            },grid: {
                hoverable: true,
                clickable: true
            }

        });















        // Line Chart  #flotLine5
        var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

        var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });

        // Line Chart  #flotLine5 End





        // Traffic Chart using chartist
        if ($('#traffic-chart').length) {
            var chart = new Chartist.Line('#traffic-chart', {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                series: [
                    [0, 18000, 35000,  25000,  22000,  0],
                    [0, 33000, 15000,  20000,  15000,  300],
                    [0, 15000, 28000,  15000,  30000,  5000]
                ]
            }, {
                low: 0,
                showArea: true,
                showLine: false,
                showPoint: false,
                fullWidth: true,
                axisX: {
                    showGrid: true
                }
            });

            chart.on('draw', function(data) {
                if(data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 2000 * data.index,
                            dur: 2000,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                            to: data.path.clone().stringify(),
                            easing: Chartist.Svg.Easing.easeOutQuint
                        }
                    });
                }
            });
        }
        // Traffic Chart using chartist End




        //Traffic chart chart-js
        if ($('#TrafficChart').length) {
            var ctx = document.getElementById( "TrafficChart" );
            ctx.height = 150;
            var myChart = new Chart( ctx, {
                type: 'line',
                data: {
                    labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                    datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                    ]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    }

                }
            } );
        }
        //Traffic chart chart-js  End



        // Bar Chart #flotBarChart
        $.plot("#flotBarChart", [{
            data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
            bars: {
                show: true,
                lineWidth: 0,
                fillColor: '#ffffff8a'
            }
        }], {
            grid: {
                show: false
            }
        });
        // Bar Chart #flotBarChart End

    });  // End of Document Ready
</script>
<script>
    $(document).ready(function() {
    function amount() {
        var x = document.getElementById("source").value;
        document.getElementById("busType").value = x*2;
    }
    });
</script>
{{--@yield('js')--}}
</body>
</html>
