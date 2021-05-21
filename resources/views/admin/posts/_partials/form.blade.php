@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf
<input type="text" name="title" id="title" placeholder="Titulo" value="{{ $post->title ?? old('title') }}"/>
<textarea type="text" name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">
    {{ $post->content ?? old('content')}}
</textarea>
<button type="submit">Enviar</button>
