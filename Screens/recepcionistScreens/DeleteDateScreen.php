<?php
  include("../../Components/requeriments.php");
  include("../../Components/recepcionistComponents/recepcionistStyles.php");
  include("../../Components/recepcionistComponents/nav-container.php");
  include("../../DBConnection/connect.php");

  if(empty($_GET['Id'])){
    header('Location: SeeDateScreen.php');
  } else{
    $idDate = $_GET['Id'];
    $query = "SELECT nombres, aPaterno, aMaterno, fecha_Cita, hora_Cita FROM citas c INNER JOIN pacientes p on c.Id_Paciente = p.Id_Paciente WHERE Id_Cita = $idDate";
    if($result = $connection->query($query)){
      if($result->fetchColumn() > 0){
        foreach($connection->query($query) as $fila){
          $name = $fila['nombres']." ".$fila['aPaterno']." ".$fila['aMaterno'];
          $fecha = $fila['fecha_Cita'];
          $hora = $fila['hora_Cita'];
        }
      }
    }
  }
?>
<div class="bodyContainer">
    <div class="optionsContainer">
        <?php
        include("../../Components/recepcionistComponents/barOptions-container.php");
      ?>
    </div>
    <div class="showsContainer">
        <div class="screenOptionContainer">
            <div class="nameOptionContainer">
                <div class="option">Anular una Cita</div>
            </div>
            <div class="formContainer">
                <div class="formAdd">
                    <form action="../../functions/recepcionistFunctions/recepcionistDateDelete.php" method="post" class="form">
                        <div class="form">
                            <input name="idDate" value="<?php echo $idDate ?>" hidden />
                            <input placeholder="Nombre(s)" value="<?php echo $name?>" class="inputTextDesign"
                                disabled />
                            <input type="date" placeholder="Fecha" disabled class="inputTextDesign"
                                value="<?php echo $fecha?>" />
                            <input type="time" placeholder="Hora" disabled value="<?php echo $hora?>"
                                class="inputTextDesign" />
                            <input type="submit" name="submit" value="Eliminar" class="buttonAdd" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  include("../../Components/footer-container.php");
  include("../../Components/endCode.php");
?>