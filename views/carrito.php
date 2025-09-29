<?php
// carrito.php
// Puedes incluir aquí tu archivo de configuración si lo usas
// require_once __DIR__ . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f7f7f7;
    }
    .cart-container {
      margin-top: 120px;
      background: white;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .cart-header {
      font-weight: 600;
      border-bottom: 2px solid #eee;
      padding-bottom: 10px;
    }
    .cart-item img {
      border-radius: 8px;
      object-fit: cover;
    }
    .cart-item {
      align-items: center;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
    }
    .cart-item:last-child {
      border-bottom: none;
    }
    .quantity-input {
      width: 60px;
      text-align: center;
    }
    .total-section {
      text-align: right;
      margin-top: 20px;
      font-size: 18px;
      font-weight: 500;
    }
    .btn-custom {
      border-radius: 8px;
      font-weight: 500;
    }
    .btn-delete {
      background: none;
      border: none;
      color: red;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="container cart-container">
<a href="/ventas_2024/inicio" class="btn btn-primary">⬅ Regresar al Inicio</a>

  <div class="row cart-header text-center">
    <div class="col-4">PRODUCTO</div>
    <div class="col-2">PRECIO</div>
    <div class="col-2">CANTIDAD</div>
    <div class="col-2">SUBTOTAL</div>
    <div class="col-2">ACCIONES</div>
  </div>

  <!-- 🛍️ Aquí se cargarán los productos -->
  <div id="cart-items"></div>

  <!-- Totales -->
  <div class="total-section">
    <p>SUB TOTAL: <span id="subtotal-amount">S/ 0.00</span></p>
    <p>TOTAL: <span id="total-amount">S/ 0.00</span></p>
  </div>

  <!-- Botones de acción -->
  <div class="d-flex justify-content-between mt-4">
    <button class="btn btn-success btn-custom w-50 me-2">Finalizar Compra</button>
    <a href="inicio.php" class="btn btn-info btn-custom w-50 text-white">Seguir Comprando</a>
  </div>
</div>

<!-- 🧠 Script Carrito -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const cartContainer = document.getElementById('cart-items');
  const subtotalAmount = document.getElementById('subtotal-amount');
  const totalAmount = document.getElementById('total-amount');

  function loadCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartContainer.innerHTML = '';

    if (cart.length === 0) {
      cartContainer.innerHTML = `<div class="text-center py-4 text-muted">🛒 Tu carrito está vacío</div>`;
      subtotalAmount.textContent = 'S/ 0.00';
      totalAmount.textContent = 'S/ 0.00';
      return;
    }

    let subtotal = 0;

    cart.forEach((product, index) => {
      const sub = product.price * product.quantity;
      subtotal += sub;

      const item = document.createElement('div');
      item.className = 'row cart-item text-center';
      item.innerHTML = `
        <div class="col-4 d-flex align-items-center justify-content-start">
          <img src="${product.image}" alt="${product.name}" width="70" height="70" class="me-2">
          <span>${product.name}</span>
        </div>
        <div class="col-2">S/ ${product.price.toFixed(2)}</div>
        <div class="col-2">
          <input type="number" class="form-control quantity-input" value="${product.quantity}" min="1"
            onchange="updateQuantity(${index}, this.value)">
        </div>
        <div class="col-2">S/ ${sub.toFixed(2)}</div>
        <div class="col-2">
          <button class="btn-delete" onclick="removeItem(${index})">✖</button>
        </div>
      `;
      cartContainer.appendChild(item);
    });

    subtotalAmount.textContent = `S/ ${subtotal.toFixed(2)}`;
    totalAmount.textContent = `S/ ${subtotal.toFixed(2)}`;
  }

  window.updateQuantity = function(index, value) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart[index].quantity = parseInt(value);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
  };

  window.removeItem = function(index) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
  };

  loadCart();
});
</script>

</body>
</html>
