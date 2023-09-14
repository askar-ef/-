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
                <th class="px-4 py-2 bg-gray-200">ID</th>
                <th class="px-4 py-2 bg-gray-200">Judul Buku</th>
                <th class="px-4 py-2 bg-gray-200">Penulis</th>
                <th class="px-4 py-2 bg-gray-200">Harga</th>
                <th class="px-4 py-2 bg-gray-200">Tanggal Terbit</th>
                <th class="px-4 py-2 bg-gray-200">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td class="px-4 py-2 border border-gray-300">{{ $buku->id }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $buku->judul }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $buku->penulis }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ "Rp ".number_format($buku->harga, 2, ",", ".") }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ date('d/m/Y', strtotime($buku->tgl_terbit)) }}</td>
                <td class="px-4 py-2 border border-gray-300"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <b>ghifari cogil: {{ $jumlah_buku }}</b><br>
    <b>ghifari cogil: {{ $jumlah_harga }}</b>
</div>


<div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>judul buku</th>
                <th>penulis</th>
                <th>harga</th>
                <th>tanggal terbit</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ",", ".") }}</td>
                <td>{{date('d/m/Y', strtotime($buku->tgl_terbit))}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


{{-- 

@foreach ($data_buku as $buku)
<div>
    {{ $buku->id }} <br/>
    {{ $buku->judul }} <br/>
    {{ $buku->penulis }} <br/>
    {{ $buku->harga }} <br/>
    {{date('d/m/Y', strtotime($buku->tgl_terbit))}}
    <hr>
</div>
@endforeach --}}