<div clas='md:grid md:grid-cols-1 md:gap-6'>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="grid grid-cols-6 gap-4">
            @foreach($storage->products as $product)
                <div>{{ $product }}</div>
            @endforeach
            </div>
        </div>

        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
            BUTTON
        </div>
    </div>
</div>
