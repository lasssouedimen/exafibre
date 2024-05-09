<title> Techniciens | ExaFibre  </title>
@include('layout.menu')
@include('layout.header')
<title> Techniciens | ExaFibre  </title>
<main class="content">
<div id="wrapper">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">TECHNICIENS</h1><a class="badge bg-primary ms-2" ></a>
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
								style="font-size:12px; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right;margin-top:8px"><i class="bi bi-arrow-right-circle"></i>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
								  </svg></a>								<div class="card-header"><strong>Modifier</strong><small> Technicien</small></div>
		<div class="card-body card-block">
							</div>
							<hr>
								@if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                         
                                <form action="{{ route('Techniciens.update', $technicien->id) }}" method="post"
                                    enctype="multipart/form-data">
                            @method('PUT')
						@csrf
						<div class="row">
							 <div class="row form-group">
								<div class="col col-md-1 "><label for="nom"
									 class=" form-control-label" tyle="font-size:15px">Nom:</label></div>
								<div class="col-12 col-md-4"><input type="text" id="nom"
										name="nom" value="{{ $technicien->nom }}" class="form-control" required>
								</div>
								<div class="col col-md-1"><label for="prenom"
										class=" form-control-label" style="font-size:15px">Prenom:</label>
								</div>
								<div class="col-12 col-md-4"><input type="text" id="prenom"
										name="prenom" value="{{ $technicien->prenom }}"  class="form-control" required>
								</div>

							</div>
							
							<div class="row form-group">
								<div class="col col-md-1"><label for="Adresse"
										class=" form-control-label" style="font-size:15px">Adresse: </label></div>
								<div class="col-12 col-md-4"><input type="text" id="Adresse"
										name="Adresse" value="{{ $technicien->Adresse }}" class="form-control" required>
								</div>
								<div class="col col-md-1"><label for="Tel"
										class=" form-control-label" style="font-size:15px">Téléphone:</label>
								</div>
								<div class="col-12 col-md-4"><input type="number" id="Tel"
										name="Tel" value="{{ $technicien->Tel }}" class="form-control" required>
								</div>

							</div>
							<div class="row form-group">
							   
								<div class="col col-md-1"><label for="Datedébut"
										class=" form-control-label" style="font-size:15px">Date début:</label>
								</div>
								<div class="col-12 col-md-4"><input type="date" id="Datedébut"
										name="Datedébut" value="{{ $technicien->Datedébut }}" class="form-control" required>
								</div>
								<div class="col col-md-1"><label for="mail"
										class=" form-control-label" style="font-size:15px">Email:</label>
								</div>
								<div class="col-12 col-md-4"><input type="mail" id="mail"
										name="mail" value="{{ $technicien->mail }}" class="form-control" required>
								</div>
							   
							</div>
							<div class="col col-md-1"><label for="Age"
								class=" form-control-label" style="font-size:15px">Age: </label></div>
						<div class="col-12 col-md-2"><input type="number" id="Age"
								name="Age" value="{{ $technicien->Age }}"  class="form-control" required>
						</div>
							<button type="submit" class="btn btn-light px-5 offset-9"
							style="  width: 20%;
						background-color: rgb(64, 33, 235);
						color: rgb(243, 243, 245);
						float: left;
						font-weight: bold;">Terminer</button>
						</div>
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
