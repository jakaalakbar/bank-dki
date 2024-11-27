@extends('layouts.AdminLayout.index')

@section('content')
    <section>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <labelclass="form-label">Password</labelclass=>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
