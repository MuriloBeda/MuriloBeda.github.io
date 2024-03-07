<?PHP

require_once("../seguranca.php");

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> .:: Admin ::. </title>
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

body {
	background-color: #FFF;
	margin: 0px;
	width: 100%;
	height: 100vh;
	font-family: Verdana, Geneva, sans-serif;
	color: #6e7882;
	font-size: 14px;
  background: #4c4c4c;
}

h1{
  color: white;
}

#principal {
	width: 100%;
	height: 1000px;
}

#menu {
	width: 20%;
	height: 1000px;
	background-color: #5c5c5c;
	float: left;
}

#conteudo {
	width: 80%;
	height: 100vh;
	float: left;	
	background-color: #4c4c4c;
}

.titulo {
	width: 96%;
	height: 21px;
	float: left;
	border: 0px;
	font-weight: bold;
	color: #FFF;
	background-color: #7c7c7c;
	padding: 2%;
}

.botao {
	width: 97%;
	height: 20px;
	float: left;
	border: 0px;
	border-bottom: 1px;
	border-color: #6c6c6c;
	border-style: solid;
	padding: 4%;
}

.botao:hover {
	background-color: #26333c;
	color: #aaaaaa  ;
}

a {
	font-family: Verdana, Geneva, sans-serif;
	color: #fff;
	font-size: 14px;
}

img {
	width: 12px;
	height: 12px;
}
	
</style>

</head>
<body>
<div id="principal">
  <div id="menu">
    <div class="titulo"> :: Login </div>
    
    <a href="../login/login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Login  </div> 
    </a>
    
    <a href="../login/consulta_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

    <div class="titulo"> :: Aluno </div>
    
    <a href="../aluno/aluno.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Aluno  </div> 
    </a>
    
    <a href="../aluno/consulta_aluno.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

    <div class="titulo"> :: Projetos </div>
    
    <a href="../projects/projeto.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Projetos  </div> 
    </a>
    
    <a href="../projects/consulta_projeto.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>
	
    <div class="titulo"> :: Serviços </div>
    
    <a href="../services/servico.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Serviços  </div> 
    </a>
    
    <a href="../services/consulta_servico.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>
	
    <div class="titulo"> :: Skills </div>
    
    <a href="../skill/skill.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Skills  </div> 
    </a>
    
    <a href="../skill/consulta_skill.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

    <div class="titulo"> :: Sair </div>
    <a href="../logout.php"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Logout </div> 
    </a>
        
  </div>
    
  <div id="conteudo"> 
    <iframe name="conteudo" src="" height="1000px" width="100%" frameborder="0" scrolling="auto"> </iframe>
  </div>
  
</div>
</body>
</html>
