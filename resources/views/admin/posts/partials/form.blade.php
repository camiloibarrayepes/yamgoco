

{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Categorias') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Nombre de la categoria') }}
    {{ Form::text('slug-input', null, ['class' => 'form-control', 'id' => 'slug-input']) }}
</div>

<div class="form-group">
        {{ Form::label('slug', 'URL amigable') }}
        {{ Form::text('slug-output', null, ['class' => 'form-control', 'id' => 'slug-output']) }}
</div>

<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file('file') }}
</div>

<div class="form-group">
        {{Form::label('status', 'Estado')}}
    <label>
        {{ Form::radio('status', 'PUBLiSHED') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'DRAFT') }} Borrador
    </label>
</div>

<div class="form-group">
    {{ Form::label('tags', 'Etiquetas') }}
    <div>
        @foreach($tags as $tag)
            <label>
                {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
            </label>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Extracto') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows'=>'2']) }}
</div>

<div class="form-group">
        {{ Form::label('contenido', 'Descripción') }}
        {{ Form::textarea('contenido', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')

    <script src="{{ asset('vendor/stringToSlug/dist/jquery.stringtoslug.min.js') }}"></script>
    <script src="{{ asset('vendor/stringToSlug/src/jquery.stringtoslug.js') }}"></script>

    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
    <script src="https://raw.githubusercontent.com/camiloibarrayepes/StringToslug/master/sts.js"></script>

    <script>
        
    var slug = function(str) {
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.
    replace(/[^a-z0-9-]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '');
    return $slug.toLowerCase();
    }

    $('#slug-input').keyup(function() {
    var takedata = $('#slug-input').val()
    $('#slug-output').val(slug(takedata));
    
    });

        CKEDITOR.config.height = 400;
        CKEDITOR.config.width  = 'auto';
        CKEDITOR.replace('contenido');
        
    </script>

@endsection