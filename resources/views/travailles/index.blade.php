@include('layout.menu')
@include('layout.header')
<title>Travail | ExaFibre</title>
<main class="content">
    <div id="wrapper">
        <div class="mb-3"></div>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="card-header"><strong>Travail</strong></div>
                                </div>
                                <div class="card-body card-block"></div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">technicien</th>
                                            <th scope="col">voiture</th>
                                            <th scope="col">demande</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($travailles as $travaille)
                                                <tr>
                                                    <td>{{ $travaille->techniciens->nom }} {{ $travaille->techniciens->prenom }}</td>
                                                    <td>{{ $travaille->parkings->Marque}} {{ $travaille->parkings->Matricule}}</td>
                                                    <td><strong>client:</strong>{{ $travaille->demandes->nomfamille}} {{ $travaille->demandes->prenom}} <br> 
                                                        <strong>remarque:{{ $travaille->demandes->remarque}}</strong></td>
                                                    <td></td>
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

@include('layout.footer')
<!-- Scripts -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
