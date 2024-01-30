  <div class="row">
      <div class="col-md-12">
          <section class="panel">
              <div class="panel-body">

                  @if ( !empty ( $producto->id) )

                  <div class="mb3">
                      <label for="nombre" class="negrita">Nombre:</label>
                      <div>
                          <input class="form-control" placeholder="Introduce el nombre" required="required" name="nombre" type="text" id="nombre" value="{{ $productos->nombre }}">
                      </div>
                  </div>
                  <label for="descripcion" class="negrita">DESCRIPCION:</label>
                  <div>
                      <input class="form-control" placeholder="Introduce la descripcion" required="required" name="descripcion" type="text" id="descripcion" value="{{ $productos->nombre }}">
                  </div>
              </div>


              <div class="mb3">
                  <label for="precio" class="negrita">Precio:</label>
                  <div>
                      <input class="form-control" placeholder="Introduce el precio" required="required" name="precio" type="text" id="precio" value="{{ $productos->precio }}">
                  </div>
              </div>

              <div class="mb3">
                  <label for="stock" class="negrita">Stock:</label>
                  <div>
                      <input class="form-control" placeholder="40" required="Introduce el stock" name="stock" type="text" id="stock" value="{{ $productos->stock }}">
                  </div>
              </div>

              <div class="mb3">
                  <label for="img" class="negrita">Selecciona una imagen:</label>
                  <div>
                      <input name="img" type="file" id="img">
                      <br>
                      <br>
                      @if ( !empty ( $producto->img) )

                      <span>Imagen Actual: </span>
                      <br>
                      <img src="../../../uploads/{{ $productos->img }}" width="200" class="img-fluid">

                      @else

                      @endif

                      @else

                      <div class="mb3">
                          <label for="nombre" class="negrita">Nombre:</label>
                          <div>
                              <input class="form-control" placeholder="Introduce el nombre" required="required" name="nombre" type="text" id="nombre">
                          </div>
                      </div>
                      <div class="mb3">
                  <label for="descripcion" class="negrita">DESCRIPCION:</label>
                  <div>
                      <input class="form-control" placeholder="Introduce la descripcion" required="required" name="descripcion" type="text" id="descripcion" >
                  </div>
              </div>


                      <div class="mb3">
                          <label for="precio" class="negrita">Precio:</label>
                          <div>
                              <input class="form-control" placeholder="Introduce el precio" required="required" name="precio" type="text" id="precio">
                          </div>
                      </div>

                      <div class="mb3">
                          <label for="stock" class="negrita">Stock:</label>
                          <div>
                              <input class="form-control" placeholder="Introduce el stock" required="required" name="stock" type="text" id="stock">
                          </div>
                      </div>

                      <div class="mb3">
                          <label for="img" class="negrita">Selecciona una imagen:</label>
                          <div>
                              <input name="img" type="file" id="imgen">
                          </div>
                      </div>

                      @endif

                      <button type="submit" class="btn btn-info">Guardar</button>
                      <a href="{{ route('admin/productos') }}" class="btn btn-warning">Cancelar</a>