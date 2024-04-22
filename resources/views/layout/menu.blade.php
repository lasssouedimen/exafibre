<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('https://i.imgur.com/QRAUqs9.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/icons/logotrans.png')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css')}}" rel="stylesheet">

    <link href="{{asset('https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css')}}" rel="stylesheet" />

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
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.html" ><i class="menu-icon fa fa-laptop" ></i>Dashboard </a>
                    </li>
                    <li class="menu-title">client</li>

                    <li>
                        <a href="{{route('demandes.index')}}" ><i class="menu-icon fa fa-envelope "></i>Demande</a>
                            
                    </li>
                    <li class="menu-title">mrt energie</li>

                    <li >
                        <a href="{{route('Techniciens.index')}}" > <i class="menu-icon fa  fa-group (alias)"></i>Techniciens</a>

                    </li>
                    <li>
                        <a href="{{route('travailles.index')}}"> <i class="menu-icon fa fa-server"></i>Travail</a>
                    </li>


                    <li >
                        <a href="{{route('parking.index')}}" > <i class="menu-icon fa fa-truck"></i>Parking</a>
                        
                    </li>
                    <li class="menu-title">materiel</li>
                    <li>
                        
                        <a href=""> <i class="menu-icon fa fa-home"></i>stock.
                        
                         </a>
                    </li>
                    <li class="menu-title">analyse</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" > <i class="menu-icon fa fa-bar-chart-o"></i>Analyse de donnees</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html"> Maps de travail</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Maps de voiture</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </aside>