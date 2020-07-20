<?php
/*
empty() Retorna FALSE se var é um valor não nulo ou não zero. 
Em outras palavras, "", 0, "0", NULL, FALSE, array(), 
var $var;, e objetos sem propriedades são considerados como valores vazios. 
TRUE será retornado se var  é vazio.
empty() é o oposto de (boolean) var, com exceção de não gerar um alerta 
(warning) se a variável não existir.
*/
// Função com os parametros recebidos onde
// O $conect é nosso Ponteiro
// O $sql é nossa SQL de consulta
// O $falha é para sabermos se função vai listar ou não (0=não, 1=sim)
function mysqllistar($conect,$sql,$falha = 1) 
{
    if(empty($sql) OR !($conect))
	{
       return 0; //Erro com a conexão e ou consulta SQL   
    }
   if (!($res = @mysql_query($sql,$conect))) 
   {
      if($falha)
        echo "Erro na SQL.";
      exit;
   }
    return $res;
 }
?>