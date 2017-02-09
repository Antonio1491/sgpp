<?php
include "inc/header_common.php";
 ?>
    <h5 class="text-center">Carta Compromiso Donantes </h5>
    <form class="" action="inc/registro.php" method="post">
      <fieldset class="fieldset row">
      <legend>Información del Donador</legend>
      <div class="row">
        <div class="column">
          <label for="">No. Donador</label>
          <input type="text" name="numDonador" value="">
        </div>
        <div class="column">
          <label>Donante tipo
            <select name="tipoDonante">
              <option value="General">General</option>
              <option value="Líder">Líder</option>
            </select>
          </label>
        </div>
        <div class="column">
          <label for="">Fecha <span class="formato-fecha">(dd/mm/aaaa)</span></label>
          <input type="date" name="fecha" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">Nombre del Donador</label>
          <input type="text" name="nombre" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">Dirección</label>
          <input type="text" name="direccion" value="">
        </div>
        <div class="column">
          <label for="">Colonia</label>
          <input type="text" name="colonia" value="">
        </div>
        <div class="column medium-2">
          <label for="">C.P.</label>
          <input type="text" name="cp" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">Ciudad y Estado</label>
          <input type="text" name="localidad" value="">
        </div>
        <div class="column">
          <label for="">Tel. Casa</label>
          <input type="text" name="tel" value="">
        </div>
        <div class="column">
          <label for="">Celular</label>
          <input type="text" name="cel" value="">
        </div>
        <div class="column">
          <label for="">Otro</label>
          <input type="text" name="otro" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">Estado Civil</label>
          <select name="estadoCivil">
            <option value="Soltero">Solter@</option>
            <option value="Casado">Casad@</option>
          </select>
        </div>
        <div class="column">
          <label for="">Fecha de Nacimiento <span class="formato-fecha">(dd/mm/aaaa)</span></label>
          <input type="date" name="fNacimiento" value="">
        </div>
        <div class="column">
          <label for="">E-mail</label>
          <input type="email" name="email" value="">
        </div>
      </div>
    </fieldset>

    <fieldset class="fieldset row">
      <legend>Información sobre el donativo</legend>
        <div class="row">
        <div class="column medium-4 ">
          <label>Monto</label>
          <div class="input-group">
            <span class="input-group-label">$</span>
            <input class="input-group-field" type="number" name="monto">
            <div class="input-group-button">
            </div>
          </div>
        </div>
        <div class="column">
          <label for="">En Letra</label>
          <input type="text" name="letras" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label>Periocidad del Donativo
            <select name="periocidad">
              <option value="Único">Único</option>
              <option value="Quincenal">Quincenal</option>
              <option value="Mensual">Mensual</option>
              <option value="Anual">Anual</option>
            </select>
          </label>
        </div>
        <div class="column">
          <label for="">Vigencia <span class="formato-fecha">(dd/mm/aaaa)</span></label>
          <input type="date" name="vigencia" value="">
        </div>
        <div class="column">
          <p class="radiobtn">Indefinido
            <input id="" type="radio" name="indefinido" value="Sí"><label for="" >Sí</label>
            <input id="" type="radio" name="indefinido" value="No"><label for="">No</label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">Seleccionar si el Donativo es</label>
          <select name="tipoDonativo">
            <option value="Nuevo">Nuevo</option>
            <option value="Renovación">Renovación</option>
          </select>
        </div>
        <div class="column">
          <label for="">Cargo a partir de <span class="formato-fecha">(dd/mm/aaaa)</span></label>
          <input type="date" name="fechaCargo" value="">
        </div>
      </div>
    </fieldset>
    <fieldset class="fieldset row">
      <legend>Tarjeta</legend>
        <div class="row">
          <div class="column">
            <label for="">Nombre del Títular</label>
            <input type="text" name="titular" value="">
          </div>
          <div class="column">
            <label for="">Núm. de tarjeta</label>
            <input type="text" name="numTarjeta" value="">
          </div>
          <div class="column">
            <label for="">Banco</label>
            <input type="text" name="banco" value="">
          </div>
        </div>
        <div class="row">
          <div class="column">
            <label for="">Vencimiento <span class="formato-fecha">(dd/mm/aaaa)</span></label>
            <input type="date" name="vigenciaTarjeta" value="">
          </div>
          <div class="column">
            <label for="">Tarjeta</label>
            <select name="tarjetaDe">
              <option value="Crédito">Tarjeta de Crédito</option>
              <option value="Débito">Tarjeta de Débito</option>
              <option value="American Express">American Express</option>
            </select>
          </div>
          <div class="column">
            <label for="">Tipo</label>
            <select name="tarjetaTipo">
              <option value="Visa">VISA</option>
              <option value="Master Card">Mastercard</option>
              <option value="American Express">American Express</option>
            </select>
          </div>
          <div class="column">
            <label for="">Día de cargo</label>
            <select name="diaCargo">
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="30">30</option>
            </select>
          </div>
        </div>
    </fieldset>
    <div class="row align-center">
      <input type="submit" value="Registrar" class="button large"></input>
    </div>
  </form>
    <div class="row">

    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
