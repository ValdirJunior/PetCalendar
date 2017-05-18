@extends('layouts.user-dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pets - Novo Pet</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('user.pets.submit') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Nome:</label>
                            <div class="col-sm-9">
                                <input type="text" id="name " name="name" placeholder="Nome" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Data Nascimento:</label>
                            <div class="col-sm-9">
                                <input type="date" id="birthDate" name="birthDate">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sex" class="col-sm-3 control-label">Sexo:</label>
                            <div class="col-sm-9">
                                <div class="radio">
                                    <label><input type="radio" id="sex" name="sex" value="M">Macho</label>
                                </div>

                                <div class="radio">
                                    <label><input type="radio" id="sex" name="sex" value="F">Fêmea</label>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="client_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-default">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
