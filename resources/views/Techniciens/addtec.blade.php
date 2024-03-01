<title> Techniciens | ExaFibre  </title>
@include('layout.menu')
@include('layout.header')
<main class="content">
	<div id="wrapper">
		<div class="mb-3">
		<h1 class="h3 d-inline align-middle">Ajouter Technicien</h1><a class="badge bg-primary ms-2" ></a>
		</div>  
	
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row mt-3">
					<div class="col-lg- ">
						<div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
							<div class="card-body">
										
								<a type="submit" class="btn btn-light px-5"style="font-size:13px"  href="#"  style=' color: black;'> Retour</a>	
				  <hr>
					@if (session('status'))
						<div class="alert alert-success mb-1 mt-1">
							{{ session('status') }}
						</div>
					@endif
					<form  method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>PACK:</label>
									<input type="text" name="PACK" class="form-control"
										placeholder="Nom PACK">
									@error('PACK')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>TARIFS :</label>
									<input type="number" name="TARIFS" class="form-control" placeholder="TARIFS">
									@error('TARIFS')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>SEANCES:</label>
									<input type="number" name="SEANCES" class="form-control" placeholder="SEANCES">
									@error('SEANCES')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label>DUREE:</label>
									<input type="text" name="DUREE" class="form-control" placeholder="DUREE">
									@error('DUREE')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<button type="submit" class="btn btn-light px-5"style="font-size:13px">Terminer</button>
						</div>
					</form>
				</div>
				</div> 
			  </div>
			</div>
		</div>
	</div>
			 
	</div>

@include('layout.footer')
