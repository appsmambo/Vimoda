@extends("layouts/principal")
@section('contenido')
				<!-- BREADCRUMBS -->
				<section class="breadcrumb parallax margbot30"></section>
				<!-- //BREADCRUMBS -->


				<!-- TOVAR DETAILS -->
				<section class="tovar_details padbot70">

					<!-- CONTAINER -->
					<div class="container">

						<!-- ROW -->
						<div class="row">

							<!-- SIDEBAR TOVAR DETAILS -->
							<div class="col-lg-3 col-md-3 sidebar_tovar_details">
								<h3><b>productos relacionados</b></h3>

								<ul class="tovar_items_small clearfix">
									<li class="clearfix">
										<img class="tovar_item_small_img" src="{{url('_uploads_/AV736-VIMODA--ROSA--35-39-modelo.jpg')}}" alt="" />
										<a href="javascript:void(0);" class="tovar_item_small_title">SANDALIAS VIMODA</a>
										<span class="tovar_item_small_price">S/155.00</span>
									</li>
									<li class="clearfix">
										<img class="tovar_item_small_img" src="{{url('_uploads_/KI815-VIMODA-CHAROL-NEGRO-35-39modelo.jpg')}}" alt="" />
										<a href="javascript:void(0);" class="tovar_item_small_title">SANDALIAS VIMODA</a>
										<span class="tovar_item_small_price">S/140.00</span>
									</li>
									<li class="clearfix">
										<img class="tovar_item_small_img" src="{{url('_uploads_/KI807-VIMODA-NATURAL-35-39-modelo.jpg')}}" alt="" />
										<a href="javascript:void(0);" class="tovar_item_small_title">SANDALIAS VIMODA</a>
										<span class="tovar_item_small_price">S/140.00</span>
									</li>
									<li class="clearfix">
										<img class="tovar_item_small_img" src="{{url('_uploads_/447 azaleia negro modelo.jpg')}}" alt="" />
										<a href="javascript:void(0);" class="tovar_item_small_title">SANDALIAS AZALEIA</a>
										<span class="tovar_item_small_price">S/140.00</span>
									</li>
								</ul>
							</div><!-- //SIDEBAR TOVAR DETAILS -->

							<!-- TOVAR DETAILS WRAPPER -->
							<div class="col-lg-9 col-md-9 tovar_details_wrapper clearfix">
								<div class="tovar_details_header clearfix">
									<h3 class="pull-left"><b>Sandalias</b></h3>

									<!--<div class="tovar_details_pagination pull-right">
										<a class="fa fa-angle-left" href="javascript:void(0);" ></a>
										<span>2 of 34</span>
										<a class="fa fa-angle-right" href="javascript:void(0);" ></a>
									</div>-->
								</div>

								<!-- CLEARFIX -->
								<div class="clearfix padbot40">
									<div class="tovar_view_fotos clearfix">
										<div id="slider2" class="flexslider">
											<ul class="slides">
												<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-BEIGE-34-39-modelo.jpg')}}" alt="" /></a></li>
					<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-NEGRO-34-39-2.jpg')}}" alt="" /></a></li>
					<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-BEIGE-34-39.jpg')}}" alt="" /></a></li>
					<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-BEIGE-34-39-2.jpg')}}" alt="" /></a></li>
											</ul>
										</div>
										<div id="carousel2" class="flexslider">
											<ul class="slides">
												<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-BEIGE-34-39-modelo.jpg')}}" alt="" /></a></li>
					<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-NEGRO-34-39-2.jpg')}}" alt="" /></a></li>
					<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-BEIGE-34-39.jpg')}}" alt="" /></a></li>
					<li><a href="javascript:void(0);"><img src="{{url('_uploads_/producto-detalle/106-AZALEIA-BEIGE-34-39-2.jpg')}}" alt="" /></a></li>
											</ul>
										</div>
									</div>

									<div class="tovar_view_description">
										<div class="tovar_view_title">SANDALIAS AZALEIA</div>
										<div class="tovar_article">106</div>
										<div class="clearfix tovar_brend_price">
											<div class="pull-left tovar_brend">AZALEIA</div>
											<div class="pull-right tovar_view_price">S/104.00</div>
										</div>
										<div class="tovar_color_select">
											<p>Color</p>
											<a class="beige" title="Beige" href="javascript:void(0);"></a>
											<a class="negro" title="Negro" href="javascript:void(0);"></a>
										</div>
										<div class="tovar_size_select">
											<div class="clearfix">
												<p class="pull-left">Tallas</p>
											</div>
											<a class="sizeS" href="javascript:void(0);">34</a>
				<a class="sizeS" href="javascript:void(0);">35</a>
				<a class="sizeS" href="javascript:void(0);">36</a>
				<a class="sizeS" href="javascript:void(0);">37</a>
				<a class="sizeS" href="javascript:void(0);">38</a>
				<a class="sizeS" href="javascript:void(0);">39</a>
										</div>
										<!--<div class="tovar_view_btn">
											<select class="basic">
												<option value="">QTY</option>
												<option>Lo</option>
												<option>Ips</option>
												<option>Dol</option>
												<option>Sit</option>
												<option>Amet</option>
											</select>
											<a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i>Add to bag</a>
											<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
										</div>-->
										<div class="tovar_shared clearfix">
											<p>Compártelo con tus amigos</p>
											<ul>
												<li><a class="sharer facebook" href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
												<li><a class="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
												<li><a class="linkedin" href="javascript:void(0);" ><i class="fa fa-linkedin"></i></a></li>
												<li><a class="google-plus" href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
												<li><a class="tumblr" href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- //CLEARFIX -->

								<!-- TOVAR INFORMATION -->
								<div class="tovar_information">
									<ul class="tabs clearfix">
										<li class="current">Comentarios</li>
										<li>Detalles</li>
									</ul>
									<div class="box visible">
										<div class="fb-comments" data-href="http://www.vimodashoes.pe" data-numposts="5"></div>
									</div>
									<div class="box">
										Original Levi 501 <br>
										Button fly<br>
										Regular fit<br>
										waist 28"-32 =16"hem<br>
										waist 33" = 17" hem<br>
										waist 34"-40"=18" hem<br>
										Levi's have started to introduce the red tab with just the (R) (registered trade mark) on the red tab<br><br>

										Size Details:<br>
										All sizes from 28-40 waist<br>
										Leg length 30", 32", 34", 36"
									</div>
								</div><!-- //TOVAR INFORMATION -->
							</div><!-- //TOVAR DETAILS WRAPPER -->
						</div><!-- //ROW -->
					</div><!-- //CONTAINER -->
				</section><!-- //TOVAR DETAILS -->


				<!-- BANNER SECTION -->
				<section class="banner_section">

					<!-- CONTAINER -->
					<div class="container">

						<!-- ROW -->
						<div class="row">

							<!-- BANNER WRAPPER -->
							<div class="banner_wrapper">
								<!-- BANNER -->
								<div class="col-lg-9 col-md-9">
									<a class="banner type4 margbot40" href="javascript:void(0);" ><img src="{{url('images/tovar/banner4.jpg')}}" alt="" /></a>
								</div><!-- //BANNER -->

								<!-- BANNER -->
								<div class="col-lg-3 col-md-3">
									<a class="banner nobord margbot40" href="javascript:void(0);" ><img src="{{url('images/tovar/banner5.jpg')}}" alt="" /></a>
								</div><!-- //BANNER -->
							</div><!-- //BANNER WRAPPER -->
						</div><!-- //ROW -->
					</div><!-- //CONTAINER -->
				</section><!-- //BANNER SECTION -->

@stop