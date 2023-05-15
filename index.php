<?php

require "config.php";
use App\Employee;

$employee = Employee::list();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap.">  
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
<body style="margin:20px auto">
    
    <div class="container">
    <div class="row header" style="text-align:center;color:green">
    <h1>LIST OF MANAGERS</h1>
    </div>

<table id="myTable" class="table table-striped">
    <thead>
        <td>DEPARTMENT NUMBER</td>
        <td>DEPARTMENT NAME</td>
        <td>MANAGER NAME</td>
        <td>HIRE DATE</td>
        <td>END DATE</td>
        <td>TOTAL YEARS</td>
        <td>EMPLOYEES</td>
    </thead>
    <?php foreach($employee as $employee): ?>
    <tbody>
        <td><?php echo $employee->getDeptNo();?></td>
        <td><?php echo $employee->getDeptName();?></td>
        <td><?php echo $employee->getFullName();?></td>
        <td><?php echo $employee->getHireDate();?></td>
        <td>Current</td>
        <td><?php echo $employee->getTotalYear();?></td>
        <td>
            <a href="show-employee.php?dept_no=<?php echo $employee->getDeptNo();?>">VIEW</a>
        </td>
    </tbody>
    <?php endforeach ?>
</table>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
</script>
</html>