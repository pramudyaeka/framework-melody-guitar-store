@extends('layouts.global')

@section('title')
Masuk || Melody Guitar Store
@endsection

@section('content')
<div class="flex">
    <img src="{{ asset('assets/images/melody-logo.png') }}" alt="" class="w-3/5 h-screen object-cover brightness-50">
    <div class="w-2/5 h-screen bg-gradient-to-tr from-bluelight to-blue-950 flex justify-center items-center">
        <div class="absolute w-2/5 h-auto right-24 bg-white rounded-xl flex flex-col overflow-hidden divide-y-2">
            <div class="flex justify-around">
                <h1 class="w-full pt-8 pb-6 font-bold text-3xl text-center">Login</h1>
            </div>
            <div class="h-full px-12 py-8 flex flex-col justify-between items-center">
                <form action="#" class="w-full flex flex-col items-start">
                    <div class="w-full relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                            </svg>
                        </div>
                        <input type="username" name="username" placeholder="Username" class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                    </div>
                    <div class="w-full relative mt-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/>
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="Password" class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                    </div>
                    <div class="w-full flex justify-end mt-4">
                        <span class="text-sm">
                            Don't have an account?
                            <a href="{{ route('register') }}"
                                class="text-sm text-end

                        text-blue-900 hover:font-medium">
                                Register here</a>
                        </span>
                        <a href="#" class=" text-sm text-end text-bluelight hover:font-medium ml-24">Forgot password?</a>
                    </div>
                </form>
                <a href="{{ route('admin.account') }}" class="w-full h-auto py-4 mt-16 text-white font-medium bg-bluelight rounded-md flex justify-center items-center hover:bg-blue-700">
                    <button type="submit" class="">Sign in</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
