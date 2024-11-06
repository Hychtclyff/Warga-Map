<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite('resources/css/app.css')
    <title>Admin</title>
</head>

<body>


    <div class="bg-white py-24 lg:py-5 sm:py-24 relative ">
        <div class="absolute top-15 left-52 flex gap-4">
            <div class="bg-gray-800 p-2 rounded-full w-9 h-9  hover:animate-bounce flex justify-center items-center">
                <a href="/" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#ffff">
                        <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" />
                    </svg>
                </a>
            </div>
            <div class="flex justify-center mb-10">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="px-6 py-2 text-white bg-red-600 rounded-lg shadow-lg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition ease-in-out duration-150">
                        Logout
                    </button>
                </form>
            </div>
        </div>
        <h2 class="text-center  text-base/7 font-semibold text-indigo-600">Welcome Admin</h2>
        <p
            class="mx-auto mt-2 max-w-2xl text-balance text-center text-xl font-semibold tracking-tight text-gray-950 sm:text-xl">
            Manage and improve the community website to keep it useful, secure, and engaging for all residents. Thank
            you for your dedication! </p>


    </div>

    <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:py-5 lg:px-8">
        <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div
            class="mx-auto mt-5 grid max-w-lg grid-cols-1  gap-6 sm:mt-20 lg:mt-0 sm:gap-y-0 lg:max-w-7xl lg:grid-cols-2">
            <div
                class="rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none sm:p-10 lg:mx-0 lg:rounded-bl-3xl lg:rounded-tr-none">

                <form method="post"
                    action="{{ isset($row) ? route('address.update', $row->id) : route('address.store') }}"
                    enctype="multipart/form-data">
                    @if (isset($row))
                        @method('PATCH') <!-- Menetapkan metode PATCH untuk update -->
                    @endif
                    @if (session('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: '{{ session('success') }}',
                                timer: 5000,
                                showConfirmButton: false
                            });
                        </script>
                    @endif
                    @if (session('error'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: '{{ session('error') }}',
                                timer: 3000,
                                showConfirmButton: false
                            });
                        </script>
                    @endif
                    @csrf
                    <div class="space-y-12 flex">
                        <div class="border-b border-gray-900/10 pb-12 ">
                            <h2 class="text-base/7 font-semibold text-gray-900">Create Data</h2>
                            <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.
                            </p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full flex  justify-evenly">
                                    <div class="mt-2 flex-col items-center gap-x-3">
                                        <label for="photo"
                                            class="block text-sm/6 font-medium text-gray-900">Photo</label>
                                        <div class="mt-4 flex text-sm/6 text-gray-600 items-center gap-3">
                                            @if (isset($row))
                                                <img src="/{{ $row['photo'] }}" alt="pp"
                                                    class="h-12 w-12 rounded-full">
                                            @else
                                                <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif



                                            <label for="photo"
                                                class="relative cursor-pointer rounded-md bg-gray-100 p-2  font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span class="align-middle ">Upload a
                                                    file</span>
                                                <input id="photo" name="photo" type="file" class="sr-only">
                                                @error('photo')
                                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                                @enderror

                                            </label>
                                        </div>

                                    </div>

                                    <div class="col-span-full">
                                        <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Home
                                            photo</label>


                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">

                                            <div class="text-center">
                                                @if (isset($row))
                                                    <div class="flex justify-center">

                                                        <img src="/{{ $row['home_photo'] }}" alt="home_photo"
                                                            class="w-auto h-32">
                                                    </div>
                                                @else
                                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path fill-rule="evenodd"
                                                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif

                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="home_photo"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="home_photo" name="home_photo" type="file"
                                                            class="sr-only">
                                                        @error('photo')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First
                                        name</label>
                                    <div class="mt-2">
                                        <input type="text" name="first_name" id="first_name"
                                            autocomplete="given-name"
                                            value="{{ old('first_name', $row->first_name ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('first_name')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last
                                        name</label>
                                    <div class="mt-2">
                                        <input type="text" name="last_name" id="last_name"
                                            value="{{ old('last_name', $row->last_name ?? '') }}"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('last_name')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email
                                        address</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email"
                                            value="{{ old('email', $row->email ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('email')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-span-full">
                                    <label for="street_address"
                                        class="block text-sm/6 font-medium text-gray-900">Street
                                        address</label>
                                    <div class="mt-2">
                                        <input type="text" name="street_address" id="street_address"
                                            autocomplete="street_address"
                                            value="{{ old('street_address', $row->street_address ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('street_address')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2 sm:col-start-1">
                                    <label for="city"
                                        class="block text-sm/6 font-medium text-gray-900">City</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city"
                                            autocomplete="address-level2" value="{{ old('city', $row->city ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('city')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="region" class="block text-sm/6 font-medium text-gray-900">State /
                                        Province</label>
                                    <div class="mt-2">
                                        <input type="text" name="region" id="region"
                                            autocomplete="address-level1"
                                            value="{{ old('region', $row->region ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('region')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="postal_code" class="block text-sm/6 font-medium text-gray-900">ZIP /
                                        Postal code</label>
                                    <div class="mt-2">
                                        <input type="text" name="postal_code" id="postal_code"
                                            autocomplete="postal_code"
                                            value="{{ old('postal_code', $row->postal_code ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('postal_code')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="link_house" class="block text-sm/6 font-medium text-gray-900">Link
                                        House</label>
                                    <div class="mt-2">
                                        <input type="text" name="link_house" id="link_house"
                                            autocomplete="link_house"
                                            value="{{ old('link_house', $row->link_house ?? '') }}"
                                            class="block w-full rounded-md border-0 py-1.5 px-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        @error('link_house')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>

            </div>


            <div class="relative rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
                <ul role="list" class="divide-y divide-gray-100">

                    @foreach ($data as $e)
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex min-w-0 gap-x-4">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src='/{{ $e['photo'] }}'
                                    alt="photo">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm/6 font-semibold text-white">{{ $e['first_name'] }}
                                        {{ $e['last_name'] }} </p>
                                    <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $e['street_address'] }}, City
                                        {{ $e['city'] }}, Province {{ $e['region'] }} </p>
                                </div>
                            </div>
                            <div
                                class="hidden shrink-0 sm:flex sm:flex-col sm:items-end lg:flex lg:flex-row lg:gap-3 ">
                                <div class="bg-indigo-400 p-2 rounded-full hover:animate-spin ">
                                    <a href="{{ route('edit.index', $e['id']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                            viewBox="0 -960 960 960" width="24px" fill="#000000">
                                            <path
                                                d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                        </svg>
                                    </a>
                                </div>

                                <form action="{{ route('address.destroy', $e['id']) }}" method="POST"
                                    id="delete-form-{{ $e['id'] }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                        class="bg-rose-400 p-2 rounded-full hover:animate-spin border border-rose-400 focus:bg-white transition"
                                        onclick="confirmDelete({{ $e['id'] }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                            viewBox="0 -960 960 960" width="24px" fill="#000000">
                                            <path
                                                d="m376-300 104-104 104 104 56-56-104-104 104-104-56-56-104 104-104-104-56 56 104 104-104 104 56 56Zm-96 180q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520Zm-400 0v520-520Z" />
                                        </svg>
                                    </button>
                                </form>

                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                <script>
                                    function confirmDelete(id) {
                                        Swal.fire({
                                            title: 'Apakah kamu yakin?',
                                            text: "Data yang dihapus tidak dapat dikembalikan!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#d33',
                                            cancelButtonColor: '#3085d6',
                                            confirmButtonText: 'Ya, Hapus!',
                                            cancelButtonText: 'Batal'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.getElementById(`delete-form-${id}`).submit();
                                            }
                                        });
                                    }
                                </script>

                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>



</body>

</html>
