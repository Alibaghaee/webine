@if($prudoctsCon)


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
                    <td>{{$product->description}}</td>
                    <td>{{$product->status}}</td>
                    <td>-</td>
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
@endif

