<div>

    <div class="p-5" dir="rtl">
        <h2 class="text-lg font-medium mr-auto">
            ایجاد پست
        </h2>

    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5" dir="rtl">
        <!-- BEGIN: Post Content -->

        <div class="intro-y col-span-12 lg:col-span-8 p-4">
            <form data-single="true"
                  wire:submit.prevent="productForm"
                  method="POST"
                  enctype="multipart/form-data">


                <label class="text-blue-700 text-lg">عنوان</label>
                <input type="text" name="title"
                       wire:model.defer="title"
                       value="{{old('title')}}"
                       class="intro-y input input--lg w-full box pr-10 placeholder-theme-13"
                       placeholder="عنوان . . .">
                @include('main.meta.validation_error',['field'=>'title'])


                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__tabs nav-tabs flex flex-col sm:flex-row bg-gray-200 text-gray-600">
                        <a title="Fill in the article content" data-toggle="tab" data-target="#content"
                           href="javascript:;"
                           class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active"> <i
                                data-feather="file-text" class="w-4 h-4 mr-2"></i> محتوای بدنه </a>
                    </div>
                    <div class="post__content tab-content">
                        <div class="tab-content__pane p-5 active" id="content">
                            <div class="border border-gray-200 rounded-md p-5">
                                <div class="font-medium flex items-center border-b border-gray-200 pb-5"><i
                                        data-feather="chevron-down" class="w-4 h-4 mr-2"></i> توضیحات
                                </div>
                                <div class="mt-5">
                                    <div wire:ignore class="form-group row">
                                        <textarea wire:model="description"
                                                  class="form-control required" name="description"
                                                  id="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            @include('main.meta.validation_error',['field'=>'description'])

                        </div>
                    </div>


                </div>

                <button class="button w-24 mr-1 mb-2 bg-blue-400 text-blue-700">ثبت</button>

                <!-- END: Post Info -->
            </form>
        </div>

    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script>
    const editor = CKEDITOR.replace('description');
    editor.on('change', function(event){
        console.log(event.editor.getData())
    @this.set('description', event.editor.getData());
    })
</script>
