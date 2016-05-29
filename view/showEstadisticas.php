<?php
include ("header.php");

if (checkSession()) {
    include_once("../model/DAO/classDB.php");
    require_once('Structures/DataGrid.php');
    include("../controller/controllerIdDropdowns.php");
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
<a href="mainUser.php" id="volver"><button class="btn btn-info">Volver</button></a>
<script type="text/javascript">

window.onload = function () {
    
  $.ajax({
            async:true,
            //type: "GET",
            dataType: "json",
            url:"../controller/getStatistic.php", 
            success:tornada
           }); 

function tornada(dades){
    //document.write(dades);
    cat1 = dades[0];
    cat2 = dades[2];
    cat3 = dades[4];
    cat4 = dades[6];
    cat5 = dades[8];

    num1= parseInt(dades[1]);
    num2= parseInt(dades[3]);
    num3= parseInt(dades[5]);
    num4= parseInt(dades[7]);
    num5= parseInt(dades[9]);

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme1",//theme1
        title:{
            text: "Numero de POIS en los Países"              
        },
        animationEnabled: false,   
        data: [              
        {
            type: "doughnut",
            dataPoints: [
                { label: cat1,  y: num1  },
                { label: cat2, y: num2  },
                { label: cat3, y: num3  },
                { label: cat4, y: num4  },
                { label: cat5, y: num5  }
               
            ]
        }
        ]
    });
    chart.render();
}
}
</script>
<div class="container">   
        <div class="row content">
            <div class="col-md-12 text-center"> 
    <h2>Estadísticas</h2>
    <hr>
    <div class="cuadro">
        <p id="estadisticas">
        <script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>  
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </p>
    </div>
</div>
</div>
</div>
<?php
    } else {
        header("Location: formErrorSession.php");
    }
    include ("footer.php");
    ?>