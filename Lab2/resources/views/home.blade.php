@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>You are logged in! {{Auth::user()->name}}</p>
                    @php
                        $names = DB::table('users')->get()
                    @endphp
                    @if(!$names->isEmpty())
                    <p>All users: </p>
                        @foreach($names as $name)
                            <p>{{$name->name}}</p>
                        @endforeach
                    @else
                        <p>No users yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
