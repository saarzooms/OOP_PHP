<?php
	// $hostname='localhost';
	// $username='root';
	// $password='';

	// try {
		// $dbh = new PDO("mysql:host=$hostname;dbname=demo",$username,$password);
	// //    echo 'Connected to Database<br/>';
		// }
	// catch(PDOException $e)
		// {
		// echo $e->getMessage();
		// }
	$hostname='us-cdbr-iron-east-05.cleardb.net';
	$username='bcb42d7dd76c66';
	$password='fb6bf3b1';

	try {
		$dbh = new PDO("mysql:host=$hostname;dbname=heroku_789e6d2519c7e74",$username,$password);
	//    echo 'Connected to Database<br/>';
		}
	catch(PDOException $e)
		{
		echo $e->getMessage();
		}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
 <body>
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>submission_id</th>
                <th>formID</th>
                <th>TP</th>
                <th>input64</th>
                <th>sex</th>
                <th>age</th>
                <th>tshirtsize</th>
                <th>hiredate</th>
                <th>hiretime</th>
                <th>typea63</th>
                <th>address1</th>
                <th>address2</th>
                <th>address3</th>
                <th>address4</th>
                <th>address5</th>
                <th>paymentemail</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>Id</th>
                <th>submission_id</th>
                <th>formID</th>
                <th>TP</th>
                <th>input64</th>
                <th>sex</th>
                <th>age</th>
                <th>tshirtsize</th>
                <th>hiredate</th>
                <th>hiretime</th>
                <th>typea63</th>
                <th>address1</th>
                <th>address2</th>
                <th>address3</th>
                <th>address4</th>
                <th>address5</th>
                <th>paymentemail</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
			$sql="SELECT * FROM `comewant_registration` order by id desc";
			foreach($dbh->query($sql) as $r){
				?>
					<tr>
						<td><?php echo $r['id'];?></td>
						<td><?php echo $r['submission_id'];?></td>
						<td><?php echo $r['formID'];?></td>
						<td><?php echo $r['ip'];?></td>
						<td><?php echo $r['input64'];?></td>
						<td><?php echo $r['sex'];?></td>
						<td><?php echo $r['age'];?></td>
						<td><?php echo $r['tshirtsize'];?></td>
						<td><?php echo $r['hiredate'];?></td>
						<td><?php echo $r['hiretime'];?></td>
						<td><?php echo $r['typea63'];?></td>
						<td><?php echo $r['address1'];?></td>
						<td><?php echo $r['address2'];?></td>
						<td><?php echo $r['address3'];?></td>
						<td><?php echo $r['address4'];?></td>
						<td><?php echo $r['address5'];?></td>
						<td><?php echo $r['paymentemail'];?></td>
						
					</tr>
				<?php
			}
		?>
            
            
        </tbody>
    </table>
	
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
	<script>
		$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	</script>
	</body>