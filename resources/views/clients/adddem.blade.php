<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Demande service | ExaFibre </title>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords"
            content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <style>
            #map { height: 200px; width: 80%; }
        </style>

        <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />



        <link href="css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1/dist/css/bootstrap.min.css">

    </head>

<body>
    <main class="d-flex w-100"  style="background-color:white ; background-image:url({{ asset('assets/img/icons/logotranspar3.png') }});">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card" style="background-color:rgb(243, 242, 248) ">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">


                                        <div class="card-header"><strong>Demande</strong><small>
                                                Service</small>

                                        </div>
                                        
                                          <form action="{{ route('clientdemandes.store') }}" method="post"
                                            enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="nomfamille"
                                                        class=" form-control-label">Nom </label></div>
                                                <div class="col-12 col-md-3"><input type="text" id="nomfamille"
                                                        name="nomfamille" placeholder="nom" class="form-control"
                                                        required></div>
                                                <div class="col col-md-2"><label for="prenom"
                                                        class=" form-control-label">Prenom </label>
                                                </div>
                                                <div class="col-12 col-md-4"><input type="text" id="prenom"
                                                        name="prenom" placeholder="prenom" class="form-control"
                                                        required></div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="mail"
                                                        class=" form-control-label">Mail</label></div>
                                                <div class="col-12 col-md-9"><input type="email" id="mail"
                                                        name="mail" placeholder="Enter Email" class="form-control"
                                                        required></div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="telephone"
                                                        class=" form-control-label">numero telephone
                                                        </label></div>
                                                <div class="col-12 col-md-9"><input type="number" id="telephone"
                                                        name="telephone" placeholder="Enter number" class="form-control"
                                                        required></div>
                                            </div>

                                            <div id="map"></div>
                                            
                                            <input type="hidden" id="latitude" name="latitude">
                                            <input type="hidden" id="longitude" name="longitude">
                                            <div class="row form-group">
                                            <div class="col-12 col-md-4"><input type="text" id="pays" name="pays" placeholder="Pays" class="form-control"
                                                required></div>
                                                <div class="col-12 col-md-4"><input type="text" id="ville" name="ville" placeholder="Ville" class="form-control"
                                                    required></div>
                                            </div>
                                    

                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="remarque"
                                                        class=" form-control-label">Description </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="remarque" id="remarque" rows="9" placeholder="Content..." class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-light px-5"
                                                    style="font-size:13px ; background-color:rgb(57, 177, 97) ; color:rgb(243, 243, 245) ; float: right ">Terminer</button>

                                                <button type="reset" class="btn btn-danger btn-sm" style=" float: left">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>

                                        @if (session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>

<script>
    var map = L.map('map').setView([46.603354, 1.888334], 6);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var marker;

    function onMapClick(e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker(e.latlng).addTo(map);
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;

        // Utilisez un service de géocodage inversé pour obtenir le pays et la ville
        fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${e.latlng.lat}&lon=${e.latlng.lng}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('pays').value = data.address.country;
                document.getElementById('ville').value = data.address.city || data.address.town || data.address.village;
            });
    }

    map.on('click', onMapClick);
</script>
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
