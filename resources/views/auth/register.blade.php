<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="assets/img/icons/logotrans.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Inscription | ExaFibre</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

</head>
<main class="d-flex w-100"  style="background-color:white ; background-image:url(assets/img/icons/logotranspar3.png);">

<body>
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card" style="background-color:rgb(243, 242, 248) ">
							<div class="card-body">
								<div class="m-sm-4">
                                    <div class="text-center">
										<img src= "assets/img/avatars/logo..jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="170" height="170" />
									</div>
									
									<form method="POST" action="{{ route('register') }}">
										@csrf
										<div>
											<x-input-label for="name" :value="__('Name')" />
											<x-text-input  style="font-size:16px" class="form-control form-control-lg" id="name" type="name" name="name" placeholder="Entrer votre nom" />
											<x-input-error :messages="$errors->get('name')" class="mt-2" />
										</div>
										<div class="mt-4">
											<x-input-label for="email" :value="__('Email')" />
											<x-text-input  style="font-size:16px" class="form-control form-control-lg" id="email"  type="email" name="email" placeholder="Entrer votre Email" />
											<x-input-error :messages="$errors->get('email')" class="mt-2" />
										</div>
										<div class="mt-4">
											<x-input-label for="password" :value="__('Password')" />
											<x-text-input  style="font-size:16px" class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Entrer votre mot de passe" />
											<x-input-error :messages="$errors->get('password')" class="mt-2" />
										</div>
										<div class="mt-4" >
											<x-input-label  for="password_confirmation" :value="__('Confirm Password')" />
											<x-text-input  style="font-size:16px" class="form-control form-control-lg" id="password_confirmation" type="password" name="password_confirmation" placeholder="confirmer votre mot de passe" />
											<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
										</div>
										<div class="flex items-center justify-end mt-4">
											<a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
												{{ __('Already registered?') }}
											</a>
								
											
											<div class="text-center mt-3">
												<button type="submit" class="btn btn-lg btn-primary" style="background-color:white ; text-align : center ; color:#6e95de ; font-size:16px" >Inscription</button> 
												</div>
											
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



</body>

</html>
