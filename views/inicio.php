
<div style="margin-top:75px;">
    <div id="carouselExampleIndicators" class="carousel slide mt-5 pt-5 " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://guacamole.radioformula.com.mx/resizer/Kd9Rnf8EaCeF72IQGbCf8Sx75k8=/1200x675/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/radioformula/YMQV6E5AIBFZVKVBTZ4GDB4F44.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://mihogar.blog/wp-content/uploads/2023/09/los-secretos-detras-de-la-magia-del-licor-43-revelados-1.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://gondolasparaminimarket.org/wp-content/themes/theme-shelfic/img/Banner-Exhibidores-de-Licores-1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





    <div class="container-fluid p-3 m-0 mt-1 row" >
        <div class="container-fluid1 p-3 m-0 mt-4 row"> <h2 style="color: red;  font-size: 35px; font-family:'Gill Sans',
         'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display: flex; align-items: center;"> <span style="flex: 1; margin: 30px;
          border-top: 2px solid rgb(221, 21, 21);">
        </span> COLECCION JHONY WALKER <span style="flex: 1;  margin: 30px;  border-top: 2px solid rgb(221, 20, 20);"></span> </h2>
     </div>
        <div class=" col-lg-3 col-md-4 col-sm-6 p-3 ">
            <div class="card" style="min-height: 00px;">
               <a href="<?php echo BASE_URL; ?>carrito"> <img src="https://licoreriasunidas.pe/cdn/shop/products/whisky-johnnie-walker-gold-label-botella-750ml.webp?v=1677262912"
                    class="card-img-top" alt="..."></a>
                <div class="card-body br-100">
              <!-- Botón "Agregar a Favorito" -->
<button type="button" class="btn btn-danger btn-sm favorite-button" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em;" title="Agregar a Favorito">
    <i class="fas fa-heart" style="color: red;"></i>
</button>

<!-- Notificación -->
<div class="notification" id="notification">
    <i class="fas fa-check-circle"></i>
    Agregado a favoritos correctamente.
</div>
                    <h5 class="card-title">GOLD LABEL</h5>
                    <p class="card-text">Johnnie Walker Gold Label es un whisky que conserva su autenticidad
                        galardonado por sus cualidades dulces y melos </p>
                    <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 200.00</strong>
                </div>
                <div class="card-body d-flex align-items-center">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModal" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
            </div>
        </div>

       
       
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Golden Label</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Imagen del producto -->
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriasunidas.pe/cdn/shop/products/whisky-johnnie-walker-gold-label-botella-750ml.webp?v=1677262912" alt="Imagen del producto">
                    </div>
                    <!-- Detalles del producto -->
                    <div class="col-md-6">
                        <h4>JOHNNIE WALKER GOLD LABEL DE 750 ML</h4>
                        <p class="text-muted discount-price">S/240.00</p>
                        <p class="current-price">S/200.00</p>
                        <p>De color dorado y aroma acogedor de vainilla, madera tostada, frutas, especias y agave cocido. Una rica combinación de especias, frutas, madera, vainilla y sutiles avellanas tostadas. Al terminar se presenta suave y duradero con los cálidos sabores de vainilla y especias sutiles descansadas en roble.</p>
                        <p>Disponibilidad: <span class="text-success">2 disponibles</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito">
            <img src="https://floreriasb.com.pe/wp-content/uploads/2022/08/LSB-14.jpg"
                class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">

        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>

            <h5 class="card-title">BLACK LABEL</h5>
            <p class="card-text">Johnnie Walker Black Label es un verdadero ícono. Una mezcla magistral de whiskies de malta
                y de grano selecto.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 180.00</strong></p>
        </div>
        <div class="card-body d-flex align-items-center">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModal2" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto 2: Black Label -->
<div class="modal fade" id="productModal2" tabindex="-1" aria-labelledby="productModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel2">BLACK LABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Imagen del producto -->
                    <div class="col-md-6 product-preview">
                        <img src="https://mundolicor.com.pe/wp-content/uploads/2019/12/136-Johnnie-Walker-Black-600x600.jpg" alt="Imagen del producto">
                    </div>
                    <!-- Detalles del producto -->
                    <div class="col-md-6">
                        <h4>JOHNNIE WALKER BLACK LABEL DE 750 ML</h4>
                        <p class="text-muted discount-price">S/.180.00</p>
                        <p class="current-price">S/.165.00</p>
                        <p>Johnnie Walker Black Label es un whisky complejo, rico y lleno de carácter. Con notas de frutas oscuras, vainilla y un toque ahumado.</p>
                        <p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        
<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito"> 
            <img src="https://licoreriasunidas.pe/cdn/shop/products/8a83f62506284458a866dd447bf3b4ba.webp?v=1678117951" class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">DOUBLE LABEL</h5>
            <p class="card-text">Johnnie Walker Double Black es el hermano rebelde de Johnnie Walker Black Label con una intensidad profunda.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 400.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalDoubleLabel" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: DOUBLE LABEL -->
<div class="modal fade" id="productModalDoubleLabel" tabindex="-1" aria-labelledby="productModalLabelDoubleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelDoubleLabel">DOUBLE LABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriasunidas.pe/cdn/shop/products/8a83f62506284458a866dd447bf3b4ba.webp?v=1678117951" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                        <h4>JOHNNIE WALKER DOUBLE LABEL</h4>
                        <p class="text-muted discount-price">S/450.00</p>
                        <p class="current-price">S/400.00</p>
                        <p>Johnnie Walker Double Black Label es una versión más intensa del clásico Black Label, destacada por su marcado ahumado y carácter robusto. Elaborado con maltas de Islay, ofrece notas de turba, frutas secas y un toque de especias. En boca, se aprecia un equilibrio entre la dulzura de la vainilla y el roble tostado, con un final largo y cálido.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        
        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito"> 
            <img src="https://licoreriasunidas.pe/cdn/shop/products/whisky-johnnie-walker-blue-label-botella-750ml.webp?v=1677792200" class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">BLUE LABEL</h5>
            <p class="card-text">Johnnie Walker Blue Label con sus sabores suaves acarician el paladar, proviene de la selección manual.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 1 200.00</strong></p>
        </div>
        <div class="card-body d-flex align-items-center">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalBlueLabel" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: BLUE LABEL -->
<div class="modal fade" id="productModalBlueLabel" tabindex="-1" aria-labelledby="productModalLabelBlueLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelBlueLabel">BLUE LABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriasunidas.pe/cdn/shop/products/whisky-johnnie-walker-blue-label-botella-750ml.webp?v=1677792200" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                        <h4>JOHNNIE WALKER BLUE LABEL</h4>
                        <p class="text-muted discount-price">S/1250.00</p>
                        <p class="current-price">S/1200.00</p>
                        <p>Johnnie Walker Blue Label es el whisky más exclusivo de la casa Walker, conocido por su suavidad y profundidad. Combina notas de frutas maduras, chocolate amargo y un toque de especias. En boca, revela una riqueza excepcional, con un final suave y sedoso. Cada botella es una obra maestra, mezclada a mano para garantizar la máxima calidad. Su carácter equilibrado y complejidad lo convierten en un whisky único en su clase.</p>
                        <p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito"> 
            <img src="https://hips.hearstapps.com/hmg-prod/images/johnnie-walker-green-label-655df4cb5abd4.jpg?crop=0.705xw:1.00xh;0.148xw,0&resize=1200:*" class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">GREEN LABEL</h5>
            <p class="card-text">Johnnie Walker Green Label es un tesoro oculto con magníficos secretos que revelar. Se elabora con maltas añejadadas.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 600.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalGreenLabel" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: GREEN LABEL -->
<div class="modal fade" id="productModalGreenLabel" tabindex="-1" aria-labelledby="productModalLabelGreenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelGreenLabel">GREEN LABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://barruntoone.com/wp-content/uploads/2022/12/WHISKY-JOHNNIE-WALKER-GREEN-LABEL-750-ML-1.jpg" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                        <h4>JOHNNIE WALKER GREEN LABEL</h4>
                        <p class="text-muted discount-price">S/650.00</p>
                        <p class="current-price">S/600.00</p>
                        <p>Johnnie Walker Green Label es una mezcla de maltas escocesas de al menos 15 años, reconocida por su carácter equilibrado. Con notas de hierbas frescas, frutas maduras y un toque de madera ahumada, ofrece una experiencia compleja y bien estructurada. En boca, destacan sabores de miel, vainilla, frutos secos y un sutil toque especiado. Su final es largo y fresco, dejando una impresión duradera de sus sabores refinados. Un whisky sofisticado que celebra la riqueza de las maltas puras.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito"> 
            <img src="https://home.ripley.com.pe/Attachment/WOP_4/2044201742015/2044201742015_2.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">PLATINUM LABEL</h5>
            <p class="card-text">Johnnie Walker Platinum Label 18 años se inspiró en la tradición de ofrecer mezclas privadas a familiares cercanos .</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 900.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalPlatinumLabel" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: PLATINUM LABEL -->
<div class="modal fade" id="productModalPlatinumLabel" tabindex="-1" aria-labelledby="productModalLabelPlatinumLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelPlatinumLabel">PLATINUM LABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://home.ripley.com.pe/Attachment/WOP_4/2044201742015/2044201742015_2.jpg" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                        <h4>JOHNNIE WALKER PLATINIUM LABEL DE 20 AÑOS</h4>
                        <p class="text-muted discount-price">S/950.00</p>
                        <p class="current-price">S/900.00</p>
                        <p>Johnnie Walker Platinum Label es un whisky elegante y refinado, elaborado con maltas escocesas seleccionadas y envejecido por al menos 18 años. Su aroma resalta notas de frutas secas, manzanas verdes y toques cítricos, junto a matices sutiles de roble y especias. En boca, ofrece un equilibrio perfecto entre la dulzura de la miel y la complejidad de vainilla y roble tostado. Con una textura sedosa y un final cálido, este whisky es ideal para celebraciones especiales y para aquellos que buscan una experiencia de sabor excepcional.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito"> 
            <img src="https://tofuu.getjusto.com/orioneat-local/resized2/8hZsmp7AbjjjbNZwM-1200-1200.webp" class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">RED LABEL</h5>
            <p class="card-text">Johnnie Walker Red Label de 5 años se inspiró en la tradición y economía de los consumidores, por lo tanto, es la más vendida.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 200.00</strong></p>
        </div>
        <div class="card-body d-flex align-items-center">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalRedLabel" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: RED LABEL -->
<div class="modal fade" id="productModalRedLabel" tabindex="-1" aria-labelledby="productModalLabelRedLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelRedLabel">RED LABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://tofuu.getjusto.com/orioneat-local/resized2/8hZsmp7AbjjjbNZwM-1200-1200.webp" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                    <h4>JOHNNIE WALKER RED LABEL DE 18 AÑOS</h4>
                        <p class="text-muted discount-price">S/250.00</p>
                        <p class="current-price">S/200.00</p>
                        <p>Johnnie Walker Red Label es un whisky elegante y refinado, elaborado con maltas escocesas seleccionadas y envejecido por al menos 18 años. Su aroma resalta notas de frutas secas, manzanas verdes y toques cítricos, junto a matices sutiles de roble y especias. En boca, ofrece un equilibrio perfecto entre la dulzura de la miel y la complejidad de vainilla y roble tostado. Con una textura sedosa y un final cálido, este whisky es ideal para celebraciones especiales y para aquellos que buscan una experiencia de sabor excepcional.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <a href="<?php echo BASE_URL; ?>carrito">
            <img src="https://licoreriasunidas.pe/cdn/shop/products/whisky-johnnie-walker-king-george-botella-700ml-74a9b8aebc.webp?v=1677263312&width=500"
                class="card-img-top" alt="...">
        </a>
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">KING GEORGE V</h5>
            <p class="card-text">Johnnie Walker King George es la colección de alta gama superando a la colección label con un increíble sabor único e imigualable.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 2,200.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalKingGeorge" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: KING GEORGE V -->
<div class="modal fade" id="productModalKingGeorge" tabindex="-1" aria-labelledby="productModalLabelKingGeorge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelKingGeorge">KING GEORGE V</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriasunidas.pe/cdn/shop/products/whisky-johnnie-walker-king-george-botella-700ml-74a9b8aebc.webp?v=1677263312&width=500" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                    <h4>JOHNNIE WALKER KING GEORGE V</h4>
                        <p class="text-muted discount-price">S/2350.00</p>
                        <p class="current-price">S/2200.00</p>
                        <p>Johnnie Walker King George es un whisky elegante y refinado, elaborado con maltas escocesas seleccionadas y envejecido por al menos 18 años. Su aroma resalta notas de frutas secas, manzanas verdes y toques cítricos, junto a matices sutiles de roble y especias. En boca, ofrece un equilibrio perfecto entre la dulzura de la miel y la complejidad de vainilla y roble tostado. Con una textura sedosa y un final cálido, este whisky es ideal para celebraciones especiales y para aquellos que buscan una experiencia de sabor excepcional.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>












    <div class="container-fluid p-3 m-0 mt-1 row">
        <div class="container-fluid1 p-3 m-0 mt-4 row"> <h2 style="color: red;  font-size: 35px; font-family:'Gill Sans',
            'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display: flex; align-items: center;"> <span style="flex: 1; margin: 30px;
             border-top: 2px solid rgb(221, 21, 21);">
           </span> VINOS DE ALTA GAMA<span style="flex: 1;  margin: 30px;  border-top: 2px solid rgb(221, 20, 20);"></span> </h2>
        </div>
        
        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <img src="https://hips.hearstapps.com/hmg-prod/images/11-1655622206.jpg" class="card-img-top" alt="...">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">CATENA ZAPATA</h5>
            <p class="card-text">La mejor expresión de vino peruano. Veinticuatro meses en roble francés y americano le aportan complejidad.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 200.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalCatenaZapata" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: CATENA ZAPATA -->
<div class="modal fade" id="productModalCatenaZapata" tabindex="-1" aria-labelledby="productModalLabelCatenaZapata" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelCatenaZapata">CATENA ZAPATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/11-1655622206.jpg" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                    <h4>CATENA ZAPATA</h4>
                        <p class="text-muted discount-price">S/250.00</p>
                        <p class="current-price">S/200.00</p>
                        <p>Catena Zapata Malbec es un vino argentino de renombre, elaborado a partir de uvas seleccionadas de viñedos ubicados en las alturas de Mendoza. Envejecido en barricas de roble durante 12 a 18 meses, su aroma evoca notas de ciruelas maduras, cerezas negras y un toque de violetas, junto a delicados matices de tabaco y especias. En boca, ofrece una estructura equilibrada, con taninos suaves que realzan la dulzura natural de la fruta y la complejidad de la vainilla y el cacao aportados por el roble. Con una textura sedosa y un final persistente y redondo, este Malbec es ideal para cenas elegantes o momentos especiales, brindando una experiencia de sabor inigualable para los amantes del vino tinto de alta calidad.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <img src="https://vinomalist.com/wp-content/uploads/2022/04/Castillo-Ygay2Gran-Reserva-Especial-de-Marques-de-Murrieta.jpg" class="card-img-top" alt="...">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">CASTILLO YGUAY</h5>
            <p class="card-text">Uno de los mejores vinos a nivel mundial, galardonado por su gran sabor y dulzura de una uva premium peruana.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 250.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalCastilloYgay" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: CASTILLO YGUAY -->
<div class="modal fade" id="productModalCastilloYgay" tabindex="-1" aria-labelledby="productModalLabelCastilloYgay" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelCastilloYgay">CASTILLO YGUAY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://vinomalist.com/wp-content/uploads/2022/04/Castillo-Ygay2Gran-Reserva-Especial-de-Marques-de-Murrieta.jpg" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                    <h4>CASTILLO YGUAY</h4>
                        <p class="text-muted discount-price">S/300.00</p>
                        <p class="current-price">S/250.00</p>
                        <p>Castillo Ygay Gran Reserva es un vino tinto elegante y refinado, elaborado con uvas seleccionadas de las viñas más antiguas de Rioja. Envejecido en barricas de roble durante más de 24 meses, su aroma destaca notas de frutas negras maduras, especias dulces y toques de cacao, con sutiles matices de cuero y regaliz. En boca, ofrece un equilibrio perfecto entre la acidez vibrante y la complejidad de los taninos, junto con la profundidad de sabores como ciruela, vainilla y tabaco. Con una textura aterciopelada y un final persistente, este vino es ideal para ocasiones especiales y para quienes buscan una experiencia de sabor única y excepcional.</p>
<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <img src="https://hips.hearstapps.com/hmg-prod/images/15-1655622679.jpg" class="card-img-top" alt="...">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">PICHON VARON</h5>
            <p class="card-text">Elaborado en las llanuras del valle de Ica para la degustación especial de todas las familias peruanas.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 180.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalCastilloYgay" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: PICHON VARON -->
<div class="modal fade" id="productModalPichonVaron" tabindex="-1" aria-labelledby="productModalLabelPichonVaron" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelPichonVaron">PICHON VARON</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/15-1655622679.jpg" alt="Imagen del producto">
                    </div>
                    <div class="col-md-6">
                    <h4>PICHON VARON</h4>
                        <p class="text-muted discount-price">S/220.00</p>
                        <p class="current-price">S/180.00</p>
                        <p>Pichon Baron es un vino tinto elegante y complejo, elaborado con uvas cuidadosamente seleccionadas de los viñedos de Pauillac en Burdeos. Envejecido en barricas de roble durante 18 a 20 meses, su aroma evoca notas de frutas oscuras maduras como grosellas negras y ciruelas, complementadas con toques de especias, cedro y tabaco. En boca, ofrece un equilibrio impecable entre la frescura de la acidez y la riqueza de sus taninos, con sabores profundos de fruta negra, vainilla y chocolate amargo. Con una textura aterciopelada y un final largo y sofisticado, este vino es perfecto para celebraciones especiales y para aquellos que buscan una experiencia de sabor excepcional.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 00px;">
        <img src="https://hips.hearstapps.com/hmg-prod/images/vino-tarsus-crianza-elle-1647172453.jpg?crop=1xw:1xh;center,top&resize=980:*" class="card-img-top" alt="...">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em;" title="Agregar a Favorito">
    <i class="fas fa-heart" style="color: red;"></i>
</button>
            <h5 class="card-title">TARSUS VIETNAM</h5>
            <p class="card-text">Uno de los mejores vinos a nivel mundial con su gran calidad de elaboración y buena calidad de productos.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 280.00</strong></p>
        </div>
      <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" title="Vista Previa" style="border: 2px solid blue; background: white;  color: blue;">
        <i class="fas fa-eye"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: TARSUS VIETNAM -->
<div class="modal fade" id="productModalTarsus" tabindex="-1" aria-labelledby="productModalLabelTarsus" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelTarsus">TARSUS VIETNAM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/vino-tarsus-crianza-elle-1647172453.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>TARSUS VIETNAM</h4>
                        <p class="text-muted discount-price">S/350.00</p>
                        <p class="current-price">S/280.00</p>
                        <p>Tarsus Vietnam es un vino tinto sofisticado y robusto, elaborado con uvas de las mejores viñas de la región. Envejecido cuidadosamente en barricas de roble francés, su aroma destaca por notas de frutas rojas maduras, ciruelas y un toque sutil de especias exóticas. En boca, ofrece un equilibrio armonioso entre la acidez fresca y los taninos refinados, con sabores complejos de frambuesa, vainilla y ligeros toques de tabaco. Con una textura sedosa y un final persistente, este vino es ideal para momentos especiales y para quienes buscan una experiencia de sabor auténtica y única.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <div class="container-fluid p-3 m-0 mt-1 row">
        <div class="container-fluid1 p-3 m-0 mt-4 row"> <h2 style="color: red;  font-size: 35px; font-family:'Gill Sans',
            'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display: flex; align-items: center;"> <span style="flex: 1; margin: 30px;
             border-top: 2px solid rgb(221, 21, 21);">
           </span>LICORES TOP MUNDIAL<span style="flex: 1;  margin: 30px;  border-top: 2px solid rgb(221, 20, 20);"></span> </h2>
        </div>
        
        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGlupBq96gY1o96ona1HnkRAuAv9Ac6Lblh_9nf37ugz-CBPrzuBphHBH-cGOtNaYAKcE&usqp=CAU"
             class="card-img-top" alt="Botella de D' AMALFI LIMONCELLO SUPREME">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">D' AMALFI LIMONCELLO SUPREME</h5>
            <p class="card-text">Una bebida de origen italiana cuyo cuello de la botella cuenta cubierta de diamantes y con un único sabor que se diferencia de los demás.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 44,000,000.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalLimoncello" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: D' AMALFI LIMONCELLO SUPREME -->
<div class="modal fade" id="productModalLimoncello" tabindex="-1" aria-labelledby="productModalLabelLimoncello" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelLimoncello">D' AMALFI LIMONCELLO SUPREME</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGlupBq96gY1o96ona1HnkRAuAv9Ac6Lblh_9nf37ugz-CBPrzuBphHBH-cGOtNaYAKcE&usqp=CAU" 
                             alt="Botella de D' AMALFI LIMONCELLO SUPREME" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>D' AMALFI LIMONCELLO SUPREME</h4>
                        <p class="text-muted discount-price">S/. 44,500,000.00</p>
                        <p class="current-price">S/. 44,000,000.00</p>
                        <p>Una bebida de origen italiana cuyo cuello de la botella cuenta cubierta de diamantes y con un único sabor que se diferencia de los demás. Su elaboración meticulosa y la selección de ingredientes premium garantizan una experiencia de degustación inigualable. Ideal para celebraciones especiales, este limoncello es el regalo perfecto para los amantes de las bebidas exclusivas.</p>

                        <p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://laovejanegra.mx/wp-content/uploads/2023/09/Tequila-Ley-925.jpg" class="card-img-top" alt="CASTILLO YGUAY XTREME">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">CASTILLO YGUAY XTREME</h5>
            <p class="card-text">Una bebida hecha en México con una botella de cerámica de platino líquido y un sabor mexicano único e incomparable.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 4,000,200.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalCognac" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: CASTILLO YGUAY XTREME -->
<div class="modal fade" id="productModalCastillo" tabindex="-1" aria-labelledby="productModalLabelCastillo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelCastillo">CASTILLO YGUAY XTREME</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://laovejanegra.mx/wp-content/uploads/2023/09/Tequila-Ley-925.jpg" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>CASTILLO YGUAY XTREME</h4>
                        <p class="text-muted discount-price">S/4,000,400.00</p>
                        <p class="current-price">S/4,000,200.00</p>
                        <p>Castillo Ygay es un licor elegante y refinado, elaborado con ingredientes seleccionados de alta calidad y envejecido en barricas de roble para desarrollar su carácter distintivo. Su aroma resalta notas de frutos secos, vainilla y toques sutiles de especias, junto a delicados matices de caramelo

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://cognac-ton.nl/wp-content/uploads/2016/03/Dud-Henri-IV-1L-Tribute-to-Dubai-%E2%82%AC4.000.000.jpg" class="card-img-top" alt="COÑAC HENRY IV DUDOGNON HERITAJE">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">COÑAC HENRY IV DUDOGNON HERITAJE</h5>
            <p class="card-text">En una botella de diamantes y oro es lo que captura la atención de la gente, lo cual captura la esencia y perfección de la bebida.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 3,000,200.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalCognac" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: COÑAC HENRY IV DUDOGNON HERITAJE -->
<div class="modal fade" id="productModalCognac" tabindex="-1" aria-labelledby="productModalLabelCognac" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelCognac">COÑAC HENRY IV DUDOGNON HERITAJE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://cognac-ton.nl/wp-content/uploads/2016/03/Dud-Henri-IV-1L-Tribute-to-Dubai-%E2%82%AC4.000.000.jpg" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>COÑAC HENRY IV DUDOGNAN</h4>
                        <p class="text-muted discount-price">S/3,000,800.00</p>
                        <p class="current-price">S/3,000,200.00</p>
                        <p>Coñac Henry IV es un coñac exquisito y sofisticado, elaborado a partir de uvas de las mejores parcelas de la región de Cognac. Envejecido durante más de 40 años en barricas de roble, su aroma evoca notas de frutas maduras, miel y especias, acompañadas de matices de vainilla y tabaco. En boca, ofrece una complejidad excepcional con un equilibrio perfecto entre la suavidad y la riqueza de sus sabores, resaltando notas de frutos secos y chocolate amargo. Con una textura sedosa y un final largo y cálido, este coñac es ideal para momentos especiales y para aquellos que buscan una experiencia de sabor lujosa y memorable.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://hagotrago.com/wp-content/uploads/2008/04/divastraight-lowres.jpg" class="card-img-top" alt="VODKA ESCOCES DIVA PREMIUM">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">VODKA ESCOCES DIVA PREMIUM</h5>
            <p class="card-text">Una vodka premium elaborada en Escocia con su triple destilación de granos le lleva un único sabor único e incomparable.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 2,000,200.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalVodka" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: VODKA ESCOCES DIVA PREMIUM -->
<div class="modal fade" id="productModalVodka" tabindex="-1" aria-labelledby="productModalLabelVodka" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelVodka">VODKA ESCOCES DIVA PREMIUM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://hagotrago.com/wp-content/uploads/2008/04/divastraight-lowres.jpg" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>VODKA ESCOCES DIVA PREMIUM</h4>
                        <p class="text-muted discount-price">S/2,000,400.00</p>
                        <p class="current-price">S/2,000,000.00</p>
                        <p>Vodka escocés Diva es un vodka premium, conocido por su pureza y suavidad excepcionales. Elaborado a partir de agua de manantial y grano seleccionado, este vodka se destila múltiples veces para garantizar una calidad superior. Su aroma es fresco y limpio, con sutiles notas de hierbas y un toque de frutas. En boca, ofrece una textura aterciopelada y un sabor delicado, equilibrado entre la frescura y la suavidad. Con un final suave y agradable, el vodka Diva es ideal para disfrutar solo, en cócteles o en ocasiones especiales, convirtiéndose en la elección perfecta para quienes buscan una experiencia de sabor refinada.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container-fluid p-3 m-0 mt-1 row">
        <div class="container-fluid1 p-3 m-0 mt-4 row"> <h2 style="color: red;  font-size: 35px; font-family:'Gill Sans',
            'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display: flex; align-items: center;"> <span style="flex: 1; margin: 30px;
             border-top: 2px solid rgb(221, 21, 21);">
           </span>PROMOCIONES DEL MES<span style="flex: 1;  margin: 30px;  border-top: 2px solid rgb(221, 20, 20);"></span> </h2>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/44-Gin-Thomas-Dakin-750-ml-300x282.png" class="card-img-top" alt="GINT TOMAN DAKINT SUPERIOR">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">GINT TOMAN DAKINT SUPERIOR</h5>
            <p class="card-text">Una bebida de origen italiana cuyo cuello de la botella cuenta cubierta de diamantes y con un único sabor que se diferencia de los demás.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 600.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalMary" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: GINT TOMAN DAKINT SUPERIOR -->
<div class="modal fade" id="productModalGin" tabindex="-1" aria-labelledby="productModalLabelGin" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelGin">GINT TOMAN DAKINT SUPERIOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/44-Gin-Thomas-Dakin-750-ml-300x282.png" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>GINT TOMAN DAKINT SUPERIOR</h4>
                        <p class="text-muted discount-price">S/7700.00</p>
                        <p class="current-price">S/600.00</p>
                        <p>Gint Toman Dakint es un gin artesanal de carácter distintivo, elaborado con una cuidadosa selección de botánicos, incluyendo enebro, cítricos y especias. Su aroma es fresco y vibrante, con notas predominantes de enebro y matices herbales que evocan un bosque aromático. En boca, ofrece un perfil equilibrado, donde la frescura de los cítricos se complementa con la suavidad de especias sutiles y un ligero toque de dulzura. Con un final limpio y refrescante, este gin es ideal para disfrutar en cócteles clásicos o como un gin tonic premium, perfecto para aquellos que buscan una experiencia de sabor única y sofisticada.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       <div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/45-Gin-Mary-Le-Bone-750-ml-300x282.png" class="card-img-top" alt="GINT MARY LEAND BOTAX Xtreme">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">GINT MARY LEAND BOTAX<br>XTREME</h5>
            <p class="card-text">Una bebida hecha en México hecha de cerámica de platino líquido y con un sabor mexicano único e incomparable.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 500.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalMary" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: GINT MARY LEAND BOTAX XTREME -->
<div class="modal fade" id="productModalMary" tabindex="-1" aria-labelledby="productModalLabelMary" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelMary">GINT MARY LEAND BOTAX XTREME</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/45-Gin-Mary-Le-Bone-750-ml-300x282.png" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>GINT MARY LEAND BOTAX XTREME </h4>
                        <p class="text-muted discount-price">S/700.00</p>
                        <p class="current-price">S/500.00</p>
                        <p>Gint Mary Lean es un gin premium, elaborado con una mezcla única de botánicos seleccionados, destacando el enebro, el cilantro y notas cítricas frescas. Su aroma es fresco y equilibrado, con un bouquet que combina las notas herbales del enebro con un toque de limón y pomelo. En boca, ofrece una experiencia suave y refrescante, donde la vibrante acidez de los cítricos se entrelaza con la profundidad especiada del cilantro. Con un final limpio y un ligero retrogusto a hierbas, este gin es perfecto para disfrutar en un gin tonic elegante o en cócteles creativos, ideal para quienes buscan una experiencia de sabor distintiva y refrescante.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/13-Gin-Bombay-Bramble-700-ml-300x282.png" class="card-img-top" alt="GIN BOMBAY BREVLEM STICK">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">GIN BOMBAY BREVLEM STICK</h5>
            <p class="card-text">En una botella de diamantes y oro es lo que captura la atención de la gente, lo cual captura la esencia y perfección de la bebida.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 470.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalBombay" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: GIN BOMBAY BREVLEM STICK -->
<div class="modal fade" id="productModalBombay" tabindex="-1" aria-labelledby="productModalLabelBombay" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelBombay">GIN BOMBAY BREVLEM STICK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/13-Gin-Bombay-Bramble-700-ml-300x282.png" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>GINT BOMBAY BREVLEM STICK </h4>
                        <p class="text-muted discount-price">S/500.00</p>
                        <p class="current-price">S/470.00</p>
                        <p>Gint Bombay Brevlem es un gin innovador y vibrante, creado a partir de una base de ginebra London Dry de Bombay Sapphire, infusionada con una mezcla de frambuesas y moras frescas. Su aroma es frutal y refrescante, con notas destacadas de bayas maduras y un sutil toque de enebro. En boca, ofrece una explosión de sabores de frutas rojas, equilibrados con la suavidad de las especias clásicas de ginebra. Con un final dulce y afrutado, este gin es ideal para disfrutar solo o en cócteles creativos, perfecto para aquellos que buscan una experiencia de sabor única y colorida.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 p-3">
    <div class="card" style="min-height: 300px;">
        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/55-Gin-Bulldog-750-ml-300x282.png" class="card-img-top" alt="BLACK BULDONGT XIT PREMIUM">
        <div class="card-body br-100">
        <button type="button" class="btn btn-danger btn-sm favorite-button" title="Agregar a Favorito" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent; font-size: 1.5em; color: red;">
            <i class="fas fa-heart"></i>
        </button>
            <h5 class="card-title">BLACK BULDONGT XIT PREMIUM</h5>
            <p class="card-text">Una vodka premium elaborada en Escocia con su triple destilación de granos le lleva un único sabor único e incomparable.</p>
            <p class="card-text" style="color: rgb(63, 19, 241);"><strong>Precio: S/. 700.00</strong></p>
        </div>
        <div class="card-body">
    <a href="<?php echo BASE_URL; ?>carrito" class="card-link btn btn-danger">Agregar al Carrito</a>
    <button type="button" class="btn btn-light ml-2" data-toggle="modal" data-target="#productModalBulldog" style="border: 2px solid blue;">
        <i class="fas fa-eye" style="color: blue;"></i>
    </button>
</div>
    </div>
</div>

<!-- Modal Producto: BLACK BULDONGT XIT PREMIUM -->
<div class="modal fade" id="productModalBulldog" tabindex="-1" aria-labelledby="productModalLabelBulldog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabelBulldog">BLACK BULDONGT XIT PREMIUM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product-preview">
                        <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/55-Gin-Bulldog-750-ml-300x282.png" alt="Imagen del producto" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h4>BLACK BULDONGT XIT PREMIUM</h4>
                        <p class="text-muted discount-price">S/800.00</p>
                        <p class="current-price">S/700.00</p>
                        <p>Black Bulldog XIT Premium es un gin distintivo y audaz, elaborado con una mezcla única de botánicos seleccionados que incluyen enebro, cilantro y especias. Su aroma es intenso y fresco, destacando notas herbales y un toque cítrico que invitan a explorar su complejidad. En boca, ofrece una experiencia equilibrada con sabores profundos de enebro, complementados por una suavidad cremosa y un ligero toque de dulzura. Con un final largo y aromático, este gin es perfecto para disfrutar solo con hielo o como base en cócteles sofisticados, ideal para aquellos que buscan un trago premium que no compromete el carácter.</p>

<p>Disponibilidad: <span class="text-success">Disponible</span></p>
                        <button class="btn btn-success btn-block">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    




    <div class="background-image">
        <!-- Caja de suscripción -->
        <div class="subscribe-box text-center" style="height: 300px; width:600px;">
            <h5>QUIERO RECIBIR OFERTAS Y PROMOCIONES PERSONALIZADAS</h5>
            <p>Entérate de todas nuestras promociones con los mejores descuentos directamente en la bandeja de tu correo.</p>
            
            <!-- Formulario de suscripción -->
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Ingrese su correo electronico" required>
                </div>
</br>
<div class="text-center">
    <button type="submit" class="btn btn-primary" style="width: 200px;">SUSCRIBIRSE</button>
</div>
            </form>
        </div>
    </div>



    <div class="container1 mt-4" style="width: 70%; margin: 0 auto;">
        <div class="container mt-1" style="width: 80%; margin: 0 auto;">
            <div class="container-fluid p-3 m-0 mt-1 row">
                <div class="container-fluid1 p-3 m-0 mt-4 row"> <h2 style="color: rgb(62, 20, 228);  font-size: 35px; font-family:'Gill Sans',
                    'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display: flex; align-items: center;"> <span style="flex: 1; margin: 30px;
                     border-top: 2px solid rgb(75, 29, 212);">
                   </span>COLECCION CON NUEVAS DISTRIBUIDORAS<span style="flex: 1;  margin: 30px;  border-top: 2px solid rgb(75, 29, 212);"></span> </h2>
                </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="https://www.licoresnuevomundo.pe/">
                    <img src="https://dojiw2m9tvv09.cloudfront.net/69246/1/M_ronescihuatan0442.png?6&time=1720106335" class="img-fluid" alt="Nuevo Mundo Distribuidora 1">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://www.licoresnuevomundo.pe/">
                    <img src="https://dojiw2m9tvv09.cloudfront.net/69246/1/M_cremaderonvarcelo3534.png?6&time=1720106335" class="img-fluid" alt="Nuevo Mundo Distribuidora 2">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://www.licoresnuevomundo.pe/">
                    <img src="https://dojiw2m9tvv09.cloudfront.net/69246/1/M_jackaniels7353.png?6&time=1720106335" class="img-fluid" alt="Nuevo Mundo Distribuidora 3">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://www.licoresnuevomundo.pe/">
                    <img src="https://dojiw2m9tvv09.cloudfront.net/69246/1/M_anisnajarpremium3305.png?6&time=1720106335" class="img-fluid" alt="Nuevo Mundo Distribuidora 4">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://www.licoresnuevomundo.pe/">
                    <img src="https://dojiw2m9tvv09.cloudfront.net/69246/1/M_triventoprivatemalbec2450.png?6&time=1720106335" class="img-fluid" alt="Nuevo Mundo Distribuidora 5">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://www.licoresnuevomundo.pe/">
                    <img src="https://dojiw2m9tvv09.cloudfront.net/69246/1/M_tacamaleyenda8344.png?6&time=1720106335" class="img-fluid" alt="Nuevo Mundo Distribuidora 6">
                </a>
            </div>
        </div>
        </div>
    </div>
        <div class="container1 text-center my-4 style="width: 0%; margin: 0 auto;"">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card service-card">
                        <div class="service-icon">
                            <span class="material-icons">chat</span>
                        </div>
                        <div class="service-title">Servicio al cliente</div>
                        <div class="service-subtitle"><span class="material-icons">whatsapp</span>+51 901 267 943</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card service-card">
                        <div class="service-icon">
                            <span class="material-icons">local_shipping</span>
                        </div>
                        <div class="service-title">Seguimiento de compras</div>
                        <div class="service-subtitle">Solo con tu número de orden de compra</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card service-card">
                        <div class="service-icon">
                            <span class="material-icons" >storefront</span>
                        </div>
                        <div class="service-title">Retiro en tienda</div>
                        <div class="service-subtitle">Compra online y recoge en tienda</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card service-card">
                        <div class="service-icon">
                            <span class="material-icons">business_center</span>
                        </div>
                        <div class="service-title">Soluciones de Empresas</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container1 my-4" style="width: 70%; margin: 0 auto;">
            <div class="delivery-banner">
                <div class="line-top"></div>
                <div class="d-flex align-items-center justify-content-center my-3">
                    <i class="fas fa-truck delivery-icon"></i>
                    <span class="delivery-title">   DELIVERY GRATIS EN 90 MINUTOS        </span>
                    <i class="fas fa-truck delivery-icon"></i>
                </div>
                <div class="line-bottom"></div>
                <div class="conditions">
                    Aplican condiciones para el envio. <a href="#">(Ver aquí)</a>
                </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="b_whatsaap">
    <a href="https://w.app/i3a7vS" target="_blank">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjaNzRXVVvpTaJO0OnLNF7jbkCAlulF_myGg&s" alt="WhatsApp">
    </a>
</div>
            
            
