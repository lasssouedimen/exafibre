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
								<a href="{{ route('Techniciens.index') }}"  type="submit" class="btn btn-light px-5" style="font-size:13px; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right"> Retour</a>								
								<div class="card-header"><strong>Ajouter</strong><small> Technicien</small></div>
		<div class="card-body card-block">
							</div>
							<hr>
								@if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                         
					<form  action="{{ route('Techniciens.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Nom:</label>
									<input type="text" name="nom" class="form-control"
										placeholder="Nom ">
									@error('nom')
									<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Adresse :</label>
									<input type="text" name="Adresse" class="form-control" placeholder="Adresse">
									@error('Adresse')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Telephone:</label>
									<input type="number" name="Tel" class="form-control" placeholder="telephone">
									@error('Telephone')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Age:</label>
									<input type="number" name="Age" class="form-control" placeholder="age">
									@error('Age')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Date début:</label>
									<input type="date" name="Datedébut" class="form-control" placeholder="Datedébut">
									@error('Datedébut')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Email:</label>
									<input type="email" name="mail" class="form-control" placeholder="Email">
									@error('Email')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<button type="submit" class="btn btn-light px-5" style="font-size:13px ; background-color:rgb(57, 177, 97) ; color:rgb(243, 243, 245) ; float: right ">Terminer</button>
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
