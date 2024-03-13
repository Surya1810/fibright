@extends('layouts')

@section('title')
    Purchase
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row">
            <h1 class="text-center"><b>Purchasing</b></h1>
            <hr>
        </div>
        <div class="row m-5">
            <div class="col-12 col-md-4">
                <img class="w-100 rounded-3 shadow-lg" src="{{ asset('assets/' . $product->image) }}" alt="biogas">
            </div>
            <div class="col-12 col-md-8 px-5">
                <h1 class="my-4"><b>{{ $product->name }}</b></h1>
                <span><img src="{{ asset('assets/img/stars.png') }}" alt="stars" width="100px"> | 20 reviewers
                    recommended
                    this. <a href="" style="color:red">See
                        review</a></span>
                <h3 class="mt-4"><s>Rp75.000</s>
                    <span style="color: rgb(150, 12, 12)">-60%</span>
                </h3>
                <h1 style="color: rgb(180, 16, 16)" class="mb-5"><b>{{ formatRupiah($product->price) }}</b></h1>
                <form action="{{ route('buy', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center mb-5 w-100">
                        <div class="col-auto">
                            <label for="size" class="col-form-label">Size</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="size" class="form-control" aria-describedby="size"
                                placeholder="{{ $product->size }}" disabled>
                        </div>
                        <div class="col-auto">
                            <label for="qty" class="col-form-label">Quantity</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="qty" name="qty" class="form-control"
                                aria-describedby="quantity" placeholder="input here..." required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-info rounded-5 px-5 text-white w-100"><b>Buy</b></button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
