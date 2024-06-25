<?php
include 'dpconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
</head>
<body>
<table border="1">
<tr>
<th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Password</th>
  <th>Confirm Password</th>
  <th colspan="2">ACTIONS</th>

</tr>
  <?php
  $query="SELECT * FROM signdb ";
  $statement=$conn->prepare($query);
  $statement->execute();
  $result= $statement->fetchAll();


  if($result){
    foreach($result as $row)
    echo'<tr>
    <td>'.$row['idnum'].'</td>
    <td>'.$row['trav_name'].'</td>
    <td>'.$row['travmail'].'</td>
    <td>'.$row['trav_pass'].'</td>
    <td>'.$row['trav_conpas'].'</td>
    <td><a href="edit.php?id='.$row['idnum'].'" onclick="return confirm(\'Do you wish to edit this one?\')">Edit</a></td>
    <td><a href="delete.php?id='.$row['idnum'].'">Delete</a></td>';


         
  }else{
    echo'<td colspan="2"> no record found </td>';
  }
    ?>
</table>  
</body>
</html