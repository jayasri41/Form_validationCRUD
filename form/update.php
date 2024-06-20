
<?php
require('conn.php');
$s=new dbConn();
$conn=$s->Link();

$sql= "UPDATE `student_table` SET 
`student_name`='".$_POST['studentNameEdit']."',
`course`='".$_POST['courseEdit']."',
`department`='".$_POST['departmentEdit']."',
`college`='".$_POST['collegeEdit']."',
`city`='".$_POST['cityEdit']."',
`state`='".$_POST['stateEdit']."',
`pincode`='".$_POST['pincodeEdit']."',
`cc_mark`='".$_POST['ccMarkEdit']."',
`cd_mark`='".$_POST['cdMarkEdit']."',
`iot_mark`='".$_POST['iotMarkEdit']."',
`cns_mark`='".$_POST['cryptoMarkEdit']."',
`se_mark`='".$_POST['seMarkEdit']."',
`updated_by`='1',
`updated_at`='".date('Y-m-d H:i:s')."'  WHERE id=".$_POST['studentId'];

$res=mysqli_query($conn,$sql);
if($res){
	$sql1="select * from student_table where id=".$_POST['studentId'];
	$res1=mysqli_query($conn,$sql1);
	if($res1){
		while($row=mysqli_fetch_assoc($res1)){
		$out ="<td></td>
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
		    <td><button class='btn btn-danger' type='button' onClick='functionDelete(this)' data-id='".$row['id']."'>Delete</button></td>";

		}
		$output = ["status"=>"Done","data"=>$out];
	}else{
		$output = ["status"=>"Failed","msg"=>"error to get data"];
	}
}else{
	$output = ["status"=>"Failed","msg"=>"error to update data"];
}

echo json_encode($output);
?>
