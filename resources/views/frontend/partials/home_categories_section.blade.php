@foreach (\App\HomeCategory::where('status', 1)->get() as $key => $homeCategory)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 p-md-4 bg-white shadow-sm">
                <div class="section-title-1 clearfix">
                    <h3 class="heading-5 strong-700 mb-0 float-lg-left">
                        <span class="mr-4">{{ $homeCategory->category->name }}</span>
                    </h3>
                    <ul class="inline-links float-lg-right nav mt-3 mb-2 m-lg-0">
                        @foreach (json_decode($homeCategory->subsubcategories) as $key => $subsubcategory)
                            @if (\App\SubSubCategory::find($subsubcategory) != null)
                                <li class="@php if($key == 0) echo 'active'; @endphp">
                                    <a href="#subsubcat-{{ $subsubcategory }}" data-toggle="tab" class="d-block @php if($key == 0) echo 'active'; @endphp">{{ \App\SubSubCategory::find($subsubcategory)->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content">
                    @foreach (json_decode($homeCategory->subsubcategories) as $key => $subsubcategory)
                        @if (\App\SubSubCategory::find($subsubcategory) != null)
                        <div class="tab-pane fade @php if($key == 0) echo 'show active'; @endphp" id="subsubcat-{{ $subsubcategory }}">
                            <div class="row gutters-5 sm-no-gutters">
                                @foreach (filter_products(\App\Product::where('published', 1)->where('subsubcategory_id', $subsubcategory))->limit(6)->get() as $key => $product)
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                        <div class="product-box-2 bg-white alt-box my-2">
                                            <div class="position-relative overflow-hidden">
                                                <a href="@if($product->type == "affiliate"){{ $product->affiliate_link }} @else {{ route('product', $product->slug) }} @endif" @if($product->type == "affiliate") target="_blank" @endif  class="d-block product-image h-100 text-center">
                                                    <img class="img-fit lazyload" src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" alt="{{ __($product->name) }}">
                                                </a>
                                                <div class="product-btns clearfix">
                                                    <button class="btn add-wishlist" title="Add to Wishlist" onclick="addToWishList({{ $product->id }})" tabindex="0">
                                                        <i class="la la-heart-o"></i>
                                                    </button>
                                                    <button class="btn add-compare" title="Add to Compare" onclick="addToCompare({{ $product->id }})" tabindex="0">
                                                        <i class="la la-refresh"></i>
                                                    </button>
                                                    <button class="btn quick-view" title="Quick view" onclick="showAddToCartModal({{ $product->id }})" tabindex="0">
                                                        <i class="la la-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="p-md-3 p-2 border-top">
                                                <h2 class="product-title p-0 text-truncate-2">
                                                    <a href="@if($product->type == "affiliate"){{ $product->affiliate_link }} @else {{ route('product', $product->slug) }} @endif" @if($product->type == "affiliate") target="_blank" @endif  tabindex="0">{{ __($product->name) }}</a>
                                                </h2>
                                                <div class="star-rating mb-1">
                                                    {{ renderStarRating($product->rating) }}
                                                </div>
                                                <div class="clearfix">
                                                    <div class="price-box float-left">
                                                        @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                            <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                                        @endif
                                                        <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endforeach
