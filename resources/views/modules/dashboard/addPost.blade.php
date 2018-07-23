@extends('core.dashboard.app')

@section('content')
@include('core.dashboard.nav')
    <div class="container">
      <div class="postsdash">
        <ul class="nav nav-tabs" id="postsTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active submenu" id="post-tab" data-toggle="tab" href="#post" role="tab" aria-controls="home" aria-selected="true"><b>Novo Post</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link submenu" id="listPost-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>Listar Posts</b></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="home-tab">

        <form action="/dashboard/posts/adiciona" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
        <div class="form-group">
          <label for="postTitle">Titulo Post</label>
          <input type="text" class="form-control" id="posTitle" aria-describedby="TituloPost" placeholder="Entre com Titulo do Post" name="postTitle">
        </div>
        <div class="form-group">
          <label for="autor">Autor</label>
          <input type="text" class="form-control" id="autor" placeholder="Autor do Post" name="autorPost">
        </div>
        <div class="form-group">
          <label for="date">Data</label>
          <input type="date" class="form-control" id="date" name="datePost">
        </div>
              <textarea name="editor1" id="editor1" rows="10" cols="80" name="postContent">
                  
              </textarea>
              <script>
                  // Replace the <textarea id="editor1"> with a CKEditor
                  // instance, using default configuration.
                  CKEDITOR.replace( 'editor1' );
              </script>
              <br>
        <button type="submit" class="btn btn-dash">Postar</button>
        </form>

          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
      </div>
    </div>
@endsection