

<style>
  th, td{
    text-align: left;
  }
  .h2g{
    color: blue;
    font-size: 26px;
  }
  .pg{
    line-height: 2px;
  }
</style>

<?php 
include("connect.php");

?>




<!-- //resultados buscador -->
<?php 
include("../DBConnection/connect.php")

if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
if (!isset($_REQUEST["mostrar_todo"])){$_REQUEST["mostrar_todo"] = '';}

if(!empty($_POST))
{

        // resaltamos el resultado
        function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>'){
            return ($string !== '' && $frase !== '')
            ? preg_replace('/('.preg_quote($frase, '/').')/i'.('true' ? 'u' : ''), $taga.'\\1'.$tagb, $string)
            : $string;
             }
    
  
      $aKeyword = explode(" ", $_POST['buscar']);
      $filtro = "WHERE nombres LIKE LOWER('%".$aKeyword[0]."%') OR descripcion LIKE LOWER('%".$aKeyword[0]."%')";
      $query ="SELECT * FROM pacientes WHERE nombres LIKE LOWER('%".$aKeyword[0]."%') 
      OR aPaterno LIKE LOWER('%".$aKeyword[0]."%' OR aMaterno LIKE LOWER('%".$aKeyword[0]."%'))";
  

     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " 
            OR nombres LIKE '%" . $aKeyword[$i] . "%' 
            OR aPaterno LIKE '%" . $aKeyword[$i] . "%'
            OR aMaterno LIKE '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $connect->query($query);
     $numero = mysqli_num_rows($result);
     if (!isset($_POST['buscar'])){
     echo "Has buscado la palabra:<b> ". $_POST['buscar']."</b>";
     }

     if( mysqli_num_rows($result) > 0 AND $_POST['buscar'] != '') {
        $row_count=0;
        echo "<br>Resultados encontrados:<b> ".$numero."</b>";
        echo "<br><br><table class='table table-striped'>
        <thead>
        <tr style='background-color:midnightblue; color:#FFFFFF;'>
        <th> # </th>        
        <th> Nombres </th>
        <th> ApellidoP</th>
        <th> ApellidoM</th>
        <th> Editar</th>
        </tr>
        </thead>
        ";
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr>
            <td>".$row_count." </td>
            <td>". resaltar_frase($row['nombres'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['aPaterno'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['aMaterno'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['aMaterno'] ,$_POST['buscar']) . "</td>
            </tr>";
        }
        echo "</table>";
	
    }
    else {
      //mostramos todos los resultados
      if( $_REQUEST["mostrar_todo"] == 'ok') {
        $row_count=0;
        echo "<br>Resultados encontrados:<b> ".$numero."</b>";
        echo "<br><br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr>
            <td>".$row_count." </td>
            <td>". resaltar_frase($row['nombres'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['aPaterno'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['aMaterno'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['aMaterno'] ,$_POST['buscar']) . "</td>
            </tr>";
        }
        echo "</table>";
	
    }
    }
}
?>