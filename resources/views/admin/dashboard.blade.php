@extends('layouts.app')

@section('content')

<div class="dashboard">

    <h1 class="title">Admin Dashboard</h1>

    <div class="grid">

        <div class="card users">
            <p>Users</p>
            <h2>1,247</h2>
            <div class="bar"><div class="fill"></div></div>
        </div>

        <div class="card actions">
            <p>Actions</p>
            <h2>89</h2>
            <div class="bar"><div class="fill"></div></div>
        </div>

        <div class="card uptime">
            <p>Uptime</p>
            <h2>99.9%</h2>
            <div class="bar"><div class="fill"></div></div>
        </div>

    </div>

    <div class="button-wrapper">
        <a href="{{ route('admin.secret') }}" class="btn">
            Go to Secret Vault →
        </a>
    </div>

</div>

@endsection