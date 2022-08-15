<div>
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
        <div class="bg-light border rounded-3">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Product
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-grid gap-3">
                                <div class="p-2 bg-light border"
                                     wire:click.prevent="setProductIndex()"
                                >Index
                                </div>
                                <div class="p-2 bg-light border"
                                     wire:click.prevent="setProductCreate()"
                                >Create
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('main.product.index')
        @include('main.product.create')
    </div>
</div>
