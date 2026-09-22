@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-6 col-lg-4">

        <h2 class="mb-4">Dashboard</h2>

        <div class="list-group shadow-sm">

            <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action py-3">
                <div class="fw-bold">Users</div>
                <small class="text-muted">Manage users</small>
            </a>

        </div>

    </div>

</div>

@endsection