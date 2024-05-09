@include('layout.menu')
@include('layout.header')
<title>
    Historique | ExaFibre </title>
<main class="content">
    <div id="wrapper">
        <div class="mb-3">
        </div>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                            <div class="card-body">
                                <div class="form-group">

                                    <div class="card-header"><strong>Historique: {{ $parking->Marque}}  {{ $parking->Matricule }}
                                           </strong></div>
                                    <div class="card-body card-block">
                                    </div>
                                </div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Demande </th>
                                            <th>Technicien </th>
                                            <th>Date Début</th>
                                            <th> Date Fin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($travailles as $travaille)
                                            <tr>
                                                <td style="font-size:14px">
                                                    <strong>Clients:
                                                    </strong>M(e).{{ $travaille->demandes->nomfamille }}
                                                    {{ $travaille->demandes->prenom }}<br>
                                                    <strong>ville:</strong>
                                                    {{ $travaille->demandes->ville }}<br>
                                       
                                                </td>
                                                <td style="font-size:14px"><strong>nom prenom:
                                                    </strong>{{ $travaille->techniciens->nom}}<br>
                                                   {{ $travaille->techniciens->prenom }}<br>
                                                    
                                                </td>
                                                <td style="font-size:14px">{{ $travaille->datedebut }}</td>
                                                <td style="font-size:14px">
                                                    @if (isset($travaille->datefin))
                                                        {{ $travaille->datefin }}
                                                    @else
                                                        Non terminé
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

</main>
@include('layout.footer')
