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
                                            <th >Nom </th>
                                            <th>prenom </th>
                                            <th>Adresse</th>
                                            <th> Tel</th>
                                            <th>Age</th>
                                            <th> Date de début</th>
                                            <th> Email</th>
                                            <th> action</th>
                                            <th>disponib</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($techniciens as $technicien)
                                            <tr>
                                                <td style="font-size:14px">{{ $technicien->nom }}</td>
                                                <td style="font-size:14px">{{ $technicien->prenom }}</td>
                                                <td style="font-size:14px">{{ $technicien->Adresse }}</td>
                                                <td style="font-size:14px">{{ $technicien->Tel }}</td>
                                                <td style="font-size:14px">{{ $technicien->Age }} </td>
                                                <td style="font-size:14px">{{ $technicien->Datedébut }} </td>
                                                <td style="font-size:14px">{{ $technicien->mail }} </td>
                                                <td>
                                                    <a class="btn btn-light px-3"
                                                        style="font-size:10px"href="{{ route('Techniciens.edit', $technicien->id) }}">Modifiée</a>
                                                    @if ($technicien->arch == 0)
                                                        <a class="btn btn-light px-3" style="font-size:10px"
                                                            href="{{ route('technicien.archive', ['id' => $technicien->id, 'etat' => 1]) }}"><i
                                                                class="fa-solid fa-box-archive"></i>Archivée</a>
                                                    @else
                                                        <a class="btn btn-light px-3" style="font-size:10px"
                                                            href="{{ route('technicien.archive', ['id' => $technicien->id, 'etat' => 0]) }}"><i
                                                                class="fa-solid fa-box-archive"></i>déasarchive</a>
                                                    @endif

                                                </td>


                                                @if ($technicien->dispo == 0)
                                                    <td style="font-size:14px">dispo</td>
                                                @elseif($technicien->dispo == 1)
                                                    <td style="font-size:13px">En déplacement</td>
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
<!-- Scripts -->


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
