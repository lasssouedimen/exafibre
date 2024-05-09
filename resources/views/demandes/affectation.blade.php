@include('layout.menu')
@include('layout.header')
<title> Affectation | ExaFibre </title>
<main class="content">
    <div id="wrapper">
        <div class="mb-3">
        </div>
        
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                            <div class="card-body">

                                <div class="form-group">
                                    <div class="card-header"><strong>Liste Des Demandes Non Affecter </strong></div>
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
                                            <th scope="col">Nom Prénom</th>
                                            <th scope="col">Téléphone </th>
                                            <th scope="col"> Mail</th>
                                            <th scope="col"> Ville</th>
                                            <th scope="col"> Pays</th>
                                            <th scope="col"> Code postal</th>
                                            <th scope="col"> Remarque</th>
                                            <th scope="col"> Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientdemandes as $clientdemande)
                                            <tr>
                                                <td style="font-size:15px; ">{{ $clientdemande->nomfamille }} {{ $clientdemande->prenom }}</td>
                                                <td style="font-size:15px; ">{{ $clientdemande->telephone }}</td>
                                                <td style="font-size:15px; ">{{ $clientdemande->mail }}</td>
                                                <td style="font-size:15px; ">{{ $clientdemande->ville }}</td>
                                                <td style="font-size:15px; ">{{ $clientdemande->pays }}</td>
                                                <td style="font-size:15px; ">{{ $clientdemande->codepostal }}</td>
                                                <td style="font-size:15px; ">{{ $clientdemande->remarque }}</td>
                                                <td> <button type="button" class="btn btn-light px-3 mr-2" style="background-color: rgb(64, 33, 235) ; color :rgb(249, 249, 252); font-size:17 px; "
                                                        onclick="modaleaffectation('{{ $clientdemande->id }}')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-indent" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M3 8a.5.5 0 0 1 .5-.5h6.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H3.5A.5.5 0 0 1 3 8"/>
                                                            <path fill-rule="evenodd" d="M12.5 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5"/>
                                                          </svg></i><i class="bi bi-indent"></i>

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
    </div>
</main>
<div class="modal fade" id="affecter" tabindex="-1" role="dialog" aria-labelledby="addcltLabel" aria-hidden="true"
    class="modal hide" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog" role="document">
        <div class="modal-content $">
            <div class="modal-header">
                <h5 class="modal-title">Affecter</h5>
            </div>
            <form id="formaffecter" method="post" enctype="multipart/form-data" action="">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <input id='id_demande' name='id_demande' hidden>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-4 col-form-label">liste Techniciens</label>
                        <div class="col-sm-8 mb-2">
                            <select class="form-control" id="id_technicien" name="id_technicien" required>
                                <option value="" disabled selected>Choisir un technicien</option>
                                @foreach ($techniciens as $technicien)
                                    <option value="{{ $technicien->id }}">{{ $technicien->nom }}
                                        {{ $technicien->prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-4 col-form-label">liste voitures</label>
                        <div class="col-sm-8 mb-2">
                            <select class="form-control" id="id_parking" name="id_parking" required>
                                <option value="" disabled selected>Choisir une voiture</option>
                                @foreach ($parkings as $parking)
                                    <option value="{{ $parking->id }}">{{ $parking->Matricule }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   
                </div>
                <div class="modal-footer" style="background-color: rgb(249, 249, 252)">
                    <button type="submit" class="btn btn-success" 
                        id='myButton' style="background-color: rgb(83, 82, 86);width: 25%;
                        float: left;" >Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $('.sub-menu ul').hide();
    $(".sub-menu a").click(function() {
        $(this).parent(".sub-menu").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
</script>
<script>
function modaleaffectation(id) {
    $("#id_demande").val(id);
    $("#formaffecter").attr('action', "{{ route('travailles.store') }}");
    $("input[name='_method']").val('post');

    $('#affecter').modal("show");
}
</script>
