@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Usuários</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Nome</td>
                                    <td class="text-center">E-mail</td>
                                    <td class="text-center">Telefone</td>
                                    <td class="text-center">Tipo</td>
                                    <td class="text-center">Status</td>
                                </th>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->phone }}</td>
                                <td class="text-center">{{ ucfirst($user->type) }}</td>
                                <td class="text-center">{{ ucfirst($user->status) }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
