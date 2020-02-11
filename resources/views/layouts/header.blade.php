   <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target=
                        ".navbar-collapse" data-toggle="collapse" type=
                        "button"><span class="icon-bar"></span> <span class=
                        "icon-bar"></span> <span class=
                        "icon-bar"></span></button> <a class="navbar-brand"
                        href="{{ url('/') }} "></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="/">Accueil</a>
                            </li>

                            <li>
                                <a href="{{url('/hotels')}}">Hôtel</a>
                            </li>

                            <li>
                                <a href="{{ url('/reservations') }} ">Reservation</a>
                            </li>

                       
                            <li>
                                <a href="{{url ('/about')}} ">A propos de nous</a>
                            </li>

                            <li>
                                <a href="{{url ('/contact')}} ">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header><!-- end header -->