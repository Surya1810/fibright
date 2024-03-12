@extends('layouts')

@section('title')
    About us
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-6"><img src="{{ asset('assets/img/about1.jpg') }}" alt="about1" class="w-100"></div>
                    <div class="col-6"><img src="{{ asset('assets/img/about2.jpg') }}" alt="about2" class="w-100"></div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h1><b style="font-weight: 700">Fibright</b></h1>
                <p class="my-4"><i><b>Fibright merajut keberlanjutan: batang pisang jadi bio-energi
                            premium melalui teknologi thermochemical. Inovasi hijau
                            untuk masa depan yang indah!</b></i></p>

                <p>Fibright merupakan sebuah startup yang
                    menyediakan beberapa energi terbarukan: biofuel,
                    biochar, dan biogas melalui teknologi termokimia
                    (proses pirolisis dan gasifikasi) dengan
                    memanfaatkan limbah perkebunan yakni, serat
                    batang semu pisang dan batang tandan pisang.</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
