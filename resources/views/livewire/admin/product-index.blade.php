<div>


    <table class="table table-report   ">
        <thead>
        <tr>

            <th class="whitespace-no-wrap">عنوان</th>
            <th class="whitespace-no-wrap">توضیحات</th>
            <th class="whitespace-no-wrap">وضعیت انتشار</th>
            <th class="text-center whitespace-no-wrap">فعالیت</th>
        </tr>
        </thead>
        <tbody>
        <div>

            @forelse($products as $product)

                <tr class="intro-x">
                    <td class="col-span-3">
                        <p class="font-medium whitespace-no-wrap">{{mb_substr($product->title,0,20,'utf-8')}}</P>
                    </td>

                    <td class="col-span-6">
                        <p class="font-medium whitespace-no-wrap">{!!  mb_substr($product->description,0,20,'utf-8') !!}</P>
                    </td>


                    @if($product->status === 'published')
                        <td>
                            <div class="flex items-center justify-center
                            text-red-600"><i data-feather="check-square"
                                             class="w-4 h-4 mr-2"></i>
                                منتشر نشده
                            </div>

                        </td>
                    @else
                        <td>
                            <div class="flex items-center justify-center text-blue-700">
                                <i data-feather="check-square"
                                   class="w-4 h-4 mr-2"></i>
                                منتشر شده
                            </div>

                        </td>
                    @endif

                    <td class="table-report__action w-56 text-blue-700">
                        <div class="flex justify-center items-center">
                            <h1 class="flex items-center mr-3"
                               onclick='Livewire.emit("openModal", "admin.product-show", {{ json_encode(["product" => $product]) }})'
                            > <i
                                    data-feather="codesandbox" class="w-4 h-4 mr-1"></i> نمایش </h1>

                            <a class="flex items-center mr-3"
                               href="{{route('admin.product.edit',$product->id)}}"> <i
                                    data-feather="check-square" class="w-4 h-4 mr-1"></i> ویرایش </a>
                            <a class="flex items-center " href="#" data-toggle="modal"
                               data-target="#delete-confirmation-modal"
                               wire:click.prevent="deleteProduct('{{$product->id}}')"> <i data-feather="trash-2"
                                                                                          class="w-4 h-4 mr-1"></i>
                                <button type="submit" class="btn">حذف</button>
                            </a>
                        </div>
                    </td>
                </tr>
            @empty
                <td>
                    <p class="font-medium whitespace-no-wrap">---------</P>
                </td>
                <td>
                    <p class="font-medium whitespace-no-wrap">---------</P>
                </td>
                <td>
                    <p class="font-medium whitespace-no-wrap">---------</P>
                </td>
                <td>
                    <p class="font-medium whitespace-no-wrap">---------</P>
                </td>

            @endforelse


        </div>
        </tbody>
        <div>
            {{ $products->links()}}
        </div>

    </table>
</div>
