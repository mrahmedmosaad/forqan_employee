@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    index------
                List all
                <a href="listall/create">new item</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

@if (auth()->user()->type=="admin")
    <a href="/listall">list all</a>
@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
