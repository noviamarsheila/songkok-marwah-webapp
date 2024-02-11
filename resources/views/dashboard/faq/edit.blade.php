@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit FAQ</h1>
    </div>
    <div class="my-4">
        <a href="/dashboard/faq" class="text-decoration-none ">kembali...</a>
    </div>
    <div class="col-md-5">
        <form method="POST" action="/dashboard/faq/{{ $faq->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Heading</label>
                <input type="text" class="form-control" id="name" name="heading" value="{{ $faq->heading }}" />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Target</label>
                <input type="text" class="form-control" id="name" name="target" value="{{ $faq->target }}" />
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="pertanyaan"  id="floatingTextarea2" style="height: 100px">{{ $faq->pertanyaan }}</textarea>
                <label for="floatingTextarea2">Pertanyaan</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="jawaban"  id="floatingTextarea3" style="height: 100px">{{ $faq->jawaban }}</textarea>
                <label for="floatingTextarea3">Jawaban</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
