<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de pacientes</title>
  </head>
  <body>
    <h1>listado de pacientes</h1>

    <a href="{{route('comunas.create')}}" class="btn btn-success">Add</a>
    <table class="table"></li>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Genero</th>
                <th scope="col">Fecha de Naciemiento</th>
                <th scope="col">Contacto</th>
                <th scope="col">E-mail</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)

            <tr>

                <th scope="row">{{$pacientes->id}}</th>
                <td>{{$pacientes->nombre}}</td>
                <td>{{$pacientes->apellido}}</td>
                <td>{{$pacientes->genero}}</td>
                <td>{{$pacientes->fecha_naciemiento}}</td>
                <td>{{$pacientes->contacto}}</td>
                <td>{{$pacientes->E-mail}}</td>
                <th><span>Actions</span></th>

                <td>
                    <a href="{{route("pacientes.edit", ["paciente" => $pacientes->id])}}"
                        class="btn btn-info">Edit</a>
                <td>
                    <form action={{route("pacientes.destroy",["paciente" => $pacientes->id])}}"
                        method="POST" style=display: inline-block>
                        @method("delete")
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                <td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
