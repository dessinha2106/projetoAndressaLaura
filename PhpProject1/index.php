<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Adote 1 Amigo</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="estilo.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="scripts.js">
    </script>
        
</head>

<body>
    <div id="principal">	
        
        <div id="tabs">
		
            <ul>
                <li><a href="index.php">Home</a></li>
		<li><a href="CadastroAdocao">Adote</a></li>
                <li><a href="CadastroDoacao">Doe</a></li>
                <li><a href="CadastroUsuario.php">Cadastre-se</a></li>
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
                  <form class="buscar" method="POST" action="buscar.php">
                      <fieldset>
                          <legend>Encontre um amigo</legend>
                          <label class="menuBuscar"> TIPO:</label><select name=""> 
                          <option>Cão</option> 
                          <option>Gato</option>   
                          </select> <br>
                              
                          <label class="menuBuscar">PORTE:</label><select name="">
                          <option>Todos</option>
                          <option>Pequeno</option> 
                          <option>Médio</option> 
                          <option>Grande</option>
                          </select> <br>
                              
                          <label class="menuBuscar">SEXO:</label><select name="">
                          <option>Todos</option>
                          <option>Macho</option> 
                          <option>Fêmea</option> 
                          <option>Ambos</option>
                          </select> <br>
                              
                          <label class="menuBuscar">IDADE:</label><select name=""> 
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
                <h2> Quer adotar um desses anjinhos?</h2>
                <a href="CadastroAdocao.php"><img src="imagens/BBdog_1.jpg"/></a>
                <a href="CadastroAdocao.php"><img src="imagens/dog_1.jpg" /></a><br />
                <a href="CadastroAdocao.php"><img src="imagens/bbs_gatos_1.jpg" /></a>
                <a href="CadastroAdocao.php"><img src="imagens/gatão_lindo_1.jpg" /></a><br />
            </div>
            
        </div>
        
    </div>
</body>

</html>