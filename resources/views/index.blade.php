<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style-index.css')}}">
</head>
<body>
    <div class="container">
        <div class="foto">
            
        </div> 
        <div class="esquerda">
            <div class="areaLogin">
                <div class="titulo"><h1>Login</h1></div>
                <div class="inputarea">
                    <label for="Gmail">EMAIL</label>
                    <input type="email" name="Gmail" id="" placeholder="Exemplo@gmail.com">
                </div>
                <div class="inputarea">
                    <label for="Senha">SENHA</label>
                    <input type="password" name="Senha" id="" placeholder="Digite sua senha">
                </div>
                <div class="btosLines"><p id="LoginBtn">Registar-se agora</p></div>
                <a id="btnLogin" href="{{route('paginainicial')}}" >LOGIN</a>
            </div>
            
        </div>
        <div class="direita">
            <div class="areaCadastro">
                <div class="titulo"><h1>Cadastro</h1></div>
                <div class="inputarea">
                    <label for="Gmail">EMAIL</label>
                    <input type="email" name="Gmail" id="" placeholder="Exemplo@gmail.com">
                </div>
                <div class="inputarea">
                    <label for="Senha">SENHA</label>
                    <input type="password" name="Senha" id="" placeholder="Crie sua senha">
                </div>
                <div class="btosLines"><p id="RegistrarBtn">Já tenho uma conta</p></div>
                 <button type="submit">CADASTRAR</button>
            </div>
            
        </div>
        </div>
    </div>
    <script src="{{asset('js/script-index.js')}}"></script>
</body>
</html>