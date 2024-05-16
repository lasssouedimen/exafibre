<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="assets/img/icons/logotrans.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Se connecter | ExaFibre</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1/dist/css/bootstrap.min.css">
 
</head>

<body >
	<main class="d-flex w-100" style="background-color:white ; background-image:url(assets/img/icons/logotranspar3.png);">
		<!--<img src="img//icons/logotranspar.png"  width="300" height="500"/>-->

		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card" style="background-color:rgb(243, 242, 248) ">
							
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="{{asset('assets/img/icons/licence-de-fabrication-et-d-exploitation-commerciale-3845055.jpg')}}" alt="Charles Hall" class="img-fluid rounded-circle" width="170" height="170" />
									</div>
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="mb-3">
											<label class="form-label">@lang('Email')</label>
											<input style="font-size:16px" class="form-control form-control-lg" type="email" name="email" placeholder="Entrer votre Email" />
										</div>
										<div class="mb-3">
											<label class="form-label">@lang('Password')</label>
											<input style="font-size:16px" class="form-control form-control-lg" type="password" name="password" placeholder="Entrer votre mot de passe" />
											
												
									  
											
										</div>
										<div>
											
										</div>
											<!--<x-primary-button class="ms-3" >
									{		{ __('Log in') }}
											</x-primary-button>-->
											<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary" style="background-color:white ; text-align : center ; color:#6e95de ; font-size:16px" >Se connecter</button> 
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

	<script src="js/app.js"></script>

</body>

</html>
