@extends('layouts')

@section('title')
    Shipping
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row mb-5">
            <h1 class="text-center"><b>Shipping</b></h1>
            <hr>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img class="w-100 rounded-3 shadow-lg" src="{{ asset('assets/' . $product->image) }}" alt="biogas">
            </div>
            <div class="col-12 col-md-8 px-5">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-5">
                            <p><b>Product Name</b></p>
                            <h4>{{ $product->name }}</h4>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Quantity</label>
                                <input type="text" class="form-control w-100" id="address"
                                    placeholder="{{ $qty }}" disabled></input>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Price</label>
                                <input type="text" class="form-control w-100" id="address"
                                    placeholder="{{ formatRupiah($price) }}" disabled></input>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">address</label>
                                <textarea class="form-control w-100" id="address" rows="3" required placeholder="type here..."></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="address" class="form-label">Delivery Courier</label>
                            <select class="form-select" aria-label="delivery" required>
                                <option selected disabled>Choose</option>
                                <option value="JNE">JNE</option>
                                <option value="JNT Express">JNT Express</option>
                                <option value="JNT Cargo">JNT Cargo</option>
                                <option value="Sicepat">Sicepat</option>
                                <option value="Go-send Instant">Go-send Instant</option>
                                <option value="Go-send Sameday">Go-send Sameday</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Price</label>
                                <input type="text" class="form-control w-100" id="address" placeholder="Rp30.000"
                                    disabled></input>
                            </div>
                        </div>
                        <button onclick="myFunction()"
                            class="btn btn-lg btn-info w-100 px-5 text-white rounded-5 mt-5"><b>Buy</b></button>
                    </div>
                </form>
            </div>
    </section>
@endsection

@push('scripts')
    <script>
        function myFunction() {
            alert("Product delivered");
        }
    </script>
@endpush
