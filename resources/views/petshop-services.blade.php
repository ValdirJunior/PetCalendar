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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
