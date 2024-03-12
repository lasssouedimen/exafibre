@include('layout.menu')
@include('layout.header')
<title> Demandes | ExaFibre </title>

<div >
    <div class="animated fadeIn">
        <div >

            <div class="col-md-6">
                <div   class="card border border-secondary">
                    <div class="card-header">
                        <strong class="card-title mb-3">{{ $clientdemandes->prenom }} Demande</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <h5 class="text-sm-center mt-2 mb-1" style="font-size:18px">{{ $clientdemandes->nomfamille }}
                                {{ $clientdemandes->prenom }}</h5>
                            <div class="location text-sm-center"  style="font-size:18px"><i class="fa fa-map-marker"></i>
                                {{ $clientdemandes->pays }} , {{ $clientdemandes->ville }}</div>
                            <div><i class="fa fa-home"></i>region:{{ $clientdemandes->region }} </a>
                            </div>
                            <div><p>code postale:</p><i class="fa fa-briefcase"></i>{{ $clientdemandes->codepostal }}
                                </a>
                                <div><i class="fa fa-edit (alias)"></i></i>{{ $clientdemandes->remarque }}</a>
                                </div>
                                <td >{{ $clientdemandes->telephone }}</td>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>



@include('layout.footer')
