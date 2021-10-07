@extends('layouts.admin')

@section('title', "Semua Halaman")

@section('header.action')
<a href="{{ route('admin.pages.create') }}">
    <button class="primer rounded-none">
        <i class="fas fa-plus mr-1"></i> Halaman Baru
    </button>
</a>
@endsection

@section('content')
<div class="bg-putih rounded bayangan-5 smallPadding">
    <div class="wrap">
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th><i class="fas fa-eye"></i></th>
                    <th class="lebar-20"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    @php
                        $publishStatus = $page->is_published == 1 ? "<span class='teks-hijau'>Dipublikasikan</span>" : "<span class='teks-transparan'>Draf</span>";
                    @endphp
                    <tr>
                        <td>
                            {{ $page->title }}
                            <div class="mt-1 teks-kecil">{!! $publishStatus !!}</div>
                        </td>
                        <td>
                            {{ $page->read_counter }}x dilihat
                        </td>
                        <td>
                            <a href="{{ route('admin.pages.edit', $page->id) }}" class="bg-hijau-transparan rounded p-1 pl-2 pr-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="bg-merah-transparan rounded p-1 pl-2 pr-2 ml-1">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection