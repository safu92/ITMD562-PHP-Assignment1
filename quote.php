<!DOCTYPE html>
<?php
/**
* Data Section 2
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
		color: white;
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
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="quote.php">Quote</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Reliable Repair</h3>
      </div>

      <hr>

      <div class="row-fluid marketing">
		<h1>Reliable Repair</h1>
        <div class="span6">
		<?php
		//section 6
		//calendar
	 	
		//current time
		$date=time();
		
		//todays date
		$day=date('d',$date);
		
		//current month in full text
		$monthtext=date('F',$date);
		
		//current month in number
		$month=date('m',$date);
		
		//current year
		$year=date('Y',$date);
		
		//total number of days in a month
		$totaldays=date("t"); 
		
		//getting mktime for first day of the current month
		$firstday=mktime(0,0,0,$month,1,$year);
		
		//getting the number of week(0 to 6 from sun to sat) for the first day of the month
		$dayoftheweek=date('w',$firstday);
		
		//assigning variable a to check for week ending
		$a=1;
		
		//printing the table
		print "<h4 align=center>";
		print $monthtext;
		print "</h4>";
		print "<table border=5 cellpadding=3>";
		//creating array for the days
		$days = array('Mon','Tue','Wed','Thur','Fri','Sat','Sun');
		print "<tr>";
		//printing the days from the array into the table first row
		for($i=0;$i<7;$i++){
		print "<th>".$days[$i]."</th>";
		}
		print "</tr>";
			print "<tr>";
			//checking if the first day of the month is on sunday
				if($dayoftheweek==0){
				//leave six space in the beginning
				for($j=1;$j<=6;$j++)
				{
				print "<td>";
				print "</td>";
				$a++;
				}
				}
				else{
				//if the first day is not sunday then leave the number of week(1 to 6) - 1 spaces in the beginning
				for($j=1;$j<=$dayoftheweek-1;$j++)
				{
				print "<td>";
				print "</td>";
				$a++;
				}
				}
				
				//run the for loop for total number of days to print all the days in the calendar
				for($i=1;$i<=$totaldays;$i++)
				{
				
				//check if the variable a does not have a value mod 7 equals to zero and six
				if($a%7!=0 && $a%7!=6)
				{
				//highlighting the days the store is open
					print "<td bgcolor='yellow'>";
					print "$i<br/>";
					//printing the time on each day
					print "Open ".$openingHours[$daysOfTheWeekOpen[$a%7]]."AM - ".$closingHours[$daysOfTheWeekOpen[$a%7]]." PM";
					print "</td>";
				}
				//print the days of saturday and sunday when the store is closed
					else
					{
					print "<td>";
					print "$i";
					print "</td>";
					}
				if($a%7==0)
				{
				// if the week ends then the new row begins
				print "</tr>";
				print "<tr>";
				}
				$a++;
				
			}
		
		print "</tr>";
		print "</table>";
		 
		?>
        </div>
      </div>
	  

	  <div class="row-fluid">
		<h2>Quote</h2>
		<?php 
		//section 7
		print "<form action='#' name='quote' method='get'>";
		print "Select a day : ";
		print "<select>";
		//selecting the day from the arrays
					for($i=1;$i<=count($daysOfTheWeekOpen);$i++)
					{
						if((($closingHours[$daysOfTheWeekOpen[$i]]+12)-($openingHours[$daysOfTheWeekOpen[$i]])) > 6 )
						{
						print "<option value='$daysOfTheWeekOpen[$i]'>$daysOfTheWeekOpen[$i]</option>";
						}

					}
		print "</select>";
		print "<br/> <br/>";
		print "Select an Appliance Type : ";
		print "<select>";
		print "<option value='large'>Large</option>";
		print "<option value='small'>Small</option>";
		print "<option value='mobilephone'>Mobile Phone</option>";
		print "</select>";
		print "<br/> <br/>";
		print "Dropoff Day : ";
		print "<select>";
		//selecting the day and the last drop off time using the arrays
					for($i=1;$i<=count($daysOfTheWeekOpen);$i++)
					{
						if((($closingHours[$daysOfTheWeekOpen[$i]]+12)-($openingHours[$daysOfTheWeekOpen[$i]])) > 6 )
						{
						print "<option value='$daysOfTheWeekOpen[$i]'>";
						print $daysOfTheWeekOpen[$i]." - Last Drop Off ". ($closingHours[$daysOfTheWeekOpen[$i]] - 3). " PM";
						print "</option>";
						}

					}
		print "</select>";
		print "<br/> <br/>";
		print "Pickup Day : ";
		//showing all days the store is open using arrays
		print "<select>";
			for($i=1;$i<=count($daysOfTheWeekOpen);$i++)
			{
			print "<option value='$daysOfTheWeekOpen[$i]'>$daysOfTheWeekOpen[$i]</option>";
			}
		print "</select>";
		print "<br/><br/>";
		print "<input type='submit' name='submit' value='submit'>";
		print "</form>";
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
