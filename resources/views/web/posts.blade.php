@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>Lista de post</h1>

		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $post->name }}</h4>
			</div>
			<div class="panel-body">
				@if($post->file)
				<img src="{{ $post->file }}" width="900" class="img-responsive">
				@endif
				{{ $post->excerpt }}
				<a href="#" class="pull-right">Leer más</a><br><br>
			</div>
		</div>
		@endforeach
		{{ $posts->render() }}
	</div>
	</div>
@stop

