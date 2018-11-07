<h4 class="title_block">Best sellers</h4>
<div class="block_content">
    <ul class="product_list_block">
        @foreach ($flowersbest as $flower)
            <li>
                <div class="product-container media">
                    <div class="product-image-container pull-left">
                        <a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
                            <img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="86" height="115">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="product_comments clearfix">
                            <div class="product-rating">
                                <div class="star_content">
                                    @if( empty($flower->averageRating) )
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                    @elseif( $flower->averageRating > 4.5 )
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                    @elseif( $flower->averageRating > 3.5 && $flower->averageRating < 4.5)
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star"></div>
                                    @elseif( $flower->averageRating > 2.5 && $flower->averageRating < 3.5 )
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    @elseif( $flower->averageRating > 1.5 && $flower->averageRating < 2.5 )
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    @elseif( $flower->averageRating < 1.5)
                                        <div class="star star_on"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    @endif
                                </div>
                            </div>
                        </div><!-- end product_comments -->
                        <h5 class="name">
                            <a class="product-name" href="/product/{{ $flower->slug }}" title="Queen rose - pink">
                                {{ $flower->name }}
                            </a>
                        </h5>
                        <div class="content_price">
                            <span class="price product-price">${{ $flower->price_default }}</span>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
