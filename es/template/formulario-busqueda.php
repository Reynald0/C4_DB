<div class="row">
    <div class="col-md-12">
        <form method="post" action="etc_item" id="form-busqueda" >
            <div class="row">
                <div class="col-md-1">
                    <div class="radio">
                        <label>
                            <input type="radio" name="buscar"  value="id">ID
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio">
                        <label>
                            <input type="radio" name="buscar" value="nombre" required>Nombre
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="dato" placeholder="Ingresa el dato" required>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary" id="buscar">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>