@extends('layouts.global')
@section('title')
    Transaction - Admin
@endsection

@section('content')
    <div class="w-full h-full flex">
        @include('components.sidebar')
        <div class="w-full flex flex-col bg-dark">
            @include('components.header', ['nama' => 'Admin'])

            <div class="h-full m-4 p-8 bg-bluelight rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4">Data Transaksi</p>
                <hr><br>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-dark font-bold">
                        <thead class="text-xs text-gray-700 uppercase bg-bluelight">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga Total
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Transaksi as $trs)
                                <tr class="bg-bluelight border-b">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $trs->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $trs->produk_id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $trs->harga_total }}
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
