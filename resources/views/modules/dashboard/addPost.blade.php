@extends('core.dashboard.app')

@section('content')
@include('core.dashboard.nav')
    <div class="container">
      <div class="postsdash">
          <form action="/dashboard/posts/adiciona" enctype="multipart/form-data" method="post">
              {{ csrf_field() }}
            <div class="form-group">
              <label for="titulo">Titulo Post</label>
              <input type="text" class="form-control input" id="titulo" aria-describedby="TituloPost" placeholder="Entre com Titulo do Post" name="titulo">
            </div>
            <div class="form-group">
                <label for="image">Thumbnail</label>
                <small id="image" class="form-text">Use imagens com resolução 320x320 px.</small>
            </div>             
            <div class="custom-file">
                <input type="file" class="custom-file-input input" id="image" name="image">
                <label class="custom-file-label" for="image">Escolha a Thumb</label>
                <br />
                <br />
            </div>             
            <div class="form-group">
              <label for="autor">Autor</label>
              <input type="text" class="form-control input" id="autor" placeholder="Autor do Post" name="autor">
            </div>           
            <div class="form-group">
              <label for="date">Data</label>
              <input type="date" class="form-control input" id="date" name="date">
            </div>
                  <textarea name="post" id="post" rows="10" cols="80">
                      
                  </textarea>
                  <script>
                      // Replace the <textarea id="editor1"> with a CKEditor
                      // instance, using default configuration.
                      CKEDITOR.replace( 'post' );
                  </script>
                  <br>
            <button type="submit" class="btn btn-dash">Postar</button>
          </form>
      </div>
    </div>
@endsection