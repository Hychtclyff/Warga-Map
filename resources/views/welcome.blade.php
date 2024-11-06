<x-layout>
    <section id="hero">
        <div class="hero container flex max-h-screen">
            <div class="hero-content w-1/2 flex flex-col justify-evenly gap-y-10 py-10">
                <header>
                    <div class="w-3/4   ">
                        <p
                            class="capitalize text-pretty leading-relaxed tracking-tight text-justify break-normal text-gray-800 font-bold text-4xl">
                            Discover Your Neighbors and Connect with Your Community
                        </p>
                        <p class="font-light text-gray-800/80 mt-2">
                            A comprehensive database of addresses and resident information around you
                        </p>
                    </div>
                </header>

                <main>

                    <div class="action">
                        <a href="{{ route('addresses') }}"
                            class="bg-gray-800 rounded-lg  text-white shadow-gray-800 py-2 px-5 shadow-md  border border-gray-800 hover:bg-white hover:text-gray-800 transition   ">
                            Find Your Neighbors</a>
                    </div>
                </main>
                <footer>
                    <div class="location flex  items-center text-xl font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px"
                            fill="#5f6368">
                            <path
                                d="M480.06-486.67q30.27 0 51.77-21.56 21.5-21.55 21.5-51.83 0-30.27-21.56-51.77-21.55-21.5-51.83-21.5-30.27 0-51.77 21.56-21.5 21.55-21.5 51.83 0 30.27 21.56 51.77 21.55 21.5 51.83 21.5ZM480-168q129.33-118 191.33-214.17 62-96.16 62-169.83 0-114.86-73.36-188.1-73.36-73.23-179.97-73.23T300.03-740.1q-73.36 73.24-73.36 188.1 0 73.67 63 169.83Q352.67-286 480-168Zm0 88Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                        </svg>
                        <span>Perumahan Arza</span>
                    </div>
                </footer>

            </div>
            <div class="hero-img w-1/2  relative ">
                <img src="img/hero.png" class="w-full absolute -top-20 -z-10" alt="">
            </div>
        </div>
    </section>
    <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
        <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    {{-- <section>
        <div class="overflow-hidden bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <img src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png"
                        alt="Product screenshot"
                        class="w-[48rem]  rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                        width="2432" height="1442">

                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                A better workflow</p>
                            <p class="mt-6 text-lg/8 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis
                                ratione.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Push to deploy.
                                    </dt>
                                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                        impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                    </dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        SSL certificates.
                                    </dt>
                                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                                        lorem cupidatat commodo.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                            <path fill-rule="evenodd"
                                                d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Database backups.
                                    </dt>
                                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                        magna sit morbi lobortis.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div
                class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
            </div>
            <div
                class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
            </div>
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <div class="text-2xl font-semibold text-gray-800 mb-4 text-center">Find Neighbors</div>

                <figure class="mt-10">
                    <blockquote class="text-center text-xl/8 font-semibold text-gray-900 sm:text-2xl/9">
                        <p>“Dengan adanya sistem data alamat warga ini, kami dapat lebih mudah mengelola informasi warga
                            secara terorganisir dan efisien, menciptakan lingkungan yang lebih baik dan terhubung”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <img class="mx-auto h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Aditya</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">Ketua RT & Pengembang</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </section>

    </section>
</x-layout>
