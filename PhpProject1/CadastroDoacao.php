<html>
    <head> <title>Adote 1 Amigo - Cadastro de Adoção</title>
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
                  <form class="buscar">
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
             <form>
                <center><h2><p>Cadastro para Doação</p><h2></center>
                <fieldset class ="primeiro">
                    
                    <legend>Dados Pessoais</legend>
                    
                    <label for="nome">Nome:</label><input type="text" name="nome" size=40><br/>
                    <label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" size=40><br/>
                    <label for="rg">RG:</label><input type="text" nome="rg" size=40><br/>
                    <label for="tel">Telefone:</label><input type="text" name="contato" size=40><br/>
                    <label for="email">E-mail:</label><input type="text" name="email" size=40></br>
                    <input type="checkbox" name="receberemail">Desejo receber outras informações por email.
                </fieldset>  <br/>
                <fieldset>
                    <legend>Dados do Animal</legend>
                     O animal é filhote ou Adulto? <select name=""> 
                        <option>Filhote</option> 
                        <option>Adulto</option>   
                        </select> <br/> <br/>
                        
                     Qual o estado de Saúde do Animal? <select name=""> 
                        <option>Bom</option> 
                        <option>Regular</option>
                        <option>Péssimo</option> 
                        </select> <br/><br/>
                        
                     Sexo do Animal? <select name=""> 
                        <option>Macho</option> 
                        <option>Femea</option>   
                        </select> <br/> <br/>
                        
                      <label for="raça">Raça:</label><input type="text" name="raça" size="40"><br/>
                      <label for="cor">Cor:</label><input type="text" name="cor" size="40"><br/>
                     Comentários Adicionais<textarea rols ="3" cols ="50"></textarea>
                </fieldset>
                
                 <div id="buttom" >    
                     <input type="submit" value="ENVIAR!" onclick="return validarDoacao()" align="center">    
>
                </div>
          </form>  
        
                </div>
       </body>
 </html>
