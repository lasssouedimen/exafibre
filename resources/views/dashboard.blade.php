@include('layout.menu')

<title> Dashboard | ExaFibre </title>
<head>
    <title>Line Chart</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
@include('layout.header')
<div class="content">
    {{-- Card --}}
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{ $nbChefEq }}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Chefs D'Equipes</p>
                    </div>

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg pe-7s-users"></i>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-6">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{ $nbTech }}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Technciens</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <div id="flotBar1" class="flotBar1"></div>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{ $nbPjEnc }}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Projet En Cours</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg pe-7s-users"></i>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{ $nbVoiture }}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Voitures</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <div id="flotLine1" class="flotLine1"></div>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
    </div>
    {{-- courbouwet --}}
    <div class='row'>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Line Chart </h4>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Doughut Chart </h4>
                    <canvas id="doughutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
<div class="clearfix"></div>

<script>
    //courbe1
    var venteSums = @json($venteSums);
    var achatMonths = @json($achatMonths);
    var achatSums = @json($achatSums);

    var ctx = document.getElementById("lineChart");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: achatMonths,
            datasets: [
                {
                    label: "Vente",
                    borderColor: "rgba(0,0,0,.09)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: venteSums
                },
                {
                    label: "Achat",
                    borderColor: "rgba(0, 194, 146, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 194, 146, 0.5)",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: achatSums
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


    //courbe2
    var nbPjAffect = @json($nbPjAffect);
    var nbPjEnC = @json($nbPjEnC);
    var ctx = document.getElementById( "doughutChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ nbPjAffect,nbPjEnC],
                backgroundColor: [
                                    "rgba(0, 194, 146,0.9)",
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 194, 146,0.9)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "valider sans affectation",
                            "valider"
                        ]
        },
        options: {
            responsive: true
        }
    } );
</script>
@include('layout.footer')
