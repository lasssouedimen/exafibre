@include('layout.menu')
@include('layout.header')
<title> Demandes | ExaFibre </title>
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
                                    <div class="card-header"><strong>Demandes</strong></div>
                                </div>
                                <div class="card-body card-block">
                                </div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">prenom </th>
                                            <th scope="col">nom famille</th>
                                            <th scope="col"> telephone</th>
                                            <th scope="col"> ville</th>
                                            <th scope="col"> date de creation</th>
                                            <th scope="col"> état</th>
                                            <th scope="col"> action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientdemandes as $clientdemande)
                                            @if ($clientdemande->etat == 0)
                                                <tr style="color:rgb(82, 80, 80)">
                                                @elseif($clientdemande->etat == 1)
                                                <tr style="color:red">
                                                @elseif($clientdemande->etat == 2)
                                                <tr style="color:green">
                                            @endif

                                            <td style="font-size:14px">{{ $clientdemande->prenom }}</td>
                                            <td style="font-size:14px">{{ $clientdemande->nomfamille }}</td>
                                            <td style="font-size:14px">{{ $clientdemande->telephone }}</td>
                                            <td style="font-size:14px">{{ $clientdemande->ville }}</td>
                                            <td style="font-size:14px">{{ $clientdemande->created_at }}</td>

                                            @if ($clientdemande->etat == 0)
                                                <td style="font-size:15px">En cours</td>
                                            @elseif($clientdemande->etat == 1)
                                                <td style="color:red ; font-size:15px">Refusée</td>
                                            @elseif($clientdemande->etat == 2)
                                                <td style="color:green ; font-size:15px">Validée</td>
                                            @endif



                                            <td>
                                                @if ($clientdemande->etat == 0)
                                                    {{-- accepter --}}
                                                   {{--  <a href="{{ route('clientdemandes.changeEta', ['id' => $clientdemande->id, 'val' => 2]) }}"
                                                        style="font-size:12px"
                                                        class="btn btn-success btn-sm"><i class="bi bi-check-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                          </svg></a> --}}
                                                          <a href="{{ route('affectation.valider', ['id' => $clientdemande->id]) }}"
                                                            style="font-size:12px"
                                                            class="btn btn-success btn-sm"><i class="bi bi-check-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                              </svg></a>
                                                        {{-- refuser --}}
                                                    <a href="{{ route('clientdemandes.changeEta', ['id' => $clientdemande->id, 'val' => 1]) }}" onclick="return confirm('Etes vous sure ?')"
                                                        style="font-size:12px" class="btn btn-danger btn-sm"><i class="bi bi-x-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                                          </svg></a>
                                                          {{-- detaille --}}
                                                    <a href="{{ route('detaille.afficher', $clientdemande->id) }}"
                                                        style="font-size:12px ; background-color:   hsla(0, 1%, 72%, 0.415);"
                                                        class="btn btn-light px-3"><i class="bi bi-info-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                                          </svg></a>
                                                @else
                                                    <a href="{{ route('detaille.afficher', $clientdemande->id) }}"
                                                        style="font-size:12px ; background-color:  hsla(0, 1%, 72%, 0.415);"
                                                        class="btn btn-light px-3" ><i class="bi bi-info-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                                          </svg></a>
                                                @endif
                                            </td>
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

@include('layout.footer')


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>



