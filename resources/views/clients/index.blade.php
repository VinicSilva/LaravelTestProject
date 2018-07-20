<html>
<head>

</head>
<body>
<h1>Lista Clientes</h1>
<a href="/cliente/cadastrar">Criar</a>
<table>
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nome</th>
    </thead>
    <tbody>
        @forelse($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
            </tr>
        @empty
            <p>Sem clientes</p>
        @endforelse
    </tbody>
</table>
</body>
</html>