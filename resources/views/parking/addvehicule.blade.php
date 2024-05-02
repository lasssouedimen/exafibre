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
                <div class="col-lg-9 ">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
						
                        <div class="card-body">
                            <div class="form-group">
								<a href="{{ route('parking.index') }}"  type="submit"  class="btn btn-light px-2"
								style="font-size:12px; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right;margin-top:8px"><i
									class="bi bi-arrow-right-circle"></i>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
									<path fill-rule="evenodd"
										d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
								</svg></a>							
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
						<div class="row form-group">
							<div class="col col-md-1"><label for="Marque" class=" form-control-label" style="font-size:15px">Marque: </label></div>
							<div class="col-12 col-md-3"><input type="text" id="Marque" name="Marque"
									placeholder="	" class="form-control" required></div>
							<div class="col col-md-2"><label for="codegps" class=" form-control-label" style="font-size:15px">Code de gps : </label>
							</div>
							<div class="col-12 col-md-3"><input type="text" id="codegps" name="codegps"
									placeholder="" class="form-control" required></div>
	
						</div>
						<div class="row form-group">
							<div class="col col-md-2"><label for="Matricule" class=" form-control-label" style="font-size:15px"> Matricule: </label></div>
							<div class="col-12 col-md-3"><input type="text" id="Matricule" name="Matricule"
									placeholder="	" class="form-control" required></div>
							<div class="col col-md-2"><label for="kilométrage" class=" form-control-label" style="font-size:15px">kilométrage: </label>
							</div>
							<div class="col-12 col-md-3"><input type="text" id="kilométrage" name="kilométrage"
									placeholder="" class="form-control" required></div>
	
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
