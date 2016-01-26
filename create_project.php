<?php
    //set server connection
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    //Connection successfull
    #fetch from DB
    $conn->close();
?>
<!DOCTYPE html>
<!--
Add jQuery here to see right away, what was added while adding to the Database
-->
<html>
    <head>
        <title>Create Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Create Project-->
        <div class="form-group">
            <label class="col-md-3 control-label">Create A New Project</label>
            <div class="col-md-6">
                <form action="../../apps/create_project.php" method="POST">
                    <input type="text" name="name" id="name" class="form-control" style="width:50%;" required=""> 
                    <button type="submit" class="btn blue" id="submit">Submit</button>
                </form>
            </div>
	</div>
        <!--ENE - Create Project-->
        
        <!--Display Projects-->
        <?php foreach($key as $value): ?>
            
            <div class="panel-body bg-warning">
                <div class="clearfix">
		<h4 class="col-md-9 col-sm-8 col-xs-9 navbar-btn">
			<span class="show row navbar-btn">
			  
			<a href="#/board/59" title="bla2" class="htruncate btn-block">
                            Company Name
			</a>
			  
                    </span>
	  	</h4> 		
                </div>
                <div class="js-board-inner-view"></div>
	<ul class="list-unstyled chart-block">
	
		<li class="list-group-item clearfix" style="background:#34495e">
			
			<a class="show" href="">
			    <div id="doughnutChart" class="chart js-chart">
                                <svg width="125" height="125" viewBox="0 0 125 125" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M 62.54499245915643 6.000017914351346 A 56.5 56.5 0 1 1 62.54017260488015 6.0000142817556394 Z M 62.52515231677231 27.125008941895672 A 35.375 35.375 0 1 0 62.52817005739219 27.125011216286353 Z" fill="rgba(0,0,0,0.5)"></path>
                                <g opacity="0.9999998780673678"><path stroke-width="1" stroke="#0C1013" fill="#DB7093" data-order="0" d="M 62.5 10 A 52.5 52.5 0 0 1 114.99999999999903 62.49998994460513 L 101.87499999999928 62.49999245845385 A 39.375 39.375 0 0 0 62.5 23.125 Z"></path>
                                <path stroke-width="1" stroke="#0C1013" fill="#F47564" data-order="1" d="M 114.99999999999903 62.49998994460513 A 52.5 52.5 0 0 1 82.59089645661973 111.00366872278204 L 77.5681723424648 98.87775154208653 A 39.375 39.375 0 0 0 101.87499999999928 62.49999245845385 Z"></path>
                                <path stroke-width="1" stroke="#0C1013" fill="#EDA287" data-order="2" d="M 82.59089645661973 111.00366872278204 A 52.5 52.5 0 0 1 25.376911763305266 99.62312378788425 L 34.657683822478944 90.34234284091318 A 39.375 39.375 0 0 0 77.5681723424648 98.87775154208653 Z"></path>
                                <path stroke-width="1" stroke="#0C1013" fill="#FAC1AD" data-order="3" d="M 25.376911763305266 99.62312378788425 A 52.5 52.5 0 0 1 25.376869101881944 25.376918873547247 L 34.65765182641145 34.65768915516044 A 39.375 39.375 0 0 0 34.657683822478944 90.34234284091318 Z"></path>
                                <path stroke-width="1" stroke="#0C1013" fill="#FFE4E1" data-order="4" d="M 25.376869101881944 25.376918873547247 A 52.5 52.5 0 0 1 62.499959778420525 10.000000000015405 L 62.49996983381539 23.125000000011553 A 39.375 39.375 0 0 0 34.65765182641145 34.65768915516044 Z"></path></g>
                                </svg><div class="doughnutSummary" style="width: 52.5px; height: 52.5px; margin-left: -26.25px; margin-top: -26.25px;">
                                        <p class="doughnutSummaryTitle"></p>
                                        <p class="doughnutSummaryNumber" style="opacity: 1;">16</p>
                                    </div>
                            </div>
			</a>
		</li>
	</ul>
  </div>
        
        <?php endforeach;?>
        <!--END - Display Project-->
    </body>
</html>
