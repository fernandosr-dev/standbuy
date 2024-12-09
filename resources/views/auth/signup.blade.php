@extends('layouts.clean', ['cssClass' => 'page-signup'])
@section('title', 'Signup')
@section('childContent')
    <head>
        <link rel="stylesheet" href="css/app.css" />
    </head>
<main>
    <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
            <div class="auth-page-form">
                <div class="text-center">
                    <a href="/">
                        <img src="/img/standbuy-logo.svg" height="100px" alt="logo_standbuy" />
                    </a>
                </div>
                <h1 class="auth-page-title">Criar conta</h1>

                <form action="" method="post">
                    <div class="form-group">
                        <input type="email" placeholder="Seu Email" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Sua senha" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Repita sua senha" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <input type="text" placeholder="Primeiro nome" />
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Último nome" />
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Telefone" />
                    </div>
                    <button class="btn btn-primary btn-login w-full">Registre-se</button>

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
                        Já possui uma conta? -
                        <a href="/login.html"> Clique aqui para logar-se </a>
                    </div>
                </form>
            </div>
{{--            <div class="auth-page-image">--}}
{{--                <img src="/img/car-png-39071.png" alt="" class="img-responsive" />--}}
{{--            </div>--}}
        </div>
    </div>
</main>
@endsection
