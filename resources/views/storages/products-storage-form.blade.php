<div clas='md:grid md:grid-cols-1 md:gap-6'>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="grid grid-cols-6 gap-4">
                @foreach($storage->products as $product)
                    <a href="#"
                       class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{$product->name}}</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{$product->priority}}</p>
                    </a>
                @endforeach
            </div>
        </div>

        <div
            class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
            BUTTON
        </div>
    </div>
</div>
