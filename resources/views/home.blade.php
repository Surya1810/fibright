@extends('layouts')

@section('title')
    Home
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row" style="margin-top: 100px">
            <div class="col-12 col-md-8">
                <img src="{{ asset('assets/img/home-1.jpg') }}" alt="home" class="w-100">
            </div>
            <div class="col-12 col-md-4">
                <h1><b>BrightenURDay</b></h1>
                Don’t miss out the gifts and redeem
                them as soon as possible 😉
                <ul>
                    <li>Free products with minimum
                        transactions as described</li>
                    <li>Official merchandises (tote bags,
                        hats, and many more)</li>
                    <li>More points!</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-info text-white rounded-5"><b>Claim now</b></a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 col-md-4">
                <p>(2024/5/12) Having an ambition and is driven
                    to reduce the amount of fossil fuel use in
                    Indonesia, "Fibright" has succeeded in
                    attracting public attention with its bio-energy
                    innovation which is processed from banana
                    stem waste.</p>
            </div>
            <div class="col-12 col-md-8">
                <img src="{{ asset('assets/img/home-2.jpg') }}" alt="home" class="w-100">
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
