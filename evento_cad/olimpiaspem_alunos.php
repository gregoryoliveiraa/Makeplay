

<?php
$usuarioo = $_SESSION['usuarioNome'] ;

if (isset($_POST['BTVoleibolM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeVoleibol1 = $_POST['nomeVoleibol1'];
$nomeVoleibol2 = $_POST['nomeVoleibol2'];
$nomeVoleibol3 = $_POST['nomeVoleibol3'];
$nomeVoleibol4 = $_POST['nomeVoleibol4'];
$nomeVoleibol5 = $_POST['nomeVoleibol5'];
$nomeVoleibol6 = $_POST['nomeVoleibol6'];
$nomeVoleibol7 = $_POST['nomeVoleibol7'];
$nomeVoleibol8 = $_POST['nomeVoleibol8'];
$nomeVoleibol9 = $_POST['nomeVoleibol9'];
$nomeVoleibol10 = $_POST['nomeVoleibol10'];
$nomeVoleibol11 = $_POST['nomeVoleibol11'];
$nomeVoleibol12 = $_POST['nomeVoleibol12'];
$usuario = $_POST['usuario'];
$sexom = "Masculino";
$evento = $_POST['evento'];

//NomeVoleibol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol1' , 'Voleibol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol2' , 'Voleibol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol3' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol4' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeVoleibol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol5' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeVoleibol6)){
}else{ 
//NomeVoleibol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol6' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeVoleibol7
if(empty($nomeVoleibol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol7' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol8)){
}else{
//NomeVoleibol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol8' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol9)){
}else{
//NomeVoleibol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol9' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol10)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol10' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol11)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol11' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol12)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol12' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Voleibol'  AND sexo = 'Masculino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Voleibol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol2" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol3" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol4" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol5" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol6" class="form-control" required placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol7" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol8" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol9" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol10" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol11" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol12" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
                
              
                  <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTVoleibolM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>







 <!-- VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino VOLEIBOL  Feminino   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTVoleibolF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeVoleibol1 = $_POST['nomeVoleibol1'];
$nomeVoleibol2 = $_POST['nomeVoleibol2'];
$nomeVoleibol3 = $_POST['nomeVoleibol3'];
$nomeVoleibol4 = $_POST['nomeVoleibol4'];
$nomeVoleibol5 = $_POST['nomeVoleibol5'];
$nomeVoleibol6 = $_POST['nomeVoleibol6'];
$nomeVoleibol7 = $_POST['nomeVoleibol7'];
$nomeVoleibol8 = $_POST['nomeVoleibol8'];
$nomeVoleibol9 = $_POST['nomeVoleibol9'];
$nomeVoleibol10 = $_POST['nomeVoleibol10'];
$nomeVoleibol11 = $_POST['nomeVoleibol11'];
$nomeVoleibol12 = $_POST['nomeVoleibol12'];
$usuario = $_POST['usuario'];
$sexom = "Feminino";
$evento = $_POST['evento'];
//NomeVoleibol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol1' , 'Voleibol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol2' , 'Voleibol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol3' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol4' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeVoleibol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol5' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeVoleibol6)){
}else{ 
//NomeVoleibol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol6' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeVoleibol7
if(empty($nomeVoleibol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol7' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol8)){
}else{
//NomeVoleibol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol8' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol9)){
}else{
//NomeVoleibol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol9' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol10)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol10' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol11)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol11' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol12)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeVoleibol12' , 'Voleibol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Voleibol'  AND sexo = 'Feminino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Voleibol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                 
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol2" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol3" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol4" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol5" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol6" class="form-control" required placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol7" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol8" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol9" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol10" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol11" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol12" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTVoleibolF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>





<!-- Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO Basquetebol  MASCULINO   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTBasquetebolM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeBasquetebol1 = $_POST['nomeBasquetebol1'];
$nomeBasquetebol2 = $_POST['nomeBasquetebol2'];
$nomeBasquetebol3 = $_POST['nomeBasquetebol3'];
$nomeBasquetebol4 = $_POST['nomeBasquetebol4'];
$nomeBasquetebol5 = $_POST['nomeBasquetebol5'];
$nomeBasquetebol6 = $_POST['nomeBasquetebol6'];
$nomeBasquetebol7 = $_POST['nomeBasquetebol7'];
$nomeBasquetebol8 = $_POST['nomeBasquetebol8'];
$nomeBasquetebol9 = $_POST['nomeBasquetebol9'];
$nomeBasquetebol10 = $_POST['nomeBasquetebol10'];
$nomeBasquetebol11 = $_POST['nomeBasquetebol11'];
$nomeBasquetebol12 = $_POST['nomeBasquetebol12'];
$usuario = $_POST['usuario'];
$sexom = "Masculino";
$evento = $_POST['evento'];
//NomeBasquetebol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol1' , 'Basquetebol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeBasquetebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol2' , 'Basquetebol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeBasquetebol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol3' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeBasquetebol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol4' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeBasquetebol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol5' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeBasquetebol6)){
}else{ 
//NomeBasquetebol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol6' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeBasquetebol7
if(empty($nomeBasquetebol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol7' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol8)){
}else{
//NomeBasquetebol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol8' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol9)){
}else{
//NomeBasquetebol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol9' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol10)){
}else{
//NomeBasquetebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol10' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol11)){
}else{
//NomeBasquetebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol11' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol12)){
}else{
//NomeBasquetebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol12' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Basquetebol'  AND sexo = 'Masculino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Basquetebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol2" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol3" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol4" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol5" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol6" class="form-control" required placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol7" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol8" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol9" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol10" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol11" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol12" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTBasquetebolM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>







 <!-- Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino Basquetebol  Feminino   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTBasquetebolF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeBasquetebol1 = $_POST['nomeBasquetebol1'];
$nomeBasquetebol2 = $_POST['nomeBasquetebol2'];
$nomeBasquetebol3 = $_POST['nomeBasquetebol3'];
$nomeBasquetebol4 = $_POST['nomeBasquetebol4'];
$nomeBasquetebol5 = $_POST['nomeBasquetebol5'];
$nomeBasquetebol6 = $_POST['nomeBasquetebol6'];
$nomeBasquetebol7 = $_POST['nomeBasquetebol7'];
$nomeBasquetebol8 = $_POST['nomeBasquetebol8'];
$nomeBasquetebol9 = $_POST['nomeBasquetebol9'];
$nomeBasquetebol10 = $_POST['nomeBasquetebol10'];
$nomeBasquetebol11 = $_POST['nomeBasquetebol11'];
$nomeBasquetebol12 = $_POST['nomeBasquetebol12'];
$usuario = $_POST['usuario'];
$sexom = "Feminino";
$evento = $_POST['evento'];
//NomeBasquetebol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol1' , 'Basquetebol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeBasquetebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol2' , 'Basquetebol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeBasquetebol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol3' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeBasquetebol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol4' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeBasquetebol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol5' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeBasquetebol6)){
}else{ 
//NomeBasquetebol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol6' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeBasquetebol7
if(empty($nomeBasquetebol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol7' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol8)){
}else{
//NomeBasquetebol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol8' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol9)){
}else{
//NomeBasquetebol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol9' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol10)){
}else{
//NomeBasquetebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol10' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol11)){
}else{
//NomeBasquetebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol11' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeBasquetebol12)){
}else{
//NomeBasquetebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeBasquetebol12' , 'Basquetebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Basquetebol'  AND sexo = 'Feminino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Basquetebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                 
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol2" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol3" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol4" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol5" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol6" class="form-control" required placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol7" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeBasquetebol8" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol9" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol10" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol11" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeBasquetebol12" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTBasquetebolF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>

<!-- Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO Futebol  MASCULINO   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTFutebolM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeFutebol1 = $_POST['nomeFutebol1'];
$nomeFutebol2 = $_POST['nomeFutebol2'];
$nomeFutebol3 = $_POST['nomeFutebol3'];
$nomeFutebol4 = $_POST['nomeFutebol4'];
$nomeFutebol5 = $_POST['nomeFutebol5'];
$nomeFutebol6 = $_POST['nomeFutebol6'];
$nomeFutebol7 = $_POST['nomeFutebol7'];
$nomeFutebol8 = $_POST['nomeFutebol8'];
$nomeFutebol9 = $_POST['nomeFutebol9'];
$nomeFutebol10 = $_POST['nomeFutebol10'];
$nomeFutebol11 = $_POST['nomeFutebol11'];
$nomeFutebol12 = $_POST['nomeFutebol12'];
$usuario = $_POST['usuario'];
$sexom = "Masculino";
$evento = $_POST['evento'];
//NomeFutebol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol1' , 'Futebol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeFutebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol2' , 'Futebol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeFutebol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol3' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeFutebol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol4' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeFutebol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol5' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeFutebol6)){
}else{ 
//NomeFutebol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol6' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeFutebol7
if(empty($nomeFutebol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol7' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol8)){
}else{
//NomeFutebol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol8' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol9)){
}else{
//NomeFutebol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol9' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol10)){
}else{
//NomeFutebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol10' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol11)){
}else{
//NomeFutebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol11' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol12)){
}else{
//NomeFutebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol12' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Futebol'  AND sexo = 'Masculino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Futebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol2" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol3" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol4" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol5" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol6" class="form-control" required placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol7" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol8" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol9" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol10" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol11" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol12" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTFutebolM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>







 <!-- Futebol  Feminino Futebol  Feminino Futebol  Feminino Futebol  Feminino Futebol  Feminino Futebol  Feminino Futebol  Feminino Futebol  Feminino Futebol  Feminino   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTFutebolF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeFutebol1 = $_POST['nomeFutebol1'];
$nomeFutebol2 = $_POST['nomeFutebol2'];
$nomeFutebol3 = $_POST['nomeFutebol3'];
$nomeFutebol4 = $_POST['nomeFutebol4'];
$nomeFutebol5 = $_POST['nomeFutebol5'];
$nomeFutebol6 = $_POST['nomeFutebol6'];
$nomeFutebol7 = $_POST['nomeFutebol7'];
$nomeFutebol8 = $_POST['nomeFutebol8'];
$nomeFutebol9 = $_POST['nomeFutebol9'];
$nomeFutebol10 = $_POST['nomeFutebol10'];
$nomeFutebol11 = $_POST['nomeFutebol11'];
$nomeFutebol12 = $_POST['nomeFutebol12'];
$usuario = $_POST['usuario'];
$sexom = "Feminino";
$evento = $_POST['evento'];
//NomeFutebol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol1' , 'Futebol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeFutebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol2' , 'Futebol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeFutebol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol3' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeFutebol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol4' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeFutebol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol5' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeFutebol6)){
}else{ 
//NomeFutebol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol6' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeFutebol7
if(empty($nomeFutebol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol7' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol8)){
}else{
//NomeFutebol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol8' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol9)){
}else{
//NomeFutebol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol9' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol10)){
}else{
//NomeFutebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol10' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol11)){
}else{
//NomeFutebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol11' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeFutebol12)){
}else{
//NomeFutebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeFutebol12' , 'Futebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Futebol'  AND sexo = 'Feminino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Futebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                 
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol2" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol3" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol4" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol5" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol6" class="form-control" required placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol7" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeFutebol8" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol9" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol10" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol11" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeFutebol12" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTFutebolF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>


<!-- Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO Handebol  MASCULINO   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTHandebolM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeHandebol1 = $_POST['nomeHandebol1'];
$nomeHandebol2 = $_POST['nomeHandebol2'];
$nomeHandebol3 = $_POST['nomeHandebol3'];
$nomeHandebol4 = $_POST['nomeHandebol4'];
$nomeHandebol5 = $_POST['nomeHandebol5'];
$nomeHandebol6 = $_POST['nomeHandebol6'];
$nomeHandebol7 = $_POST['nomeHandebol7'];
$nomeHandebol8 = $_POST['nomeHandebol8'];
$nomeHandebol9 = $_POST['nomeHandebol9'];
$nomeHandebol10 = $_POST['nomeHandebol10'];
$nomeHandebol11 = $_POST['nomeHandebol11'];
$nomeHandebol12 = $_POST['nomeHandebol12'];
$usuario = $_POST['usuario'];
$sexom = "Masculino";
$evento = $_POST['evento'];
//NomeHandebol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol1' , 'Handebol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeHandebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol2' , 'Handebol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeHandebol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol3' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeHandebol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol4' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeHandebol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol5' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeHandebol6)){
}else{ 
//NomeHandebol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol6' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeHandebol7
if(empty($nomeHandebol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol7' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol8)){
}else{
//NomeHandebol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol8' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol9)){
}else{
//NomeHandebol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol9' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol10)){
}else{
//NomeHandebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol10' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol11)){
}else{
//NomeHandebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol11' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol12)){
}else{
//NomeHandebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol12' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Handebol'  AND sexo = 'Masculino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Handebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol2" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol3" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol4" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol5" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol6" class="form-control" required placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol7" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol8" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol9" class="form-control"  placeholder="Masculino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol10" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol11" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol12" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTHandebolM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>







 <!-- Handebol  Feminino Handebol  Feminino Handebol  Feminino Handebol  Feminino Handebol  Feminino Handebol  Feminino Handebol  Feminino Handebol  Feminino Handebol  Feminino   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTHandebolF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeHandebol1 = $_POST['nomeHandebol1'];
$nomeHandebol2 = $_POST['nomeHandebol2'];
$nomeHandebol3 = $_POST['nomeHandebol3'];
$nomeHandebol4 = $_POST['nomeHandebol4'];
$nomeHandebol5 = $_POST['nomeHandebol5'];
$nomeHandebol6 = $_POST['nomeHandebol6'];
$nomeHandebol7 = $_POST['nomeHandebol7'];
$nomeHandebol8 = $_POST['nomeHandebol8'];
$nomeHandebol9 = $_POST['nomeHandebol9'];
$nomeHandebol10 = $_POST['nomeHandebol10'];
$nomeHandebol11 = $_POST['nomeHandebol11'];
$nomeHandebol12 = $_POST['nomeHandebol12'];
$usuario = $_POST['usuario'];
$sexom = "Feminino";
$evento = $_POST['evento'];
//NomeHandebol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol1' , 'Handebol',  '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeHandebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol2' , 'Handebol', '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeHandebol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol3' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeHandebol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol4' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeHandebol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol5' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeHandebol6)){
}else{ 
//NomeHandebol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol6' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeHandebol7
if(empty($nomeHandebol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol7' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol8)){
}else{
//NomeHandebol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol8' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol9)){
}else{
//NomeHandebol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol9' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol10)){
}else{
//NomeHandebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol10' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol11)){
}else{
//NomeHandebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol11' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeHandebol12)){
}else{
//NomeHandebol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade,  usuario, sexo, evento) VALUES ('' , '$nomeHandebol12' , 'Handebol',  '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="0.5;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Handebol'  AND sexo = 'Feminino'");
$data = mysql_num_rows($sql);
if($data >= 6){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Handebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                 
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol2" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol3" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol4" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol5" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol6" class="form-control" required placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 7</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol7" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeHandebol8" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol9" class="form-control"  placeholder="Feminino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol10" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 11</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol11" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 12</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeHandebol12" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
                
              
                                      <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>




                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTHandebolF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
                    <button class="btn btn-default">Cancelar</button>
                  </div>
                </div><!--/form-group--> 
              </form>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 



';

}

?>





<?php
if($count >= 8){
exibeecho();
}
?>

