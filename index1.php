<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<body>
<div id="container">
	<div class="con2">
    <?php
		$con=mysqli_connect("localhost","examsabu_reg","u%))WK0EvC-t","examsabu_reg");
		
		if (is_numeric($_GET['o']))
		{
			$o=$_GET['o'];
		}else {
			$o=0;
			}
			
		if ($o >=1){
			$prev=$o-1;
			} else{
				$prev=0;
			}
		
		
		$query=mysqli_query($con,"SELECT * FROM examsabu_reg LIMIT $o, 1");
		$get_pic=mysqli_fetch_assoc($query);
		
		$query2=mysqli_query($con,"SELECT id FROM examsabu_reg");
		$get_pic2=mysqli_fetch_assoc($query2);
		$total=mysqli_num_rows($query2);
		
		if ($o <=$total){$next=$o+1;}
		
	?>
    <?php do { ?>
    <table align="center" width="350" border=".5" bordercolor="#0B615E">
		<tr> <td colspan="2" align="center"><?php echo '<img src="upload/' . $get_pic['filename'] . '" width="200" height="200"> '; ?></td></tr>
		
		<tr><td width="200"><b>Name:&nbsp&nbsp&nbsp </b><?php echo $get_pic['fname']; ?>  &nbsp
		<?php echo $get_pic['lname'];?></td></tr>
		
		<tr><td width="200"><b>D.O.B:&nbsp&nbsp&nbsp </b><?php echo $get_pic['dob']; ?></td></tr>
		
		<tr><td width="200"><b>Tel No:&nbsp&nbsp&nbsp </b><?php echo $get_pic['tel']; ?></td></tr>
		
		<tr><td width="200"><b>E-mail:&nbsp&nbsp&nbsp </b><?php echo $get_pic['mi']; ?></td></tr>
		
		<tr><td width="350"><b>Post Applied:&nbsp&nbsp&nbsp </b><?php echo $get_pic['papl']; ?></td></tr>
    <tr><td colspan="2" align="center">	
    <?php
	} while ($get_pic=mysqli_fetch_assoc($query));
	?>
    <?php if ($o>0){ ?>
    <span><a href="index1.php?o=<?php echo $prev; ?>">Previous</a></span> 
    <?php } ?>-------
    <?php if ($o < ($total - 1)){ ?>
    <span><a href="index1.php?o=<?php echo $next; ?>">Next</a></span>
	<?php } ?>
	
    <?php
		mysqli_close($con);
	?>
    </td></tr>
    <tr><td colspan="2"> &nbsp </td></tr>
    <tr><td colspan="2" align="center"><a href="index.php"> Back to Data Entry </td></tr>
    </table>
    </div>
</div>
</body>
</html>
