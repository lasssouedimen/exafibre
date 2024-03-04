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
								<div class="card-header"><strong>Modifier</strong><small> Technicien</small></div>
		<div class="card-body card-block">
							</div>
							<hr>
								@if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                         
                                @foreach ($techniciens as $technicien)
                                <form action="{{ route('Techniciens.update', $technicien->id) }}" method="post"
                                    enctype="multipart/form-data">
                            @endforeach
                            @method('PUT')
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
<div class="col-lg-6">
	<div class="card">
		<div class="card-header"><strong>Company</strong><small> Form</small></div>
		<div class="card-body card-block">
			<div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div>
			<div class="form-group"><label for="vat" class=" form-control-label">VAT</label><input type="text" id="vat" placeholder="DE1234567890" class="form-control"></div>
			<div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
			<div class="row form-group">
				<div class="col-8">
					<div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
				</div>
				<div class="col-8">
					<div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
				</div>
			</div>
			<div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
		</div>
	</div>
</div>