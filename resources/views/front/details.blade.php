@extends('layouts.appfrent')

@section('content')

<section>
    <div class="container">
        <div class="row">


            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ asset('storage/'. $produit->photo) }}" alt="" />

                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
{{--
                              <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar1.jpg')}}" alt=""></a>
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar2.jpg')}}" alt=""></a>
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar1.jpg')}}" alt=""></a>
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar2.jpg')}}" alt=""></a>
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar1.jpg')}}" alt=""></a>
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar2.jpg')}}" alt=""></a>
                                      <a href=""><img src="{{ asset('Front/images/product-details/similar3.jpg')}}" alt=""></a>
                                    </div>

                                </div> --}}

                              <!-- Controls -->
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>{{ $produit->name }} <br> {{ $produit->name }}</h2>

                           >
                            <span>
                                <span>{{ $produit->price }} QAR</span>
                                <label>Quantity:</label>
                                <input type="text" value="3" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>

                            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >

                            <div class="col-sm-12">

                                <p>{{  $produit->description  }} </p>
                                <p>{{  $produit->description_ar  }} </p>



                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->



            </div>
        </div>
    </div>
</section>



@endsection
