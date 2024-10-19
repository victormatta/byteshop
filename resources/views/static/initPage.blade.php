@extends('layouts.app')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-start min-vh-100 p-0">
        <div class="card w-100 col-12 col-md-6 col-lg-4" style="min-height: 32em; border-radius: 50px; margin-top: 1em;">
            <div class="card-body d-flex flex-column justify-content-center">
                <form>
                    <div class="mb-5 mt-4">
                        <input type="email" style="background-color: #F2F2F2; border-radius: 50px" class="form-control p-4" placeholder="Username / E-mail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-5">
                        <input type="password" style="background-color: #F2F2F2; border-radius: 50px" class="form-control p-4" placeholder="Senha" id="exampleInputPassword1">
                        <div class="d-flex justify-content-between mt-1">
                            <div class="">
                                <a href="#" class="link-primary">Esqueceu a senha?</a>
                            </div>
                            <div class="form-check ms-auto">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50 mt-5 mb-3" style="border-radius: 10px">Entrar</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Não tem uma conta? <a href="{{ route('static.registerPage') }}">Registre-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection