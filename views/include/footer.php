
</body>
<footer class="bg-dark text-white mt-5 p-4 text-center">
        <div class="container1">
            <div class="row text-center">
                <div class="col-md-4">
                    <h5>Sobre Nosotros</h5>
                    <p>Somos una empresa de gran reconocimiento por nuestro envios rapidos y precios comodos
                        Contamos con varias sucursales dentro del pais.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_URL; ?>inicio" class="text-white" style="text-decoration: none;">Inicio</a>
                        </li>
                        <li><a href="<?php echo BASE_URL; ?>libro" class="text-white" style="text-decoration: none;">Libro de
                                Reclamaciones</a></li>
                        <li><a href="<?php echo BASE_URL; ?>terminos" class="text-white" style="text-decoration: none;">Términos y
                                Condiciones</a></li>
                        <li><a href="<?php echo BASE_URL; ?>politica" class="text-white" style="text-decoration: none;">Política de
                                Privacidad</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contáctanos</h5>
                    <p>Email: <a href="mailto:soportesistemanotas@gmail.com" class="text-white"
                            style="text-decoration: none;">JCLicores@gmail.com</a></p>
                    <p>Teléfono: <a href="tel:901267943" class="text-white" style="text-decoration: none;">
                            901267943</a></p>
                    <div class="social-icons mt-2 ">
                        <a href="https://web.whatsapp.com/" target="_blank" class="me-4">
                            <i class="fa-brands fa-whatsapp" style="font-size: 35px; "></i>
                        </a>
                        <a href="https://www.facebook.com/josec.ramirez.718" target="_blank" class="me-4">
                            <i class="fa-brands fa-facebook" style="font-size: 35px;"></i>
                        </a>
                        <a href="https://www.instagram.com/josec_ramirezramos/" target="_blank" class="me-4">
                            <i class="fa-brands fa-instagram" style="font-size: 35px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <p class="mb-0">&copy; 2024 JC Licores. Todos los derechos reservados a nuestra empresa.</p>
        </div>
    </footer>
    
    <script>
    function updateSubtotal(element) {
        const price = parseFloat(element.getAttribute('data-price'));
        const quantity = parseInt(element.value);
        const subtotal = price * quantity;
        const row = element.parentElement.parentElement;
        row.querySelector('.subtotal').innerText = `S/ ${subtotal.toFixed(2)}`;
        updateTotal();
    }

    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.subtotal').forEach(subtotalElement => {
            total += parseFloat(subtotalElement.innerText.replace('S/ ', ''));
        });
        document.getElementById('subtotal-amount').innerText = `S/ ${total.toFixed(2)}`;
        document.getElementById('total-amount').innerText = `S/ ${total.toFixed(2)}`;
    }

    function applyPromo() {
        const promoCode = document.getElementById('promo-code').value;
        if (promoCode === 'dpw-2024') {
            let total = parseFloat(document.getElementById('total-amount').innerText.replace('S/ ', ''));
            total = total * 0.9; // 10% discount
            document.getElementById('total-amount').innerText = `S/ ${total.toFixed(2)}`;
            alert('Código de promoción aplicado con éxito');
        } else {
            alert('Código de promoción no válido');
        }
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Funcionalidad para "Agregar a Favorito"
    document.querySelectorAll('.favorite-button').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir la acción predeterminada
            
            // Mostrar la notificación
            const notification = $('#notification');
            notification.fadeIn(200).delay(1000).fadeOut(200); // Aparece, se queda 2 segundos y desaparece
        });
    });
</script>



<script>
    function showNotification() {
        const notification = document.getElementById('notification');
        notification.style.display = 'block';

        // Ocultar la notificación después de 3 segundos
        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000);
    }
</script>



<script>
    
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
</script>
</body>
</body>

</html>