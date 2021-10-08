@extends('layouts.admin')

@section('title', "User Admin")

@section('header.action')
<button class="primer rounded-none" onclick="munculPopup('#addAdmin')">
    <i class="fas fa-plus mr-1"></i> Admin Baru
</button>
@endsection

@section('content')
<div class="bg-putih rounded bayangan-5 smallPadding">
    <div class="wrap">
        @if ($message != "")
            <div class="bg-hijau-transparan rounded p-2 mb-3">
                {{ $message }}
            </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th class="lebar-20"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <span class="bg-hijau-transparan rounded p-1 pl-2 pr-2 pointer" onclick="edit('{{ $admin }}')">
                                <i class="fas fa-edit"></i>
                            </span>
                            <a href="{{ route('admin.admin.delete', $admin->id) }}" class="bg-merah-transparan rounded p-1 pl-2 pr-2 pointer ml-1" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="addAdmin">
    <div class="popup">
        <div class="wrap">
            <h3>Tambah Admin Baru
                <i class="fas fa-times ke-kanan pointer" onclick="hilangPopup('#addAdmin')"></i>
            </h3>
            <form action="{{ route('admin.admin.store') }}" method="POST" class="wrap super">
                {{ csrf_field() }}
                <div class="mt-2">Nama :</div>
                <input type="text" class="box" name="name" id="name" required>
                <div class="mt-2">Email :</div>
                <input type="email" class="box" name="email" id="email" required>
                <div class="mt-2">Password :</div>
                <input type="password" class="box" name="password" id="password" required>

                <button class="lebar-100 mt-3 primer">Tambahkan</button>
            </form>
        </div>
    </div>
</div>

<div class="popupWrapper" id="editAdmin">
    <div class="popup">
        <div class="wrap">
            <h3>Edit Admin
                <i class="fas fa-times ke-kanan pointer" onclick="hilangPopup('#editAdmin')"></i>
            </h3>
            <form action="{{ route('admin.admin.update') }}" method="POST" class="wrap super">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id">
                <div class="mt-2">Nama :</div>
                <input type="text" class="box" name="name" id="name" required>
                <div class="mt-2">Email :</div>
                <input type="email" class="box" name="email" id="email" required>
                <div class="mt-2">Ubah Password :</div>
                <input type="password" class="box" name="password" id="password">
                <div class="mt-1 teks-kecil teks-transparan">biarkan kosong jika tidak ingin mengganti password</div>

                <button class="lebar-100 mt-3 primer">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    const edit = data => {
        data = JSON.parse(data);
        munculPopup("#editAdmin");
        select("#editAdmin #id").value = data.id;
        select("#editAdmin #name").value = data.name;
        select("#editAdmin #email").value = data.email;
    }
</script>
@endsection