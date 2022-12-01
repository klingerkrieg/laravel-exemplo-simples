<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($book->id)

        {{-- Se for um livro que já existe --}}
        <form action="{{route("update", $book)}}" method="post">
            @method('PUT')

    @else
        {{-- Se não, quer dizer que estou criando um novo --}}
        <form action="{{route("save")}}" method="post">

    @endif

        @csrf

        <label for="title">Título
            <input name="title" id="title" type="text" value="{{$book->title}}" >
        </label> <br/>

        <label for="publisher">Editora
            <input name="publisher" id="publisher" type="text" value="{{$book->publisher}}">
        </label> <br/>

        <label for="year">Ano
            <input name="year" id="year" type="text" value="{{$book->year}}">
        </label> <br/>

        <label for="date_of_something">Data
            <input name="date_of_something" id="date_of_something" type="text" value="{{$book->date_of_something}}">
        </label> <br/>

        <button type="submit">Salvar</button>
        <a href="{{route('new')}}">Novo</a>

    </form>


    <ul>
    @foreach ($list as $item)
        <li>
            <a href="{{route('edit', $item)}}">Editar</a>

            {{$item->title}}
            {{$item->year}}

            <a href="{{route('delete', $item)}}">Deletar</a>
        </li>
    @endforeach
    </ul>
    {{$list->links()}}




</body>
</html>
