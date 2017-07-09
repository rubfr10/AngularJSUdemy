<?php
  session_start();
  unset($_SESSION['user']);
?>


<div class="modal fade in" id="modalCliente">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Cliente: </h4>
      </div>

    <form name="frmCliente" novalidate="novalidate" ng-submit="guardar(clienteSel,frmCliente)">

        <div class="modal-body">

          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre" ng-model="clienteSel.nombre" required>
          </div>

          <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" placeholder="Correo" ng-model="clienteSel.correo" required>
          </div>

          <div class="form-group">
            <label>Direccion</label>
            <textarea type="text" class="form-control" placeholder="Direccion" ng-model="clienteSel.direccion"></textarea>
          </div>

          <div class="form-group">
            <label>Pais</label>
            <select type="text" class="form-control" placeholder="Pais" ng-model="clienteSel.pais">
              <option value="España">España</option>
              <option value="Francia">Francia</option>
              <option value="Italia">Italia</option>
            </select>
          </div>

          <div class="form-group">
            <label>Telefono1</label>
            <input type="text" class="form-control" placeholder="Telefono1" ng-model="clienteSel.telefono1">
          </div>

          <div class="form-group">
            <label>Telefono2</label>
            <input type="text" class="form-control" placeholder="Telefono2" ng-model="clienteSel.telefono2">
          </div>

          <div class="form-group">
            <label>Zip</label>
            <input type="text" class="form-control" placeholder="Zip" ng-model="clienteSel.zip">
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
        </div>

      </form>

    </div>
  </div>
</div>