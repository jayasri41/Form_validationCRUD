
<?php
ini_set('date.timezone', 'Asia/Kolkata');

require('conn.php');

$s = new dbConn();
$link = $s->Link();

// Prepared statement to insert data securely
$stmt = $link->prepare("INSERT INTO student_table (student_name, course, department, college, city, state, pincode, cc_mark, cd_mark, iot_mark, cns_mark, se_mark, created_by, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssss", $studentname, $course, $department, $college, $city, $state, $pincode, $ccMark, $cdMark, $iotMark, $cryptoMark, $seMark, $created_by, $created_at);

$studentname = $_POST['studentname'];
$course = $_POST['course'];
$department = $_POST['department'];
$college = $_POST['college'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$ccMark = $_POST['ccMark'];
$cdMark = $_POST['cdMark'];
$iotMark = $_POST['iotMark'];
$cryptoMark = $_POST['cryptoMark'];
$seMark = $_POST['seMark'];
$created_by = 1;
$created_at = date('Y-m-d H:i:s');

if ($stmt->execute()) {
    // Retrieve the last inserted row
    $last_id = $link->insert_id;
    $sql1 = "SELECT * FROM student_table WHERE id = ?";
    $stmt1 = $link->prepare($sql1);
    $stmt1->bind_param("i", $last_id);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result) {
        $out = "";
        while ($row = $result->fetch_assoc()) {
            $out .= "<tr id='row" . $row['id'] . "'>
                <td></td>
                <td>" . $row['student_name'] . "</td>
                <td>" . $row['course'] . "</td>
                <td>" . $row['department'] . "</td>
                <td>" . $row['college'] . "</td>
                <td>" . $row['city'] . "</td>
                <td>" . $row['state'] . "</td>
                <td>" . $row['pincode'] . "</td>
                <td>" . $row['cc_mark'] . "</td>
                <td>" . $row['cd_mark'] . "</td>
                <td>" . $row['iot_mark'] . "</td>
                <td>" . $row['cns_mark'] . "</td>
                <td>" . $row['se_mark'] . "</td>
                <td><button class='btn btn-info' type='button' onClick='functionEdit(this)' data-id='" . $row['id'] . "'>Edit</button></td>
                <td><button class='btn btn-danger' type='button' onClick='functionDelete(this)' data-id='" . $row['id'] . "'>Delete</button></td></tr>";
        }
        $output = ["status" => "Done", "data" => $out];
    } else {
        $output = ["status" => "Error", "data" => "Data read error"];
    }
} else {
    $output = ["status" => "Error", "data" => "Data not saved"];
}

echo json_encode($output);

$stmt->close();
$link->close();
?>
