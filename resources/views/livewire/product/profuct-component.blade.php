<div id="main">
    <!-- intro section -->
    <div class="bg-container" style="background-image: url({{asset('images/systems/pro-bg.jpg')}});" >
        <div class="container-fluid intro-container"> 
            <div class="intro">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-fluid intro-logo d-none d-lg-block" alt="SOFTWARE SOLUTION TECHNOLOGIES" src="{{asset('images/falcon-logo.png')}}">
                    </div>
                    <div class="col-lg-9">
                        <p class="text-white intro-h ms-md-3"><span class="text-white font-weight-bolder">Simple</span> and
                            <span class="font-weight-bolder">Smart</span>
                        </p>
                        <p class="text-white intro-text ms-md-3">Web and Android application</p>
                        <div class="container text-center pt-lg-4 pt-0 p-0 d-flex d-lg-block mb-3 top-btn-bgroup">
                            <button class="btn btn-lg rounded-pill">VIEW DEMOS</button>
                            <button class="btn btn-lg btn-buy btn-primary rounded-pill">BUY NOW</button>
                        </div>
                        <div class="container search-container p-0">
                            <form action="#black" method="post" class="d-flex demo-search">
                                <input type="search" name="search" class="search-field">
                                <button type="submit" class="serch-btn bg-success">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
            <div class="container">
                <div class="down-option">
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="down-option">
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="down-option">
                    <i class="fas fa-angle-down"></i>
                </div>
            </div> <!--ending down container fluid-->
        </div><!--container fluid-->
    </div>
    <!--      recent completed projects -->
    <section class="pre-template">
        <div class="container pb-4">
            <h1 class="mt-4 hm-title">Falcon E-commerce Theme</h1>
            <p class="mb-4">New designs added regulary. Design blocks can be combined with any layout. </p>
            <hr>
            
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 mb-lg-3">
                    <div class="grid position-relative over-flow-hidden">
                        <div class="grid-inner-c">
                            <img class="img img-fluid" src="{{asset('images/products')}}/{{$product->image}}" alt="template">
                        </div>
                        <a href="#demo-1" target="_blank" class="preview-btn"> <span
                                class="preview-text">Preview</span></a>
                    </div>
                    <div class="grit-bottom ps-lg-1 pt-lg-2 pb-lg-2 pe-lg-1 p-2">
                        <div class="row">
                            <div class="col-lg-6 col-6">
                            <a href="" class="text-white-50 text-decoration-none">
                                <small>
                                    {{Str::limit($product->name, 20,$end='.......')}}  
                                </small>
                            </a>
                            </div>
                            <div class="col-lg-6 col-6">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-secondary"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-4">
                            <b class="text-white-50">Price : </b><span class="text-white-50"><i class="fas fa-dollar-sign"></i> {{(int)$product->regular_price}}</span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <small class="text-white-50">
                                    <del><i class="fas fa-dollar-sign"></i> 7</del>
                                    &lang;Off. 2 &#37;&rang;
                                </small>
                            </div>
                            <div class="col-lg-12 col-12">
                                <a id="liveToastBtn" href="#" class="btn btn-sm btn-primary btn-custom border-0 w-100 mt-2" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">
                                    Buy Now 
                                    <i class="fas fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- ending first col -->
            </div>
        </div>
    </section>
    
    <!--      basic features -->
    <section class="feature">
        <div class="container">
            <h1 class="mt-4 hm-title">Basic features</h1>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-grid p-3 mb-md-3 mb-lg-0 mb-3">
                        <h3 class="hm-title ft-title">E-commerce</h3>
                        <hr>
                        <p style="text-align: justify;">
                            Content management capabilities
                            Promotion and discount code tools
                            An easy-to-use checkout
                            Search engine optimized code and layout
                            Reporting tools and custom report features
                            An integrated blog or articles section
                            Email marketing features or integration
                            Multiple payment options (Credit card, PayPal, PO, Terms, etc.)
                            The ability to scale and add new features

                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ft-grid p-3 mb-md-3 mb-lg-0 mb-3">
                        <h3 class="hm-title ft-title">News portal</h3>
                        <hr>
                        <p style="text-align: justify;">
                            Content management capabilities
                            Promotion and discount code tools
                            An easy-to-use checkout
                            Search engine optimized code and layout
                            Reporting tools and custom report features
                            An integrated blog or articles section
                            Email marketing features or integration
                            Multiple payment options (Credit card, PayPal, PO, Terms, etc.)
                            The ability to scale and add new features

                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ft-grid p-3 mb-md-3 mb-3">
                        <h3 class="hm-title ft-title">Wordpress</h3>
                        <hr>
                        <p style="text-align: justify;">
                            Content management capabilities
                            Promotion and discount code tools
                            An easy-to-use checkout
                            Search engine optimized code and layout
                            Reporting tools and custom report features
                            An integrated blog or articles section
                            Email marketing features or integration
                            Multiple payment options (Credit card, PayPal, PO, Terms, etc.)
                            The ability to scale and add new features
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- toaster -->
<!-- <button type="button" class="btn btn-primary" >Show live toast</button> -->

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
