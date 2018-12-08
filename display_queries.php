 <?php
include 'db_connect.php';

$sql = "SELECT id, firstname, surname, phone_num, email, enquiry FROM contact_me";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Contact number</th>
    <th>Email</th>
    <th>Message</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>"; 
        echo "<td>" . $row["surname"] . "</td>";
        echo "<td>" . $row["phone_num"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["enquiry"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
} else {
    echo "0 results";
}
$mysqli->close();
?> 