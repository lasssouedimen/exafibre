<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenu in ExaFibre</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body style="margin-left: 50px ; margin-right:50px">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    @if (Route::has('register'))
                        <a href="{{ route('clientdemandes.index') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">@lang('Demande service')</a>
                    @endif
                @endauth
            </div>
        @endif
   <img src="{{ asset('images') }}/{{ $information->logo }}" alt="Charles Hall"
     style="float:right ; margin-top:250px ;" />        
        <div>
            <p style="margin-top:250px ; color:#005eff; font-size: 1.2rem;text-align: center">MRT ENERGIE, société par
                actions simplifiée, immatriculée sous le SIREN 844079236, est en activité depuis 5 ans. Établie à
                GARGES-LES-GONESSE (95140), elle est spécialisée dans le secteur d'activité des télécommunications
                filaires. Son effectif est compris entre 10 et 19 salariés. Sur l'année 2022 elle réalise un chiffre
                d'affaires de 6 608 700,00 €.
            </p>
        </div>
        <div>
            <a href="{{ route('login') }}" class="btn btn-light px-5 "
                style="  width: 20%;
            background-color: rgb(64, 33, 235);
            color: rgb(243, 243, 245);
           ">@lang('Log in')</a>

        </div>
        <div>
            <a href="{{ route('clientdemandes.index') }}" class="btn btn-light px-5 "
                style="  width: 20%;
    background-color:rgb(57, 177, 97);
    color: rgb(243, 243, 245);
   ">@lang('Demande service')</a>
        </div>
    </div>
</body>

</html>
<style>
    .bloc-bottom,
    .bloc-top {
        position: relative;
        color: var(--color-white);
        background-color: var(--color-bleu);
        padding: 32px 0;
    }

    .bloc-top .logo-soc {
        bottom: -30px;
        min-width: 188px;
        width: 188px;
        height: 188px;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.07);
    }

    .justify-content-center {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .align-items-center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .d-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
</style>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

