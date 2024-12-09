@extends('layouts.clean', ['cssClass' => 'page-login'])
@section('title', 'Login')
@section('childContent')
<head>
        <link rel="stylesheet" href="css/app.css" />
    <!-- <link rel="stylesheet" href="css/output.css" /> -->
</head>
<body class="page-login">
<main>
    <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
            <div class="auth-page-form">
                <div class="text-center">
                    <a href="/">
                        <img src="/img/standbuy-logo.svg" height="100px" alt="logo_standbuy" />
                    </a>
                </div>
                <h1 class="auth-page-title">Login</h1>

                <form action="" method="post">
                    <div class="form-group">
                        <input type="email" placeholder="Seu email" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Sua senha" />
                    </div>
                    <div class="text-right mb-medium">
                        <a href="/password-reset.html" class="auth-page-password-reset"
                        >Recuperar senha</a
                        >
                    </div>

                    <button class="btn btn-primary btn-login w-full">Login</button>

                    <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                        <button
                            class="btn btn-default flex justify-center items-center gap-1"
                        >
                            <img src="/img/google.png" alt="" style="width: 20px" />
                            Google
                        </button>
                        <button
                            class="btn btn-default flex justify-center items-center gap-1"
                        >
                            <img src="/img/facebook.png" alt="" style="width: 20px" />
                            Facebook
                        </button>
                    </div>
                    <div class="login-text-dont-have-account">
                        Não possui uma conta? -
                        <a href="/signup.html"> Clique aqui para criar uma</a>
                    </div>
                </form>
            </div>
{{--            <div class="auth-page-image">--}}
{{--                <img src="/img/car-png-39071.png" alt="" class="img-responsive" />--}}
{{--            </div>--}}
        </div>
    </div>
</main>
</body>
@endsection
