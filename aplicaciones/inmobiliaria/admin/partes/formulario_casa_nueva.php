<h1>
    Publicar nuevo aviso
</h1>

<form action="?seccion=publicar" method="post" enctype="multipart/form-data">
    <div class="form-group">
          <label for="titulo">
              Titulo
          </label>
          <input name="titulo" type="text" class="form-control" placeholder="ej: casa nueva en malvin">
          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
          <label for="contenido">
              Contenido
          </label>
          <textarea name="contenido" rows="5" class="form-control" placeholder="ej: muy bonita con vista al mar, etc etc"></textarea>
          <small id="emailHelp" class="form-text text-muted">Minimo 60 caracteres</small>
    </div>

    <div class="form-group">
          <label for="foto">
              Foto
          </label>
          <input name="foto" type="file" class="form-control">
          <small id="emailHelp" class="form-text text-muted">Tiene que ser en formato png o jpg</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Publicar Casa</button>
</form>