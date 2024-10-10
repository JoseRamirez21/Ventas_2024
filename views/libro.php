<div style="margin-top:150px;">
<div class="container1 my-5" style="width: 45%; margin: auto;">
    <h1 class="text-center mb-4">LIBRO DE RECLAMACIONES</h1>

    <form>
        <div class="mb-3">
            <div class="section-header" style="background-color: rgb(47, 47, 196); text-align: center;">1. Identificación del Consumidor Reclamante</div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres" required>
                </div>
                <div class="col-md-6">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" required>
                </div>
            </div>
            <div class="mt-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" required>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
                    <select class="form-select" id="tipoDocumento">
                        <option>DNI</option>
                        <option>Pasaporte</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="numeroDocumento" class="form-label">Nro de Documento</label>
                    <input type="text" class="form-control" id="numeroDocumento" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="section-header" style="background-color: rgb(47, 47, 196); text-align: center;">2. Identificación del Bien Contratado</div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="numeroPedido" class="form-label">Número de pedido</label>
                    <input type="text" class="form-control" id="numeroPedido">
                </div>
                <div class="col-md-6">
                    <label for="montoReclamado" class="form-label">Monto Reclamado S/</label>
                    <input type="text" class="form-control" id="montoReclamado">
                </div>
            </div>
            <div class="mt-3">
                <label for="descripcionBien" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcionBien" rows="3"></textarea>
            </div>
        </div>

        <div class="mb-3">
            <div class="section-header" style="background-color: rgb(47, 47, 196); text-align: center;">3. Detalle de la Reclamación y Pedido del Consumidor</div>
            <div class="mt-3">
                <label class="form-label">Tipo de reclamación</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipoReclamacion" id="reclamo" value="reclamo" checked>
                    <label class="form-check-label" for="reclamo">Reclamo</label>
                    <p>Disconformidad relacionada a los productos o servicios.</p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipoReclamacion" id="queja" value="queja">
                    <label class="form-check-label" for="queja">Queja</label>
                    <p>Malestar o descontento respecto a la atención al público.</p>
                </div>
            </div>
            <div class="mt-3">
                <label for="pedido" class="form-label">Pedido (Lo que solicita)</label>
                <textarea class="form-control" id="pedido" rows="3"></textarea>
            </div>
            <div class="mt-3">
                <label for="detalleReclamacion" class="form-label">Detalle de Reclamación</label>
                <textarea class="form-control" id="detalleReclamacion" rows="3"></textarea>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Enviar Queja</button>
        </div>
    </form>
</div>

<div class="b_whatsaap" style="position: fixed; bottom: 25px; right: 20px;">
    <a href="https://w.app/i3a7vS" target="_blank">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjaNzRXVVvpTaJO0OnLNF7jbkCAlulF_myGg&s" alt="WhatsApp" style="width: 80px; height: 80px; border-radius: 50%; box-shadow: 0 4px 8px rgba(30, 200, 55, 0.2);">
    </a>
</div>