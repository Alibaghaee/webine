<div>



    <table class="table table-report -mt-2">
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
                    <td>
                        <p class="font-medium whitespace-no-wrap">{{$product->title}}</P>
                    </td>

                    <td>
                        <p class="font-medium whitespace-no-wrap">{{  mb_substr($product->description,0,20,'utf-8')}}</P>
                    </td>


                    @if($product->status === 'published')
                        <td>
                            <div class="flex items-center justify-center
                            text-theme-6"><i data-feather="check-square"
                                             class="w-4 h-4 mr-2"></i>
                                منتشر نشده
                            </div>

                        </td>
                    @else
                        <td>
                            <div class="flex items-center justify-center text-theme-9"><i data-feather="check-square"
                                                                                          class="w-4 h-4 mr-2"></i>
                                منتشر شده
                            </div>

                        </td>
                    @endif

                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="{{route('admin.product.show',$product->id)}}"> <i
                                    data-feather="codesandbox" class="w-4 h-4 mr-1"></i> نمایش </a>

                            <a class="flex items-center mr-3" href="{{route('admin.product.edit',$product->id)}}"> <i
                                    data-feather="check-square" class="w-4 h-4 mr-1"></i> ویرایش </a>
                            <a class="flex items-center text-theme-6" href="#" data-toggle="modal"
                               data-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                                                            class="w-4 h-4 mr-1"></i>
                                <form action="{{ route('admin.product.delete',$product->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn">حذف</button>
                                </form>
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
                <td>
                    <p class="font-medium whitespace-no-wrap">---------</P>
                </td>
            @endforelse

            <div>
                {{ $products->links()}}
            </div>

        </div>
        </tbody>
    </table>
</div>
