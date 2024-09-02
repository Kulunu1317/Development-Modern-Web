<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>

 
                            
             <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col"> User Name</th>
                    <th scope="col">E mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Conform Password</th>
					
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
                 
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        
							$hname = 'localhost';
							$uname = 'root';
							$pass = '';
							$db = 'dmw';

							$con = mysqli_connect($hname,$uname,$pass,$db);

							if (!$con) {
								die("Cannot Connect to Database".mysqli_connect_error());
							}
                        $sql_query = "SELECT * FROM reg";
                         if ($result = $con ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $fullname=$row['username'];
                                $roomtype=$row['email'];
                                $check_in=$row['password'];
                                $check_out=$row['confirmpassword'];
								$id=$row['id'];
                    
					?>
                    
                    <tr class="trow">
                        <td><?php echo $fullname; ?></td>
                        <td><?php echo $roomtype; ?></td>
                        <td><?php echo $check_in; ?></td>
                        <td><?php echo $check_out; ?></td>
						
                        <td><a href="registation.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                       } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>




</body>

<style>



body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #343a40;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #fff;
}

.table th,
.table td {
    padding: 1.5rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}

.table-dark {
    background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #454d55;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0056b3;
    border-color: #004085;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
}

.trow:hover {
    background-color: #495057;
}

</style>
</html>