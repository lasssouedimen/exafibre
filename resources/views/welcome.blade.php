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
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">@lang('Log in')</a>

                    @if (Route::has('register'))
                        <a href="{{ route('clientdemandes.index') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">@lang('Demande service')</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="bloc-top">
            <div style="background-color:#3353ff;" class= "mhp-container d-flex justify-content-space-between
                d-block-mob">
                <div>
                    <h1  style="color:aliceblue ; font-family:Inter ;
                    font-style:normal ;" >
                        MRT ENERGY
                    </h1>
                    <div class="d-flex mt-32 ">
                        <div style=" padding: 32px 0;  position: relative;    object-fit: contain;
                        width: 188px;    "
    
                            class="logo-soc d-flex justify-content-center align-items-center bg-color-white border-radius-8">
                            <img src="https://www.hellopro.fr/images/logo/logo_1564920.jpg" alt="MRT ENERGY"
                                title="MRT ENERGY">
                        </div>
                        <div class="espace-prospect"></div>
                    </div>
                </div>

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
    box-shadow: 0 3px 3px rgba(0,0,0,0.07);
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
    display: flex;}
        
</style>
