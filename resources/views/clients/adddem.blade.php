<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Demande service | ExaFibre </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="assets/img/icons/logotrans.png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.cs">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.cs">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css"
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
<main class="d-flex w-100" style="background-image:url(assets/img/icons/logotranspar3.png);">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <a href="#" type="submit" class="btn btn-light px-5"
                    style="font-size:13px; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right">
                    MRT Energy</a>
                <div class="card-header"><strong>Demande</strong><small>
                        Service</small>
                </div>

            </div>

            <div class="card-body card-block">
                <form action="{{ route('clientdemandes.store') }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-2"><label for="nomfamille" class=" form-control-label">Nom </label></div>
                        <div class="col-12 col-md-4"><input type="text" id="nomfamille" name="nomfamille"
                                placeholder="nom" class="form-control"></div>
                        <div class="col col-md-2"><label for="Prenom" class=" form-control-label">Prenom </label>
                        </div>
                        <div class="col-12 col-md-4"><input type="text" id="Prenom" name="Prenom"
                                placeholder="prenom" class="form-control"></div>

                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="mail" class=" form-control-label">Mail</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="mail" name="mail"
                                placeholder="Enter Email" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="telephone" class=" form-control-label">numero
                                telephonique</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="telephone" name="telephone"
                                placeholder="Enter number" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="ville" class=" form-control-label">ville</label></div>
                        <div class="col-12 col-md-9">
                            <select name="ville" id="ville" class="form-control">
                                <option value="0">s'il vous plait selectioner votre ville</option>
                                <option value="1">Marseille</option>
                                <option value="2">Lyon</option>
                                <option value="3">Toulouse </option>
                                <option value="4">Nice </option>
                                <option value="5">paris </option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="pays" class=" form-control-label">pays</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="pays" id="pays" class="form-control-sm form-control">
                                <option value="0">s'il vous plait selectionner votre pays</option>
                                <option value="1">france </option>

                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="codepostal" class=" form-control-label">code postal
                            </label></div>
                        <div class="col col-md-9">
                            <select name="codepostal" id="codepostal" multiple="" class="form-control">
                                <option value="1">75001</option>
                                <option value="2">75002</option>
                                <option value="3">75003</option>
                                <option value="4">75004</option>
                                <option value="5">75005</option>
                                <option value="6">75006</option>
                                <option value="7">75007</option>
                                <option value="8">75008</option>
                                <option value="9">75009</option>
                                <option value="10">75010</option>
                                <option value="11">75011</option>
                                <option value="12">75012</option>
                                <option value="13">75013</option>
                                <option value="14">75014</option>
                                <option value="15">75015</option>
                                <option value="16">75016</option>
                                <option value="17">75116</option>
                                <option value="18">75017</option>
                                <option value="19">75018</option>
                                <option value="20">75019</option>
                                <option value="21">75020</option>
                                <option value="22">75000</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="remarque" class=" form-control-label">remarque</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="remarque" id="remarque" rows="9" placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-light px-5"
                            style="font-size:13px ; background-color:rgb(57, 177, 97) ; color:rgb(243, 243, 245) ; float: right ">Terminer</button>

                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
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



<div class="container d-flex flex-column">
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
                <div class="card" style="background-color:rgb(243, 242, 248)  background-image:url(assets/img/icons/logotranspar3.png);">
                    
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
              
          
                    <div class="col-lg-12">
                        
                            <div class="card-body">
                               <a class="badge bg-primary ms-2"></a>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="content-wrapper">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                            <div class="card-header">
                                                <a href="#" type="submit" class="btn btn-light px-5"
                                                    style="font-size:13px; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right">
                                                    MRT Energy</a>
                                                <div class="card-header"><strong>Demande</strong><small>
                                                    Service</small>
                                                </div>

                                            </div>
                                            <div class="card-body card-block">
                                                @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        <p>{{ $message }}</p>
                                                    </div>
                                                @endif

                                                <form action="{{ route('clientdemandes.store') }}" method="post"
                                                    class="form-horizontal">
                                                    @csrf
                                                    <div class="row form-group">
                                                        <div class="col-4"><label>prenom : </label><input
                                                                name="prenom" type="text" class="form-control">
                                                            @error('prenom')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-8"><label>nom de famille :</label><input
                                                                name="nomfamille" type="text"
                                                                class="form-control">
                                                            @error('nomdelafamille')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-5"> <label>telephone:</label><input
                                                                name="telephone" type="text"
                                                                class="form-control">
                                                            @error('telephone')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-5"> <label>mail:</label><input
                                                                name="mail" type="mail" class="form-control">
                                                            @error('mail')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <div class="row form-group">

                                                        <div class="col-7">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="ville"
                                                                        class=" form-control-label">ville :</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <select name="ville" id="ville"
                                                                        class="form-control-sm form-control">
                                                                        <option value="0">selectioner votre
                                                                            ville
                                                                        </option>
                                                                        <option value="Marseille">Marseille</option>
                                                                        <option value="Lyon">Lyon</option>
                                                                        <option value="Toulouse">Toulouse</option>
                                                                        <option value="Nice">Nice</option>
                                                                    </select>
                                                                    @error('ville')
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="pays"
                                                                        class=" form-control-label">pays :</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <select name="pays" id="pays"
                                                                        class="form-control-sm form-control">
                                                                        <option value="0">selectioner votre
                                                                            pays
                                                                        </option>
                                                                        <option value="france">france</option>

                                                                    </select>
                                                                    @error('pays')
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-8"><label
                                                                for="region">region:</label><input
                                                                name="region" type="text"
                                                                class="form-control">
                                                            @error('region')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-4"  class="form-control"> <label>code postal:</label><input
                                                                name="codepostal"type="number"
                                                               >
                                                            @error('codepostal')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="remarque"
                                                                class=" form-control-label">Remarque</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="remarque" id="remarque" rows="9" class="form-control">@error('codepostal')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-light px-5"
                                                        style="font-size:13px ; background-color:rgb(57, 177, 97) ; color:rgb(243, 243, 245) ; float: right ">Terminer</button>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>