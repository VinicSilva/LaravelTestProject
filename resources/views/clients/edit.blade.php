<html>
<head>

</head>
<body>
<h1>Editar Cliente</h1>
<form action="/cliente/editar/{{$client->id}}" method="post">
    {!! csrf_field() !!}
    <input type="text" name="name" value="{{$client->name}}">
    <input type="text" name="email" value="{{$client->email}}">
    <button type="submit">Salvar</button>
</form>
</body>
</html>