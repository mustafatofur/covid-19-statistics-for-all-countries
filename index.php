<!DOCTYPE html>
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license.
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>COVID-19 Information Website</title>

    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>


    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="images/favicon.png" />

	<style>
		* {
		  box-sizing: border-box;
		}

		#myInput {
		  background-image: url('/css/searchicon.png');
		  background-position: 10px 10px;
		  background-repeat: no-repeat;
		  width: 100%;
		  font-size: 16px;
		  padding: 12px 20px 12px 40px;
		  border: 1px solid #ddd;
		  margin-bottom: 12px;
		}

		#myTable {
		  border-collapse: collapse;
		  width: 100%;
		  border: 1px solid #ddd;
		  font-size: 13.5px;
      color: #1d1b1b;
		}

		#myTable th, #myTable td {
		  text-align: left;
		  padding: 12px;
		}

		#myTable tr {
		  border-bottom: 1px solid #ddd;
		}

		#myTable tr.header, #myTable tr:hover {
		  background-color: #f1f1f1;
		}

    .my-custom-scrollbar {
position: relative;
height: 750px;
overflow: auto;
}

.my-custom-scrollbartwo {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

.scrollbar {
margin-left: 30px;
float: left;
height: 300px;
width: 65px;
background: #fff;
overflow-y: scroll;
margin-bottom: 25px;
}
.force-overflow {
min-height: 450px;
}

.scrollbar-primary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-primary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #4285F4; }

.scrollbar-primary {
scrollbar-color: #4285F4 #F5F5F5;
}

.scrollbar-danger::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-danger::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-danger::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: darkred; }

.scrollbar-danger {
scrollbar-color: #4e1011;
}

.scrollbar-warning::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-warning::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-warning::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #FF8800; }

.scrollbar-warning {
scrollbar-color: #FF8800 #F5F5F5;
}

.scrollbar-success::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-success::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-success::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #00C851; }

.scrollbar-success {
scrollbar-color: #00C851 #F5F5F5;
}

.scrollbar-info::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-info::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-info::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #33b5e5; }

.scrollbar-info {
scrollbar-color: #33b5e5 #F5F5F5;
}

.scrollbar-default::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-default::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-default::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #2BBBAD; }

.scrollbar-default {
scrollbar-color: #2BBBAD #F5F5F5;
}

.scrollbar-secondary::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-secondary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-secondary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #aa66cc; }

.scrollbar-secondary {
scrollbar-color: #aa66cc #F5F5F5;
}

th {
  color:#4d5156;
  font-family: Trebuchet MS;
}

td {
  color:#4d5156;
  font-family: Trebuchet MS;
}
		</style>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-home"></span>
                	#StayHome
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">Advice for public</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">CS</a></li>
							<li><a href="#">CS2</a></li>
							<li><a href="#">CS3</a></li>
						</ul>
					</li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Feature -->
	<div class="jumbotron feature">
		<div class="container">
			<h1><span class="
      glyphicon glyphicon-warning-sign "></span>  COVID-19</h1>
			<p>Country specific information about Covid-19. <br><strong>#StayHome</strong></p>
			<p><a class="btn btn-primary" href="#countries">View All Cases</a></p>
		</div>
	</div>


    <!-- Heading -->
    <!-- takeAPI -->

    <!-- /takeAPI-->
    <div class="container">

		<div class="col-sm-12" id="countries">



			<h2 style="text-align: center;">Countries - COVID-19</h2>




    <?php
$url = file_get_contents("https://corona.lmao.ninja/v2/countries?sort=country");
$url2 = json_decode($url, true);
$reverse = array_reverse($url2);


if (@$_GET["sort"] == "deaths") {

	function method1($a,$b)
	{
	  return ($a["deaths"] >= $b["deaths"]) ? -1 : 1;
	}
	usort($url2, "method1");

?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Let's start typing a country.." title="Let's start typing a country!">

<div class="table-wrapper-scroll-y my-custom-scrollbar scrollbar-danger">
<table id="indextable" class="table table-bordered table-striped mb-0">
  <tbody>
<thead>
<tr class="header">
	<div id="real">

    <th style="width:25%;">Country</th>
	<th style="width:20%;">Tested</th>
  <th style="width:20%;">Confirmed Case</th>
  <th style="width:20%;"><a href="./" style="color: currentColor;">Death <span class="glyphicon glyphicon-chevron-down
"></span></a></th>
	<th style="width:20%;">Recovered</th>
  </tr>
  </thead>
  <tr>

	</div>
<?php
	foreach ($url2 as $key => $value) {
		?>

<td><img style="width: 18px;height: 12px;margin-top: -2.5px;" src="<?= $value["countryInfo"]["flag"];?>" /> <a href="<?= $value["country"];?>" target="_blank"><?= $value["country"];?></a></td>
    <td><?= number_format($value["tests"], 0, '','.');?></td>
  <td><?= number_format($value["cases"], 0, '','.');?></td>
  <td><?= number_format($value["deaths"], 0, '','.');?></td>
  <td> <?= number_format($value["recovered"], 0, '','.');?></td>
  </tr>
  <?php } ?>
  <?php } else {
?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Let's start typing a country.." title="Let's start typing a country!">

<div class="table-wrapper-scroll-y my-custom-scrollbar scrollbar-danger">
<table id="indextable" class="table table-bordered table-striped mb-0">
  <tbody>
<thead>
<tr class="header">
	<div id="real">

    <th style="width:25%;">Country</th>
	<th style="width:20%;">Tested</th>
  <th style="width:20%;">Confirmed Case</th>
  <th style="width:20%;"><a href="sort" style="color: currentColor;">Death <span class="glyphicon glyphicon-chevron-up
"></span></a></th>
	<th style="width:20%;">Recovered</th>
  </tr>
  </thead>
  <tr>

	</div>
<?php
foreach ($reverse as $key => $value) {

?>
    <td><img style="width: 18px;height: 12px;margin-top: -2.5px;" src="<?= $value["countryInfo"]["flag"];?>" /> <a href="<?= $value["country"];?>" target="_blank"><?= $value["country"];?></a></td>
    <td><?= number_format($value["tests"], 0, '','.');?></td>
  <td><?= number_format($value["cases"], 0, '','.');?></td>
  <td><?= number_format($value["deaths"], 0, '','.');?></td>
  <td> <?= number_format($value["recovered"], 0, '','.');?></td>
  </tr>
  <?php } ?>
  <?php } ?>
</tbody>
</table>

		</div>

</div>

    </div><!-- /.container -->

        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">Advice for public</a> | <a href="#"> #StayHome</a> <span class="
      glyphicon glyphicon-heart "></span></p>
        		<p>Copyright &copy; <a href="https://github.com/mtofur/covid-19-statistics-for-all-countries" target="_blank">Mustafa Tofur</a> 2021 </p>
        	</div>
        </div>

	</footer>


    <!-- jQuery -->
	<script src="js/jquery-1.11.3.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>

	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("indextable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        } else {
        tr[i].style.display = "none";
        }
      }
      }
    }
    </script>
	<script type="text/javascript">
/*
   Willmaster Table Sort
   Version 1.1
   August 17, 2016
   Updated GetDateSortingKey() to correctly sort two-digit months and days numbers with leading 0.
   Version 1.0, July 3, 2011

   Will Bontrager
   https://www.willmaster.com/
   Copyright 2011,2016 Will Bontrager Software, LLC

   This software is provided "AS IS," without
   any warranty of any kind, without even any
   implied warranty such as merchantability
   or fitness for a particular purpose.
   Will Bontrager Software, LLC grants
   you a royalty free license to use or
   modify this software provided this
   notice appears on all copies.
*/
//
// One placed to customize - The id value of the table tag.

var TableIDvalue = "indextable";

//
//////////////////////////////////////
var TableLastSortedColumn = -1;
function SortTable() {
var sortColumn = parseInt(arguments[0]);
var type = arguments.length > 1 ? arguments[1] : 'T';
var dateformat = arguments.length > 2 ? arguments[2] : '';
var table = document.getElementById(TableIDvalue);
var tbody = table.getElementsByTagName("tbody")[0];
var rows = tbody.getElementsByTagName("tr");
var arrayOfRows = new Array();
type = type.toUpperCase();
dateformat = dateformat.toLowerCase();
for(var i=0, len=rows.length; i<len; i++) {
	arrayOfRows[i] = new Object;
	arrayOfRows[i].oldIndex = i;
	var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g,"");
	if( type=='D' ) { arrayOfRows[i].value = GetDateSortingKey(dateformat,celltext); }
	else {
		var re = type=="N" ? /[^\.\-\+\d]/g : /[^0-9]/g;
		arrayOfRows[i].value = celltext.replace(re,"").substr(0,25).toLowerCase();
		}
	}
if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
else {
	TableLastSortedColumn = sortColumn;
	switch(type) {
		case "N" : arrayOfRows.sort(CompareRowOfNumbers); break;
		case "D" : arrayOfRows.sort(CompareRowOfNumbers); break;
		default  : arrayOfRows.sort(CompareRowOfText);
		}
	}
var newTableBody = document.createElement("tbody");
for(var i=0, len=arrayOfRows.length; i<len; i++) {
	newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
	}
table.replaceChild(newTableBody,tbody);
} // function SortTable()

function CompareRowOfText(a,b) {
var aval = a.value;
var bval = b.value;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfText()

function CompareRowOfNumbers(a,b) {
	return b - a; } // function CompareRowOfNumbers()

function GetDateSortingKey(format,text) {
if( format.length < 1 ) { return ""; }
format = format.toLowerCase();
text = text.toLowerCase();
text = text.replace(/^[^a-z0-9]*/,"");
text = text.replace(/[^a-z0-9]*$/,"");
if( text.length < 1 ) { return ""; }
text = text.replace(/[^a-z0-9]+/g,",");
var date = text.split(",");
if( date.length < 3 ) { return ""; }
var d=0, m=0, y=0;
for( var i=0; i<3; i++ ) {
	var ts = format.substr(i,1);
	if( ts == "d" ) { d = date[i]; }
	else if( ts == "m" ) { m = date[i]; }
	else if( ts == "y" ) { y = date[i]; }
	}
d = d.replace(/^0/,"");
if( d < 10 ) { d = "0" + d; }
if( /[a-z]/.test(m) ) {
	m = m.substr(0,3);
	switch(m) {
		case "jan" : m = String(1); break;
		case "feb" : m = String(2); break;
		case "mar" : m = String(3); break;
		case "apr" : m = String(4); break;
		case "may" : m = String(5); break;
		case "jun" : m = String(6); break;
		case "jul" : m = String(7); break;
		case "aug" : m = String(8); break;
		case "sep" : m = String(9); break;
		case "oct" : m = String(10); break;
		case "nov" : m = String(11); break;
		case "dec" : m = String(12); break;
		default    : m = String(0);
		}
	}
m = m.replace(/^0/,"");
if( m < 10 ) { m = "0" + m; }
y = parseInt(y);
if( y < 100 ) { y = parseInt(y) + 2000; }
return "" + String(y) + "" + String(m) + "" + String(d) + "";
} // function GetDateSortingKey()
</script>


    <?php
	include 'stats.php';
	?>


</body>

</html>
