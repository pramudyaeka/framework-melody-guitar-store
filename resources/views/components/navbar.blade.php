<header>
    <div class="w-full mx-auto flex flex-row px-2 items-center fixed  " id="scroll-bg">
        <a href="">
            <img src="{{ asset('assets/images/melody-logo.png') }}" alt="" class="w-fit h-24">
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center ">

            {{-- <div class="flex flex-row gap-8 items-center"> --}}
            <ul class="flex flex-row gap-4 items-center p-10">
                {{-- Product Hover --}}
                <a class="group relative text-white px-2 py-4 rounded-lg font-bold flex justify-center gap-4 hover:scale-105 group/expand-hover:px-10 hover:bg-bluelight transition ease-in"
                    href="">Product
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg> --}}
                </a>
                {{-- Categories Hover --}}
                <a class="group relative text-white px-2 py-4 rounded-lg font-bold flex justify-center gap-4 hover:scale-105 group/expand-hover:px-10 hover:bg-bluelight transition ease-in"
                    href="">Categories
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg> --}}
                </a>
                {{-- Wishlist Hover & Icon --}}
                <a class="group relative text-white px-2 py-4 rounded-lg font-bold flex justify-center gap-4 hover:scale-105 group/expand-hover:px-8 hover:bg-bluelight transition ease-in"
                    href="">Wishlist
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg> --}}
                </a>
                {{-- Icon Search --}}
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </a>
                {{-- Icon Cart --}}
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </a>


            </ul>
            <a href="{{ route('login') }}">
                <button class="bg-bluelight text-white px-8 py-4 rounded-lg font-bold">Login</button>
            </a>

            {{-- </div> --}}
        </nav>
    </div>

</header>
