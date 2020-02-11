@extends('../layouts.pageIndex')

@section('content')


<section id="banner">
    <!-- Slider -->
    <div class="flexslider" id="main-slider">
        <ul class="slides">
            <li>
            <img alt="" src=" {{asset('/images/theme/slides/1.jpg')}}">
  
                <div class="flex-caption wow fadeInLeft animated" data-wow-animation-name="none">
                    <h3>Happy Travel</h3>
  
                    <p>Doloribus omnis minus temporibus perferquam</p>
                </div>
            </li>
  
            <li>
                <img alt="" src=" {{asset('/images/theme/slides/2.jpg')}}">
  
                <div class="flex-caption wow fadeInRight animated" data-wow-animation-name="none">
                    <h3>Exotic Holidays</h3>
  
                    <p>Lorem ipsum dolo amet, consectetur
                    provident.</p>
                </div>
            </li>
        </ul>
    </div><!-- end slider -->
  </section>
  
  
  <section class="hero-text">
    <div class="container">
        <div class="row"> 

            <div class="col-lg-12 wow fadeInRight animated"
            data-wow-animation-name="none">
                <h1>Get Best Travel Packages</h1> 
                <p>Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolores quae porro consequatur aliquam, incidunt
                    eius magni provident, doloribus omnis minus
                    ovident, doloribus omnis minus temporibus
                    perferendis nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p><br/> 
                <a class="btn btn-purchase" href=
                "javascript:;">Book Plan</a>
            </div>
        </div>
    </div>
</section>


<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter">
                    <h2 class="aligncenter">Our Services</h2>Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolores quae porro consequatur aliquam, incidunt
                    eius magni provident, doloribus omnis minus
                    ovident, doloribus omnis minus temporibus
                    perferendis nesciunt..
                </div> 
            </div>
        </div>

        <div class="row">
            <div class="skill-home">
                <div class="skill-home-solid clearfix">
                    <div class="col-md-3 text-center"> 
                        <span class="icons c1 fa fa-trophy" style=
                        "font-style: italic"></span>

                        <div class="box-area">
                            <h3> Development</h3>

                            <p>Lorem ipsum dolor sitamet, consec tetur
                            adipisicing elit. Dolores quae porro
                            consequatur aliquam, incidunt eius magni
                            provident</p>
                        </div> 
                    </div>

                    <div class="col-md-3 text-center">
                        <span class="icons c2 fa fa-picture-o" style=
                        "font-style: italic"></span>

                        <div class="box-area">
                            <h3>UI Design</h3>

                            <p>Lorem ipsum dolor sitamet, consec tetur
                            adipisicing elit. Dolores quae porro
                            consequatur aliquam, incidunt eius magni
                            provident</p>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <span class="icons c3 fa fa-desktop" style=
                        "font-style: italic"></span>

                        <div class="box-area">
                            <h3>Interaction</h3>

                            <p>Lorem ipsum dolor sitamet, consec tetur
                            adipisicing elit. Dolores quae porro
                            consequatur aliquam, incidunt eius magni
                            provident</p>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <span class="icons c4 fa fa-globe" style=
                        "font-style: italic"></span>

                        <div class="box-area">
                            <h3>User Experience</h3>

                            <p>Lorem ipsum dolor sitamet, consec tetur
                            adipisicing elit. Dolores quae porro
                            consequatur aliquam, incidunt eius magni
                            provident</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote fa fa-microphone" style=
                "font-style: italic"></div>
            </div>

            <div class="carousel slide" data-ride="carousel" id=
            "carousel-example-generic">
                <ol class="carousel-indicators">
                    <li class="" data-slide-to="0" data-target=
                    "#carousel-example-generic">
                        <a href="#"></a>
                    </li>

                    <li class="" data-slide-to="1" data-target=
                    "#carousel-example-generic">
                        <a href="#"></a>
                    </li>

                    <li class="active" data-slide-to="2" data-target=
                    "#carousel-example-generic">
                        <a href="#"></a>
                    </li>

                    <li class="" data-slide-to="3" data-target=
                    "#carousel-example-generic">
                        <a href="#"></a>
                    </li>
                </ol>

                <div class="carousel-inner">
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti
                        atque corrupti quos dolores et quas molestias
                        excepturi sint occaecati cupiditate non
                        provident, similique sunt in culpa qui officia
                        deserunt mollitia animi.</p>

                        <p style="font-weight: bold">- Mark John -</p>
                    </div>

                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti
                        atque corrupti quos dolores et quas molestias
                        excepturi sint occaecati cupiditate non
                        provident, similique sunt in culpa qui officia
                        deserunt mollitia animi.</p>

                        <p style="font-weight: bold">- Jaison Warner
                        -</p>
                    </div>

                    <div class="item active">
                        <p>Blanditiis praesentium voluptatum deleniti
                        atque corrupti quos dolores et quas molestias
                        excepturi sint occaecati cupiditate non
                        provident, similique sunt in culpa qui officia
                        deserunt mollitia animi.</p>

                        <p style="font-weight: bold">- Tony Antonio
                        -</p>
                    </div>

                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti
                        atque corrupti quos dolores et quas molestias
                        excepturi sint occaecati cupiditate non
                        provident, similique sunt in culpa qui officia
                        deserunt mollitia animi.</p>

                        <p style="font-weight: bold">- Leena Doe -</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="container-fluid">
<div class="container container-pad" id="property-listings">
    
    <div class="row">
      <div class="col-md-12">
        <h1>Best Tour Packages</h1>
        <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
      </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6"> 

            <!-- Begin Listing-->
            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg"></a>

                    <div class="clearfix visible-sm"></div>

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="#" target="_parent">$1,975 <small class="pull-right">Hi-tech Towers</small></a></h4>


                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>Singapore</li>
                        </ul>

                        <p class="hidden-xs">Situated between fairmount
                        park and the prestigious philadelphia cricket
                        club, this beautiful 2+ acre property is truly
                        ...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                        Evergreen</span>
                    </div>
                </div>
            </div><!-- End Listing-->

            <!-- Begin Listing-->
            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/zMjCkcFeFDXDAP8xDhbD9ZmrVL7oGkBvSnh2bDBZ6UB5UHXa3_g8c6XYhRY_OxgGaMBMehiTWXDSLzBMaIzRhA.jpg"></a>

                    <div class="clearfix visible-sm"></div>

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="#" target="_parent">$1,975 <small class="pull-right">Green Carpet</small></a></h4>


                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>Kerala</li>
                        </ul>

                        <p class="hidden-xs">Impressively positioned
                        overlooking 3.5 captivating acres, designated
                        as "significant" by the chestnut hill
                        historical s...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Blue Bell</span>
                    </div>
                </div>
            </div><!-- End Listing-->

            <!-- Begin Listing-->
            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg"></a>

                    <div class="clearfix visible-sm"></div>

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="#" target="_parent">$1,599 <small class="pull-right">Hills Station</small></a></h4>


                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>Netherlands</li>
                        </ul>

                        <p class="hidden-xs">Built in 1909 by
                        pittsburgh steel magnate henry a. laughlin,
                        greylock is a classic chestnut hill stone
                        mansion once cons...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of ng and Foster-Devon</span>
                    </div>
                </div>
            </div><!-- End Listing-->

        </div>

        <div class="col-sm-6">  

            <!-- Begin Listing-->
            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/vGoNjc2jHGb87GlnnDQlf6LxeOUgIOn0bL6Wvn1nEnig2Ntq6W7xN5cOQBZZeNxl9O42DOkHUw0LNnj1ZB2KHA.jpg"></a>

                    <div class="clearfix visible-sm"></div>

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="#" target="_parent">$1,500 <small class="pull-right">Paris</small></a></h4>


                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>France</li>
                        </ul>

                        <p class="hidden-xs">A once in a lifetime
                        opportunity to own a unique live / work space
                        in one of philadelphia's most popular
                        neighborhoods. ...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of ll Banker Preferred-Philadelphia</span>
                    </div>
                </div>
            </div><!-- End Listing-->

            <!-- Begin Listing-->
            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg"></a>

                    <div class="clearfix visible-sm"></div>

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="#" target="_parent">$1,295 <small class="pull-right">London</small></a></h4>


                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>England</li>
                        </ul>

                        <p class="hidden-xs">Located in chestnut hill,
                        recently named by the american planning
                        association as one of america's top 10 great
                        neighborh...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of RE/MAX Services</span>
                    </div>
                </div>
            </div><!-- End Listing-->

            <!-- Begin Listing-->
            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg"></a>

                    <div class="clearfix visible-sm"></div>

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="#" target="_parent">$1,175 <small class="pull-right">NewYork</small></a></h4>


                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>United States</li>
                        </ul>

                        <p class="hidden-xs">A once in a lifetime
                        opportunity! live in this grand home with its
                        stunning entry and staircase, bedroom suites,
                        firepla...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                        Evergreen</span>
                    </div>
                </div>
            </div><!-- End Listing-->
        </div><!-- End Col -->
    </div><!-- End row -->
</div><!-- End container -->
</section>
</div><a class="scrollup fa fa-angle-up active" href="#"></a> 

@endsection()



