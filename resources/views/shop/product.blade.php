@extends('layouts')

@section('title')
    Shop
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row">
            <h1 class="text-center"><b>PRODUCTS</b></h1>
            <hr>
        </div>
        <div class="row text-center">
            @foreach ($products as $product)
                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/' . $product->image) }}" alt="biogas">
                        <div class="card-body">
                            <h4 class="card-title"><b>{{ $product->name }}</b></h4>
                            <p class="card-text"><b>{{ formatRupiah($product->price) }}</b></p>
                            <a href="{{ route('purchase', $product->id) }}" class="btn btn-info text-white"><b>Add to
                                    Chart</b></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@push('scripts')
@endpush
