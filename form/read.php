<?php
require('conn.php');

$s = new dbConn();
$conn = $s->Link();

$sql1 = "SELECT * FROM student_table";
$res = mysqli_query($conn, $sql1);

$out = "";
while ($row = mysqli_fetch_assoc($res)) {
    $out .= "<tr id='row".$row['id']."'>
                <td></td>
                <td>".$row['student_name']."</td>
                <td>".$row['course']."</td>
                <td>".$row['department']."</td>
                <td>".$row['college']."</td>
                <td>".$row['city']."</td>
                <td>".$row['state']."</td>
                <td>".$row['pincode']."</td>
                <td>".$row['cc_mark']."</td>
                <td>".$row['cd_mark']."</td>
                <td>".$row['iot_mark']."</td>
                <td>".$row['cns_mark']."</td>
                <td>".$row['se_mark']."</td>
                <td><button class='btn btn-info' type='button' onClick='functionEdit(this)' data-id='".$row['id']."'>Edit</button></td>
                <td><button class='btn btn-danger' type='button' onClick='functionDelete(this)' data-id='".$row['id']."'>Delete</button></td>
            </tr>";
}

$output = ["data" => $out];
echo json_encode($output);

//mysqli_close($conn);
?>