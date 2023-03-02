<div>
    <div class="glider-contain">

        @foreach($category->products as $product)
            <li class="bg-white rounded-lg shadow {{ ! $loop->last ? 'mr-4' : '' }}">
                <figure>
                    <img src="{{ Storage::url($product->images->first()->url) }}" alt="">
                </figure>
            </li>
        @endforeach
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
