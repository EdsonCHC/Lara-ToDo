<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-screen grid place-items-center bg-gray-700">

    <main class="w-2/4 h-2/4 mx-auto my-0 bg-gray-300 flex flex-col p-2 rounded-lg">
        <form action="{{url('/')}}" method="POST" id="form" class="w-full h-auto flex flex-col justify-start gap-2">
            @csrf
            <h1 class="text-center font-bold text-2xl">Nombre de la Tarea</h1>
            <input type="text" name="name" id="task" class="w-full h-10 rounded-md p-1 text-red-600">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Agregar Tarea" class="w-52 h-auto p-2 bg-blue-100 rounded-lg cursor-pointer">
        </form>
        <table class="w-full h-auto mt-10">
            <tr class="font-semibold font-xl border-b-4 border-solid border-black">
                <td>Nombre de la tarea</td>
                <td>Borrar Tarea</td>
            </tr>
            @foreach ($names as $task)
                <tr class="font-semibold font-xl border-b-2 border-solid border-gray-800">
                    <td>{{$task->name}}</td>
                    <td>
                        <form action="{{route('task.destroy', $task->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><img src="{{asset('trash.svg')}}" type="image/svg+xml"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>

</body>

</html>