@extends("layouts/principal")
@section('contenido')

<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->

<!-- PAGE HEADER -->
<section class="page_header">
	<!-- CONTAINER -->
	<div class="container">
		<h3 class="pull-left"><b>Contacto</b></h3>
	</div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->

<!-- CONTACTS BLOCK -->
<section class="contacts_block">

	<!-- CONTAINER -->
	<div class="container">

		<!-- ROW -->
		<div class="row padbot30">
			<div class="col-lg-6 col-md-6 padbot30">
				<!-- CONTACT FORM -->
				<div class="contact_form">
					<h3><b>SI TIENES ALGUNA DUDA POR FAVOR ESCRÍBENOS.</b></h3>
					<div id="note"></div>
					<div id="fields">
						<form id="ajax-contact-form_" action="">
							<label>Nombre</label>
							<input type="text" id="nombre" name="nombre" placeholder="Nombre" />
							<label>Email</label>
							<input type="email" id="email" name="email" placeholder="Email" />
							<label>Teléfono</label>
							<input type="tel" id="telefono" name="telefono" placeholder="Teléfono" />
							<label>Mensaje</label>
							<textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea><br>
							<input class="btn active" type="submit" value="Enviar" />
						</form>
					</div>
				</div><!-- //CONTACT FORM -->
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 padbot30">
				<ul class="contact_info_block">
					<li>
						<h3><i class="fa fa-map-marker"></i><b>Nuestras tiendas</b></h3>
						<p>Vimoda</p>
						<span>Encuentra nuestras tiendas</span>
					</li>
					<li>
						<h3><i class="fa fa-phone"></i><b>Teléfonos</b></h3>
						<p class="phone">(+44) 800 456 7890</p>
						<p class="phone">(+55) 800 456 7890</p>
					</li>
					<li>
						<h3><i class="fa fa-envelope"></i><b>Email</b></h3>
						<p>Ventas</p>
						<a href="mailto:ventas@vimoda.pe">ventas@vimoda.pe</a>

						<p>Distribuidoras</p>
						<a href="mailto:distribuidoras@vimoda.pe">distribuidoras@vimoda.pe</a>

						<p>Marketing</p>
						<a href="mailto:marketing@vimoda.pe">marketing@vimoda.pe</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 padbot30">
				<div class="widget_banners" style="padding-top:0">
					<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a>
					<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner9.jpg" alt="" /></a>
				</div>
			</div>
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</section><!-- //CONTACTS BLOCK -->

@stop