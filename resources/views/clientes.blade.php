<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="crsf-toke" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }

        .card-title{
            text-align: center;
            font-size: 20px;
        }

        .card-body a{
            text-decoration: none;
            color: white;
        }

        .rol{
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2 ">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Lista de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="tabelaprodutos">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>endereco</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="rol">
                                    @foreach ($cliente as $c)
                                        <tr>
                                            <td>{{$c['id']}}</td>
                                            <td>{{$c['name']}}</td>
                                            <td>{{$c['idade']}}</td>
                                            <td>{{$c['endereco']}}</td>
                                            <td>{{$c['email']}}</td>
                                        </tr>
                                    @endforeach
                                </div>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary btn-sm"><a href="{{route('clientes.create')}}">Novo Cliente</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
</body>
</html>