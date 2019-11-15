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
											<th>Password</th>
											<th>Last Login</th>
											<th>Delivery Order</th>
											<th>Address</th>
											<th>Status</th>
										</tr>
									</thead>

<?php 
$filename="ShakaZulu Regular Customer list";
$sql = "SELECT * from php_users_login";
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
<td>'.$Email= $result->email.'</td>
<td>'.$Password= $result->password.'</td> 
<td>'.$LastLogin= $result->last_login.'</td>
<td>'.$DeliveryOrder= $result->delivery_order.'</td>
<td>'.$Address= $result->address.'</td>    
<td>'.$Status= $result->status.'</td> 
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