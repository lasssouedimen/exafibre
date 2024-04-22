<title> Techniciens | ExaFibre </title>
@include('layout.menu')
@include('layout.header')
<title> Techniciens | ExaFibre </title>
<main class="content">
    <div id="wrapper">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">TECHNICIENS</h1><a class="badge bg-primary ms-2"></a>
        </div>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-lg-10 ">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">

                            <div class="card-body">
                                <div class="form-group">
                                    <a href="{{ route('Techniciens.index') }}" type="submit" class="btn btn-light px-2"
                                        style="font-size:12px; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right;margin-top:8px"><i class="bi bi-arrow-right-circle"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                          </svg></a>
                                    <div class="card-header"><strong>Ajouter</strong><small> Technicien</small></div>
                                    <div class="card-body card-block">
                                    </div>
                                    <hr>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif

                                    <form action="{{ route('Techniciens.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label for="nom">NOM:</label>
													<input type="text" name="nom" class="form-control" placeholder="Nom" id="nom" required>
													@error('nom')
														<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
													@enderror
												</div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>prenom:</label>
                                                    <input type="text" name="prenom" class="form-control"
                                                        placeholder="prenom " required>
                                                    @error('prenom')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Adresse :</label>
                                                    <input type="text" name="Adresse" class="form-control"
                                                        placeholder="Adresse" required>
                                                    @error('Adresse')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Telephone:</label>
                                                    <input type="number" name="Tel" class="form-control"
                                                        placeholder="telephone" required>
                                                    @error('Telephone')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Age:</label>
                                                    <input type="number" name="Age" class="form-control"
                                                        placeholder="age" required>
                                                    @error('Age')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Date début:</label>
                                                    <input type="date" name="Datedébut" class="form-control"
                                                        placeholder="Datedébut" required>
                                                    @error('Datedébut')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="email" name="mail" class="form-control"
                                                        placeholder="Email" required>
                                                    @error('Email')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-light px-5" style="font-size:13px; background-color:rgb(57, 177, 97); color:rgb(243, 243, 245); float:right;">Terminer</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
@include('layout.footer')
