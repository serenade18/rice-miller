    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a href="/blog"> Blog</a></li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    
    <!-- content page -->
    
        <section class="bgwhite p-t-60 p-b-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 p-b-80">
                        <div class="p-r-50 p-r-0-lg">
                            <div class="p-b-40">
                                <div class="container mt-6">
                                    <div class="mb-5 text-center">
                                        <h2>SHARE</h2>
                                        <a class="btn btn-social" href="http://www.facebook.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-facebook-f" style="font-size:36px;"></i></a>
                                        <a class="btn btn-social" href="http://www.twitter.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-twitter" style="font-size:36px;"></i></a>
                                        <a class="btn btn-social" href="http://www.instagram.com/sharer.php?u=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-instagram" style="font-size:36px;"></i></a>
                                        <a class="btn btn-social" href="https://whatsapp://send?text=http://barakapishoriricemillers.co.ke" target="_blank"><i class="fab fa-whatsapp" style="font-size:36px;"></i></a>
                                    </div>
                                </div>
                                <div class="blog-detail-img wrap-pic-w">
                                    <img src="{{ asset('assets/img') }}/{{ $blog->image }}" alt="IMG-BLOG">
                                </div>
    
                                <div class="blog-detail-txt p-t-33">
                                    <h4 class="p-b-11 m-text24">
                                        {{ $blog->title }}
                                    </h4>
    
                                    <div class="s-text8 flex-w flex-m p-b-21">
                                        <span>
                                            By Admin
                                            <span class="m-l-3 m-r-6">|</span>
                                        </span>
    
                                        <span>
                                            {{$blog->created_at}}
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
    
                                    <p class="p-b-25">
                                        {!! $blog->article !!}
                                    </p>
                                </div>
                            </div>
    
                            <!-- Leave a comment -->
                            <form class="leave-comment">
                                <h4 class="m-text25 p-b-14">
                                    Leave a Comment
                                </h4>
    
                                <p class="s-text8 p-b-40">
                                    Your email address will not be published. Required fields are marked *
                                </p>
    
                                <textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>
    
                                <div class="bo12 of-hidden size19 m-b-20">
                                    <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="Name *">
                                </div>
    
                                <div class="bo12 of-hidden size19 m-b-20">
                                    <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="Email *">
                                </div>
    
                                <div class="w-size24">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Post Comment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <div class="col-md-4 col-lg-3 p-b-80">
                        <div class="rightbar">
                            <div class="col-md-4 col-lg-3 p-b-75">
                                <div class="rightbar">
                                    
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
    