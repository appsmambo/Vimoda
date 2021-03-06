@extends("layouts/principal")
@section('contenido')
<!-- HOME -->
<section id="home" class="padbot0">
    <!-- TOP SLIDER -->
    <div class="flexslider top_slider">
        <ul class="slides">
            <?php $i = 0 ?>
            @foreach($sliders as $slider)
            <li class="slide{{$i+1}}">
                <img src="{{url($slider->archivo_lg)}}" class="visible-lg visible-md" alt="">
                <img src="{{url($slider->archivo_sm)}}" class="visible-sm" alt="">
                <img src="{{url($slider->archivo_xs)}}" class="visible-xs" alt="">
            </li>
            @endforeach
        </ul>
    </div><!-- //TOP SLIDER -->
</section><!-- //HOME -->


<!-- TOVAR SECTION -->
<section class="tovar_section">

    <!-- CONTAINER -->
    <div class="container">
        <h2>PRODUCTOS DESTACADOS</h2>

        <!-- ROW -->
        <div class="row">

            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>

                <!-- TOVAR1 -->
                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS VIMODA
                            </a>
                            <span class="tovar_price">
                                S/155.00
                            </span>
                        </div>
                    </div>
                </div><!-- //TOVAR1 -->

                <!-- TOVAR2 -->
                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS VIMODA
                            </a>
                            <span class="tovar_price">
                                S/140.00
                            </span>
                        </div>
                    </div>
                </div><!-- //TOVAR2 -->

                <!-- TOVAR3 -->
                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS AZALEIA
                            </a>
                            <span class="tovar_price">
                                S/104.00
                            </span>
                        </div>
                    </div>
                </div><!-- //TOVAR3 -->

                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS AZALEIA
                            </a>
                            <span class="tovar_price">
                                S/104.00
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->


        <!-- ROW -->
        <div class="row">

            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>

                <!-- TOVAR4 -->
                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS VIMODA
                            </a>
                            <span class="tovar_price">
                                S/140.00
                            </span>
                        </div>
                    </div>
                </div><!-- //TOVAR4 -->

                <!-- TOVAR5 -->
                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS AZALEIA
                            </a>
                            <span class="tovar_price">
                                S/104.00
                            </span>
                        </div>
                    </div>
                </div><!-- //TOVAR5 -->

                <!-- TOVAR6 -->
                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS VIMODA
                            </a>
                            <span class="tovar_price">
                                S/115.00
                            </span>
                        </div>
                    </div>
                </div><!-- //TOVAR6 -->

                <div class="col-md-3 col-sm-6 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
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
                            <a class="tovar_title" href="{{url('/damas/sandalias/azaleia-106')}}">
                                SANDALIAS VIMODA
                            </a>
                            <span class="tovar_price">
                                S/140.00
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->


        <!-- ROW -->
        <div class="row">

            <!-- BANNER WRAPPER -->
            <div class="banner_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <!-- BANNER -->
                <div class="col-lg-9 col-md-9">
                    <a class="banner type4 margbot40" href="javascript:void(0);" ><img src="{{url('images/tovar/banner4.jpg')}}" alt="" /></a>
                </div><!-- //BANNER -->

                <!-- BANNER -->
                <div class="col-lg-3 col-md-3">
                    <a class="banner nobord margbot40" href="javascript:void(0);" ><img src="{{url('images/siguenos-en-facebook.png')}}" alt="" /></a>
                </div><!-- //BANNER -->
            </div><!-- //BANNER WRAPPER -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //TOVAR SECTION -->

<!-- BRANDS -->
<section class="brands_carousel">

    <!-- CONTAINER -->
    <div class="container">

        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">

            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->

            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    <li><a href="javascript:void(0);" ><img src="images/brands/downping.jpg" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="images/brands/nativa.jpg" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="images/brands/sannelas.jpg" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="images/brands/terrano.jpg" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="images/brands/vimoda-new-fashion.jpg" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="images/brands/five-element.jpg" alt="" /></a></li>
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //BRANDS -->

<!-- SERVICES SECTION -->
<section class="services_section">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-6 padbot30 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                <p>Vimoda Primavera 2014</p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nHblpCh61W8?rel=0&amp;showinfo=0"></iframe>
                </div>
            </div>
        </div><!-- //ROW -->

        <div class="row">
            <div class="col-md-4 asd padbot30 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uUf6jmS0vbw?rel=0&amp;showinfo=0"></iframe>
                </div>
            </div>
            <div class="col-md-4 padbot30 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uUf6jmS0vbw?rel=0&amp;showinfo=0"></iframe>
                </div>
            </div>
            <div class="col-md-4 padbot30 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uUf6jmS0vbw?rel=0&amp;showinfo=0"></iframe>
                </div>
            </div>
        </div>

    </div><!-- //CONTAINER -->
</section><!-- //SERVICES SECTION -->

<hr class="container">
@stop