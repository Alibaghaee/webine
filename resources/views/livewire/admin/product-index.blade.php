<div>


    <div class="bg-light border rounded-3">

        <table class="table">
            <thead>
            <tr>

                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Setting</th>
            </tr>
            </thead>
            <tbody>

            @forelse($products as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>
                        {!! mb_substr($product->description,0,150,'utf-8') !!}
                    </td>
                    <td>{{$product->status}}</td>
                    <td class="row">
                        <span class="col">
                        <button type="button" class="btn btn-info "
                                onclick="location.href='{{route('admin.product.show',$product->id)}}';"
                        >Show
                        </button>
                        </span>
                        <span class="col">
                        <button type="button" class="btn btn-warning "
                                onclick="location.href='{{route('admin.product.edit',$product->id)}}';"
                        >Edit
                        </button>
                            </span>
                        <span class="col">
                        <form action="{{route('admin.product.delete',$product->id)}}"
                              method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">none</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $products->links() }}

    </div>


</div>
