@extends('layouts')

@section('title')
    Register
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row">
            <div class="col-12 col-md-6">
                <h1><b>REGISTER</b></h1>
                <p><i><b>To use our service, either as an end consumer or a
                            business, please register an account on our website.</b></i></p>
                <p>By registering, you agree to our <u>Terms and Conditions.</u></p>
                <p>Your email is required for verification only and will be tied to
                    your account. Your contact/business email will have to be
                    entered in the next page.</p>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{ route('next') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="acc">Account Name</label>
                        <input id="acc" type="text" class="form-control @error('acc') is-invalid @enderror"
                            name="acc" value="{{ old('acc') }}" required autofocus>

                        @error('acc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="role">Role</label>
                        <input id="role" type="role" class="form-control @error('role') is-invalid @enderror"
                            name="role" value="{{ old('role') }}" required autofocus>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" value="{{ old('password') }}" required autocomplete="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-lg btn-info text-white float-end rounded-5 px-5"><b>Next</b></button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
