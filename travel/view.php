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
  <th>Email</th>
  <th>Password</th>

  <th colspan="2">ACTIONS</th>

</tr>
  <?php
  $query="SELECT * FROM logindb ";
  $statement=$conn->prepare($query);
  $statement->execute();
  $result= $statement->fetchAll();


  if($result){
    foreach($result as $row)
    echo'<tr>
          <td>'.$row['id_num'].'</td>
          <td>'.$row['trav_email'].'</td>
          <td>'.$row['pass_word'].'</td>
          <td><a href="edit.php?id='.$row['id_num '].'" onclick="return confirm(\'Do you wish to edit this one?\')">Edit</a></td>
          <td><a href="delete.php?id='.$row['id_num '].'">Delete</a></td>';

         
  }else{
    echo'<td colspan="2"> no record found </td>';
  }
    ?>
</table>  
</body>
</html>