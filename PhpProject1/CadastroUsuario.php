<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Adote 1 Amigo</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="estilo.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="scripts.js"></script>	
</head>

<body>
    <div id="principal">	
        
        <div id="tabs">
		
            <ul>
                <li><a href="index.php">Home</a></li>
		<li><a href="CadastroAdocao">Adote</a></li>
                <li><a href="CadastroDoacao">Doe</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
		<li><a href="fotos.html">Fotos</a></li>
		<li><a href="contato.php">Fale Conosco</a></li>
	    </ul>
        </div> 
        
        <div id="logo" align="center">
			
            <img src="imagens/pet-shop_128.gif" height="300px" width="800px" />
			
	</div>   
        <div id="barra">
            
        </div>	
        
	<div id="texto">
            
            <div id="lateral">
		<br />
                  <img src="imagens/adote.jpg" height="100px" width="250px"/><br />
                  <br />
                  <form>
                      <fieldset>
                          <legend>Encontre um amigo</legend>
                          TIPO<select name=""> 
                          <option>Cão</option> 
                          <option>Gato</option>   
                          </select> <br>
                              
                          PORTE<select name="">
                          <option>Todos</option>
                          <option>Pequeno</option> 
                          <option>Médio</option> 
                          <option>Grande</option>
                          </select> <br>
                              
                          SEXO<select name="">
                          <option>Todos</option>
                          <option>Macho</option> 
                          <option>Fêmea</option> 
                          <option>Ambos</option>
                          </select> <br>
                              
                          IDADE<select name=""> 
                          <option>Todos</option>
                          <option>Filhote</option> 
                          <option>Jovem</option> 
                          <option>Adulto</option>
                          </select> <br>
                          <br>
                          <br>

                          <div id="buttom">    
                            <input type="submit" value="BUSCAR" onclick="return validar()">
                          </div>
                          <br>
        
                      </fieldset>
                  </form>
            </div>
            
            <div id="post">
            <h2>Novo por aqui... Cadastre-se!</h2>
                <form method="POST">
                    <fieldset id="field">
                        <legend>Novo cadastro</legend>
                        <p><label for="nome">Nome:</label><input type="text" name="nome" required="required" maxlength="50" placeholder="Nome Completo" id="nome"/>  </p>
                        <p><label for="login">Login:</label><input type="text" name ="login" required="required" placeholder="Login" id="login"/>
                            <a id="errorLabel"></a></p>
                        <p><label for="senha">Senha:</label><input type="password" name="senha" required="required"  placeholder="Senha" maxlength="30" id="senha"/></p>
                        <input type="submit" value="Cadastrar" onclick="return validarcadastro()">
                    </fieldset>
            </form>
            </div>
            
        </div>
        
    </div>
</body>

</html>