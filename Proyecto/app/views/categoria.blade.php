@extends("layouts/principal")
@section('contenido')
<!-- BREADCRUMBS -->
<section class="breadcrumb women parallax margbot30">
	<div class="container">
		<h2>{{$breadcrumb}}</h2>
	</div>
</section><!-- //BREADCRUMBS -->


<!-- SHOP BLOCK -->
<section class="shop">

	<!-- CONTAINER -->
	<div class="container">

		<!-- ROW -->
		<div class="row">

			<!-- SIDEBAR -->
			<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">

				<!-- CATEGORIES -->
				<div class="sidepanel widget_categories">
					<h3>Categorías</h3>
					<ul>
						@foreach ($categoriaNivel1 as $categoria1)
						<li>
							<a href="{{url('categoria/'.$nivel1.'/'.$categoria1['url'])}}">{{$categoria1['descripcion']}}</a>
							@if (isset($categoriaNivel2) && $nivel2 == $categoria1['url'])
							<ul>
								@foreach ($categoriaNivel2 as $categoria2)
								<li>
									<a href="{{url('categoria/'.$nivel1.'/'.$nivel2.'/'.$categoria2['url'])}}">{{$categoria2['descripcion']}}</a>
								</li>
								@endforeach
							</ul>
							@endif
						</li>
						@endforeach
					</ul>
				</div><!-- //CATEGORIES -->

				<!-- SHOP BY BRANDS -->
				<div class="sidepanel widget_brands">
					<h3>marcas</h3>
					<input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">Downping <span></span></label>
					<input type="checkbox" id="categorymanufacturer2" /><label for="categorymanufacturer2">Nativa <span></span></label>
					<input type="checkbox" id="categorymanufacturer3" /><label for="categorymanufacturer3">Sannela´s <span></span></label>
					<input type="checkbox" id="categorymanufacturer4" /><label for="categorymanufacturer4">Terrano <span></span></label>
					<input type="checkbox" id="categorymanufacturer5" /><label for="categorymanufacturer5">Vimoda <span></span></label>
					<input type="checkbox" id="categorymanufacturer5" /><label for="categorymanufacturer5">Five Element <span></span></label>
				</div><!-- //SHOP BY BRANDS -->

				<!-- SHOP BY COLOR -->
				<div class="sidepanel widget_color">
					<h3>COLORES</h3>
					<ul>
						<li><a class="negro" title="Negro" href="javascript:void(0);" ></a></li>
						<li><a class="negro-oro" title="Negro oro" href="javascript:void(0);" ></a></li>
						<li><a class="rosa" title="Rosa" href="javascript:void(0);" ></a></li>
						<li><a class="charol-negro" title="Charol negro" href="javascript:void(0);" ></a></li>
						<li><a class="charol-rosa" title="Charol rosa" href="javascript:void(0);" ></a></li>
						<li><a class="blanco" title="Blanco" href="javascript:void(0);" ></a></li>
						<li><a class="beige" title="Beige" href="javascript:void(0);" ></a></li>
						<li><a class="natural" title="Natural" href="javascript:void(0);" ></a></li>
						<li><a class="tofi" title="Tofi" href="javascript:void(0);" ></a></li>
						<li><a class="apache" title="Apache" href="javascript:void(0);" ></a></li>
					</ul>
				</div><!-- //SHOP BY COLOR -->

				<!-- SHOP BY SIZE -->
				<div class="sidepanel widget_sized">
					<h3>Tallas</h3>
					<ul>
						<li><a class="sizeS" href="javascript:void(0);" >33</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >34</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >35</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >36</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >37</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >38</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >39</a></li>
						<li><a class="sizeS" href="javascript:void(0);" >40</a></li>
					</ul>
				</div><!-- //SHOP BY SIZE -->


				<!-- BANNERS WIDGET -->
				<div class="widget_banners">
					<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="{{url('images/tovar/banner10.jpg')}}" alt="" /></a>
					<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="{{url('images/tovar/banner9.jpg')}}" alt="" /></a>
					<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="{{url('images/tovar/banner8.jpg')}}" alt="" /></a>
				</div><!-- //BANNERS WIDGET -->

				<!-- NEWSLETTER FORM WIDGET -->
				<div class="sidepanel widget_newsletter">
					<div class="newsletter_wrapper">
						<h3>Novedades</h3>
						<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
							<span>
								Ingresa tus datos y recibe nuestras ofertas
							</span>
							<input type="text" name="newsletter" placeholder="Nombre" />
							<input type="email" name="newsletter" placeholder="Email" />
							<input type="tel" name="newsletter" placeholder="Teléfono" />
							<input class="btn newsletter_btn" type="submit" value="enviar">
						</form>
					</div>
				</div><!-- //NEWSLETTER FORM WIDGET -->
			</div><!-- //SIDEBAR -->


			<!-- SHOP PRODUCTS -->
			<div class="col-lg-9 col-sm-9 col-sm-9 padbot20">

				<!-- SHOP BANNER -->
				<div class="banner_block margbot15">
					<a class="banner nobord" href="javascript:void(0);" ><img src="{{url('images/tovar/banner21.jpg')}}" alt="" /></a>
				</div><!-- //SHOP BANNER -->

				<!-- SORTING TOVAR PANEL -->
				<div class="sorting_options clearfix">

					<!-- COUNT TOVAR ITEMS -->
					<div class="count_tovar_items">
						<p>Mostrando</p>
						<span>9 Productos</span>
					</div><!-- //COUNT TOVAR ITEMS -->

				</div><!-- //SORTING TOVAR PANEL -->


				<!-- ROW -->
				<div class="row shop_block">

					<!-- TOVAR1 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/AV736-VIMODA--ROSA--35-39-modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/AV736-VIMODA--ROSA--35-39-modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/1.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS VIMODA</a>
								<span class="tovar_price">S/155.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR1 -->

					<!-- TOVAR2 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/KI815-VIMODA-CHAROL-NEGRO-35-39modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/KI815-VIMODA-CHAROL-NEGRO-35-39modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/2.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS VIMODA</a>
								<span class="tovar_price">S/140.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR2 -->

					<!-- TOVAR3 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/106-AZALEIA-BEIGE-34-39-modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/106-AZALEIA-BEIGE-34-39-modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/3.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS AZALEIA</a>
								<span class="tovar_price">S/104.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR3 -->

					<!-- TOVAR4 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/KI807-VIMODA-NATURAL-35-39-modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/KI807-VIMODA-NATURAL-35-39-modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/4.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS VIMODA</a>
								<span class="tovar_price">S/140.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR4 -->

					<!-- TOVAR5 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/447 azaleia negro modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/447 azaleia negro modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/5.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS AZALEIA</a>
								<span class="tovar_price">S/104.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR5 -->

					<!-- TOVAR6 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/KI850-VIMODA-TOFI-35-39-modelo01.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/KI850-VIMODA-TOFI-35-39-modelo01.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/6.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS VIMODA</a>
								<span class="tovar_price">S/115.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR6 -->

					<!-- TOVAR1 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/AV736-VIMODA--ROSA--35-39-modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/AV736-VIMODA--ROSA--35-39-modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/1.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS VIMODA</a>
								<span class="tovar_price">S/155.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR1 -->

					<!-- TOVAR2 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/KI815-VIMODA-CHAROL-NEGRO-35-39modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/KI815-VIMODA-CHAROL-NEGRO-35-39modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/2.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS VIMODA</a>
								<span class="tovar_price">S/140.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR2 -->

					<!-- TOVAR3 -->
					<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
						<div class="tovar_item clearfix">
							<div class="tovar_img">
								<div class="tovar_img_wrapper">
									<a href="{{url('/damas/sandalias/azaleia-106')}}">
										<img class="img" src="{{url('_uploads_/106-AZALEIA-BEIGE-34-39-modelo.jpg')}}" alt="" />
										<img class="img_h" src="{{url('_uploads_/106-AZALEIA-BEIGE-34-39-modelo.jpg')}}" alt="" />
									</a>
								</div>
								<div class="tovar_item_btns">
									<div class="open-project-link">
										<a class="open-project tovar_view" href="javascript:void(0);" data-url="{{url('projects/women/3.html')}}">
											vista rápida
										</a>
									</div>
								</div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}" >SANDALIAS AZALEIA</a>
								<span class="tovar_price">S/104.00</span>
							</div>
							<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
						</div>
					</div><!-- //TOVAR3 -->
				</div><!-- //ROW -->

				<hr style="display: none">

				<div class="clearfix">
					<!-- PAGINATION -->
					<ul class="pagination" style="display: none">
						<li><a href="javascript:void(0);" >1</a></li>
						<li><a href="javascript:void(0);" >2</a></li>
						<li class="active"><a href="javascript:void(0);" >3</a></li>
						<li><a href="javascript:void(0);" >4</a></li>
						<li><a href="javascript:void(0);" >5</a></li>
						<li><a href="javascript:void(0);" >6</a></li>
						<li><a href="javascript:void(0);" >...</a></li>
					</ul><!-- //PAGINATION -->



				</div>

				<hr style="display: none">

			</div><!-- //SHOP PRODUCTS -->
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</section><!-- //SHOP -->

@stop