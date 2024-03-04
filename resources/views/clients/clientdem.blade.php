<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Demande service | ExaFibre </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('https://i.imgur.com/QRAUqs9.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/icons/logotrans.png') }}">


    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css') }}"
        rel="stylesheet" />

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>
<main class="content" style="background-color:white ; background-image:url(assets/img/icons/logotranspar3.png);">

    <div id="wrapper" style=" display: flex ;  ">
        <div class="mb-3">
            <h1>Demande Service</h1><a class="badge bg-primary ms-2"></a>
        </div>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-lg-10 ">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">

                            <div class="card-body">
                                <div class="form-group">
                                    <a href="" type="submit" class="btn btn-light px-5"
                                        style="font-size:13px; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right">
                                        MAT Energy</a>
                                    <div class="card-header"><strong>Ajouter</strong><small> Demande</small></div>
                                    <div class="card-body card-block">
                                    </div>
                                    <hr>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif

                                    <form action="{{ route('Techniciens.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>prenom :
                                                    </label>
                                                    <input type="text" name="prenom" class="form-control"
                                                        placeholder="prenom ">
                                                    @error('prenom')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>nom de la famille :</label>
                                                    <input type="text" name="nomfamille" class="form-control"
                                                        placeholder="nomfamille">
                                                    @error('nomfamille')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>telephone:</label>
                                                    <input type="number" name="telephone" class="form-control"
                                                        placeholder=" num telephone">
                                                    @error('Telephone')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>mail:</label>
                                                    <input type="email" name="mail" class="form-control"
                                                        placeholder=" votre mail">
                                                    @error('mail')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label> ville:</label>
                                                    <input type="text" name="ville" class="form-control"
                                                        placeholder="ville">
                                                    @error('ville')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>pays:</label>
                                                    <input type="text" name="pays" class="form-control"
                                                        placeholder="pays">
                                                    @error('pays')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>region:</label>
                                                    <input type="text" name="region" class="form-control"
                                                        placeholder="region">
                                                    @error('region')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>code postal:</label>
                                                    <input type="number" name="codepostal" class="form-control"
                                                        placeholder="codepostal">
                                                    @error('codepostal')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>remarque:</label>
                                                    <input type="text" name="remarque" class="form-control"
                                                        placeholder="remarque">
                                                    @error('remarque')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-light px-5"
                                                style="font-size:13px ; background-color:rgb(57, 177, 97) ; color:rgb(243, 243, 245) ; float: right ">Terminer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>


<!-- Scripts -->
<script src="{{ asset('https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js') }}">
</script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!--  Chart js -->
<script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js') }}"></script>

<!--Chartist Chart-->
<script src="{{ asset('https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js') }}">
</script>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js') }}"></script>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('assets/js/init/weather-init.js') }}"></script>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/js/init/fullcalendar-init.js') }}"></script>

<!--Local Stuff-->
<script>
    jQuery(document).ready(function($) {
        "use strict";

        // Pie chart flotPie1
        var piedata = [{
                label: "Desktop visits",
                data: [
                    [1, 32]
                ],
                color: '#5c6bc0'
            },
            {
                label: "Tab visits",
                data: [
                    [1, 33]
                ],
                color: '#ef5350'
            },
            {
                label: "Mobile visits",
                data: [
                    [1, 35]
                ],
                color: '#66bb6a'
            }
        ];

        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2 / 3,
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
        // cellPaiChart
        var cellPaiChart = [{
                label: "Direct Sell",
                data: [
                    [1, 65]
                ],
                color: '#5b83de'
            },
            {
                label: "Channel Sell",
                data: [
                    [1, 35]
                ],
                color: '#00bfa5'
            }
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
            },
            grid: {
                hoverable: true,
                clickable: true
            }

        });
        // cellPaiChart End
        // Line Chart  #flotLine5
        var newCust = [
            [0, 3],
            [1, 5],
            [2, 4],
            [3, 7],
            [4, 9],
            [5, 3],
            [6, 6],
            [7, 4],
            [8, 10]
        ];

        var plot = $.plot($('#flotLine5'), [{
            data: newCust,
            label: 'New Data Flow',
            color: '#fff'
        }], {
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
                    [0, 18000, 35000, 25000, 22000, 0],
                    [0, 33000, 15000, 20000, 15000, 300],
                    [0, 15000, 28000, 15000, 30000, 5000]
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
                if (data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 2000 * data.index,
                            dur: 2000,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect
                                .height()).stringify(),
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
            var ctx = document.getElementById("TrafficChart");
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                    datasets: [{
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
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
            });
        }
        //Traffic chart chart-js  End
        // Bar Chart #flotBarChart
        $.plot("#flotBarChart", [{
            data: [
                [0, 18],
                [2, 8],
                [4, 5],
                [6, 13],
                [8, 5],
                [10, 7],
                [12, 4],
                [14, 6],
                [16, 15],
                [18, 9],
                [20, 17],
                [22, 7],
                [24, 4],
                [26, 9],
                [28, 11]
            ],
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
    });
</script>
</body>

</html>
