<?php
  include("../../Components/requeriments.php");
  include("../../Components/recepcionistComponents/recepcionistStyles.php");
  include("../../Components/recepcionistComponents/nav-container.php");
  include("../../DBConnection/connect.php");

  if(!empty($_POST)){
    $name = ucwords(strtolower($_POST['namePatient']));
    $middlename = ucwords(strtolower($_POST['middleName']));
    $lastname = ucwords(strtolower($_POST['lastName']));
    $date = $_POST['patientDate'];
    $hour = $_POST['patientTimeDate'];
    $diagnosis = ucfirst(strtolower($_POST['Diagnosis']));

    $query = "SELECT count(*) FROM pacientes WHERE nombres=$name AND aPaterno = $middlename AND aMaterno = $lastname";
    if($result = $connection->query($query)){
      if($result->fetchColumn() > 0){
        $query = "SELECT Id_Paciente FROM paciente WHERE nombres=$name AND aPaterno = $middlename AND aMaterno = $lastname";
        foreach($connection->query($query) as $fila){
          $qry = "INSERT INTO citas(Id_Cita, Id_Paciente, fecha_Cita, hora_Cita, diagnostico) VALUES(null, :idPat, :date, :hour, :diagnosis)"; 
          $stmt = $connection->prepare($qry);
          $stmt->bindParam(':idPat', $fila['Id_Paciente'], PDO::PARAM_INT);
          $stmt->bindParam(':date', $date, PDO::PARAM_STR);
          $stmt->bindParam(':hour', $hour, PDO::PARAM_STR);
          $stmt->bindParam(':diagnosis', $diagnosis, PDO::PARAM_STR);
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
                <div class="option">Agendar una cita</div>
            </div>
            <div class="formContainer">
                <div class="formAdd">
                    <form action="" method="post" class="form">
                        <div class="form">
                            <input type="text" placeholder="Nombre(s) del paciente" name="namePatient" autocapi
                                class="inputTextDesign" />
                            <input type="text" placeholder="Apellido paterno del paciente" name="middleName"
                                class="inputTextDesign" />
                            <input type="text" placeholder="Apellido materno del paciente" name="lastName"
                                class="inputTextDesign" />
                            <input type="date" placeholder="Fecha" name="patientDate" class="inputTextDesign" />
                            <input type="time" placeholder="Hora" name="patientTimeDate" class="inputTextDesign" />
                            <textarea placeholder="Diagnóstico" name="Diagnosis"
                                class="inputTextDesign Diagnosis"></textarea>
                              <!-- <input type="submit" name="submit" value="guardar" class="buttonAdd" /> -->
                            
                            <button class="buttonAdd" name="btnAdd">
                  <span>Agendar</span>
                  <svg
                    width="34"
                    height="34"
                    viewBox="0 0 74 74"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="37"
                      cy="37"
                      r="35.5"
                      stroke="black"
                      stroke-width="3"
                    ></circle>
                    <path
                      d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                      fill="black"
                    ></path>
                  </svg>
                </button>
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