<!DOCTYPE html>
<?php
/**
* Data Section 1
*/
$daysOfTheWeekOpen = array(1=>"Mon",2=>"Tue",3=>"Wed",4=>"Thur",5=>"Fri");
$openingHours = array("Mon"=>9,"Tue"=>9,"Wed"=>9,"Thur"=>12,"Fri"=>9);
$closingHours = array("Mon"=>5,"Tue"=>5,"Wed"=>5,"Thur"=>4.5,"Fri"=>4.5);


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reliable Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing messages */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
		background: url(img/sue.jpg);
		color: black;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
	  
	  td,th{
	  height:35px;
	  padding:6px;
	  }
	  
	  
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="quote.php">Quote</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Reliable Repair</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Chicago's No#1 Appliance Repair</h1>
        <p class="lead">We offer repairs of many household appliances</p>
        <a class="btn btn-large btn-success" href="quote.php">Request a quote today!</a>
      </div>

      <hr>

      <div class="row-fluid marketing">
		<h1>Reliable Repair</h1>
        <div class="span6">
		<?php
		//section 1
		//printing the table
		print "<table border='5' width='100%'>".PHP_EOL;
			print "<tr>";
			print "<th> Days </th>";
			print "<th> Opening Hours </th>";
			print "<th> Last Dropoff </th>";
			print "</tr>";
			
			//showing the days using the arrays defined above
			for($i=1;$i<=count($daysOfTheWeekOpen);$i++){
				
				print "<tr><td>";
				print $daysOfTheWeekOpen[$i];
				print "</td>";
				
					print "<td>";
					//showing the opening and closing hours by calling the value from the array within an array
							// checking if the time is greater than 12 so change the AM to PM
							if($openingHours[$daysOfTheWeekOpen[$i]]<12){
								print "Open ".$openingHours[$daysOfTheWeekOpen[$i]]. " AM - " . $closingHours[$daysOfTheWeekOpen[$i]]. " PM";
							}
							else{
								print "Open ".$openingHours[$daysOfTheWeekOpen[$i]]. " PM - " . $closingHours[$daysOfTheWeekOpen[$i]]. " PM";
							}
					
					print "</td>";
					
					print "<td>";
					//printing the last drop off time by checking if the store is open for more than 6 hours
						if((($closingHours[$daysOfTheWeekOpen[$i]]+12)-($openingHours[$daysOfTheWeekOpen[$i]])) > 6 ){
						print "Last Dropoff " . ($closingHours[$daysOfTheWeekOpen[$i]]-3) . " PM";
						}
						else{
						print "No Dropoff";
						}
						
					print "</td>";
				
				print "</tr>";
				
			}
			//store is closed on saturday and sunday
			print "<tr><td>Sat</td><td>Closed</td><td>----</td></tr>";
			print "<tr><td>Sun</td><td>Closed</td><td>----</td></tr>";
			print "</table>";
		?>
        </div>

        <div class="span6">
        <?php
		//section 2
		?>
		</div>
      </div>
	  

	  <div class="row-fluid">
		<h2>Contact information</h2>
		<?php 
		//section 3
		//linking the address to the google maps
		print "<h4>Address : <a href='https://goo.gl/maps/Trbpw' target='_blank'>1717 N Larrabee St, Chicago, IL 60614-5621</a></h4>";
		?>
	  </div>
	  
	  <div class="row-fluid">
		<?php 
		//section 4
		?>
	  </div>

      <div class="footer">
        <?php
		//section 5
		?>
      </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
