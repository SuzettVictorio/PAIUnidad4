<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../../app/productController" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <input type="file" name="imagen" class="form-control" placeholder="Seleccione la imagen del producto" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre</span>
                        <input type="text" name="name" class="form-control" placeholder="Nombre del producto" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Descripción</span>
                        <input type="text" name="description" class="form-control" placeholder="Descripción del producto" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Características</span>
                        <input type="text" name="features" class="form-control" placeholder="Características del producto" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Marca</span>
                        <select class="form-select" aria-label="Default select example" name="marca" required>
                            <option selected>Selecciona la Marca</option>
                            <?php foreach($marcas as $marca): ?>
                                <option value="<?php echo $marca->id; ?>"><?php echo $marca->name; ?></option>
                            <?php endforeach; ?>
                          </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <input type="hidden" name="action" value="create">
                    <input type="hidden" name="super_token" value="<?php echo $_SESSION['super_token'];?>">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="updateProduct" tabindex="-1" aria-labelledby="updateProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../../app/productController" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre</span>
                        <input type="text" id="nameU"  name="name" class="form-control" placeholder="">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Descripción</span>
                        <input type="text" id="descriptionU" name="description" class="form-control" placeholder="">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Características</span>
                        <input type="text" id="featuresU" name="features" class="form-control" placeholder="">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Marca</span>
                        <select class="form-select" aria-label="Default select example" name="marca">
                            <option selected>Selecciona la Marca</option>
                            <?php foreach($marcas as $marca): ?>
                                <option value="<?php echo $marca->id; ?>"><?php echo $marca->name; ?></option>
                            <?php endforeach; ?>
                          </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="hidden" name="action" value="update">
                    <input type="text" name="objetivo" id="numeral" value="0">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <input type="hidden" name="super_token" value="<?php echo $_SESSION['super_token'];?>">
                </div>
            </form>
        </div>
    </div>
</div>