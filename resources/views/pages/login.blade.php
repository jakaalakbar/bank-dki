@extends('layouts.AuthLayout.index')

@section('content')
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="card w-50">
            <div class="card-header text-center">
                <h3>Login Aplikasi</h3>
            </div>
            <form method="POST" action="{{ route('login_post') }}">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="card-footer">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
