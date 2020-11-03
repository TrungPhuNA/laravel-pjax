<style>
    .item a:hover {
        color: #d611aa;
    }
</style>

<div class="lists">
    @foreach($products as $product)
        <div class="item">
            <a href="{{ route('get.product', ['slug' => $product->pro_slug.'-'. $product->id]) }}">{{ $product->pro_name }}</a>
        </div>
    @endforeach
</div>
