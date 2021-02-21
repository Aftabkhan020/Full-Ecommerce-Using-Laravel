@php 
$featured = DB::table('products')->where('category_id',2)->orderBy('id','desc')->limit(8)->get();
@endphp
<div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Essentian Oil Products</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    @foreach($featured as $row)
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one)}}" alt="" style="height: 150px;width: 140px;"></div>
                                            <div class="product_content">


                                                @if($row->discount_price==NULL)
                               <div class="product_price discount">{{ $row->selling_price}}</div>
                                       @else
                                   <div class="product_price discount">{{ $row->discount_price }}<span>{{ $row->selling_price }}</span></div>
                                      @endif
                                                <div class="product_name"><div><a href="product.html">{{ $row->product_name }}</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                @if($row->discount_price == NULL)
                                                <li class="product_mark product_discount" style="background:blue;">NEW</li>
                                                @else
                                                <li class="product_mark product_discount">

                                                @php 
                                                $discount = $row->selling_price-$row->discount_price;
                                                $amount = $discount/$row->selling_price*100;
                                                @endphp
                                                {{ intval($amount) }}%

                                               </li>
                                                @endif

                                                
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach

                                   

                                </div>
                            </div>