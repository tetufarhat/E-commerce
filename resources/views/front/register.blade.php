<!DOCTYPE html>
<head>
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="{{asset('/')}}public/front/image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/animated-headline.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/style.css">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('insert-register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="client_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="client_email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="client_company_name">

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="client_image" type="file" class="form-control @error('client_image') is-invalid @enderror" name="client_image">

                                @error('client_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
