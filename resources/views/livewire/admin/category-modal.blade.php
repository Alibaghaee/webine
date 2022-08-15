<div>

    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">{{$product['title']}}</h2>
        <div class="dropdown relative sm:hidden"><a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                <i
                    data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
        </div>
    </div>
    <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
        <form wire:submit.prevent="addCategory()" method="post">
            <div class="col-span-12 sm:col-span-6"><label>اضافه</label>
                <input type="text"
                       wire:model.defer="title"
                       placeholder="Job, Work, Documentation">
                <div class="col-span-12 sm:col-span-6 pt-5">
                    <button type="submit" class="button w-24 mr-1 mb-2 bg-blue-100 text-black">ثبت</button>
                </div>
                <ul>
                    @forelse($categories as $category)
                        <li>{{$category->title}}</li>
                    @empty
                        <li>...</li>
                    @endforelse
                </ul>
            </div>
        </form>

    </div>

</div>
