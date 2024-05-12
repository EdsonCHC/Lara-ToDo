<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen grid place-items-center bg-gray-700">

    <main class="w-96 h-96 mx-auto my-0 bg-gray-300 flex flex-col justify-center">
        <form action="{{url('/')}}" method="POST">
            @csrf
            <input type="text" name="name" id="task">
            <input type="submit" value="Agregar Tarea">
        </form>
        <br>
        <table class="border-2 border-solid border-black">
            <tr>
                <td>Nombre de la tarea</td>
                <td>Borrar Tarea</td>
            </tr>
            @foreach ($names as $task)
            <tr>
                <td>{{$task->name}}</td>
                <td><button><object data="{{asset('trash.svg')}}" type="image/svg+xml"></object></button></td>
            </tr>
            @endforeach
        </table>
    </main>

</body>

</html>