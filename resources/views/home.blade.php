@extends('layouts.app')

@section('content')
    <div class="container">
        <p class="fw-bold fs-3">Resep Terbaru</p>
        <div class="row g-4">
            @forelse ($recipes as $item)
                <div class="col-md-4">
                    <div class="card h-100 border-0 bg-transparent">
                        <img src="{{ asset('img/recipes/' . $item->img) }}" class="card-img-top cover rounded"
                            alt="{{ $item->title }}" height="250px">
                        <div class="card-body px-0 position-relative">
                            <p class="card-subtitle text-muted">2 Orang Menyukai ini</p>
                            <a href="{{ route('detail', $item->slug) }}"
                                class="fs-5 text-primary fw-bold text-decoration-none stretched-link">
                                {{ $item->title }}
                            </a>
                            <p class="card-text">{{ $item->description }}</p>
                        </div>
                        <div class="d-flex flex-column">
                            <button class="btn btn-secondary radius-10">Suka</button>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-uppercase fw-bold fs-5 text-decoration-underline text-center">Tidak ada resep</p>
            @endforelse
        </div>
    </div>
@endsection
