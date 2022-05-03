<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<section class="bgwhite p-t-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                    <!-- item blog -->
                    <div class="container mt-6">
                        <div class="mb-5 text-center">
                            <h5>SHARE</h5>
                            <a class="btn btn-social" href="http://www.facebook.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-facebook-f" style="font-size:36px;"></i></a>
                            <a class="btn btn-social" href="http://www.twitter.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-twitter" style="font-size:36px;"></i></a>
                            <a class="btn btn-social" href="http://www.instagram.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-instagram" style="font-size:36px;"></i></a>
                            <a class="btn btn-social" href="https://wa.me/?text=http://barakapishoriricemillers.co.ke=text={{urlencode(url()->current()) }}" target="_blank"><i class="fab fa-whatsapp" style="font-size:36px;"></i></a>
                        </div> 
                    </div>
                    <br>
                      <div class="item-blog p-b-80">
                            <img src="{{ asset('assets/img') }}/{{ $recipe->image }}" alt="IMG-BLOG">

                        <div class="item-blog-txt p-t-33">
                            <h4 class="p-b-11">
                                    {{ $recipe->name }}
                            </h4>

                            <div class="s-text8 flex-w flex-m p-b-21">
                                <span>
                                    By Admin
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    Cooking, Food
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    {{ $recipe->created_at }}
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    8 Comments
                                </span>
                            </div>
                            

                            <h5 class="p-b-11">
                                Ingredients
                            </h5>

                            <p class="p-b-12">
                               {!! $recipe->ingredients !!}
                            </p>

                            <h5 class="p-b-11">
                                Method
                            </h5>

                            <p class="p-b-25">
                                {!! $recipe->method !!}
                            </p>
                        </div>
                      </div> 
                </div>
        </div>
    </div>
</section>
