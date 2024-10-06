
<div class="container" style="margin-top:150px;">
    <div class="row">
        <div class="col">
            <div class="row border-bottom mb-3">
                <div class="col text-center">
                    <strong>PRODUCTOS</strong>
                </div>
                <div class="col text-center">
                    <strong>PRECIO</strong>
                </div>
                <div class="col text-center">
                    <strong>CANTIDAD</strong>
                </div>
                <div class="col text-center">
                    <strong>SUB TOTAL</strong>
                </div>
            </div>
            <div class="row border-bottom mb-3">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="https://mediafiles.shopdutyfree.com/campaigns/diageo/22772_156_Campaign_Page_BrandSpotLight_Product_Shot_1200x1200_V1.png" alt="Producto 1" width="110">
                        </div>
                        <div class="ml-2">
                            <span>Blue Label de 750 ML Xtreme</span>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    S/ 800.00
                </div>
                <div class="col" style="justify-content: center; display: flex;">
                    <input type="number" class="form-control quantity" value="1" min="1" data-price="800"
                        onchange="updateSubtotal(this)" style="width: 50%; text-align: center;"">
                </div>
                <div class=" col subtotal text-center">
                    S/ 800.00
                </div>
            </div>
            <div class="row border-bottom mb-3">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="https://lalicorera.com/img/products/johnnie-walker-black-label.png" alt="Producto 2" width="80">
                        </div>
                        <div class="ml-2">
                            <span>Black Label de 750 ML Edicion Especial</span>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    S/ 200.00
                </div>
                <div class="col" style="justify-content: center; display: flex;">
                    <input type="number" class="form-control quantity" value="1" min="1" data-price="200"
                        onchange="updateSubtotal(this)" style="width: 50%; text-align: center;">
                </div>
                <div class="col subtotal text-center">
                    S/ 200.00
                </div>
            </div>
            <div class="row border-bottom mb-3">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="https://licoreriasunidas.pe/cdn/shop/products/20093024_04f4d6de-bbee-4ac7-9e63-848fd2c16284.webp?v=1677682409&width=512" alt="Producto 3" width="90">
                        </div>
                        <div class="ml-2">
                            <span>Vodka Glendifich Xtreme</span>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    S/ 900.00
                </div>
                <div class="col" style="justify-content: center; display: flex;">
                    <input type="number" class="form-control quantity" value="1" min="1" data-price="900"
                        onchange="updateSubtotal(this)" style="width: 50%; text-align: center;">
                </div>
                <div class="col subtotal text-center">
                    S/ 900.00
                </div>
            </div>
            <div class="row border-bottom mb-3">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="https://licoreriadisenzo.pe/wp-content/uploads/2023/06/54-Viejo-de-Caldas-8-anos-750-ml-300x300.png" alt="Producto 3" width="90">
                        </div>
                        <div class="ml-2">
                            <span>Ron Vieja Caldaña 28 Años </span>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    S/ 500.00
                </div>
                <div class="col" style="justify-content: center; display: flex;">
                    <input type="number" class="form-control quantity" value="1" min="1" data-price="500"
                        onchange="updateSubtotal(this)" style="width: 50%; text-align: center;">
                </div>
                <div class="col subtotal text-center">
                    S/ 500.00
                </div>
            </div>  
        </div>
    </div>
    

<div class="promo-section">
    <label for="promo-code">Código de Promoción</label>
    <input type="text" id="promo-code" class="promo-input" placeholder="Digite     dpw-2024">
    <button class="btn btn-warning" onclick="applyPromo()">Aplicar</button>
</div>
<div class="total-section">
    <p>SUB TOTAL: <span id="subtotal-amount">S/ 173.00</span></p>
    <p>TOTAL: <span id="total-amount">S/ 173.00</span></p>
</div>
<div class="payment-methods">
    <h3>Métodos de Pago</h3>
    <a href="https://www.visa.com.pe/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmf5rQoOt87qU25VDboIWw9KtxP0rfs6XSqw&s" alt="Visa"></a>
    <a href="https://www.mastercard.com.pe/es-pe.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1280px-Mastercard-logo.svg.png" alt="MasterCard"></a>
    <a href="https://www.paypal.com/pe/home"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" alt="PayPal"></a>
    <a href="https://www.yape.com.pe/"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Yape_text_app_icon.png" alt="Yape"></a>
    <a href="https://www.pagoefectivo.la/pe/"><img src="https://cdn.worldvectorlogo.com/logos/pago-efectivo-2020.svg" alt="Yape" style="width: 150px; height: 200px;"></a>
</div>
<div class="cart-footer" style="background: white; padding: 10px; text-align: center;">
<div class="text-center my-4">
        <button class="btn btn-success btn-custom">Finalizar Compra</button>
        <button class="btn btn-primary" style="margin-left: 50px; background-color: skyblue;"><a href="<?php echo BASE_URL; ?>inicio" >Seguir Comprando</a></button>
    </div>
</div>
<div class="b_whatsaap">
    <a href=" https://w.app/i3a7vS" target="_blank">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjaNzRXVVvpTaJO0OnLNF7jbkCAlulF_myGg&s" alt="WhatsApp">
    </a>
</div>
</div>

