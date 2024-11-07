@props(['selectedDetail' => null])
<div x-show="{{ $attributes->get('x-show') }}" class="relative z-10" aria-labelledby="modal-title" role="dialog"
    @click="isOpen = false" aria-modal="true" x-transition:enter="ease-out duration-500"
    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-50"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-50">
    >

    <!--
      Background backdrop, show/hide based on modal state.
  
      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
    </div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <!--
          Modal panel, show/hide based on modal state.
  
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl p-10">
                <div>
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base/7 font-semibold text-gray-900">Address Information</h3>
                        <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Personal details and application.</p>
                    </div>

                    <div class="mt-6 border-t border-gray-100">

                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <!-- Menggunakan :src untuk mengikat URL gambar dari selectedDetail.photo -->
                            <img :src="selectedDetail.photo" alt="Profile Photo" class="w-32 h-32 rounded-full">
                        </div>


                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Full name</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
                                    x-text="selectedDetail.first_name + ' ' + selectedDetail.last_name"></dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Email address</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
                                    x-text="selectedDetail.email">

                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Adress</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
                                    x-text="selectedDetail.street_address"></dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Province</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
                                    x-text="selectedDetail.region"></dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">City</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
                                    x-text="selectedDetail.city"></dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">code Post</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
                                    x-text="selectedDetail.postal_code"></dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">House</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"><img
                                        :src="selectedDetail.home_photo" alt="Profile Photo" class="w-44 h-44 ">
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Maps</dt>
                                <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list"
                                        class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="h-5 w-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium"
                                                        x-text="'location' + ' ' + selectedDetail.first_name + ' ' + 'house\'s'">
                                                    </span>

                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a :href="selectedDetail.link_house" target="_blank"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Visit</a>
                                            </div>
                                        </li>

                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">

                    <button type="button" @click="isOpen = !isOpen"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-gray-800 transition hover:text-black border-gray-800 hover:bg-transparent px-3 py-2 text-sm font-semibold text-white  shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
