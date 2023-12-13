@extends('layouts.global')

@section('title')
    Add Product || Melody Guitar Store
@endsection

@section('content')
    <div class="w-full h-full flex flex-col">
        @include('components.header', ['nama' => 'Admin'])
        <div class=" flex flex-col justify-center items-center ">
            <div class="flex flex-row">
                <h1 class="mb-5 mt-10 text-bluelight font-bold text-2xl">MELODY GUITAR STORE</h1>
            </div>

            <div class="w-[70%] h-[25rem] flex-col bg-bluelight flex rounded-2xl">
                <p class="font-bold text-dark  text-2xl self-center mt-4">ADD PRODUCT</p>
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-row gap-80 ml-24 mt-5">
                        <p class="font-bold text-dark  text-xl mt-2">Nama Produk</p>
                        <input type="text" name="nama_produk" placeholder="Nama Produk" class="rounded-md pe-10 ps-8 ">
                    </div>
                    <div class="flex flex-row gap-80 ml-24 mt-5">
                        <p class="font-bold text-dark  text-xl mt-2 mr-12">Kategori</p>
                        <input type="text" name="kategori_produk" placeholder="Kategori" class="rounded-md pe-10 ps-8 ">
                    </div>
                    <div class="flex flex-row gap-80 ml-24 mt-5">
                        <p class="font-bold text-dark  text-xl mt-2 mr-[5.5rem]">Stok</p>
                        <input type="text" name="stok" placeholder="Stok" class="rounded-md pe-10 ps-8 ">
                    </div>
                    <div class="flex flex-row gap-80 ml-24 mt-5">
                        <p class="font-bold text-dark  text-xl mt-2 mr-[4.5rem]">Harga</p>
                        <input type="text" name="harga" placeholder="Harga" class="rounded-md pe-10 ps-8 ">
                    </div>
                    <div class="flex flex-row gap-[16rem] ml-24 mt-5">
                        <p class="font-bold text-dark  text-xl mt-2 mr-[3rem]">Gambar Produk</p>
                        <input type="file" name="gambar" class="rounded-md pe-10 ps-8">
                    </div>
                    <div class="flex justify-center mt-2">
                        <button type="submit" class="bg-green-600 px-4 py-2 mt-2 text-white font-bold rounded-md">Tambah</button>
                    </div>

                </form>

            </div>

        </div>


    </div>
@endsection
