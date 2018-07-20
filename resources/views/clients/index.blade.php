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
        <th>Email</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @forelse($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>
                    <a href="{{"/cliente/editar/$client->id"}}">Editar</a>
                    <a href="{{"/cliente/excluir/$client->id"}}" onclick="event.preventDefault();if(confirm('Deseja excluir este contato')){window.location.href='{{"/cliente/excluir/$client->id"}}'}">Excluir</a>
                </td>
            </tr>
        @empty
            <p>Sem clientes</p>
        @endforelse
    </tbody>
</table>
</body>
</html>