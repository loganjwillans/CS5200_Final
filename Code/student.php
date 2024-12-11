<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"/>
</head>
<body>
<div id="navigation" class="nav" style="margin-left: 10%; margin-top: 16px; margin-bottom: 16px; align-items: center">
    <img src="img/baxter.png" height="128" style="margin-right: 32px" >
    <form action="application.php">
        <input type="submit" value="Application" class="btn btn-light" style="margin-right: 12px"/>
    </form>
    <form action="loi.php">
        <input type="submit" value="LOI" class="btn btn-light" style="margin-right: 12px"/>
    </form>
    <form action="school.php">
        <input type="submit" value="School" class="btn btn-light" style="margin-right: 12px"/>
    </form>
    <form action="student.php">
        <input type="submit" value="Student" class="btn btn-primary" style="margin-right: 12px"/>
    </form>

</div>
<hr/>
<div style="justify-items: center">
    <button type="button" class="btn btn-success float-start"
            style="margin-left: 10%; margin-bottom: 8px; margin-top: 16px;" data-toggle="modal"
            data-target="#exampleModal">
        Add Student
    </button>
    <div style="width:80%">
        <table id="myTable" class="display nowrap">
            <thead>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>First Name Preference</th>
                <th>Class Of</th>
                <th>Home Phone</th>
                <th>DOB</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>C1 First Name</th>
                <th>C1 Last Name</th>
                <th>C1 Relationship</th>
                <th>C1 Custody</th>
                <th>C1 Email</th>
                <th>C2First Name</th>
                <th>C2 Last Name</th>
                <th>C2 Relationship</th>
                <th>C2 Custody</th>
                <th>C2 Email</th>
                <th>Records Recieved</th>
                <th>PS Student Number</th>
                <th>Streak ID</th>
                <th>State Student Number</th>
                <th>LOI ID</th>
                <th>School ID</th>
                <th>Commit ID</th>
                <th>Student Email</th>
                <th>Apply ID</th>
            </tr>

            </thead>
            <tfoot>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>First Name Preference</th>
                <th>Class Of</th>
                <th>Home Phone</th>
                <th>DOB</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>C1 First Name</th>
                <th>C1 Last Name</th>
                <th>C1 Relationship</th>
                <th>C1 Custody</th>
                <th>C1 Email</th>
                <th>C2First Name</th>
                <th>C2 Last Name</th>
                <th>C2 Relationship</th>
                <th>C2 Custody</th>
                <th>C2 Email</th>
                <th>Records Recieved</th>
                <th>PS Student Number</th>
                <th>Streak ID</th>
                <th>State Student Number</th>
                <th>LOI ID</th>
                <th>School ID</th>
                <th>Commit ID</th>
                <th>Student Email</th>
                <th>Apply ID</th>
            </tr>
            </tfoot>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Entry</h5>
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="justify-items: center; justify-content: center">
                    <form action="insert_student.php" method="POST">
	                <table>
                        <tr>
                            <td>Student ID: </td>
                            <td><input type="text" name="stud_id"></td>
                        </tr>
                        <tr>
                            <td>First Name: </td>
                            <td><input type="text" name="first" ></td>
                        </tr>
                        <tr>
                            <td>Middle Name: </td>
                            <td><input type="text" name="middle" ></td>
                        </tr>
                        <tr>
                            <td>Last Name: </td>
                            <td><input type="text" name="last"></td>
                        </tr>
                        <tr>
                            <td>Name Preference: </td>
                            <td><input type="text" name="name_pref" ></td>
                        </tr>
                        <tr>
                            <td>Class Of: </td>
                            <td><input type="text" name="class" ></td>
                        </tr>
                        <tr>
                            <td>Home Phone: </td>
                            <td><input type="text" name="phone"></td>
                        </tr>
                        <tr>
                            <td>DOB: </td>
                            <td><input type="text" name="birth" ></td>
                        </tr>
                        <tr>
                            <td>Street: </td>
                            <td><input type="text" name="stre" ></td>
                        </tr>
                        <tr>
                            <td>City: </td>
                            <td><input type="text" name="cit"></td>
                        </tr>
                        <tr>
                            <td>Zip: </td>
                            <td><input type="text" name="zi" ></td>
                        </tr>
                        <tr>
                            <td>C1 First Name: </td>
                            <td><input type="text" name="c1_first" ><br></td>
                        </tr>
                        <tr>
                            <td>C1 Last Name: </td>
                            <td><input type="text" name="c1_last"></td>
                        </tr>
                        <tr>
                            <td>C1 Relationship: </td>
                            <td><input type="text" name="c1_relate" ></td>
                        </tr>
                        <tr>
                            <td>C1 Custody: </td>
                            <td><input type="text" name="c1_cust" ></td>
                        </tr>
                        <tr>
                            <td>C1 Email: </td>
                            <td><input type="text" name="c1_em"></td>
                        </tr>
                        <tr>
                            <td>C2 First Name: </td>
                            <td><input type="text" name="c2_first" ><br></td>
                        </tr>
                        <tr>
                            <td>C2 Last Name: </td>
                            <td><input type="text" name="c2_last"></td>
                        </tr>
                        <tr>
                            <td>C2 Relationship: </td>
                            <td><input type="text" name="c2_relate" ></td>
                        </tr>
                        <tr>
                            <td>C2 Custody: </td>
                            <td><input type="text" name="c2_cust" ></td>
                        </tr>
                        <tr>
                            <td>C2 Email: </td>
                            <td><input type="text" name="c2_em"></td>
                        </tr>
                        <tr>
                            <td>Records Recieved: <br></td>
                            <td><input type="text" name="rec_rec"></td>
                        </tr>
                        <tr>
                            <td>PS Student Number: </td>
                            <td><input type="text" name="stu_num" ></td>
                        </tr>
                        <tr>
                            <td>Streak ID: </td>
                            <td><input type="text" name="streak"></td>
                        </tr>
                        <tr>
                            <td>State Student Number:</td>
                            <td><input type="text" name="state_num"></td>
                        </tr>
                        <tr>
                            <td>LOI ID: </td>
                            <td><input type="text" name="loi" ></td>
                        </tr>
                        <tr>
                            <td>School ID (Must exist already): </td>
                            <td><input type="text" name="school" ></td>
                        </tr>
                        <tr>
                            <td>Commit ID: </td>
                            <td><input type="text" name="commit" ></td>
                        </tr>
                        <tr>
                            <td>Student Email: </td>
                            <td><input type="text" name="ema" ></td>
                        </tr>
                        <tr>
                            <td>Apply ID: </td>
                            <td><input type="text" name="apply" ></td>
                        </tr>
                    </table>
                    <input type="submit" class="btn btn-primary float-end" style="margin-top: 32px">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
    var table = $('#myTable').DataTable({
            ajax: {
                url: './student_data.php'
            },
            scrollX: true,
            paging: false,
            scrollCollapse: true,
            scrollY: '50vh',
            layout: {
                topStart: 'search',
                topEnd: null,
                bottomStart: 'info'
            }


        })
    ;
</script>

</body>


</html>
