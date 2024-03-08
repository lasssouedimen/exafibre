@include('layout.menu')
@include('layout.header')
<title> Demandes | ExaFibre </title>
<main class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Demandes </strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">prenom </th>
                                    <th scope="col">nom famille</th>
                                    <th scope="col"> telephone</th>
                                    <th scope="col"> ville</th>
                                    <th scope="col"> état</th>
                                    <th> action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientdemandes as $clientdemande)
                                    <tr>
                                        <td style="font-size:12px">{{ $clientdemande->prenom }}</td>
                                        <td style="font-size:12px">{{ $clientdemande->nomfamille }}</td>
                                        <td style="font-size:12px">{{ $clientdemande->telephone }}</td>
                                        <td style="font-size:12px">{{ $clientdemande->ville }}</td>
                                        <td>@if($clientdemande->etat == 0)
                                            <p>État de la demande : En cours</p>
                                        @elseif($clientdemande->etat == 1)
                                            <p>État de la demande : Refusée</p>
                                        @elseif($clientdemande->etat == 2)
                                            <p>État de la demande : Validée</p>
                                        @endif
                                        <td> 
                                            
                                            <a  href="{{ route('affectation.valider', $clientdemande->id) }}"  style="font-size:12px" class="btn btn-success btn-sm">valider</a>           
                                            <button type="button" style="font-size:12px" class="btn btn-danger btn-sm"  onclick="refuserDemande(1)">refuser</button>
                                            <a  href="{{ route('detaille.afficher', $clientdemande->id) }}" style="font-size:12px" class="btn btn-primary btn-sm">voir</a>
                                        </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
  

                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</main>

@include('layout.footer')

>