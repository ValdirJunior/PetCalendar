@extends('layouts.petshop-dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Serviços</div>

                <div class="panel-body">
                    <!-- You are logged in as <strong>Petshop</strong>! -->
                    <!-- <button type="button" class="btn btn-success">Novo</span></button> -->
                    <a class="btn btn-large btn-success" href="{{ route('petshop.services.add') }}">Novo</a>

                    <div class="row">
                        <table class="table table-striped">
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                            </tr>

                            @foreach($services as $s)
                                <tr>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->description}}</td>
                                    <td>{{$s->value}}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
