<div clas='md:grid md:grid-cols-1 md:gap-6'>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            
            <div class="lg:flex mb-4 m-10 rounded mx-auto">

                @foreach($storage->products as $product)
                <div class="w-full lg:w-1/6 rounded overflow-hidden shadow-lg m-10">
                    <!-- <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains"> -->
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center">{{ $product->name }} </div>
                        <p class="text-gray-700 text-base text-center">
                        {{ $product->priority }}
                        </p>
                    </div>
                    <button class="w-1/2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>Download</span>
                    </button>
                    <button class="w-1/2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 float-left inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>Download</span>
                    </button>
                </div>
                @endforeach
            </div>

        </div>

        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
            BUTTON
        </div>
    </div>
</div>