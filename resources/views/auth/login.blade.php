<!DOCTYPE html>
<html lang="en">

<head class="h-full bg-gray-100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <title>Halaman Home</title>
</head>

<body class="h-full ">
    <section class="h-screen flex justify-center gap-5 bg-login bg-center bg-cover items-center md:p-12 relative">
        <div
            class="flex flex-col justify-center   bg-transparent rounded-2xl shadow-inner backdrop-blur-sm border  border-gray-800 md:w-1/4  p-20  text-black   ">

            @if (session()->has('success'))
                <div class="alert alert-secondary " role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="sm:mx-auto sm:w-full sm:max-w-sm flex  items-center justify-center">
                <h2 class=" text-center  align-middle text-4xl font-bold leading-9 tracking-tight">
                    Login
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                    fill="#000000">
                    <path
                        d="M201-160v-392L76-457l-36-47 440-336 178 136v-96h100v172l162 124-37 47-125-96v393H530v-240H430v240H201Zm60-60h109v-240h220v240h108v-378L480-765 261-598v378Zm134-350h170q0-33-25.5-54.5T480-646q-34 0-59.5 21.34T395-570Zm-25 350v-240h220v240-240H370v240Z" />
                </svg>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-3" action={{ route('login.authenticate') }} method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="@error('email')
                                    is-invalid
                                @enderror block w-full text-black pl-5 rounded-md border-0 py-1.5 shadow-sm ring-1  ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                        </div>
                        @error('email')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Login Gagal!',
                                        text: `{!! session('error') !!}`,
                                        timer: 3000,
                                        showConfirmButton: false
                                    });
                                });
                            </script>
                        @enderror

                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6">Password</label>
                            <div class="text-sm">

                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                value="12345678" required
                                class="text-black pl-5 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-white border border-gray-800 hover:text-gray-800 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="decoration">
            <img src="img/home-2.png" class="absolute top-60 -z-10 left-1/2 -translate-x-1/5" alt="">
        </div>
        <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </section>

</body>

</html>
