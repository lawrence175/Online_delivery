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
											<th>FirstName</th>
											<th>LastName</th>
											<th>location</th>
											<th>PhoneNumber</th>
											<th>Address</th>
											<th>Password</th>
										</tr>
									</thead>

<?php 
$filename="ShakaZulu Registered Customer list";
$sql = "SELECT * from User";
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
<td>'.$FirstName= $result->fname.'</td>
<td>'.$LastName= $result->lname.'</td> 
<td>'.$Location= $result->location.'</td>
<td>'.$PhoneNumber= $result->mob.'</td>
<td>'.$Address= $result->addr.'</td>    
<td>'.$Email= $result->email.'</td> 
<td>'.$Password= $result->pw.'</td> 		
</tr>  
';
// <td>'.$gender= $result->gender.'</td>  gender will be included later

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