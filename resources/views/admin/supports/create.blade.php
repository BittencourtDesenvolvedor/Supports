<h1>Nova Dúvida</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
              {{  $error }}
    @endforeach
@endif

<form action="{{route('support.store')}}" method="POST">
    @csrf
    <input type="text" name="subject" placeholder="Assunto" value="{{ old('subject')}}">
    <textarea name="body" cols="30" rows="5">{{ old('body')}}</textarea>
    <button type="submit">Enviar</button>
</form>