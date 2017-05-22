@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('petshop.register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('cnpj') ? ' has-error' : '' }}">
                            <label for="cnpj" class="col-md-4 control-label">Cnpj</label>

                            <div class="col-md-6">
                                <input id="cnpj" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}" required autofocus>

                                @if ($errors->has('cnpj'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cnpj') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('socialName') ? ' has-error' : '' }}">
                            <label for="socialName" class="col-md-4 control-label">Razão Social</label>

                            <div class="col-md-6">
                                <input id="socialName" type="text" class="form-control" name="socialName" value="{{ old('socialName') }}" required autofocus>

                                @if ($errors->has('socialName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('socialName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('realName') ? ' has-error' : '' }}">
                            <label for="realName" class="col-md-4 control-label">Nome Fantasia</label>

                            <div class="col-md-6">
                                <input id="realName" type="text" class="form-control" name="realName" value="{{ old('realName') }}" required autofocus>

                                @if ($errors->has('realName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('realName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telNumber') ? ' has-error' : '' }}">
                            <label for="telNumber" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="telNumber" type="text" class="form-control" name="telNumber" value="{{ old('telNumber') }}" required autofocus>

                                @if ($errors->has('telNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
