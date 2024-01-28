<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/style.css?version=4.1" rel="stylesheet">
    <title>Login</title>
</head>

<body>

    <main class="main">
        <div class="box-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-box">
                        <div class="container">
                            <div class="panel-white mb-30">
                                <div class="box-padding">
                                    <div class="login-register">
                                        <div class="row login-register-cover pb-250">
                                            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                                                <div class="form-login-cover">
                                                    <div class="text-center">
                                                        <h2 class="mt-10 mb-5 text-brand-1">Login</h2>

                                                    </div>
                                                </div>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                                <form class="login-register text-start mt-20" method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-1">Email
                                                            address *</label>
                                                        <input class="form-control" id="input-1" type="email" required="" name="email" placeholder="example@gmail.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-4">Password *</label>
                                                        <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                                                    </div>
                                                    <div class="login_footer form-group d-flex justify-content-between">
                                                        <label class="cb-container">
                                                            <input type="checkbox"><span class="text-small">{{
                                                                    __('Remember me') }}</span><span class="checkmark"></span>
                                                        </label><a class="text-muted" href="#">Forgot Password</a>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                                                    </div>
                                                    <div class="text-muted text-center">Don't have an Account? <a href="register">Sign up</a></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.circliful.js"></script>
    <script src="assets/js/main.js?v=4.1"></script>
</body>

</html>