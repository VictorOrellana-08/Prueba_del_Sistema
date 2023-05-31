<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .cabecera{
            font-family: 'Courier New', Courier, monospace;
            background-color: black;
            color: white;
        }
        
        h3{
            color: blue;
        }
    </style>

</head>

<body>

    <img src="assets/reporte.png" alt="" width="50px" height="50px">
    <h3 class="text-center">REPORTE DE LA TABLA: ÁREAS</h3><br>
    <table class="table" style="text-align: center;font-size: 20px">
        <thead class="cabecera">
            <tr>
                <th>#</th>
                <th>Nombre área</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($area as $ar)
            <tr>
                <td>
                    {{ $ar->id }}
                </td>
                <td>
                    {{ $ar->nombre }}
                </td>
            </tr>
            @endforeach
        </tbody>
        < <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>