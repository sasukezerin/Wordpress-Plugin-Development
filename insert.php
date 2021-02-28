<?php
  $id='';
  $lname='';
  $fname='';
  $city='';
?>
<form method="post">
<p>ID</p>
<input type="text" name="id" value=''><br>
<p>Lastname</p>
<input type="text" name="lname" value=''><br>
<p>Firstname</p>
<input type="text" name="fname" value=''><br>
<p>City</p>
<input type="text" name="city" value=''><br><br>
<button type="submit" name="save">Save</button>
</form>
<?php
function DBP_tb_insert()
{
    global $wpdb;
    $table = $wpdb->prefix . "table";

 if(isset($_POST['save']))   
 {  
    $id = $_POST['id'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $city = $_POST['city'];
      $wpdb->insert($table,
                   array(
                       'PersonID'=>$id,
                       'LastName'=>$lname,
                       'FirstName'=>$fname,
                       'City'=>$city
                   ),
                   array(
                       '%d',
                       '%s',
                       '%s',
                       '%s'
                   )
    );
}
    //$sql1 = "INSERT INTO $table (`PersonID`, `LastName`, `FirstName`, `City`) VALUES ('2', 'zerinzeby', 'saimazeby', 'Dhakacity');";
   // require_once(ABSPATH . 'wp-admin/includes/upgrade.php' );
    //dbDelta( $sql1);
}
?>

