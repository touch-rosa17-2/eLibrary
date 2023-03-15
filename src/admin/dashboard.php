<?php
    include './configStyle.php';
    include './sideMenu.php';
    
    //visitior
    $dataPoints = array(
        array("x" => 1483381800000 , "y" => 650),
        array("x" => 1483468200000 , "y" => 700),
        array("x" => 1483554600000 , "y" => 710),
        array("x" => 1483641000000 , "y" => 658),
        array("x" => 1483727400000 , "y" => 734),
        array("x" => 1483813800000 , "y" => 963),
        array("x" => 1483900200000 , "y" => 847),
        array("x" => 1483986600000 , "y" => 853),
        array("x" => 1484073000000 , "y" => 869),
        array("x" => 1484159400000 , "y" => 943),
        array("x" => 1484245800000 , "y" => 970),
        array("x" => 1484332200000 , "y" => 869),
        array("x" => 1484418600000 , "y" => 890),
        array("x" => 1484505000000 , "y" => 930)
    );

    //popular book
    $popularBook = array( 
        array("y" => 7,"label" => "March" ),
        array("y" => 12,"label" => "April" ),
        array("y" => 28,"label" => "May" ),
        array("y" => 18,"label" => "June" ),
        array("y" => 41,"label" => "July" )
    );
    
 

?>
<div class="container-dashboard">
    <h1 class="dashTitle">
        Dashboard
        <i class="fa fa-solid fa-dashboard"></i>
    </h1>
    <div class="body-dashboard ">
        <div class="total-items grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
            <div class="total-books ">
                <div class="total-box">
                    <i class="fa fa-book"></i>
                </div>
                <div class="title-total">
                    <p>Total Book</p>
                    <span>90</span>
                </div>
            </div>
            <div class="total-books">
                <div class="total-box fine">
                    <i class="fa fa-money"></i>
                </div>
                <div class="title-total">
                    <p>Fine</p>
                    <span>$ 90</span>
                </div>
            </div>
            <div class="total-books mt-5 sm:mt-5 lg:mt-0">
                <div class="total-box borrow">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="title-total">
                    <p>Borrow</p>
                    <span>90</span>
                </div>
            </div>
            <div class="total-books mt-5 sm:mt-5 lg:mt-0">
                <div class="total-box users">
                    <i class="fa fa-users"></i>
                </div>
                <div class="title-total">
                    <p><a href="./mngUser.php">Users</a></p>
                    <span>90</span>
                </div>
            </div>
            <!-- <div class="total-fine"></div>
            <div class="total-borrow"></div>
            <div class="total-users"></div> -->
        </div>
        <div class="chart">
            <div class="visitor">
                <div id="chartContainer" class="chartVisitor"></div>
                <!-- <div id="chatContainerPopularBook" class="chartVisitor"></div> -->
            </div>
            <div class="popularBook">
                <!-- <i class="fa fa-chart"></i>
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <i class="fa fa-car"></i>
                <i class="far fa-chart-line-down"></i> -->
            </div>
                        
            
        </div>
    </div>
</div>

<script>
    
    // import CanvasJS from 'canvasjs';
    // var CanvasJS = require('canvasjs');

    // visitor
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: "Site Traffic"
        },
        axisX: {
            valueFormatString: "DD MMM"
        },
        axisY: {
            title: "Total Number of Visits",
            includeZero: true,
            maximum: 2000
        },
        data: [{
            type: "splineArea",
            color: "#6599FF",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM",
            yValueFormatString: "#,##0 Visits",
            dataPoints: <?php echo json_encode($dataPoints); ?>
        }]
    });
    
    chart.render();
    
    }


</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- <script src="../../node_modules/canvasjs/dist/canvasjs.min.js"></script> --> -->