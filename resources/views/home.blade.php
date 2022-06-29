@extends('layouts.app')

@section('content')
    <div class="container">
        <p class="fw-bold fs-3">Resep Terbaru</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 bg-transparent">
                    <img src="https://picsum.photos/200" class="card-img-top cover rounded" alt="..." height="250px">
                    <div class="card-body px-0 position-relative">
                        <p class="card-subtitle text-muted">2 Orang Menyukai ini</p>
                        <a href="{{ route('detail') }}"
                            class="fs-5 text-primary fw-bold text-decoration-none stretched-link">
                            Lorem Ipsum
                        </a>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos tenetur quam id
                            corrupti minus magnam modi veritatis repudiandae ea ipsum facilis odit perferendis velit,
                            praesentium suscipit impedit! Placeat, quia possimus.</p>
                    </div>
                    <div class="d-flex flex-column">
                        <button class="btn btn-secondary radius-10">Suka</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
