@extends('layouts.app')
@section('content')
    <!--Banner-->
    <section>
        <div class="csi-banner csi-banner-inner"
             style='background: url("https://media.istockphoto.com/vectors/hands-holding-discount-tag-sale-shopping-special-offer-banner-vector-id697465788?s=2048x2048") top center no-repeat;background-position-y: -200px;'>
            <div style="background: black;position: absolute;width: 100%;height: 100%;opacity: 0.8;"></div>
            <div class="csi-banner-style">
                <div class="csi-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="csi-heading-area">
                                    <div class="csi-heading">
                                        <h2 class="title">Haz tu Pedido</h2>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li><a href="/"><i class="icon-home6"></i>Inicio</a></li>
                                        <li class="active">Hacer Pedido</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--//.ROW-->
                    </div>
                </div>
                <!-- //.INNER -->
            </div>
        </div>
    </section>
    <!--Banner END-->

    <style>
        .sexItems .sexItem {
            background: white;
            padding: 5px;
        }

        .sexItems .sexItemImage {
            width: 100%;
        }

        .sexItemText {
            color: black;
            font-size: 13pt;
            text-transform: uppercase;
        }

        .categoryItem {
            cursor: pointer;
            transition: all 0.5s linear;
        }

        .categoryItem:hover {
            background: white;
        }
    </style>

    <!--ABOUT-->
    <section>
        <div id="csi-about" class="csi-about" style="background: #eaeaea;">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 text-center">
                            <div class="sexCategories">
                                @foreach(\App\Models\Admin\Categoria::get() as $categoria)
                                    <div class="col-md-2">
                                        <div class="categoryItem">
                                            <img src="{{ $categoria->image }}" alt="Categoría"/>
                                            <div class="categoryName">
                                            <!--{{ $categoria->name }}-->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="sexItems">
                                @foreach (\App\Models\Admin\Producto::get() as $producto)
                                    <div class="col-md-4">
                                        <div class="sexItem">
                                            <div class="sexItemImage">
                                                <img src="{{ $producto->image }}" style="height: 250px;" alt="product">
                                            </div>
                                            <div class="sexItemText">
                                                {{ $producto->name }}
                                            </div>
                                            <div class="sexItemCheckbox">

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            <br><br>
                            <div class="btn-area">
                                <a class="csi-btn csi-btn-brand"
                                   href="/register">REALIZAR COMPRA</a>
                            </div>
                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--ABOUT END-->
    <script>
        jQuery(function () {
            jQuery("body").removeClass("home").addClass("page page-template");
        })
    </script>
@endsection
