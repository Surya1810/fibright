@extends('layouts')

@section('title')
    Shop
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row">
            <h1 class="text-center"><b>OUR PRODUCTS</b></h1>
            <hr>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-6 col-md-4">
                <div class="card" style="width: 200px">
                    <img class="card-img-top" src="{{ asset('assets/produk/bengsin.jpg') }}" alt="biogas">
                    <div class="card-body">
                        <h4 class="card-title">Biogas</h4>
                        <p class="card-text">Rp50.000,00</p>
                        <a href="{{ route('purchase', ['id' => 1]) }}" class="btn btn-info text-white"><b>Add to Chart</b></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card" style="width: 200px">
                    <img class="card-img-top" src="{{ asset('assets/produk/biochar.jpg') }}" alt="biochar">
                    <div class="card-body">
                        <h4 class="card-title">Biochar</h4>
                        <p class="card-text">Rp7.500,00</p>
                        <a href="{{ route('purchase', ['id' => 2]) }}" class="btn btn-info text-white"><b>Add to Chart</b></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card" style="width: 200px">
                    <img class="card-img-top" src="{{ asset('assets/produk/oil.jpg') }}" alt="biofuel">
                    <div class="card-body">
                        <h4 class="card-title">Biofuel</h4>
                        <p class="card-text">Rp45.000,00</p>
                        <a href="{{ route('purchase', ['id' => 3]) }}" class="btn btn-info text-white"><b>Add to Chart</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
