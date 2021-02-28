<?php
global $wpdb;
$table =$wpdb->prefix.'table';
$db_result = $wpdb->get_results("SELECT * FROM $table");
?>
<form method="post" action="admin.php?page=displaydata">
<table border='1px'>
  <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>City</th>
    <th>Delete</th>
  </tr>
  <?php
  if (isset($_POST['delete']))
  {
    $wpdb->delete($table,
   array('PersonID'=> $_POST['delete'])
   );
  }
   foreach($db_result as $DBP){
       $id=$DBP->PersonID;
       $lname=$DBP->LastName;
       $fname=$DBP->FirstName;
       $city=$DBP->City;

  
  ?>
  <tr>
    <td><?php echo $id;?></td>
    <td><?php echo $lname;?></td>
    <td><?php echo $fname;?></td>
    <td><?php echo $city;?></td>
    <td><button name='delete' value='<?php echo $id;?>'>Delete</button></td>
  </tr>
<?php }?>
 
</table>
</form>