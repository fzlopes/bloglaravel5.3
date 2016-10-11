@if(session()->has('msg'))
<div class="alert alert-success" role="alert">{{ session('msg') }}</div>
@endif
@if(session()->has('errormsg'))
<div class="alert alert-danger" role="alert">{{ session('errormsg') }}</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('noticias') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Título</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="Título">

      @if($errors->has('title'))
        <span style="color:red;">{{ $errors->first('title') }}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Descrição</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="description" placeholder="Descrição"></textarea> 
      
      @if($errors->has('description'))
        <span style="color:red;">{{ $errors->first('description') }}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <label for="urlImg" class="col-sm-2 control-label">Imagem</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="urlImg" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Criar</button>
    </div>
  </div>
</form>