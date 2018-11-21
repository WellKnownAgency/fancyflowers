<div id="categories_block_left" class="block">
    <h4 class="title_block">Collections</h4>
    <div class="block_content">
        <ul class="list-block">
            <li>
                <a href="/collections" title="all" class="@if(!isset($collection)) active-nav @endif">All</a>
            </li>
            @foreach($collections as $item)
                <li>
                    <a href="/collections/{{$item->slug}}" title="{{$item->name}}" class="@if(isset($collection) && $collection->slug === $item->slug) active-nav @endif">{{$item->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div><!-- end categories_block_left -->
<div id="block_price_filter" class="block">
    <h4 class="title_block">Filter by price</h4>
    <div class="block_content">
        <div id="slider-range" class="tiva-filter">
            <label>Range:</label>
            <div class="filter-item price-filter">
                <div class="layout-slider">
                    <input id="price-filter" name="price" value="{{$minPrice}};{{$maxPrice}}" />
                </div>
                <div class="layout-slider-settings"></div>
            </div>
        </div>
    </div>
</div><!-- end block_price_filter -->
<div id="block_featured_product" class="block">
    @include('collections/_bestsellers')
</div><!-- end block_featured_product -->
