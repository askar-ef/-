<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="container mx-auto p-4">
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 bg-gray-200">No</th>
                <th class="px-4 py-2 bg-gray-200">Judul Buku</th>
                <th class="px-4 py-2 bg-gray-200">Penulis</th>
                <th class="px-4 py-2 bg-gray-200">Harga</th>
                <th class="px-4 py-2 bg-gray-200">Tanggal Terbit</th>
                <th class="px-4 py-2 bg-gray-200">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td class="px-4 py-2 border border-gray-300">{{ ++$no }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $buku->judul }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $buku->penulis }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ "Rp ".number_format($buku->harga, 2, ",", ".") }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ date('d/m/Y', strtotime($buku->tgl_terbit)) }}</td>
                <td class="px-4 py-2 border border-gray-300">
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                    @csrf
                    <button onclick="return confirm('Beneran nih mau dihapus?')">Hapus</button>
                    </form>
                    {{-- <form action="{{ route('buku.update', $buku->id) }}" method="post">
                        <p><a href="{{ route('buku.update', $buku->id) }}">Edit</a></p> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <b>jumlah buku: {{ $jumlah_buku }}</b><br>
    <b>jumlah harga: {{ $jumlah_harga }}</b>
    <br><br><br>
    <p><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
</div>