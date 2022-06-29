@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach

                <p class="fw-bold fs-2 text-primary">Tulis Resepmu ...</p>
                <form action="{{ route('post_recipes') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold fs-5">Judul</label>
                        <input type="text" class="form-control bg-white radius-10" id="title" name="title"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold fs-5">Deskripsi</label>
                        <textarea class="form-control bg-white radius-10" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="materials" class="form-label fw-bold fs-5">Bahan - bahan</label>
                        <div id="inputMaterial">
                            <input type="text" class="form-control bg-white radius-10 mb-2" id="materials"
                                name="materials[]" required>
                        </div>
                        <a class="btn text-primary" onclick="addMaterial()">+ Item Bahan</a>
                    </div>
                    <div class="mb-3">
                        <label for="steps" class="form-label fw-bold fs-5">Langkah Pembuatan</label>
                        <div id="inputStep">
                            <input type="text" class="form-control bg-white radius-10 mb-2" id="steps" name="steps[]"
                                required>
                        </div>
                        <a class="btn text-primary" onclick="addStep()">+ Item Langkah</a>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label fw-bold fs-5">Upload Foto Masakan</label>
                        <input type="file" class="form-control bg-white radius-10" id="img" name="img"
                            required>
                    </div>
                    <div class="d-flex flex-column py-3">
                        <button type="submit" class="btn btn-primary btn-lg text-white radius-10">Terbitkan Resep</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
