<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
        }
        .header h1 {
            text-align: center;
            font-weight: 700;
            margin: 35px 0;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .container {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px;
            margin-top: 30px;
        }
        .form-control {
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-success {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
        .table {
            margin-top: 20px;
        }
        .table thead {
            background-color: #17a2b8;
            color: #fff;
        }
        .table tbody {
            background-color: #e9f5f9;
        }
        .modal-content {
            background-color: #fff;
            border-radius: 8px;
        }
        .modal-title {
            color: #333;
            font-weight: 600;
        }
        .input-group-text {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>STUDENT DETAILS</h1>
    </div>
    <div class="container">
        <form id="formAction">
            <div class="row mb-3">
                <label for="studentname" class="col-sm-2 col-form-label col-form-label-lg">NAME</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="studentname" id="studentname" placeholder="Enter your name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="course" class="col-sm-2 col-form-label col-form-label-lg">EMAIL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="course" id="course" placeholder="Enter your email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="department" class="col-sm-2 col-form-label col-form-label-lg">DEPARTMENT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="department" id="department" placeholder="Enter your department">
                </div>
            </div>
            <div class="row mb-3">
                <label for="college" class="col-sm-2 col-form-label col-form-label-lg">COLLEGE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="college" id="college" placeholder="Enter your college">
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label col-form-label-lg">ADDRESS</label>
                <div class="col-sm-10">
                    <div class="row g-1">
                        <div class="col-sm-6 mb-2">
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" aria-label="City">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <input type="text" class="form-control" name="state" id="state" placeholder="State" aria-label="State">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode" aria-label="Pincode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">SUBJECT</th>
                                <th scope="col">MARKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cloud Computing</td>
                                <td>
                                    <input type="text" class="form-control" name="ccMark" id="ccMark" placeholder="Marks" aria-label="Marks">
                                </td>
                            </tr>
                            <tr>
                                <td>Compiler Design</td>
                                <td>
                                    <input type="text" class="form-control" name="cdMark" id="cdMark" placeholder="Marks" aria-label="Marks">
                                </td>
                            </tr>
                            <tr>
                                <td>IOT</td>
                                <td>
                                    <input type="text" class="form-control" name="iotMark" id="iotMark" placeholder="Marks" aria-label="Marks">
                                </td>
                            </tr>
                            <tr>
                                <td>Cryptography</td>
                                <td>
                                    <input type="text" class="form-control" name="cryptoMark" id="cryptoMark" placeholder="Marks" aria-label="Marks">
                                </td>
                            </tr>
                            <tr>
                                <td>Software Engineering</td>
                                <td>
                                    <input type="text" class="form-control" name="seMark" id="seMark" placeholder="Marks" aria-label="Marks">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center my-4">
                <button type="button" name="submit" id="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead class="text-center bg-success text-white">
                        <tr>
                            <th>S.No</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>College</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pincode</th>                 
                            <th>Cloud Computing</th>
                            <th>Compiler Design</th>
                            <th>IOT</th>
                            <th>Cryptography</th>
                            <th>Software Engineering</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableData" class="bg-light">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="editData">
        <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Student Data Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formActionEdit">
                <div class="row">
                    <div class="col-md-12">
                        <label>Student Name</label>
                        <input type="text" name="studentNameEdit" id="studentNameEdit" class="form-control">
                        <input type="hidden" name="studentId" id="studentId" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">Email</span>
                          <input type="text" class="form-control" id="courseEdit" name="courseEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">Department</span>
                          <input type="text" class="form-control" id="departmentEdit" name="departmentEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">College</span>
                          <input type="text" class="form-control" id="collegeEdit" name="collegeEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">City</span>
                          <input type="text" class="form-control" id="cityEdit" name="cityEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">State</span>
                          <input type="text" class="form-control" id="stateEdit" name="stateEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">Pincode</span>
                          <input type="text" class="form-control" id="pincodeEdit" name="pincodeEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">DSA</span>
                          <input type="text" class="form-control" id="ccMarkEdit" name="ccMarkEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">OS</span>
                          <input type="text" class="form-control" id="cdMarkEdit" name="cdMarkEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">PYTHON</span>
                          <input type="text" class="form-control" id="iotMarkEdit" name="iotMarkEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">CNS</span>
                          <input type="text" class="form-control" id="cryptoMarkEdit" name="cryptoMarkEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text" id="basic-addon3">BIO BUSINESS</span>
                          <input type="text" class="form-control" id="seMarkEdit" name="seMarkEdit" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-info m-3" type="button" id="update">Update</button>
                    </div>
                </div>
        </form>
      </div>
    </div>
 
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // JavaScript code remains unchanged
        function functionDelete(e) {
        var id = $(e).data('id');
        $.ajax({
            type: "GET",
            url: "deleteData.php",
            dataType: "json",
            data: {"id": id},
            success: function(res) {
                if (res.status == "Done") {
                    alert(res.status);
                    $("#row" + id).remove();
                } else {
                    alert(res.status);
                }
            }
        });
    }

    function getStoredData() {
        $.ajax({
            type: "POST",
            url: "read.php",
            dataType: "json",
            success: function(res) {
                $("#tableData").html(res.data);
            }
        });
    }

    function functionEdit(e) {
        var id = $(e).data('id');
        $.ajax({
            type: "POST",
            url: "showIdData.php",
            dataType: "json",
            data: {"id": id},
            success: function(res) {
                $("#editData").modal("show");
                $("#studentNameEdit").val(res.student_name);
                $("#courseEdit").val(res.course);
                $("#departmentEdit").val(res.department);
                $("#collegeEdit").val(res.college);
                $("#cityEdit").val(res.city);
                $("#stateEdit").val(res.state);
                $("#pincodeEdit").val(res.pincode);
                $("#ccMarkEdit").val(res.cc_mark);
                $("#cdMarkEdit").val(res.cd_mark);
                $("#iotMarkEdit").val(res.iot_mark);
                $("#cryptoMarkEdit").val(res.cns_mark);
                $("#seMarkEdit").val(res.se_mark);
                $("#studentId").val(res.id);
            }
        });
    }

    $(document).ready(function() {
        getStoredData();

        $("#studentname").keydown(function() {
            var studentName = $(this).val();
            var sname = studentName.toUpperCase();
            $(this).val(sname);
        });

        $("#submit").click(function() {
            if ($("#studentname").val() == "") {
                $("#studentname").css("border", "1px solid red");
                $("#studentname").focus();
                return false;
            } else {
                $("#studentname").css("border", "1px solid green");
            }
            if ($("#course").val() == "") {
                $("#course").css("border", "1px solid red");
                $("#course").focus();
                return false;
            } else {
                $("#course").css("border", "1px solid green");
            }
            if ($("#department").val() == "") {
                $("#department").css("border", "1px solid red");
                $("#department").focus();
                return false;
            } else {
                $("#department").css("border", "1px solid green");
            }
            if ($("#college").val() == "") {
                $("#college").css("border", "1px solid red");
                $("#college").focus();
                return false;
            } else {
                $("#college").css("border", "1px solid green");
            }
            if ($("#city").val() == "") {
                $("#city").css("border", "1px solid red");
                $("#city").focus();
                return false;
            } else {
                $("#city").css("border", "1px solid green");
            }
            if ($("#state").val() == "") {
                $("#state").css("border", "1px solid red");
                $("#state").focus();
                return false;
            } else {
                $("#state").css("border", "1px solid green");
            }
            if ($("#pincode").val() == "") {
                $("#pincode").css("border", "1px solid red");
                $("#pincode").focus();
                return false;
            } else {
                $("#pincode").css("border", "1px solid green");
            }
            if ($("#ccMark").val() == "") {
                $("#ccMark").css("border", "1px solid red");
                $("#ccMark").focus();
                return false;
            } else {
                $("#ccMark").css("border", "1px solid green");
            }
            if ($("#cdMark").val() == "") {
                $("#cdMark").css("border", "1px solid red");
                $("#cdMark").focus();
                return false;
            } else {
                $("#cdMark").css("border", "1px solid green");
            }
            if ($("#iotMark").val() == "") {
                $("#iotMark").css("border", "1px solid red");
                $("#iotMark").focus();
                return false;
            } else {
                $("#iotMark").css("border", "1px solid green");
            }
            if ($("#cryptoMark").val() == "") {
                $("#cryptoMark").css("border", "1px solid red");
                $("#cryptoMark").focus();
                return false;
            } else {
                $("#cryptoMark").css("border", "1px solid green");
            }
            if ($("#seMark").val() == "") {
                $("#seMark").css("border", "1px solid red");
                $("#seMark").focus();
                return false;
            } else {
                $("#seMark").css("border", "1px solid green");
            }

            var studentName = $('#studentname').val().trim();
            var course = $('#course').val().trim();
            var department = $('#department').val().trim();
            var college = $('#college').val().trim();
            var city = $('#city').val().trim();
            var state = $('#state').val().trim();
            var pincode = $('#pincode').val().trim();
            var ccMark = $('#ccMark').val().trim();
            var cdMark = $('#cdMark').val().trim();
            var iotMark = $('#iotMark').val().trim();
            var cryptoMark = $('#cryptoMark').val().trim();
            var seMark = $('#seMark').val().trim();

            var formData = {
                "studentname": $("#studentname").val(),
                "course": $("#course").val(),
                "department": $("#department").val(),
                "college": $("#college").val(),
                "city": $("#city").val(),
                "state": $("#state").val(),
                "pincode": $("#pincode").val(),
                "ccMark": $("#ccMark").val(),
                "cdMark": $("#cdMark").val(),
                "iotMark": $("#iotMark").val(),
                "cryptoMark": $("#cryptoMark").val(),
                "seMark": $("#seMark").val()
            };

            $.ajax({
                type: "POST",
                url: "save.php",
                dataType: "json",
                data: formData,
                success: function(res) {
                    if (res.status == "Done") {
                        $("#tableData").append(res.data);
                    }
                }
            });
        });

        $("#update").click(function() {
            var id = $("#studentId").val();
            if ($("#studentNameEdit").val() == "") {
                $("#studentNameEdit").css("border", "1px solid red");
                $("#studentNameEdit").focus();
                return false;
            } else {
                $("#studentNameEdit").css("border", "1px solid green");
            }
            if ($("#courseEdit").val() == "") {
                $("#courseEdit").css("border", "1px solid red");
                $("#courseEdit").focus();
                return false;
            } else {
                $("#courseEdit").css("border", "1px solid green");
            }
            if ($("#departmentEdit").val() == "") {
                $("#departmentEdit").css("border", "1px solid red");
                $("#departmentEdit").focus();
                return false;
            } else {
                $("#departmentEdit").css("border", "1px solid green");
            }
            if ($("#collegeEdit").val() == "") {
                $("#collegeEdit").css("border", "1px solid red");
                $("#collegeEdit").focus();
                return false;
            } else {
                $("#collegeEdit").css("border", "1px solid green");
            }
            if ($("#cityEdit").val() == "") {
                $("#cityEdit").css("border", "1px solid red");
                $("#cityEdit").focus();
                return false;
            } else {
                $("#cityEdit").css("border", "1px solid green");
            }
            if ($("#stateEdit").val() == "") {
                $("#stateEdit").css("border", "1px solid red");
                $("#stateEdit").focus();
                return false;
            } else {
                $("#stateEdit").css("border", "1px solid green");
            }
            if ($("#pincodeEdit").val() == "") {
                $("#pincodeEdit").css("border", "1px solid red");
                $("#pincodeEdit").focus();
                return false;
            } else {
                $("#pincodeEdit").css("border", "1px solid green");
            }
            if ($("#ccMarkEdit").val() == "") {
                $("#ccMarkEdit").css("border", "1px solid red");
                $("#ccMarkEdit").focus();
                return false;
            } else {
                $("#ccMarkEdit").css("border", "1px solid green");
            }
            if ($("#cdMarkEdit").val() == "") {
                $("#cdMarkEdit").css("border", "1px solid red");
                $("#cdMarkEdit").focus();
                return false;
            } else {
                $("#cdMarkEdit").css("border", "1px solid green");
            }
            if ($("#iotMarkEdit").val() == "") {
                $("#iotMarkEdit").css("border", "1px solid red");
                $("#iotMarkEdit").focus();
                return false;
            } else {
                $("#iotMarkEdit").css("border", "1px solid green");
            }
            if ($("#cryptoMarkEdit").val() == "") {
                $("#cryptoMarkEdit").css("border", "1px solid red");
                $("#cryptoMarkEdit").focus();
                return false;
            } else {
                $("#cryptoMarkEdit").css("border", "1px solid green");
            }
            if ($("#seMarkEdit").val() == "") {
                $("#seMarkEdit").css("border", "1px solid red");
                $("#seMarkEdit").focus();
                return false;
            } else {
                $("#seMarkEdit").css("border", "1px solid green");
            }

            $.ajax({
                type: "POST",
                url: "update.php",
                dataType: "json",
                data: $("#formActionEdit").serialize(),
                success: function(res) {
                    if (res.status == "Done") {
                        $("#row" + id).html(res.data);
                        $("#editData").modal("hide");
                    }
                }
            });
        });
    });
    </script>
</body>
</html>
