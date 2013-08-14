<html>
    <head> <title>Adote 1 Amigo - Cadastro de Adoção</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="estilo.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="scripts.js">
            function formatar_mascara(src, mascara) {
                var campo = src.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(campo);
                if(texto.substring(0,1) != saida) {
                src.value += texto.substring(0,1);
                }
          }
        </script>
    
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
                  <form class="buscar">
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
                <form method="POST" action="processar.php">
                <center><h2><p>Cadastro para Adoção</p><h2></center>
                <fieldset class ="primeiro">
                   
                    <legend>Dados Pessoais</legend>
                    
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" size=40 placeholder="Nome"><br/>
                    <label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" size=40 placeholder="Sobrenome"><br/>
                    <label for="rg">RG:</label><input type="text" name="rg" size=40 placeholder="RG"><br/>
                    <label for="tel">Telefone:</label><input type="text" name="contato" size=40 onkeypress="formatar_mascara(this,'##-####-####')" placeholder="Telefone com DDD"><br/>
                    <label for="email">E-mail:</label><input type="text" name="email" size=40 placeholder="Email para contato"><br/>
                    <input type="checkbox" name="receberemail">Desejo receber outras informações por email.
                </fieldset> 
                            
                <form class="buscar">
                <fieldset>
                    <legend>Dados do Animal</legend>
                          <label class="menuBuscar"> TIPO:</label><select name="tipo"> 
                          <option>Todos</option>
                          <option>Cão</option> 
                          <option>Gato</option>   
                          </select> <br>
                              
                          <label class="menuBuscar">PORTE:</label><select name="porte">
                          <option>Todos</option>
                          <option>Pequeno</option> 
                          <option>Médio</option> 
                          <option>Grande</option>
                          </select> <br>
                              
                          <label class="menuBuscar">SEXO:</label><select name="sexo">
                          <option>Todos</option>
                          <option>Macho</option> 
                          <option>Fêmea</option> 
                          <option>Ambos</option>
                          </select> <br>
                              
                          <label class="menuBuscar">IDADE:</label><select name="idade"> 
                          <option>Todos</option>
                          <option>Filhote</option> 
                          <option>Jovem</option> 
                          <option>Adulto</option>
                          </select> <br>
                     
                    Comentários Adicionais:<textarea rols ="3" cols ="50"> </textarea>

                     <input type="submit" value="ENVIAR!" align="center">
       
                </fieldset>
                 </form>
                </form>
                
            </div>
            
        </div>
        
    </div>
                         
       </body>
 </html>
