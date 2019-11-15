<?php 
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
										<table border="1">
										<thead>
										<tr>
										<th>#</th>					
										<th>Email</th>
										<!-- ------------------------------------------------ -->
										<th>qty1
										G.nuts/fish</th>
										<th>qty2
										G.nuts/beef</th>
										<th>qty3
										Chicken /luwombo</th>
										<th>qty4
										Pilau/Goat</th>
										<th>qty5
										Pilau/Chicken</th>
										<th>qty6
										Chapat</th>
										<th>qty7
										Juice</th>
										<th>qty8
										BrownRice/beans</th>
										<th>qty9
										Beef/luwombo</th>
										<!-- --------------------------------------------------- -->
										<th>Time</th>
										</tr>
									</thead>
<?php 
$filename="ShakaZulu Delivery Orders list";
$sql = "SELECT * from orders";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$email= $result->email.'</td>
<td>'.$qty1= $result->qty1.'</td>
<td>'.$qty2= $result->qty2.'</td> 
<td>'.$qty3= $result->qty3.'</td>
<td>'.$qty4= $result->qty4.'</td>
<td>'.$qty5= $result->qty5.'</td>    
<td>'.$qty6= $result->qty6.'</td> 
<td>'.$qty7= $result->qty7.'</td>
<td>'.$qty8= $result->qty8.'</td>
<td>'.$qty9= $result->qty9.'</td> 
<td>'.$time= $result->time.'</td>		
</tr>  
';

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cnt++;
			}
	}
?>
</table>
<?php } ?>