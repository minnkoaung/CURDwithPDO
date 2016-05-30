
	<?php 
        include_once 'dbconfig.php';
        if(isset($_POST['save']))
        {
            $description = $_POST['description'];
            $status = $_POST['status'];
            $due_date = $_POST['due_date'];
            if($curd->create($description,$status,$due_date))
            {
                header("Location: add-todo.php?inserted");
            }
            else
            {
                header("Location: add-todo.php?failure");
            }
        }

        ?>

	<?php include_once 'header.php'; ?>
	
	<div class="clearfix"></div>
    <?php
if(isset($_GET['inserted']))
{
    ?>
    <div class="container">
    <div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
    </div>
    </div>
    <?php
}
else if(isset($_GET['failure']))
{
    ?>
    <div class="container">
    <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
    </div>
    </div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	<form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Description</td>
            <td>
            	<textarea name="description" class="form-control" cols="150" rows="10"></textarea>
           	</td>
        </tr>
 
        <tr>
            <td>Status</td>
            <td>
            	<select name="status" id="" class="form-control">
            		<option value="1">To Do</option>
            		<option value="2">Done</option>
            	</select>
            </td>
        </tr>
 
        <tr>
            <td>Due Date</td>
            <td><input type="date" name='due_date' class='form-control' required></td>
        </tr>
 
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-danger" name="save">
    			<span class="glyphicon glyphicon-plus"></span> New Todo List
			</button>  
            <a href="index.php" class="btn btn-large btn-warning">
            	<i class="glyphicon glyphicon-backward"></i> &nbsp; Back to Home</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>
<?php include_once 'footer.php'; ?>
