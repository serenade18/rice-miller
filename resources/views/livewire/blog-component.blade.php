    {{-- In work, do what you enjoy. --}}
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
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
                        <div class="container mt-6">
                            <div class="mb-5 text-center">
                                <h2>SHARE</h2>
                                <a class="btn btn-social" href="http://www.facebook.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-facebook-f" style="font-size:36px;"></i></a>
                                <a class="btn btn-social" href="http://www.twitter.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-twitter" style="font-size:36px;"></i></a>
                                <a class="btn btn-social" href="http://www.instagram.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-instagram" style="font-size:36px;"></i></a>
                                <a class="btn btn-social" href="https://whatsapp://send?text=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-whatsapp" style="font-size:36px;"></i></a>
                            </div>
                        </div>
                        <!-- item blog -->
                        @foreach ($blogs as $blog)
                          <div class="item-blog p-b-80">
                            
                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="item-blog-img pos-relative dis-block hov-img-zoom">
                                <img src="{{ asset('assets/img') }}/{{ $blog->image }}" alt="IMG-BLOG">
    
                                <span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
                                    {{ $blog->created_at }}
                                </span>
                            </a>
    
                            <div class="item-blog-txt p-t-33">
                                <h4 class="p-b-11">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="m-text24">
                                        {{ $blog->title }}
                                    </a>
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
                                        8 Comments
                                    </span>
                                </div>
    
                                <p class="p-b-12">
                                    {{\Illuminate\Support\Str::words(html_entity_decode(strip_tags($blog->article)), 20)}}
                                </p>
    
                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="s-text20">
                                    Continue Reading....
                                    <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                                </a>
                            </div>
                          </div>  
                          
                        @endforeach
                    </div>
    
                    <!-- Pagination -->
                    <div class="wrap-pagination-info">
                        {{ $blogs->links() }}
                    </div>
                </div>
    
                <div class="col-md-4 col-lg-3 p-b-75">
                    <div class="rightbar">
                        
                        <!-- Featured Products -->
                        <h4 class="m-text23 p-t-65 p-b-34">
                            Featured 
                        </h4>
    
                        <ul class="bgwhite">
                            <li class="flex-w p-b-20">
                                <a href="#" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="{{ asset('assets/img/IMG.jpg') }}" alt="IMG-PRODUCT">
                                </a>
    
                                <div class="w-size23 p-t-5">
                                    <a href="#" class="s-text20">
                                        Baraka Pishori Rice
                                    </a>
                                </div>
                            </li>
    
                            <li class="flex-w p-b-20">
                                <a href="#" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="{{ asset('assets/img/MSM.jpg') }}" alt="IMG-PRODUCT">
                                </a>
    
                                <div class="w-size23 p-t-5">
                                    <a href="#" class="s-text20">
                                        Barak Pishori Rice
                                    </a>
                                </div>
                            </li>
    
                            <li class="flex-w p-b-20">
                                <a href="#" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="{{ asset('assets/img/IMG2.jpg') }}" alt="IMG-PRODUCT">
                                </a>
    
                                <div class="w-size23 p-t-5">
                                    <a href="#" class="s-text20">
                                        Baraka Pishori Rice
                                    </a>
                                </div>
                            </li>
    
                            <li class="flex-w p-b-20">
                                <a href="#" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="{{ asset('assets/img/BRAN.jpg') }}" alt="IMG-PRODUCT">
                                </a>
    
                                <div class="w-size23 p-t-5">
                                    <a href="#" class="s-text20">
                                        Baraks Rice Bran
                                    </a>
                                </div>
                            </li>
    
                            <li class="flex-w p-b-20">
                                <a href="#" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="{{ asset('assets/img/IMG_2822.jpg') }}" alt="IMG-PRODUCT">
                                </a>
    
                                <div class="w-size23 p-t-5">
                                    <a href="#" class="s-text20">
                                        Mwea Pishori Rice
                                    </a>
                                </div>
                            </li>
                        </ul>
    
                        <!-- Archive -->
                        <h4 class="m-text23 p-t-50 p-b-16">
                            Archive
                        </h4>
    
                        <ul>
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    July 2018
                                </a>
    
                                <span class="s-text13">
                                    (9)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    June 2018
                                </a>
    
                                <span class="s-text13">
                                    (39)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    May 2018
                                </a>
    
                                <span class="s-text13">
                                    (29)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    April  2018
                                </a>
    
                                <span class="s-text13">
                                    (35)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    March 2018
                                </a>
    
                                <span class="s-text13">
                                    (22)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    February 2018
                                </a>
    
                                <span class="s-text13">
                                    (32)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    January 2018
                                </a>
    
                                <span class="s-text13">
                                    (21)
                                </span>
                            </li>
    
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    December 2017
                                </a>
    
                                <span class="s-text13">
                                    (26)
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
