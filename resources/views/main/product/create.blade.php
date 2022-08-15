@extends('main.main')
@section('content')

    <div class="bg-light border rounded-3">
        <form action="{{route('admin.product.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text"
                       name="title"

                       class="form-control" id="exampleInputEmail1"
                       value="{{old('title')}}"
                       aria-describedby="emailHelp">

                @include('main.meta.validation_error',['field'=>'title'])

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description"
                          class="ckeditor"
                          rows="10" cols="80"
                          aria-describedby="emailHelp"
                >

                    {!! old('description') !!}
                </textarea>
                @include('main.meta.validation_error',['field'=>'description'])

            </div>

            <button class="btn btn-primary">Submit</button>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace('description');
            </script>
        </form>
    </div>

@endsection
