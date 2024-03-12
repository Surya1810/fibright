@extends('layouts')

@section('title')
    News & Event
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="row" style="margin-top: 100px">
            <div class="col-6 col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header border-0" style="background-color: white">
                        <p><b>SEforALL's reaction to the draft Global Stocktake at COP28</b></p>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('assets/news/news-1.png') }}" class="mb-3 w-100" alt="news-1">
                        <span class="badge text-bg-secondary">12/12/23</span><br>
                        <small>The Global Stocktake text released today at COP28 shows backsliding and dilution of language,
                            which
                            is deeply concerning after the committed work that has gone into its preparation.

                            There can be no optionality of the energy transition package, and the inadequate emphasis on
                            energy
                            efficiency is worrisome. Urgent and decisive action is needed to meet climate goals...</small>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('news.more', ['id' => 1]) }}"
                            class="btn btn-lg btn-info rounded-5 text-white"><b>Read
                                More</b></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header border-0" style="background-color: white">
                        <p><b>United States Government Joins UN 24/7 Carbon-Free Energy Compact</b></p>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('assets/news/news-2.png') }}" class="mb-3  w-100" alt="news-2">

                        <span class="badge text-bg-secondary">05/12/23</span><br>
                        <small>Today, at the United Nations Climate Change Conference of the Parties (COP28), the White
                            House
                            Council on Environmental Quality (CEQ) announced that the United States Government has joined
                            the
                            United Nations (UN) 24/7 Carbon-Free Energy (CFE) Compact. The 24/7 CFE Compact...</small>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('news.more', ['id' => 2]) }}"
                            class="btn btn-lg btn-info rounded-5 text-white"><b>Read
                                More</b></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header border-0" style="background-color: white">
                        <p><b>SDG7 Global South Pavilion at COP28</b></p>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('assets/news/news-3.png') }}" class="mb-3  w-100" alt="news-3">
                        <span class="badge text-bg-secondary">01/12/23</span><br>
                        <small>The SDG7 Global South Pavilion will be the main hub at COP28 for discussing and showcasing
                            how to
                            unite global efforts on energy, climate and development. Under the theme of “Forward Together”,
                            this
                            year, our focus is on bringing together governments, partners, and other stakeholders from
                            developing regions; uniting those who require resources to transition equitably with those who
                            have
                            an interest in the opportunities the transition presents...</small>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('news.more', ['id' => 3]) }}"
                            class="btn btn-lg btn-info rounded-5 text-white"><b>Read
                                More</b></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
@endpush
