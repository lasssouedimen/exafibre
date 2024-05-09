@include('layout.menu')
@include('layout.header')
<title>
    Techniciens | ExaFibre </title>
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

                                    <div class="card-header"><strong>M.{{ $technicien->nom }}
                                            {{ $technicien->prenom }}</strong></div>
                                    <div class="card-body card-block">
                                    </div>
                                </div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Demande </th>
                                            <th>Voiture </th>
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
                                                    <strong>Description: </strong>{{ $travaille->demandes->remarque }}
                                                </td>
                                                <td style="font-size:14px"><strong>Marque:
                                                    </strong>{{ $travaille->parkings->Marque }}<br>
                                                    <strong>Matricule:
                                                    </strong>{{ $travaille->parkings->Matricule }}<br>
                                                    <strong>Existance: </strong>
                                                    @if ($travaille->parkings->arch == 0)
                                                        Existe
                                                    @else
                                                        N'existe pas
                                                    @endif
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
