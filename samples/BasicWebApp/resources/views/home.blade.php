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

                        <div>
                            <dl>
                                <dt>Access Token</dt>
                                <dd>{{ auth()->user()->token ?? '' }}</dd>
                                <dt>Refresh Token</dt>
                                <dd> {{ auth()->user()->refresh_token ?? '' }}</dd>
                                <dt>Expired At</dt>
                                <dd> {{ auth()->user()->expired_at ?? '' }}</dd>
                            </dl>
                        </div>

                        <div>
                            <a href="{{ route('me') }}" class="btn btn-primary">Me</a>
                            <a href="{{ route('me_facade') }}" class="btn btn-primary">Me Facade</a>
                            <a href="{{ route('me_trait') }}" class="btn btn-primary">Me Trait</a>
                            <a href="{{ route('me_macro') }}" class="btn btn-primary">Me Macro</a>
                            <a href="{{ route('refresh_token') }}" class="btn btn-primary">RefreshToken</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
