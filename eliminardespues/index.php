<?php
session_start();
if (isset($_SESSION['suser'])){

}else{
echo "Favor De Iniciar Sesion";
die();
}
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tareas IG</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="functions.js"></script>
    <script>
        var choice="general";
window.onload=func();
function preenviar(){
   let contentjs = document.getElementById("content"); 
 document.form1.submit();
}

function fecha(){

    let fechai = document.getElementById("fechai"); 
    let fechaf = document.getElementById("fechaf");    
    let contentjs = document.getElementById("content");
    let titlejs = document.getElementById("titulo");
    if (fechaf.value!=null & fechai.value!=null & contentjs.value!="" & titlejs.value!="") {
        try{

let fechayf=fechaf.value;
var fechafinal=fechayf.split("-");
var diaf=fechafinal[2];
var mesf=fechafinal[1];
var anof=fechafinal[0];


let fechayi=fechai.value;
var fechainicial=fechayi.split("-");
var diai=fechainicial[2];
var mesi=fechainicial[1];
var anoi=fechainicial[0];
var enviar = document.getElementById("btnenviar");

if (diaf!=null & mesf!=null & anof!=null & diai!=null & mesi!=null & anoi!=null){
    if (parseInt(anof) == parseInt(anoi)){
         if (parseInt(mesf) == parseInt(mesi)){
            if (parseInt(diaf) == parseInt(diai)){            
                alert("Seleccione Una Fecha Final Mayor A La Inicial");
                
             }
             if (parseInt(diaf) > parseInt(diai)){
                 preenviar();                      
                 
             }
             if (parseInt(diaf) < parseInt(diai)){            
                alert("Seleccione Una Fecha Final Mayor A La Inicial");
                
             }

         }
         if (parseInt(mesf) > parseInt(mesi)){                                
                
                preenviar();
         }
         if (parseInt(mesf) < parseInt(mesi)){            
            alert("Seleccione Una Fecha Final Mayor A La Inicial");
            
         }
    }
    if (parseInt(anof) > parseInt(anoi)){
         
         preenviar();
    }
    if (parseInt(anof) < parseInt(anoi)){          
        alert("Seleccione Una Fecha Final Mayor A La Inicial");
        
    }   
}else
{
    alert("Ingrese una Fecha Valida");
}
        }catch(err){
         }
    }else{
        alert("Favor De Llenar Todos Los Campos");
    }
}




    function func(){
    let combo = document.getElementById("lista");
    var radio = document.getElementsByName("radios");
    let divalumno=document.getElementById("divalumno");
    let divgrado=document.getElementById("divgrado");
    let divnivel=document.getElementById("divnivel");
    let seleccione=document.getElementById("seleccione");
    var cmbalumno=document.getElementById("cmbalumno").selectedIndex="0";
    var cmbgrado=document.getElementById("cmbgrado").selectedIndex="0";
    var cmbnivel=document.getElementById("cmbnivel").selectedIndex="0";
   



    let len= radio.length;
    for (let i=0;i<len;i++) {
    if(radio[i].checked){
         choice=radio[i].value;        
    }  
}




switch(choice) {
    case "alumno":
        divalumno.style.display="inline";
        divgrado.style.display="none";
        divnivel.style.display="none";
        seleccione.style.display="inline";
        break;

    case "grado":
        divalumno.style.display="none";
        divgrado.style.display="inline";
        divnivel.style.display="none";
        seleccione.style.display="inline";
        break;

    case "nivel":
        divalumno.style.display="none";
        divgrado.style.display="none";
        divnivel.style.display="inline";
        seleccione.style.display="inline";
        break;

    case "general":
        divalumno.style.display="none";
        divgrado.style.display="none";
        divnivel.style.display="none";
        seleccione.style.display="none";        
        break;

    default:

    break;

    
   }     
}
       
              
    </script>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">

</head>
<body>
    <div>
        <span><h1>Emitir Tarea</h1></span>
        
        <form action="posttarea.php" method="Post" name="form1">


        <div class="izquierdo">
            <input type="hidden" name="id" value="<?php echo $_SESSION['suser']?> ">             
        <label>Seleccione Grupo</label>
        <br>
        <div id="divgrupo">
            <select name="cmbgrupo" id="cmbgrupo">
            <option value="0">Seleccionar</option>
            <?php
            
            include '../../conexion.php';
            $sentenciandoc="SELECT *FROM tbl_docentes where id_docente={$_SESSION['sadmin']}";
            $resultado = $conexion -> query($sentenciandoc);
            $filas = $resultado -> fetch_array();
            $ndocente=$filas[2].$filas[1];     

            $sentencia="SELECT tbl_grupos.id_grupo,tbl_grupos.nombre,tbl_grupos.nivel,tbl_grupos.grado,dce.a_paterno,dce.nombre,dci.a_paterno,dci.nombre FROM tbl_grupos
         INNER JOIN tbl_docentes dce on tbl_grupos.id_docente_E=dce.id_docente
         INNER JOIN tbl_docentes dci on tbl_grupos.id_docente_i=dci.id_docente AND tbl_grupos.existe=1 AND (tbl_grupos.id_docente_E={$_SESSION['sadmin']} or tbl_grupos.id_docente_i={$_SESSION['sadmin']})";

            $resultado = $conexion -> query($sentencia);
            while($filas = $resultado -> fetch_array()){

                if($ndocente==$filas[4].$filas[5]){
                    $doc_tipo="Grupo Español";
                }
                if($ndocente==$filas[6].$filas[7]){
                    $doc_tipo="Grupo Inglés";
                }
                if($filas[2]==1){
                    $filas[2]="Kinder";
                }
                if($filas[2]==2){
                    $filas[2]="Primaria";
                }
                echo "<option value='".$filas[0]."'>".$filas[2]." ".$filas[3]."".$filas[1]." ".$doc_tipo."</option>";
            } 
            ?>
        </select>
        </div>

         <label>Seleccione Materia</label>
        <br>
        <div id="divmateria">
            <select name="cmbmateria" id="cmbmateria">
            <option value="0">Seleccionar</option>
        </select>
    </div>
    </div>
    </div>            


        <div class="derecho">  
        <label>Titulo De La Tarea: </label>
        <input type="input" name="titulo" id="titulo" placeholder="Titulo" maxlength="50" required="">
        <br>
        <label>Descripción: </label>
        <textarea maxlength="1000" placeholder="Asunto" maxlength="50" cols="20" rows="3" required="" name="content" id="content"></textarea>
        <br>
        <label>Fecha De Inicio: </label>
        <input type="input" name="fechain" id="fechain" value="<?php echo date("d-m-Y");?> " disabled="true">

        <br>
        <label>Fecha De Entrega: </label>        
        <input type="date" name="fechaf" id="fechaf" required="">
        <br>   
        <br>
        <input type="hidden" name="fechai" id="fechai" value="<?php echo date("Y-m-d");?> ">
        <input type="hidden" name="id_grupo" value="<?php echo $consulta[0] ?>">     
        <input type="button" name="btnvalidar" onclick="fecha()" value="Enviar Tarea" id="btnenviar">
        <a href="../../bienvenido.php"><button type="button" class="btn-back" id="btn2">Cancelar</button></a>
        </div>   
    </form>   
 </div>    
</body>
</html>