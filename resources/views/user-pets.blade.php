@extends('layouts.user-dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pets</div>

                <div class="panel-body">
                    <!-- You are logged in as <strong>User</strong>! -->
                    <div class="row">
                        <div class="col-md-1">
                            <a class="btn btn-large btn-success" href="{{ route('user.pets.add') }}">Novo</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th>Nome</th>
                                </tr>

                                @foreach($pets as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
