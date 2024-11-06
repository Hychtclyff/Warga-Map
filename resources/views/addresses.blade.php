<x-layout>
    <header>
        <div class=" relative mt-2  flex items-center flex-col gap-5">
            <div class="header text-3xl font-bold">
                <p>Address Details of Our Residents</p>
            </div>
            <div class="search flex gap-3">
                <input t ype="text" name="price" id="price" placeholder="Search"
                    class="block group rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                <button class="bg-gray-800 p-2 rounded-full hover:animate-spin border border-gray-800 transition ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                        fill="#ffff">
                        <path
                            d="M792-120.67 532.67-380q-30 25.33-69.64 39.67Q423.39-326 378.67-326q-108.44 0-183.56-75.17Q120-476.33 120-583.33t75.17-182.17q75.16-75.17 182.5-75.17 107.33 0 182.16 75.17 74.84 75.17 74.84 182.27 0 43.23-14 82.9-14 39.66-40.67 73l260 258.66-48 48Zm-414-272q79.17 0 134.58-55.83Q568-504.33 568-583.33q0-79-55.42-134.84Q457.17-774 378-774q-79.72 0-135.53 55.83-55.8 55.84-55.8 134.84t55.8 134.83q55.81 55.83 135.53 55.83Z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main x-data="{ isOpen: false, selectedDetail: {} }">
        <div class="absolute inset-x-0 bottom-10 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr to-[#ff80b5] from-[#9089fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="data my-10 grid grid-cols-4 z-10 gap-5 ">
            @foreach ($data as $e)
                <div
                    class="card max-h-[27rem]  border border-gray-300 rounded-xl overflow-hidden  shadow-lg bg-transparent backdrop-blur-xl ">
                    <div class=" overflow-hidden ">
                        <img src="{{ $e['home_photo'] }} " class="card-img h-52 w-full" alt="...">
                    </div>


                    <div class="card-body p-5 flex flex-col gap-3">
                        <div class="card-title flex items-center gap-3">
                            <img src="{{ $e['photo'] }}" class="w-10 h-10 rounded-full" alt="">
                            <h5>{{ $e['first_name'] }} {{ $e['last_name'] }}</h5>
                        </div>
                        <p class="card-text">{{ $e['street_address'] }}, City
                            {{ $e['city'] }}, Province {{ $e['region'] }}</p>
                        <a href="#" @click.prevent="isOpen = true; selectedDetail = {{ json_encode($e) }}"
                            class="bg-gray-800 py-2 px-5 rounded-lg w-1/3 hover:bg-white border border-gray-800 text-white  hover:text-gray-800 transition">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>


        <x-modal selected-detail="selectedDetail" x-show="isOpen"
        @click.away="isOpen = false"></x-modal>


    </main>
</x-layout>
