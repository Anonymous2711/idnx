@extends('layouts.admin')

@section('title', "Edit Halaman")

@section('head.dependencies')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@php
    $publishStatus = [0 => "Tidak", 1 => "Ya"];
@endphp
    
@section('content')
<div class="bg-putih rounded bayangan-5 smallPadding">
    <div class="wrap">
        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="mt-2">Judul Halaman :</div>
            <input type="text" class="box" name="title" value="{{ $page->title }}" required>

            <div class="mt-2">Konten Halaman :</div>
            <textarea name="body" class="box" required>{{ $page->body }}</textarea>

            <div class="mt-2">Publikasikan?</div>
            <select name="is_published" class="box">
                <option value="">-- PILIH --</option>
                @foreach ($publishStatus as $key => $status)
                    @php
                        $isSelected = $page->is_published == $key ? "selected='selected'" : "";
                    @endphp
                    <option {{ $isSelected }} value="{{ $key }}">{{ $status }}</option>
                @endforeach
            </select>

            <button class="lebar-100 mt-2 primer">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection

@section('javascript')
<script>
    CKEDITOR.replace('body');
</script>
@endsection