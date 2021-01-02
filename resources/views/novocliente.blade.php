<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
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
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2 ">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro do Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('clientes.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
<<<<<<< HEAD
                                <input type="text" id="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome">
                                @if ($errors->has('nome'))
                                    {{$errors->first('nome')}}
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade">
                                @if ($errors->has('idade'))
                                {{$errors->first('idade')}}
                            @endif
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco do Cliente</label>
                                <input type="text" id="endereco" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco">
                                @if ($errors->has('endereco'))
                                    {{$errors->first('endereco')}}
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email do Cliente</label>
                                <input type="text" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email">
                                @if ($errors->has('email'))
                                    {{$errors->first('email')}}
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        </form>
                    </div>
=======
                                <input type="text" id="nome" class="form-control" name="nome">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control" name="idade">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco do Cliente</label>
                                <input type="text" id="endereco" class="form-control" name="endereco">
                            </div>
                            <div class="form-group">
                                <label for="email">Email do Cliente</label>
                                <input type="text" id="email" class="form-control" name="email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="submit" class="btn btn-primary btn-sm"><a href="{{route('clientes.index')}}">Cancelar</a></button>
                        </form>
                    </div>
                    @if($errors->any()))
                    <div class="card-footer">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    </div>
                @endif
>>>>>>> master
                </div>
            </div>
        </div>
    </main>           
<<<<<<< HEAD
=======
    @if(isset($errors))
    {{ var_dump($errors) }}
    @endif
>>>>>>> master
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>