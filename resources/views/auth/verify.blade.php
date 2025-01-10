@extends('layouts.app')
@section('title')
    Verify
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<Style>
.container {
    max-width: 600px;
}

.card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    background: linear-gradient(to right, #007bff, #00aaff);
}

.card-body {
    padding: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.btn-primary {
    background: linear-gradient(to right, #007bff, #00aaff);
    border: none;
    transition: background 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(to right, #0056b3, #0085cc);
}

.btn-link {
    color: #007bff;
    transition: color 0.3s ease;
}

.btn-link:hover {
    color: #0056b3;
}
</style>