<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GudangXpress</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="{{ asset('js/script.js') }}"></script>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		{{-- <form action="#">
			<h1>Buat Akun</h1>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Register</button>
		</form> --}}
        <form action="{{route('proses_register')}}" method="POST" id="regForm">
            {{ csrf_field() }}
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Nama</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Masukkan Nama" />
                     @if ($errors->has('name'))
                      <span class="error"> * {{ $errors->first('name') }}</span>
                      @endif
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email" />
                    @if ($errors->has('email'))
                      <span class="error">* {{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
                    @if ($errors->has('password'))
                      <span class="error">* {{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputNoTelp">Nomor Telephone</label>
                    <input class="form-control py-4" id="inputNoTelp" type="text" name="no_telp" placeholder="Masukkan Nomor Telephone" />
                    @if ($errors->has('no_telp'))
                      <span class="error">* {{ $errors->first('no_telp') }}</span>
                    @endif
                </div>
                <div class="form-group mt-4 mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Daftar!</button>
                </div>
            </form>
	</div>
	<div class="form-container sign-in-container">
		{{-- <form action="#">
			<h1>Login</h1>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">anda lupa password?</a>
			<button>Log In</button>
		</form> --}}

        <form action="{{url('proses_login')}}" method="POST" id="logForm">
            {{ csrf_field() }}
            <div class="form-group">
                @error('login_gagal')
                    {{-- <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                        <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input
                    class="form-control py-4"
                    id="inputEmailAddress"
                    name="email"
                    type="email"
                    placeholder="Masukkan Email"/>
                @if($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input
                    class="form-control py-4"
                    id="inputPassword"
                    type="password"
                    name="password"
                    placeholder="Masukkan Password"/>
                @if($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div
                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                    <button class="btn w-100 btn-primary btn-block btn-login" type="submit">Login</button>

            </div>
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
