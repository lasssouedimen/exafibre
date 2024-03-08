@include('layout.menu')
@include('layout.header')
<title> Demandes | ExaFibre </title>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">{{ $clientdemandes->prenom }} Demande</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <h5 class="text-sm-center mt-2 mb-1" style="font-size:20px">{{ $clientdemandes->nomfamille }}
                                {{ $clientdemandes->prenom }}</h5>
                            <div class="location text-sm-center"  style="font-size:20px"><i class="fa fa-map-marker"></i>
                                {{ $clientdemandes->pays }} , {{ $clientdemandes->ville }}</div>
                            <div  style="font-size:20px"><i class="fa fa-home"></i>{{ $clientdemandes->region }} </a>
                            </div>
                            <div  style="font-size:20px"  ><i class="fa fa-briefcase"></i>{{ $clientdemandes->codepostal }}
                                </a>
                                <div><i class="fa fa-edit (alias)"></i></i>{{ $clientdemandes->remarque }}</a>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>


            
        </div>
    </div> <!-- /.table-stats -->
</div>



@include('layout.footer')
