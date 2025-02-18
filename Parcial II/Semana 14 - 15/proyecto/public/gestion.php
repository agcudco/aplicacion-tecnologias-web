<?php
include 'templates/header.php';
?>

<h1>Gestion de Categorias</h1>
<div class="mb-3">
  <button class="btn btn-primary" data-toggle="modal" data-target="#categoriaModal" onclick="openModal();">Agregar Categoría</button>
</div>
<table class="table table-bordered" id="categoriasTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Se llenarán dinámicamente mediante JavaScript -->
  </tbody>
</table>

<!-- Modal para Categorías -->
<div class="modal fade" id="categoriaModal" tabindex="-1" role="dialog" aria-labelledby="categoriaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="categoriaModalLabel" class="modal-title">Agregar Categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="categoriaForm">
          <input type="hidden" id="categoriaId">
          <div class="form-group">
            <label for="categoriaNombre">Nombre</label>
            <input type="text" class="form-control" id="categoriaNombre" required>
          </div>
          <div class="form-group">
            <label for="categoriaDescripcion">Descripción</label>
            <textarea class="form-control" id="categoriaDescripcion" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<h1>Gestion de Productos</h1>
<table class="table table-bordered" id="productosTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th>Categoria</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Se llenarán dinámicamente mediante JavaScript -->
  </tbody>
</table>


<?php include 'templates/footer.php'; ?>
