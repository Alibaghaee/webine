<div>
    <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">

        <div class="p-5">

            <a href="" class="block font-large text-base mt-5">
                {{$product['title']}}
            </a>
            <div class="text-gray-700 mt-2">
                {!! $product['description'] !!}
            </div>
        </div>
        <div class="flex items-center border-b border-gray-200 px-5 py-4 text-blue-700">
            <div class="ml-3 mr-auto">
                <a href="" class="font-medium ">{{$product['status']}}</a>
                <div class="flex text-blue-600 truncate text-xs mt-1">
                    <span class="mx-1">•</span>{{$product['created_at']}} </div>
            </div>
            <h1 class="flex items-center mr-3 bg-blue-100"
                onclick='Livewire.emit("openModal", "admin.category-modal",
                {{ json_encode(["product" => $product]) }})'
            > <i
                    data-feather="codesandbox" class="w-4 h-4 mr-1"></i> TODO لیست </h1>

        </div>


    </div>
</div>
