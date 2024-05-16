@include('layout.menu')
@include('layout.header')
<title> Techniciens | ExaFibre </title>
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
                                    <a href="{{ route('Techniciens.create') }}" class="btn btn-light px-2"
                                        style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">
                                        <i class="bi bi-plus-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                        </svg> Ajouter</a>
                                    <div class="card-header"><strong>Techniciens</strong></div>
                                    <div class="card-body card-block">
                                    </div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                </div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nom </th>
                                            <th>Prénom </th>
                                            <th>Adresse</th>
                                            <th> Téléphone</th>
                                            <th>Age</th>
                                            <th>Date de début</th>
                                            <th> Email</th>
                                            <th>Disponibilité</th>
                                            <th> Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($techniciens as $technicien)
                                            <tr>
                                                <td style="font-size:14px">{{ $technicien->nom }}</td>
                                                <td style="font-size:14px">{{ $technicien->prenom }}</td>
                                                <td style="font-size:14px">{{ $technicien->Adresse }}</td>
                                                <td style="font-size:14px">{{ $technicien->Tel }}</td>
                                                <td style="font-size:14px">{{ $technicien->Datenaissance }} </td>
                                                <td style="font-size:14px">{{ $technicien->Datedébut }} </td>
                                                <td style="font-size:14px">{{ $technicien->mail }} </td>


                                                @if ($technicien->dispo == 0)
                                                    <td style="font-size:14px">Disponible</td>
                                                @elseif($technicien->dispo == 1)
                                                    <td style="font-size:13px">En déplacement</td>
                                                @endif
                                                </td>

                                                <td>
                                                    <a class="btn btn-light px-3"
                                                        style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; "
                                                        href="{{ route('Techniciens.edit', $technicien->id) }}"><i
                                                            class="bi bi-brush-fill"></i><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-brush-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04" />
                                                        </svg> Modifiée</a>
                                                    @if ($technicien->arch == 0)
                                                        <a class="btn btn-light px-3"
                                                            style="font-size:12px  ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ;"
                                                            href="{{ route('technicien.archive', ['id' => $technicien->id, 'etat' => 1]) }}"><i
                                                                class="fa-solid fa-box-archive"></i><i
                                                                class="bi bi-x-lg"></i><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-x-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                            </svg> Archivée</a>
                                                    @else
                                                        <a class="btn btn-light px-3"
                                                            style="font-size:12px  ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ;"
                                                            href="{{ route('technicien.archive', ['id' => $technicien->id, 'etat' => 0]) }}"><i
                                                                class="fa-solid fa-box-archive"></i>déasarchive</a>
                                                    @endif
                                                    <a class="btn btn-light px-3"
                                                        style="font-size:10px  ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ;"href="{{ route('Techniciens.show', $technicien->id) }}"><i
                                                            class="bi bi-arrow-left-right"></i><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
                                                        </svg> Historique</a>
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
<!-- Scripts -->
