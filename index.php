<?php  
include "config.php";
include "Database.php";
?>

<?php 
 $db = new Database();
 $query = "SELECT * FROM tbl_user";
 $read = $db->select($query);
?>

<?php 
if(isset($_GET['msg'])){
 echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>
<h1 style="text-align: center;" >CRUD System</h1>
<div style="margin: auto;" >
<table border="1"  style="width: 100%; text-align: center;">
<tr>

 <th >Name</th>
 <th >Email</th>
 <th>Skill</th>
 <th >Action</th>
</tr>
<?php if($read){?>
<?php 
$i=1;
while($row = $read->fetch_assoc()){
?>
<tr>

 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['skill']; ?></td>
 <td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">
  Edit</a></td>
</tr>


<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php } ?>
</table>
<br><br>
<a href="create.php" >Create</a>
</div>

