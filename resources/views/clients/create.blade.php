<html>
<head>

</head>
<body>
<h1>Criar Novo Cliente</h1>
<form action="/cliente/cadastrar" method="post">
    {!! csrf_field() !!}
    <input type="text" name="name">
    <input type="text" name="email">
    <button type="submit">Salvar</button>
</form>
</body>
</html>