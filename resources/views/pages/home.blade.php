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
                    <h1>Réserve un hôtel sans difficulté</h1>
                    <p>Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolores quae porro consequatur aliquam, incidunt
                        eius magni provident, doloribus omnis minus
                        ovident, doloribus omnis minus temporibus
                        perferendis nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam</p><br/>
                    <a class="btn btn-purchase" href=
                    "{{ url('/commentCaMarche') }} ">savoir plus</a>
                </div>
            </div>
        </div>
    </section>


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter">
                        <h2 class="aligncenter">Les mieux noté</h2>Lorem
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
                                <h3> hotel assandy</h3>

                                <p>Hotel Assandy est une bonne option pour rester à Yamoussoukro.
                                    L'hôtel est situé à environ 4.2 km de Basilique Notre. Des lieux touristiques tels
                                    que la mosquée et la basilique sont assez proches.
                                    Hotel Assandy procure des chambres dotées de la télévision par satellite, de
                                    l'espace pour s'asseoir et d'une presse pantalon.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                        <span class="icons c2 fa fa-picture-o" style=
                        "font-style: italic"></span>

                            <div class="box-area">
                                <h3> fondy</h3>

                                <p>l'Hôtel Fondy dispose de 92 chambres toutes équipées de TV satelite,wifi,
                                    climatisation, téléphone (Paradis Terrestre). Situé a Assabou rue des hôtels,
                                    l'hôtel Fondy dispose d'une salle de sport, une piscine, des sales de conférence, de
                                    mariage et un restaurant</p>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                        <span class="icons c3 fa fa-desktop" style=
                        "font-style: italic"></span>

                            <div class="box-area">
                                <h3>fanon</h3>

                                <p>Réceptif hôtelier situé au centre-ville, l’Hôtel FANON met à votre disposition les
                                    prestations de services de son établissement (CHAMBRES, RESTAURANT, SALLES DE
                                    RÉUNIONS, SALLE DE MANIFESTATIONS, SUPÉRETTE, PISCINE, PARKING SÉCURISÉ).</p>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                        <span class="icons c4 fa fa-globe" style=
                        "font-style: italic"></span>

                            <div class="box-area">
                                <h3>Residence Berah</h3>

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
                    <h1>Les melleurs hotels au meilleur prix</h1>
                    <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam,
                        incidunt eius magni provident</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- Begin Listing-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                                <img alt="image" class="img-responsive"
                                     src="{{asset('/images/hotels/assendy.jpg')}}"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                    <a href="#" target="_parent">10000 FCFA
                                        <small class="pull-right">Côte d'ivoire, yamoussoukro</small>
                                    </a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Assandy</li>
                                </ul>

                                <p class="hidden-xs">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum enim itaque ipsum
                                    consequatur distinctio vel, provident aut culpa!.
                                </p>
                                <p class="fnt-smaller fnt-lighter fnt-arial box-foot">
                                    <span>localisation</span>
                                    <a href='{{url('/detailHotel/1/assandy')}}' class="btn">detail</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                                <img alt="image" class="img-responsive"
                                     src="{{asset('/images/hotels/fondy.jpg')}}"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                    <a href="#" target="_parent">20000 FCFA
                                        <small class="pull-right">Côte d'ivoire, yamoussoukro</small>
                                    </a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Fondy</li>
                                </ul>

                                <p class="hidden-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                    enim itaque ipsum consequatur distinctio vel, provident aut culpa!.</p>
                                <p class="fnt-smaller fnt-lighter fnt-arial box-foot">
                                    <span>localisation</span>
                                    <a href='{{url('/detailHotel/2/fondy')}}' class="btn">detail</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                                <img alt="image" class="img-responsive"
                                     src="{{asset('/images/hotels/fanon.jpg')}}"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                    <a href="#" target="_parent">30000 FCFA
                                        <small class="pull-right">Côte d'ivoire, yamoussoukro</small>
                                    </a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Fanon</li>
                                </ul>

                                <p class="hidden-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                    enim itaque ipsum consequatur distinctio vel, provident aut culpa!.</p>
                                <p class="fnt-smaller fnt-lighter fnt-arial box-foot">
                                    <span>localisation</span>
                                    <a href='{{url('/detailHotel/3/fanon')}}' class="btn">detail</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                </div>

                <div class="col-sm-6">

                    <!-- Begin Listing-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                                <img alt="image" class="img-responsive"
                                     src="{{asset('/images/hotels/berah.jpg')}} "></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                    <a href="#" target="_parent">10000 FCFA
                                        <small class="pull-right">Côte d'ivoire, yamoussoukro</small>
                                    </a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Residence Berah</li>
                                </ul>

                                <p class="hidden-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                    enim itaque ipsum consequatur distinctio vel, provident aut culpa!.</p>
                                <p class="fnt-smaller fnt-lighter fnt-arial box-foot">
                                    <span>localisation</span>
                                    <a href='{{url('/detailHotel/4/berah')}}' class="btn">detail</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                                <img alt="image" class="img-responsive"
                                     src="{{asset('/images/hotels/ayenou.jpg')}} "></a>
                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                    <a href="#" target="_parent">40000 FCFA
                                        <small class="pull-right">Côte d'ivoire, yamoussoukro</small>
                                    </a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Ayenou</li>
                                </ul>

                                <p class="hidden-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                    enim itaque ipsum consequatur distinctio vel, provident aut culpa!.</p>
                                <p class="fnt-smaller fnt-lighter fnt-arial box-foot">
                                    <span>localisation</span>
                                    <a href='{{url('/detailHotel/5/ayenou')}}' class="btn">detail</a></p></div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                                <img alt="image" class="img-responsive"
                                     src="{{asset('/images/hotels/HotelLeRocher.jpg')}}"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                    <a href="#" target="_parent">20000 FCFA
                                        <small class="pull-right">Côte d'ivoire, yamoussoukro</small>
                                    </a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Le Rocher</li>
                                </ul>

                                <p class="hidden-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                    enim itaque ipsum consequatur distinctio vel, provident aut culpa!.</p>
                                <p class="fnt-smaller fnt-lighter fnt-arial box-foot">
                                    <span>localisation</span>
                                    <a href='{{url('/detailHotel/6/rocher')}}' class="btn">detail</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Listing-->
                </div><!-- End Col -->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>
    </div><a class="scrollup fa fa-angle-up active" href="#"></a>

@endsection()



