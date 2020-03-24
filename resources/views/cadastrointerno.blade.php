@extends('layouts.master_layout')
@section('conteudo')
<div class="fundo">
    <h1 class="titulo-cadastro text-center">Cadastre-se</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            @if(@isset($usuario))
            <form method="POST" action="/cadastrointerno/{{$usuario->id_usuario}}" enctype="multipart/form-data">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo"
                            required autofocus>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-8">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx"
                            maxlength="14" required>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="dtnasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dtnasc" id="dtnasc" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="sexo">Sexo:</label>
                        <select class="custom-select btn-sexo" name="sexo" id="sexo">
                            <option selected>Selecione</option>
                            <option value="F">Feminino</option>
                            <option value="M">Masculino</option>
                            <option value="O">Outros</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3"></div>

                    <div class="form-group col-md-4">
                        <label for="telefoneUm">Telefone para contato</label>
                        <input type="text" class="form-control" name="telefoneUm" id="telefoneUm"
                            placeholder="(99)99999-9999" maxlength="11" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="telefoneDois">Telefone para contato</label>
                        <input type="text" class="form-control" name="telefoneDois" id="telefoneDois"
                            placeholder="(99)99999-9999" maxlength="11">
                    </div>

                    
                    <div class="form-group col-md-8">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{$usuario->email}}" required>
                    </div>

                    <div class="form-group col-md-4"></div>
                    
                    <div class="form-group col-md-4">
                        <label for="senha">Senha</label>

                        <input type="password" class="form-control" name="senha" id="senha"
                            placeholder="***************" value="{{$usuario->senha}}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="conf-senha">Confirme a Senha</label>
                        <input type="password" class="form-control" name="confirmaSenha" id="conf-senha"
                            placeholder="***************" value="{{$usuario->senha}}">
                    </div>
                    @if(isset($confirmaSenha))
                        <div class="alert alert-danger form-control" role="alert">
                                As senhas não coincidem!
                        </div>
                    @endif

                    <hr id="line">
            @endif
                    <div class="form-group pt-5">
                        <label for="imagem" style="display:block"> Imagem </label>
                        <input  name="imagem" type="file">
                    </div>
                </div>
                <div class="botoes" style="display: flex;">
                <div class="enviar">
                <button class="btn btn-primary btn-lg btn-enviar">Enviar</button>
            </div>
            <div class="cancelar">
                <button class="btn btn-primary btn-lg btn-cancelar" formnovalidate><a href="/" style="text-decoration: none; color: white">Cancelar</a></button>
            </div>
        </div>
            </form>
        </div>
    </section>
</div>
@endsection
