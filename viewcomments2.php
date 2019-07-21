<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "test"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM comments";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">NAME</font> </td> 
          <td> <font face="Arial">COMMENT</font> </td> 
          <td> <font face="Arial">TIME</font> </td> 
          <td> <font face="Arial">STATUS</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field3name = $row["subject"];
        $field4name = $row["submittime"];
        $field5name = $row["status"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>

