<div class="tab-content">
    <div class="tab-pane fade active in" id="tiva-grid">
        <div class="row">
            {{--{{dd($flowers)}}--}}
            @foreach ($flowers as $flower)
            <div class="type_block_product col-sp-12 col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <div class="product-container">
                    <div class="left-block">
                        <div class="product-image-container">
                            <a class="product_img_link" href="/product/{{ $flower->slug }}" title="Tulipa floriade - red">
                                <img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="480" height="640">
                            </a>
                            @if($flower->isNew())
                                <span class="label-new label">New</span>
                            @endif
                            @if($flower->isSale())
                                <span class="label-sale label">Sale</span>
                                <span class="label-reduction label">-{{$flower->sale}}%</span>
                            @endif
                        </div>
                        <div class="box-buttons">
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $flower->id }}">
                                <input type="hidden" name="name" value="{{ $flower->name }}">
                                <input type="hidden" name="price" value="{{ $flower->price_new_default }}">
                                <input type="hidden" name="price_old" value="{{ $flower->price_old_default }}">
                                <input type="hidden" name="size" value="{{ \App\FLSize::getSizeDefaultId() }}">
                                <button type="submit" class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></button>
                            </form>
                            <a class="button btn quick-view" href="/product/{{ $flower->slug }}" title="Quick view">
                                <i class="zmdi zmdi-eye"></i>
                            </a>
                        </div>
                    </div><!--end left block -->
                    <div class="right-block">
                        <div class="product-box">
                            <h5 class="name">
                                <a class="product-name" href="/product/{{ $flower->slug }}" title="Tulipa floriade - red">
                                    {{ $flower->name }}
                                </a>
                            </h5>
                            <div class="content_price">

                                <span class="price product-price">${{ $flower->price_new_default }}</span>
                                @if($flower->isSale())
                                    <span class="old-price product-price">${{ $flower->price_old_default }}</span>
                                @endif
                            </div>
                            <div class="product_comments clearfix">
                                <div class="product-rating">
                                    <div class="star_content">
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                        <div class="star star_on"></div>
                                    </div>
                                </div>
                            </div><!-- end product_comments -->
                        </div><!-- end product-box -->
                    </div><!--end right block -->
                </div><!-- end product-container-->
            </div><!-- end type_block_product -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end tiva-grid -->
</div>
<div class="content_sortPagiBar bottom clearfix">
    {{$flowers->links()}}
</div>
