@extends('layouts.global')
@section('title')
    Product - Admin
@endsection

@section('content')
    <div class="w-full h-full flex">
        @include('components.sidebar')
        <div class="w-full flex flex-col bg-dark">
            @include('components.header', ['nama' => 'Admin'])

            <div class="h-full m-4 p-8 bg-bluelight rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4">Data Product</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end gap-2">
                    <a href = "{{ route('product.add') }}">
                        <button class="px-4 py-2 bg-green-600 rounded-md text text-white">Tambah</button>
                    </a>
                    <a href = "{{ route('download.excel') }}">
                        <button class="px-4 py-2 bg-green-600 rounded-md text text-white">Download</button>
                    </a>

                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-dark font-bold">
                        <thead class="text-xs text-gray-700 uppercase bg-bluelight">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Produk
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stok
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Produk as $prd)
                                <tr class="bg-bluelight border-b">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900

                        whitespace-nowrap">

                                        {{ $prd->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $prd->nama_produk }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->kategori_produk }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->stok }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->harga }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->gambar }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="w-full h-auto">
                                            <a href="{{ route('product.edit',$prd->id) }}">
                                                <button class="px-4 py-2 bg-yellow-300 rounded-md text">Edit</button>
                                            </a>
                                            <form action="{{route('product.delete', $prd->id)}}" method="post">
                                                @csrf
                                            <button type="submit"
                                                class="px-4 py-2 bg-red-600 rounded-md text

                        text-white">Hapus</button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
