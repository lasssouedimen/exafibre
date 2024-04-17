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
                                    <th scope="col"> date de creation</th>
                                    <th scope="col"> </th>
                                    <th scope="col" > état</th>
                                    <th> action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientdemandes as $clientdemande)
                                    @if ($clientdemande->etat == 0)
                                        <tr>
                                        @elseif($clientdemande->etat == 1)
                                        <tr style="background-color: hsl(0, 78%, 72%); color: white;">
                                        @elseif($clientdemande->etat == 2)
                                        <tr style="background-color: rgb(114, 216, 114); color: white;">
                                    @endif

                                    <td>{{ $clientdemande->prenom }}</td>
                                    <td>{{ $clientdemande->nomfamille }}</td>
                                    <td >{{ $clientdemande->telephone }}</td>
                                    <td >{{ $clientdemande->ville }}</td>
                                    <td >{{ $clientdemande->created_at }}</td>
                                    <td>
                                        @if ($clientdemande->etat == 0)
                                            <td>En cours</td>
                                        @elseif($clientdemande->etat == 1)
                                            <td>Refusée</td>
                                        @elseif($clientdemande->etat == 2)
                                            <td>Validée</td>
                                        @endif
                                    </td>
                                   
                                    
                                    <td>
                                        @if ($clientdemande->etat == 0)
                                            <a href="{{ route('clientdemandes.changeEta', ['id' => $clientdemande->id, 'val' => 2]) }}"
                                                style="font-size:12px" class="btn btn-success btn-sm">valider</a>
                                            <a href="{{ route('clientdemandes.changeEta', ['id' => $clientdemande->id, 'val' => 1]) }}"
                                                style="font-size:12px" class="btn btn-danger btn-sm">refuser</a>
                                            <a href="{{ route('detaille.afficher', $clientdemande->id) }}"
                                                style="font-size:12px ; background-color:  hsl(0, 0%, 0%, 0);" class="btn btn-light px-3">voir</a>
                                        @else
                                            <a href="{{ route('detaille.afficher', $clientdemande->id) }}"
                                                style="font-size:12px ; background-color:  hsl(0, 0%, 0%, 0);" class="btn btn-light px-3">voir</a>
                                        @endif
                                    </td>
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
