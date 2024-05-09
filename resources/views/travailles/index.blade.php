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
                                <div class="row">
                                    @foreach ($travailles as $travaille)
                                        <div class="col-md-4">
                                            <aside class="profile-nav alt">
                                                <section class="card">
                                                    <div class="card-header user-header alt bg-dark">
                                                        <div class="media">
                                                            <a href="#">
                                                                <img class="align-self-center rounded-circle mr-3"
                                                                    style="width:85px; height:85px;" alt=""
                                                                    src="https://img.freepik.com/vecteurs-premium/style-icone-du-client-conception-vectorielle_1134108-66585.jpg?w=740">
                                                            </a>
                                                            <div class="media-body">

                                                                <h2 class="text-light display-6">
                                                                    {{ $travaille->techniciens->nom }}
                                                                    {{ $travaille->techniciens->prenom }}</h2>
                                                                <p>Technicien </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <i class="fa fa-envelope-o"></i> date début:
                                                            {{ $travaille->datedebut }}<span
                                                                class="badge badge-primary pull-right"></span>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <i class="fa fa-tasks"></i>
                                                            voiture:{{ $travaille->parkings->Marque }}
                                                            {{ $travaille->parkings->Matricule }} <span
                                                                class="badge badge-danger pull-right"></span>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <i class="fa fa-bell-o"></i> demande
                                                            client:{{ $travaille->demandes->nomfamille }}
                                                            {{ $travaille->demandes->prenom }} <span
                                                                class="badge badge-success pull-right"></span>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <i class="fa fa-comments-o"></i> demande
                                                            remarque:{{ $travaille->demandes->remarque }} <span
                                                                class="badge badge-warning pull-right r-activity"></span>
                                                        </li>

                                                    </ul>

                                                </section>
                                            </aside>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-body card-block"></div>

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
