<h1>Atualizar a Dúvida</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
              {{  $error }}
    @endforeach
@endif

<form action="{{route('support.update', $support->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="subject" value="{{ $support->subject }}" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>