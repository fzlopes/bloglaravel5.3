<table class="table table-hover">
@if(isset($noticias))
<thead>
	<th>Título</th>
	<th>Descrição</th>
	<th>Imagem</th>
	<th>Ações</th>
</thead>
<tbody>
	@foreach($noticias as $noticia)
		<tr>
			<td>{{ $noticia->title }}</td>
			<td>{{ $noticia->description }}</td>
			<td>
				<img src="imgNoticias/{{ $noticia->urlImg }}" class="img-responsive" alt="Responsive image" style="max-width: 100px">
			</td>
			<td>
				<a href="noticias/{{ $noticia->id }}/edit" class="btn btn-warning btn-xs">Editar</a>

				<form action="{{ route('noticias.destroy', $noticia->id )}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					{{ csrf_field() }}
				    <input type="submit" class="btn btn-danger btn-xs" value="Excluir"></input>
        		</form>
			</td>
		</tr>

	@endforeach	
</tbody>
@endif	
</table>