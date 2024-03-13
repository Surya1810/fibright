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
                <form action="{{ route('next') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="full">Business Name</label>
                        <input id="full" type="text" class="form-control @error('full') is-invalid @enderror"
                            name="full" value="{{ old('full') }}" required>

                        @error('full')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="full">Full Name</label>
                        <input id="full" type="text" class="form-control @error('full') is-invalid @enderror"
                            name="full" value="{{ old('full') }}" required>

                        @error('full')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <textarea class="form-control w-100" id="address" rows="5" required placeholder="type here..."></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="full">Phone</label>
                        <input id="full" type="tel" class="form-control @error('full') is-invalid @enderror"
                            name="full" value="{{ old('full') }}" required>

                        @error('full')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button onclick="myFunction()"
                        class="btn btn-lg btn-info text-white float-end rounded-5 px-5"><b>Register</b></button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <p>Registering as an end user is ideal for those using our
                    service for personal, non-commercial purposes. This means
                    that once the product reaches your hand, you do not gain
                    profit by reselling or reprocessing our product. <br><br>
                    If you would like to use our service for commercial purposes,
                    it is best to register as a business.</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function myFunction() {
            alert("You are registered");
        }
    </script>
@endpush
