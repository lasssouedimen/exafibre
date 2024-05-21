@include('layout.menu')

<title> Dashboard | ExaFibre </title>

@include('layout.header')
<div class="content">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{$nbChefEq}}</span>
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
                            <span class="count">{{$nbTech}}</span>
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
                            <span class="count">{{$nbPjEnc}}</span>
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
                            <span class="count">{{$nbVoiture}}</span>
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
</div>
<!-- /.content -->
<div class="clearfix"></div>
@include('layout.footer')
