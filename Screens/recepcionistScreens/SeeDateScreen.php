<?php
  include("../../Components/requeriments.php");
  include("../../Components/recepcionistComponents/recepcionistStyles.php");
  include("../../Components/recepcionistComponents/nav-container.php");
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
                <div class="option">Lista de Citas</div>

            </div>
            <div class="listPatientDate">
                <form>
                    <input type="text" name="search" method="post">
                    <button type="submit" name="submit">Buscar</button>
                </form>
            </div>
            <div class="formContainer">
                <table class="table">
                    <tr class="tableTR">
                        <th class="tableTH">Nombre</th>
                        <th class="tableTH">Fecha</th>
                        <th class="tableTH">Hora</th>
                        <th class="tableTH">Acción</th>
                    </tr>
                    <?php
                        include("../../DBConnection/connect.php");
                        $query = "SELECT COUNT(*) FROM pacientes p INNER JOIN citas c on p.Id_Paciente = c.Id_Paciente";
                        if($result = $connection->query($query)){
                            if($result->fetchColumn() > 0){
                                $query = "SELECT c.Id_Cita, p.Id_Paciente, nombres, aPaterno, aMaterno, fecha_Cita, hora_Cita
                                    FROM pacientes p INNER JOIN citas c on p.Id_Paciente = c.Id_Paciente";
                                foreach($connection->query($query) as $fila){
                                    ?>
                    <tr class="tableTR">
                        <td class="tableTD"><?php echo $fila['nombres']." ".$fila['aPaterno']." ".$fila['aMaterno'];?>
                        </td>
                        <td class="tableTD"><?php echo $fila['fecha_Cita']?></td>
                        <td class="tableTD"><?php echo $fila['hora_Cita']?></td>
                        <td class="tableTD">
                            <a class="link_a" href="UpdateDateScreen.php?Id=<?php echo $fila['Id_Cita']?>">Reagendar</a>
                            |
                            <a class="link_a" href="DeleteDateScreen.php?Id=<?php echo $fila['Id_Cita']?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                                }
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
  include("../../Components/footer-container.php");
  include("../../Components/endCode.php");
?>