<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Buat Akun</h1>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Register</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Login</h1>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">anda lupa password?</a>
			<button>Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Selamat Datang!</h1>
				<p>Segera masuk ke akun Anda dan nikmati hari kerja yang  efisien dan menyenangkan </p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat datang!</h1>
				<p>
                   Sekarang waktunya untuk mengoptimalkan pengalaman bekerja Anda dengan mendaftar di platform kasir kami yang efisien dan dapat diandalkan.</p>
				<button class="ghost" id="signUp">Register</button>
			</div>
		</div>
	</div>
</div>
<script src="js/login-register.js"></script>
</body>
</html>