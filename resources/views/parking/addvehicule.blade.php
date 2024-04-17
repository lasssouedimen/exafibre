<title> Techniciens | ExaFibre  </title>
@include('layout.menu')
@include('layout.header')
<title> parking | ExaFibre  </title>
<main class="content">
<div id="wrapper">
    <div class="mb-3">
    </div>  
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-10 ">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
						
                        <div class="card-body">
                            <div class="form-group">
								<a href="{{ route('parking.index') }}"  type="submit" class="btn btn-light px-5" style="font-size:13px; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right"> Retour</a>								
								<div class="card-header"><strong>Ajouter</strong><small> vehicule</small></div>
		<div class="card-body card-block">
							</div>
							<hr>
								@if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                
					<form  action="{{ route('parking.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Marque:</label>
									<input type="text" name="Marque" class="form-control"
										placeholder="Marque ">
									@error('Marque')
									<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>Code de gps :</label>
									<input type="text" name="Codegps" class="form-control" placeholder="Codegps">
									@error('Codegps')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label> Matricule:</label>
									<input type="text" name="Matricule" class="form-control" placeholder="Matricule">
									@error('Matricule')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>kilométrage:</label>
									<input type="number" name="kilométrage" class="form-control" placeholder="kilométrage">
									@error('kilométrage')
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
