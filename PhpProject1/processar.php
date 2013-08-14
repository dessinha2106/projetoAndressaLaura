<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Adote 1 Amigo</title>
</head>
<body>
    
<?php
$nome= $_POST["nome"];
$sobrenome= $_POST["sobrenome"];
$rg= $_POST["rg"];
$contato= $_POST["contato"];
$email= $_POST["email"];
$erro=0;

if (($nome=="") || ($sobrenome=="") || ($rg=="") || ($contato=="") || ($email=="")) 
{echo "<script> alert('Todos os campos do formulario devem ser preenchidos.');</script>"; $erro=1;
 echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}
if (strlen($nome)<2)
{ echo "<script> alert('O nome não poderá conter menos de 2 caracteres.');</script>"; $erro=1;
  echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}
if (strlen($sobrenome)<2)
{ echo "<script> alert('O sobrenome não poderá conter menos de 2 caracteres.');</script>"; $erro=1;
  echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}
if (strlen($rg)<5)
{ echo "<script> alert('Número do RG inválido.');</script>"; $erro=1;
  echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}
if (strlen($contato)<10)
{ echo "<script> alert('Digite um telefone válido.');</script>"; $erro=1;
  echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}
if (strlen($email)<8 || strtr($email, '@')==FALSE)
{ echo "<script> alert('Digite o email corretamente.');</script>"; $erro=1;
  echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}

if ($erro==0)
{ echo "<script> alert('Cadastro realizado com sucesso.');</script>";
  echo "<script> window.location.href = 'CadastroAdocao.php'; </script>";
}
    
?>
</body>
</html>