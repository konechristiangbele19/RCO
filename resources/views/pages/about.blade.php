@extends('../layouts/pageIndex')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">About Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
					
					<div class="about">
					
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>We are awesome <span class="color">TEAM</span></h3>
									<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                                    	<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								</div> 
							</div>
						</div>
						
						<div class="row">
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft animated" data-wow-animation-name="none">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="item">
                  <img src="{{ asset('/images/theme/service1.jpg') }} " alt="">
                  <div class="carousel-caption">
                    <p>
                      Lorem ipsum dolor sit amet.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('/images/theme/service2.jpg') }}" alt="">
                  <div class="carousel-caption">
                    <p>
                      Blanditiis praesentium voluptatum
                    </p>
                  </div>
                </div>
                <div class="item active">
                  <img src="{{ asset('/images/theme/service3.jpg') }}" alt="">
                  <div class="carousel-caption">
                    <p>
                      Blanditiis praesentium voluptatum
                    </p>
                  </div>
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 about wow fadeInRight animated" data-wow-animation-name="none" style="visibility: visible; -webkit-animation-name: none;">

          <p>
            Aenean nibh ante, lacinia non tincidunt nec, lobortis ut tellus. Sed in porta diam. Suspendisse potenti. Donec luctus ullamcorper nulla. Duis nec velit odio.Suspendisse potenti. Donec luctus ullamcorper nulla. Duis nec velit odio.
          </p>
          <ul class="list-unstyled">
            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Vestibulum auctor dapibus neque.
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Lorem ipsum dolor sit amet adipiscing elit.
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Aliquam tincidunt mauris eu risus.
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Vestibulum auctor dapibus neque
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Aliquam tincidunt mauris eu risus.
            </li>

          </ul>
          <blockquote>
            <p>
              Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.
            </p>
            <small>
              CEO Jack Bour
            </small>
          </blockquote>
        </div>
      </div>
						<br>
						
						<div class="row">
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
							</div>
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Solution</span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
										  </a>
										</h4>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
										  </a>
										</h4>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
										  </a>
										</h4>
									 </div>
									 <div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Expertise</span></h3>
								</div>								
								<h6>Web Development</h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Designing</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>User Experience</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Development</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
							</div>
							
						</div>
						
						 						
						 
						<br>
						<!-- Our Team starts -->
				
						<!-- Heading -->
						<div class="block-heading-six">
							<h4 class="bg-color">Our Team</h4>
						</div>
						<br>
						
						<!-- Our team starts -->
						
						<div class="team-six">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="{{ asset('/images/theme/team1.jpg') }}" alt="">
										<!-- Name -->
										<h4>Johne Doe</h4>
										<span class="deg">Creative</span> 
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="{{ asset('/images/theme/team2.jpg') }} " alt="">
										<!-- Name -->
										<h4>Jennifer</h4>
										<span class="deg">Programmer</span> 
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="{{ asset('/images/theme/team3.jpg') }} " alt="">
										<!-- Name -->
										<h4>Christean</h4>
										<span class="deg">CEO</span> 
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="{{ asset('/images/theme/team4.jpg') }}" alt="">
										<!-- Name -->
										<h4>Kerinele rase</h4>
										<span class="deg">Manager</span> 
									</div>
								</div>
							</div>
						</div>
						
						<!-- Our team ends -->
					  
						
					</div>
									
				</div>
	</section>
@endsection