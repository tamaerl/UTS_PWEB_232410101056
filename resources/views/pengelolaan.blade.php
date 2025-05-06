@extends('layouts.app')

@section('title', 'Pengelolaan Pesanan')

@section('content')
<div class="bg-white shadow-md rounded-xl min-h-screen p-6">
    <h2 class="text-3xl font-serif text-pink-600 mb-6">🌸 Waitlist 🌸</h2>

    <table class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left text-sm font-sans text-gray-700">No.</th>
                <th class="px-4 py-2 text-left text-sm font-sans text-gray-700">Customer</th>
                <th class="px-4 py-2 text-left text-sm font-sans text-gray-700">Commission Type</th>
                <th class="px-4 py-2 text-left text-sm font-sans text-gray-700">Payment Status</th>
                <th class="px-4 py-2 text-left text-sm font-sans text-gray-700">Order Date</th>
                <th class="px-4 py-2 text-left text-sm font-sans text-gray-700"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pesanan)
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pesanan['no'] }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pesanan['nama_pemesan'] }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pesanan['jenis_komisi'] }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pesanan['status_pembayaran'] }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pesanan['tanggal_pemesanan'] }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">

                    <button class="bg-pink-400 text-white px-4 py-2 rounded hover:bg-sky-300 transition">
                        Details
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
