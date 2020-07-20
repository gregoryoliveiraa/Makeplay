
<!-- QUEIMADA      QUEIMADA      QUEIMADA    QUEIMADA   QUEIMADA    QUEIMADA   QUEIMADA  QUEIMADA    QUEIMADA   QUEIMADA QUEIMADA    QUEIMADA   QUEIMADA QUEIMADA    QUEIMADA   QUEIMADA -->

<?php

$usuarioo = $_SESSION['usuarioNome'] ;



if (isset($_POST['BTQueimada'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeQueimada1 = $_POST['nomeQueimada1'];
$nomeQueimada2 = $_POST['nomeQueimada2'];
$nomeQueimada3 = $_POST['nomeQueimada3'];
$nomeQueimada4 = $_POST['nomeQueimada4'];
$nomeQueimada5 = $_POST['nomeQueimada5'];
$nomeQueimada6 = $_POST['nomeQueimada6'];
$nomeQueimada7 = $_POST['nomeQueimada7'];
$nomeQueimada8 = $_POST['nomeQueimada8'];
$nomeQueimada9 = $_POST['nomeQueimada9'];
$nomeQueimada10 = $_POST['nomeQueimada10'];
$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";
$sexof = "Feminino";


if(empty($nomeQueimada1)){
}else{
//NomeQueimada1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada1' , 'Queimada', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada2)){
}else{
//NomeQueimada2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada2' , 'Queimada', 'Mirim' , '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada3)){
}else{
//NomeQueimada3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada3' , 'Queimada', 'Mirim', '$usuario','$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada4)){
}else{
//NomeQueimada4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada4' , 'Queimada', 'Mirim', '$usuario','$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada5)){
}else{
//NomeQueimada5
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada5' , 'Queimada', 'Mirim', '$usuario','$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada6)){
}else{
//NomeQueimada6
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada6' , 'Queimada', 'Mirim', '$usuario','$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada7)){
}else{
//NomeQueimada7
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada7' , 'Queimada', 'Mirim', '$usuario','$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}

if(empty($nomeQueimada8)){
}else{
//NomeQueimada8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada8' , 'Queimada', 'Mirim', '$usuario','$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}


if(empty($nomeQueimada9)){
}else{
//NomeQueimada9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada9' , 'Queimada', 'Mirim', '$usuario','$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}


if(empty($nomeQueimada10)){
}else{
//NomeQueimada10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada10' , 'Queimada', 'Mirim', '$usuario','$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}


if(empty($nomeQueimada11)){
}else{
//NomeQueimada10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada11' , 'Queimada', 'Mirim', '$usuario','$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}


if(empty($nomeQueimada12)){
}else{
//NomeQueimada10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeQueimada12' , 'Queimada', 'Mirim', '$usuario','$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei = "True";
}
}


if($tvolei ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}





require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Queimada' AND evento = '$evento'");
$data = mysql_num_rows($sql);
if($data >= 3){
$count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Queimada</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada2" class="form-control"  placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada3" class="form-control"  placeholder="Masculino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada4" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada5" class="form-control"  placeholder="Masculino" />
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada11" class="form-control"  placeholder="Masculino" />
                  </div>
                  </div>

                   <h4> <p class="text-center space_p">Feminino</p></h4>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada6" class="form-control"  required  placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada7" class="form-control"  placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeQueimada8" class="form-control"  placeholder="Feminino" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 4</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeQueimada9" class="form-control"  placeholder="Feminino" />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 5</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeQueimada10" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>


                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 6</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeQueimada12" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
                   
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTQueimada" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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




 <!-- VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO VOLEIBOL  MASCULINO   -->





<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTVoleibolIM'])){

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
$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

//NomeVoleibol1

$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol1' , 'Voleibol', 'Infanto-Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol2' , 'Voleibol', 'Infanto-Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol3' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol4' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  
//NomeVoleibol5  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol5' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");  
  
if(empty($nomeVoleibol6)){
}else{ 
//NomeVoleibol6  
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol6' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}
//NomeVoleibol7
if(empty($nomeVoleibol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol7' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol8)){
}else{
//NomeVoleibol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol8' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol9)){
}else{
//NomeVoleibol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol9' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}

if(empty($nomeVoleibol10)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol10' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei1 = "True";
}


if($tvolei1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Voleibol'  AND categoria = 'Infanto-Juvenil' AND sexo = 'Masculino' AND evento = '$evento'");
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
                      <h4><li><b>Categoria:</b>"Infanto-Juvenil (8° ao Ens. Médio)"</li></h4>
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
                
              
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTVoleibolIM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







                  <!-- VOLEIBOL  FEMININO  VOLEIBOL  FEMININO  VOLEIBOL   FEMININO  VOLEIBOL   FEMININO  VOLEIBOL  FEMININO   -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTVoleibolIF'])){

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
$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexof = "Feminino";

//NomeVoleibol1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol1' , 'Voleibol', 'Infanto-Juvenil', '$usuario' ,'$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol2' , 'Voleibol', 'Infanto-Juvenil' , '$usuario' , '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol3
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol3' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol4
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol4' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

//NomeVoleibol5
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol5' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");

if(empty($nomeVoleibol6)){
}else{
//NomeVoleibol6
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol6' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei2 = "True";
}

//NomeVoleibol7
if(empty($nomeVoleibol7)){
}else{
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol7' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei2 = "True";
}

if(empty($nomeVoleibol8)){
}else{
//NomeVoleibol8
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol8' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei2 = "True";
}

if(empty($nomeVoleibol9)){
}else{
//NomeVoleibol9
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol9' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$tvolei2 = "True";
}

if(empty($nomeVoleibol10)){
}else{
//NomeVoleibol10
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeVoleibol10' , 'Voleibol', 'Infanto-Juvenil', '$usuario', '$sexof', '$evento')";
$tvolei2 = "True";
}



$tvolei2 = "True";
if($tvolei2 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}

}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Voleibol' AND categoria = 'Infanto-Juvenil'  AND sexo = 'Feminino' AND evento = '$evento'");
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
                      <h4><li><b>Categoria:</b>"Infanto-Juvenil (8° ao Ens. Médio)"</li></h4>
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
                    <input type="text" name="nomeVoleibol7" class="form-control" placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 8</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeVoleibol8" class="form-control" placeholder="Feminino"  />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 9</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol9" class="form-control" placeholder="Feminino"  />
                  </div>
                  </div>


                   <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 10</label>
                  <div class="col-sm-6">
                    <input type="text"  name="nomeVoleibol10" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
                
              
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTVoleibolIF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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









<!-- Tenis de mesa   Tenis de mesaTenis de message       Tenis de mesa        Tenis de mesa       Tenis de mesa  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTTenisdeMesaMM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeTenisdeMesa1 = $_POST['nomeTenisdeMesa1'];
$nomeTenisdeMesa2 = $_POST['nomeTenisdeMesa2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

if(empty($nomeTenisdeMesa1)){
}else{
//NomeTenis de Mesa1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa1' , 'Tenis de Mesa', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}

if(empty($nomeTenisdeMesa2)){
}else{
//NomeTenis de Mesa2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa2' , 'Tenis de Mesa', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}


if($ttenis1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Tenis de Mesa' AND categoria = 'Mirim'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Tenis de Mesa</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  ';

if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{            

      echo '       <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';

}
    

      echo '                            
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTTenisdeMesaMM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Tenis de mesa   Tenis de mesaTenis de message       Tenis de mesa        Tenis de mesa       Tenis de mesa  -->



 <?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTTenisdeMesaMF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeTenisdeMesa1 = $_POST['nomeTenisdeMesa1'];
$nomeTenisdeMesa2 = $_POST['nomeTenisdeMesa2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";

if(empty($nomeTenisdeMesa1)){
}else{
//NomeTenis de Mesa1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa1' , 'Tenis de Mesa', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}

if(empty($nomeTenisdeMesa2)){
}else{
//NomeTenis de Mesa2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa2' , 'Tenis de Mesa', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}


if($ttenis1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Tenis de Mesa' AND categoria = 'Mirim'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Tenis de Mesa</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{            

      echo '       <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';

}
    

      echo '                            
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTTenisdeMesaMF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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





<!-- Tenis de mesa   Tenis de mesaTenis de message       Tenis de mesa        Tenis de mesa       Tenis de mesa  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTTenisdeMesaIM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeTenisdeMesa1 = $_POST['nomeTenisdeMesa1'];
$nomeTenisdeMesa2 = $_POST['nomeTenisdeMesa2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

if(empty($nomeTenisdeMesa1)){
}else{
//NomeTenis de Mesa1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa1' , 'Tenis de Mesa', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}

if(empty($nomeTenisdeMesa2)){
}else{
//NomeTenis de Mesa2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa2' , 'Tenis de Mesa', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}


if($ttenis1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Tenis de Mesa' AND categoria = 'Infantil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Tenis de Mesa</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  ';

if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{            

      echo '       <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';

}
    

      echo '                            
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTTenisdeMesaIM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Tenis de mesa   Tenis de mesaTenis de message       Tenis de mesa        Tenis de mesa       Tenis de mesa  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTTenisdeMesaIF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeTenisdeMesa1 = $_POST['nomeTenisdeMesa1'];
$nomeTenisdeMesa2 = $_POST['nomeTenisdeMesa2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";

if(empty($nomeTenisdeMesa1)){
}else{
//NomeTenis de Mesa1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa1' , 'Tenis de Mesa', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}

if(empty($nomeTenisdeMesa2)){
}else{
//NomeTenis de Mesa2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa2' , 'Tenis de Mesa', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}


if($ttenis1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Tenis de Mesa' AND categoria = 'Infantil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Tenis de Mesa</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{            

      echo '       <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';

}
    

      echo '                            
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTTenisdeMesaIF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Tenis de mesa   Tenis de mesaTenis de message       Tenis de mesa        Tenis de mesa       Tenis de mesa  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTTenisdeMesaJM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeTenisdeMesa1 = $_POST['nomeTenisdeMesa1'];
$nomeTenisdeMesa2 = $_POST['nomeTenisdeMesa2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

if(empty($nomeTenisdeMesa1)){
}else{
//NomeTenis de Mesa1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa1' , 'Tenis de Mesa', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}

if(empty($nomeTenisdeMesa2)){
}else{
//NomeTenis de Mesa2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa2' , 'Tenis de Mesa', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}


if($ttenis1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Tenis de Mesa' AND categoria = 'Juvenil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Tenis de Mesa</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>

                  ';

if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{            

      echo '       <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';

}
    

      echo '                            
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTTenisdeMesaJM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Tenis de mesa   Tenis de mesaTenis de message       Tenis de mesa        Tenis de mesa       Tenis de mesa  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTTenisdeMesaJF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeTenisdeMesa1 = $_POST['nomeTenisdeMesa1'];
$nomeTenisdeMesa2 = $_POST['nomeTenisdeMesa2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";

if(empty($nomeTenisdeMesa1)){
}else{
//NomeTenis de Mesa1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa1' , 'Tenis de Mesa', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}

if(empty($nomeTenisdeMesa2)){
}else{
//NomeTenis de Mesa2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeTenisdeMesa2' , 'Tenis de Mesa', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
$ttenis1 = "True";
}


if($ttenis1 ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Tenis de Mesa' AND categoria = 'Juvenil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Tenis de Mesa</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>

                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{            

      echo '       <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeTenisdeMesa2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';

}
    

      echo '                            
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTTenisdeMesaJF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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









<!-- Atletismo - Arremesso de Pelota   Atletismo - Arremesso de PelotaTenis de message       Atletismo - Arremesso de Pelota        Atletismo - Arremesso de Pelota       Atletismo - Arremesso de Pelota  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoAPelotaMM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoAPelota1 = $_POST['nomeAtletismoAPelota1'];
$nomeAtletismoAPelota2 = $_POST['nomeAtletismoAPelota2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

if(empty($nomeAtletismoAPelota1)){
}else{
//NomeAtletismo - Arremesso de Pelota1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPelota1' , 'Atletismo - Arremesso de Pelota', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoAPelota2)){
}else{
//NomeAtletismo - Arremesso de Pelota2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPelota2' , 'Atletismo - Arremesso de Pelota', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Arremesso de Pelota' AND categoria = 'Mirim'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Arremesso de Pelota</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPelota1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
  echo'
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPelota2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>

                                
                  
';}

echo '      <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoAPelotaMM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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










<!-- Atletismo - Arremesso de Pelota   Atletismo - Arremesso de PelotaTenis de message       Atletismo - Arremesso de Pelota        Atletismo - Arremesso de Pelota       Atletismo - Arremesso de Pelota  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoAPelotaMF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoAPelota1 = $_POST['nomeAtletismoAPelota1'];
$nomeAtletismoAPelota2 = $_POST['nomeAtletismoAPelota2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";

if(empty($nomeAtletismoAPelota1)){
}else{
//NomeAtletismo - Arremesso de Pelota1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPelota1' , 'Atletismo - Arremesso de Pelota', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoAPelota2)){
}else{
//NomeAtletismo - Arremesso de Pelota2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPelota2' , 'Atletismo - Arremesso de Pelota', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Arremesso de Pelota' AND categoria = 'Mirim'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Arremesso de Pelota</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPelota1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
  echo'
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPelota2" class="form-control"  placeholder="Feminino" />
                  </div>
                  </div>

                                
                  
';}

echo '      <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoAPelotaMF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Atletismo - Arremesso de Peso   Atletismo - Arremesso de PesoTenis de message       Atletismo - Arremesso de Peso        Atletismo - Arremesso de Peso       Atletismo - Arremesso de Peso  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoAPesoIM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoAPeso1 = $_POST['nomeAtletismoAPeso1'];
$nomeAtletismoAPeso2 = $_POST['nomeAtletismoAPeso2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

if(empty($nomeAtletismoAPeso1)){
}else{
//NomeAtletismo - Arremesso de Peso1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso1' , 'Atletismo - Arremesso de Peso', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if(empty($nomeAtletismoAPeso2)){
}else{
//NomeAtletismo - Arremesso de Peso2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso2' , 'Atletismo - Arremesso de Peso', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Arremesso de Peso' AND categoria = 'Infantil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;

}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Arremesso de Peso</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>
                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
  echo '          <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div> ';
}
                  echo '                              
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoAPesoIM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Atletismo - Arremesso de Peso   Atletismo - Arremesso de PesoTenis de message       Atletismo - Arremesso de Peso        Atletismo - Arremesso de Peso       Atletismo - Arremesso de Peso  -->



 <?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoAPesoIF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoAPeso1 = $_POST['nomeAtletismoAPeso1'];
$nomeAtletismoAPeso2 = $_POST['nomeAtletismoAPeso2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";

if(empty($nomeAtletismoAPeso1)){
}else{
//NomeAtletismo - Arremesso de Peso1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso1' , 'Atletismo - Arremesso de Peso', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if(empty($nomeAtletismoAPeso2)){
}else{
//NomeAtletismo - Arremesso de Peso2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso2' , 'Atletismo - Arremesso de Peso', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Arremesso de Peso' AND categoria = 'Infantil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;

}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Arremesso de Peso</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>
                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
  echo '          <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div> ';
}
                  echo '                              
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoAPesoIF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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






<!-- Atletismo - Arremesso de Peso   Atletismo - Arremesso de PesoTenis de message       Atletismo - Arremesso de Peso        Atletismo - Arremesso de Peso       Atletismo - Arremesso de Peso  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoAPesoJM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoAPeso1 = $_POST['nomeAtletismoAPeso1'];
$nomeAtletismoAPeso2 = $_POST['nomeAtletismoAPeso2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";

if(empty($nomeAtletismoAPeso1)){
}else{
//NomeAtletismo - Arremesso de Peso1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso1' , 'Atletismo - Arremesso de Peso', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if(empty($nomeAtletismoAPeso2)){
}else{
//NomeAtletismo - Arremesso de Peso2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso2' , 'Atletismo - Arremesso de Peso', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Arremesso de Peso' AND categoria = 'Juvenil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;

}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Arremesso de Peso</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>
                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
  echo '          <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div> ';
}
                  echo '                              
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoAPesoJM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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






<!-- Atletismo - Arremesso de Peso   Atletismo - Arremesso de PesoTenis de message       Atletismo - Arremesso de Peso        Atletismo - Arremesso de Peso       Atletismo - Arremesso de Peso  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoAPesoJF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoAPeso1 = $_POST['nomeAtletismoAPeso1'];
$nomeAtletismoAPeso2 = $_POST['nomeAtletismoAPeso2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";

if(empty($nomeAtletismoAPeso1)){
}else{
//NomeAtletismo - Arremesso de Peso1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso1' , 'Atletismo - Arremesso de Peso', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if(empty($nomeAtletismoAPeso2)){
}else{
//NomeAtletismo - Arremesso de Peso2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoAPeso2' , 'Atletismo - Arremesso de Peso', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}


require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Arremesso de Peso' AND categoria = 'Juvenil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;

}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Arremesso de Peso</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>
                  ';


if($data >= 1){
   echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
  echo '          <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoAPeso2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div> ';
}
                  echo '                              
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoAPesoJF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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




<!-- Atletismo - Salto em Distância   Atletismo - Salto em DistânciaTenis de message       Atletismo - Salto em Distância        Atletismo - Salto em Distância       Atletismo - Salto em Distância  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoSDistanciaMM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoSDistancia1 = $_POST['nomeAtletismoSDistancia1'];
$nomeAtletismoSDistancia2 = $_POST['nomeAtletismoSDistancia2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismoSDistancia1)){
}else{
//NomeAtletismo - Salto em Distância1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia1' , 'Atletismo - Salto em Distância', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoSDistancia2)){
}else{
//NomeAtletismo - Salto em Distância2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia2' , 'Atletismo - Salto em Distância', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Salto em Distância' AND categoria = 'Mirim'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Salto em Distância</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoSDistanciaMM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Atletismo - Salto em Distância   Atletismo - Salto em DistânciaTenis de message       Atletismo - Salto em Distância        Atletismo - Salto em Distância       Atletismo - Salto em Distância  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoSDistanciaMF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoSDistancia1 = $_POST['nomeAtletismoSDistancia1'];
$nomeAtletismoSDistancia2 = $_POST['nomeAtletismoSDistancia2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismoSDistancia1)){
}else{
//NomeAtletismo - Salto em Distância1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia1' , 'Atletismo - Salto em Distância', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoSDistancia2)){
}else{
//NomeAtletismo - Salto em Distância2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia2' , 'Atletismo - Salto em Distância', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Salto em Distância' AND categoria = 'Mirim'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Salto em Distância</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoSDistanciaMF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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






<!-- Atletismo - Salto em Distância   Atletismo - Salto em DistânciaTenis de message       Atletismo - Salto em Distância        Atletismo - Salto em Distância       Atletismo - Salto em Distância  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoSDistanciaIM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoSDistancia1 = $_POST['nomeAtletismoSDistancia1'];
$nomeAtletismoSDistancia2 = $_POST['nomeAtletismoSDistancia2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismoSDistancia1)){
}else{
//NomeAtletismo - Salto em Distância1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia1' , 'Atletismo - Salto em Distância', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoSDistancia2)){
}else{
//NomeAtletismo - Salto em Distância2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia2' , 'Atletismo - Salto em Distância', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Salto em Distância' AND categoria = 'Infantil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Salto em Distância</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoSDistanciaIM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Atletismo - Salto em Distância   Atletismo - Salto em DistânciaTenis de message       Atletismo - Salto em Distância        Atletismo - Salto em Distância       Atletismo - Salto em Distância  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoSDistanciaIF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoSDistancia1 = $_POST['nomeAtletismoSDistancia1'];
$nomeAtletismoSDistancia2 = $_POST['nomeAtletismoSDistancia2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismoSDistancia1)){
}else{
//NomeAtletismo - Salto em Distância1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia1' , 'Atletismo - Salto em Distância', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoSDistancia2)){
}else{
//NomeAtletismo - Salto em Distância2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia2' , 'Atletismo - Salto em Distância', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Salto em Distância' AND categoria = 'Infantil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Salto em Distância</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoSDistanciaIF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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





<!-- Atletismo - Salto em Distância   Atletismo - Salto em DistânciaTenis de message       Atletismo - Salto em Distância        Atletismo - Salto em Distância       Atletismo - Salto em Distância  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoSDistanciaJM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoSDistancia1 = $_POST['nomeAtletismoSDistancia1'];
$nomeAtletismoSDistancia2 = $_POST['nomeAtletismoSDistancia2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismoSDistancia1)){
}else{
//NomeAtletismo - Salto em Distância1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia1' , 'Atletismo - Salto em Distância', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoSDistancia2)){
}else{
//NomeAtletismo - Salto em Distância2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia2' , 'Atletismo - Salto em Distância', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Salto em Distância' AND categoria = 'Juvenil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Salto em Distância</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoSDistanciaJM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Atletismo - Salto em Distância   Atletismo - Salto em DistânciaTenis de message       Atletismo - Salto em Distância        Atletismo - Salto em Distância       Atletismo - Salto em Distância  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismoSDistanciaJF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismoSDistancia1 = $_POST['nomeAtletismoSDistancia1'];
$nomeAtletismoSDistancia2 = $_POST['nomeAtletismoSDistancia2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismoSDistancia1)){
}else{
//NomeAtletismo - Salto em Distância1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia1' , 'Atletismo - Salto em Distância', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismoSDistancia2)){
}else{
//NomeAtletismo - Salto em Distância2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismoSDistancia2' , 'Atletismo - Salto em Distância', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - Salto em Distância' AND categoria = 'Juvenil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - Salto em Distância</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismoSDistancia2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismoSDistanciaJF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Atletismo - 100m   Atletismo - 100mTenis de message       Atletismo - 100m        Atletismo - 100m       Atletismo - 100m  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo100mMM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo100m1 = $_POST['nomeAtletismo100m1'];
$nomeAtletismo100m2 = $_POST['nomeAtletismo100m2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo100m1)){
}else{
//NomeAtletismo - 100m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m1' , 'Atletismo - 100m', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo100m2)){
}else{
//NomeAtletismo - 100m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m2' , 'Atletismo - 100m', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 100m' AND categoria = 'Mirim'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 100m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo100mMM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Atletismo - 100m   Atletismo - 100mTenis de message       Atletismo - 100m        Atletismo - 100m       Atletismo - 100m  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo100mMF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo100m1 = $_POST['nomeAtletismo100m1'];
$nomeAtletismo100m2 = $_POST['nomeAtletismo100m2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismo100m1)){
}else{
//NomeAtletismo - 100m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m1' , 'Atletismo - 100m', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo100m2)){
}else{
//NomeAtletismo - 100m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m2' , 'Atletismo - 100m', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 100m' AND categoria = 'Mirim'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 100m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo100mMF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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






<!-- Atletismo - 100m   Atletismo - 100mTenis de message       Atletismo - 100m        Atletismo - 100m       Atletismo - 100m  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo100mIM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo100m1 = $_POST['nomeAtletismo100m1'];
$nomeAtletismo100m2 = $_POST['nomeAtletismo100m2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo100m1)){
}else{
//NomeAtletismo - 100m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m1' , 'Atletismo - 100m', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo100m2)){
}else{
//NomeAtletismo - 100m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m2' , 'Atletismo - 100m', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 100m' AND categoria = 'Infantil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 100m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo100mIM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Atletismo - 100m   Atletismo - 100mTenis de message       Atletismo - 100m        Atletismo - 100m       Atletismo - 100m  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo100mIF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo100m1 = $_POST['nomeAtletismo100m1'];
$nomeAtletismo100m2 = $_POST['nomeAtletismo100m2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismo100m1)){
}else{
//NomeAtletismo - 100m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m1' , 'Atletismo - 100m', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo100m2)){
}else{
//NomeAtletismo - 100m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m2' , 'Atletismo - 100m', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 100m' AND categoria = 'Infantil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 100m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo100mIF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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





<!-- Atletismo - 100m   Atletismo - 100mTenis de message       Atletismo - 100m        Atletismo - 100m       Atletismo - 100m  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo100mJM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo100m1 = $_POST['nomeAtletismo100m1'];
$nomeAtletismo100m2 = $_POST['nomeAtletismo100m2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo100m1)){
}else{
//NomeAtletismo - 100m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m1' , 'Atletismo - 100m', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo100m2)){
}else{
//NomeAtletismo - 100m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m2' , 'Atletismo - 100m', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 100m' AND categoria = 'Juvenil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 100m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m1" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m2" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo100mJM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Atletismo - 100m   Atletismo - 100mTenis de message       Atletismo - 100m        Atletismo - 100m       Atletismo - 100m  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo100mJF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo100m1 = $_POST['nomeAtletismo100m1'];
$nomeAtletismo100m2 = $_POST['nomeAtletismo100m2'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismo100m1)){
}else{
//NomeAtletismo - 100m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m1' , 'Atletismo - 100m', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo100m2)){
}else{
//NomeAtletismo - 100m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo100m2' , 'Atletismo - 100m', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 100m' AND categoria = 'Juvenil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 100m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m1" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo100m2" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo100mJF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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




<!-- Atletismo - 400m   Atletismo - 400mTenis de message       Atletismo - 400m        Atletismo - 400m       Atletismo - 400m  -->




<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400MM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo4001)){
}else{
//NomeAtletismo - 400m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'Atletismo - 400m', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//NomeAtletismo - 400m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'Atletismo - 400m', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 400m' AND categoria = 'Mirim'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 400m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400MM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- Atletismo - 400m   Atletismo - 400mTenis de message       Atletismo - 400m        Atletismo - 400m       Atletismo - 400m  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400MF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismo4001)){
}else{
//NomeAtletismo - 400m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'Atletismo - 400m', 'Mirim', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//NomeAtletismo - 400m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'Atletismo - 400m', 'Mirim' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 400m' AND categoria = 'Mirim'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 400m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Mirim (6° e 7° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400MF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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






<!-- Atletismo - 400m   Atletismo - 400mTenis de message       Atletismo - 400m        Atletismo - 400m       Atletismo - 400m  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400IM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo4001)){
}else{
//NomeAtletismo - 400m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'Atletismo - 400m', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//NomeAtletismo - 400m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'Atletismo - 400m', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 400m' AND categoria = 'Infantil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 400m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400IM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Atletismo - 400m   Atletismo - 400mTenis de message       Atletismo - 400m        Atletismo - 400m       Atletismo - 400m  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400IF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismo4001)){
}else{
//NomeAtletismo - 400m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'Atletismo - 400m', 'Infantil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//NomeAtletismo - 400m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'Atletismo - 400m', 'Infantil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 400m' AND categoria = 'Infantil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 400m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Infantil (8° e 9° anos)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400IF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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





<!-- Atletismo - 400m   Atletismo - 400mTenis de message       Atletismo - 400m        Atletismo - 400m       Atletismo - 400m  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400JM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo4001)){
}else{
//NomeAtletismo - 400m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'Atletismo - 400m', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//NomeAtletismo - 400m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'Atletismo - 400m', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 400m' AND categoria = 'Juvenil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 400m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Masculino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Masculino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400JM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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








<!-- Atletismo - 400m   Atletismo - 400mTenis de message       Atletismo - 400m        Atletismo - 400m       Atletismo - 400m  -->



  
<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400JF'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Feminino";


if(empty($nomeAtletismo4001)){
}else{
//NomeAtletismo - 400m1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'Atletismo - 400m', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//NomeAtletismo - 400m2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'Atletismo - 400m', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'Atletismo - 400m' AND categoria = 'Juvenil'  AND sexo = 'Feminino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>Atletismo - 400m</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"Juvenil (Ens. Médio)"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Feminino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Feminino" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Feminino" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400JF" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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







<!-- futebol   futebolTenis de message       futebol        futebol       futebol  -->



<?php
$usuarioo = $_SESSION['usuarioNome'] ;


if (isset($_POST['BTAtletismo400JM'])){

//Conectar ai banco de dados
require("conectdb.php");
//data 

//pegando os dados
$nomeAtletismo4001 = $_POST['nomeAtletismo4001'];
$nomeAtletismo4002 = $_POST['nomeAtletismo4002'];
$nomeAtletismo4003 = $_POST['nomeAtletismo4003'];

$usuario = $_POST['usuario'];
$evento = $_POST['evento'];
$sexom = "Masculino";


if(empty($nomeAtletismo4001)){
}else{
//Nomefutebol1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4001' , 'futebol', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4002)){
}else{
//Nomefutebol2
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4002' , 'futebol', 'Juvenil' , '$usuario' , '$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}


if(empty($nomeAtletismo4003)){
}else{
//Nomefutebol1
$sqlinsert = "INSERT INTO alunos (id, nome, modalidade, categoria, usuario, sexo, evento) VALUES ('' , '$nomeAtletismo4003' , 'futebol', 'Juvenil', '$usuario' ,'$sexom', '$evento')";
mysql_query($sqlinsert) or die ("Erro ao salvar, tente novamente");
  $tateltismo = "True";
}

if($tateltismo ==  "True"){
echo "<script>success();</script>";
echo '<meta http-equiv="refresh" content="1;url=cadalunos.php">';
}else{ echo "<script>error();</script>";
}
}



require("conectdb.php");
$sql = mysql_query("SELECT * FROM alunos WHERE usuario = '$usuarioo' AND modalidade = 'futebol' AND categoria = 'Juvenil'  AND sexo = 'Masculino' AND evento = '$evento' ");
$data = mysql_num_rows($sql);
if($data >= 2){
  $count++;
}else{

echo ' <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header"><b>futebol</b></h3>
            </div>
            <div class="porlets-content">
              <form name="usuario" action="" class="form-horizontal row-border" method="post" parsley-validate novalidate>

                <ul>
                      <h4><li><b>Categoria:</b>"02 alunos Mirim/Infantil e 01 aluno Juvenil"</li></h4>
                </ul>

                <h4> <p class="text-center space_p">Masculino</p></h4>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 1</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4001" class="form-control" required placeholder="Masculino (Mirim/Infantil)" />
                  </div>
                  </div>';

if($data >= 1){
 echo ' <h4> <p class="text-center space_p">Já existe um aluno cadastrado</p></h4>';
}else{
echo '
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 2</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4002" class="form-control" placeholder="Masculino (Mirim/Infantil)" />
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Nome 3</label>
                  <div class="col-sm-6">
                    <input type="text" name="nomeAtletismo4003" class="form-control" placeholder="Masculino (Juvenil)" />
                  </div>
                  </div>
';}
echo '
                                
                   <input TYPE="hidden" name="evento" value="'.$evento.'"/>
                   <input TYPE="hidden" name="usuario" value="'.$usuarioo.'"/>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="BTAtletismo400JM" class="btn btn-primary">Salvar  <i class="fa  fa-floppy-o"></i> </button>
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
if($count >= 53){
exibeecho();
}
?>


