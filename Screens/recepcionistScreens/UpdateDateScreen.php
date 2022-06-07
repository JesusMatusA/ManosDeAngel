<?php
  include("../../Components/requeriments.php");
  include("../../Components/recepcionistComponents/recepcionistStyles.php");
  include("../../Components/recepcionistComponents/nav-container.php");

  include("../../DBConnection/connect.php");

  if(empty($_GET['Id'])){
    header('Location: SeeDateScreen.php');
  } else{
    $idDate = $_GET['Id'];
    $query = "SELECT nombres, aPaterno, aMaterno, fecha_Cita, hora_Cita FROM citas c 
      INNER JOIN pacientes p on c.Id_Paciente = p.Id_Paciente WHERE Id_Cita = $idDate";
  
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
  if(!empty($_POST)){
    $Ufecha = $_POST['patientDateUpdate'];
    $Uhora = $_POST['patientTimeDateUpdate'];
    $query = "UPDATE citas SET fecha_Cita = '$Ufecha', hora_Cita = '$Uhora' WHERE Id_Cita = $idDate";
    if($result = $connection->query($query)){
      header("Location: SeeDateScreen.php");
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
                <div class="option">Reagendar una cita</div>
            </div>
            <div class="formContainer">
                <div class="formAdd">
                    <form action="" method="post" class="form">
                        <div class="form">
                            <input type="text" placeholder="Nombre(s)" name="namePatient" value="<?php echo $name?>"
                                class="inputTextDesign" disabled />
                            <input type="date" placeholder="Fecha" name="patientDateUpdate" class="inputTextDesign"
                                value="<?php echo $fecha?>" />
                            <input type="time" placeholder="Hora" name="patientTimeDateUpdate"
                                value="<?php echo $hora?>" class="inputTextDesign" />
                            <input type="submit" name="submit" value="Reagendar" class="buttonAdd" />
                              <!-- <span>Reagendar</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                                    <path
                                        d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                        fill="black"></path>
                                </svg>
                            </input>
                            <button type="button" name="btnAdd">
                                
                            </button> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="underContainer"></div>
        </div>
    </div>
</div>
<?php
  include("../../Components/footer-container.php");
  include("../../Components/endCode.php");
?>