<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"/>
</head>
<body>
<div id="navigation" class="nav" style="margin-left: 10%; margin-top: 16px; margin-bottom: 16px; align-items: center">
    <img src="img/baxter.png" height="128" style="margin-right: 32px" >
    <form action="application.php">
        <input type="submit" value="Application" class="btn btn-primary" style="margin-right: 12px"/>
    </form>
    <form action="loi.php">
        <input type="submit" value="LOI" class="btn btn-light" style="margin-right: 12px"/>
    </form>
    <form action="school.php">
        <input type="submit" value="School" class="btn btn-light" style="margin-right: 12px"/>
    </form>
    <form action="student.php">
        <input type="submit" value="Student" class="btn btn-light" style="margin-right: 12px"/>
    </form>

</div>
<hr/>
<div style="justify-items: center">
    <button type="button" class="btn btn-success float-start"
            style="margin-left: 10%; margin-bottom: 8px; margin-top: 16px;" data-toggle="modal"
            data-target="#exampleModal">
        Add Application
    </button>
    <div style="width:80%">
        <table id="myTable" class="display nowrap">
            <thead>
            <tr>
                <th>Apply ID</th>
                <th>App Year</th>
                <th>App First Name</th>
                <th>App Middle Name</th>
                <th>App Last Name</th>
                <th>App First Name Pref</th>
                <th>Apply Date</th>
                <th>Grade Level</th>
                <th>Lottery Alias</th>
                <th>Offer Date</th>
                <th>Lottery Status</th>
                <th>Sibling Y/N</th>
                <th>Employee Y/N</th>
                <th>Board Member Y/N</th>
                <th>Founder Y/N</th>
                <th>Sibling Applying</th>
                <th>Sibling Linking ID</th>
                <th>Student Multiple Births</th>
                <th>Student Multiple Birth Num</th>
                <th>Sibling 1 Name</th>
                <th>Student ID</th>
            </tr>

            </thead>
            <tfoot>
            <tr>
                <th>Apply ID</th>
                <th>App Year</th>
                <th>App First Name</th>
                <th>App Middle Name</th>
                <th>App Last Name</th>
                <th>App First Name Pref</th>
                <th>Apply Date</th>
                <th>Grade Level</th>
                <th>Lottery Alias</th>
                <th>Offer Date</th>
                <th>Lottery Status</th>
                <th>Sibling Y/N</th>
                <th>Employee Y/N</th>
                <th>Board Member Y/N</th>
                <th>Founder Y/N</th>
                <th>Sibling Applying</th>
                <th>Sibling Linking ID</th>
                <th>Student Multiple Births</th>
                <th>Student Multiple Birth Num</th>
                <th>Sibling 1 Name</th>
                <th>Student ID</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Application Entry</h5>
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="justify-items: center; justify-content: center">
                    <form action="insert_application.php" method="POST">
	                <table>
                        <tr>
                            <td>App ID: </td>
                            <td><input type="text" name="app_id"></td>
                        </tr>
                        <tr>
                            <td>App Year: </td>
                            <td><input type="text" name="app_year" ></td>
                        </tr>
                        <tr>
                            <td>First Name: </td>
                            <td><input type="text" name="app_first" ></td>
                        </tr>
                        <tr>
                            <td>Middle Name: </td>
                            <td><input type="text" name="app_middle"></td>
                        </tr>
                        <tr>
                            <td>Last Name: </td>
                            <td><input type="text" name="app_last" ></td>
                        </tr>
                        <tr>
                            <td>Preferred Name: </td>
                            <td><input type="text" name="app_pref" ></td>
                        </tr>
                        <tr>
                            <td>Apply Date: </td>
                            <td><input type="text" name="app_date"></td>
                        </tr>
                        <tr>
                            <td>Grade Level: </td>
                            <td><input type="text" name="grade_level" ></td>
                        </tr>
                        <tr>
                            <td>Lottery Alias: </td>
                            <td><input type="text" name="alias" ></td>
                        </tr>
                        <tr>
                            <td>Offer Date: </td>
                            <td><input type="text" name="offer_date"></td>
                        </tr>
                        <tr>
                            <td>Lottery Status: </td>
                            <td><input type="text" name="status" ></td>
                        </tr>
                        <tr>
                            <td>Sibling Yes/No: </td>
                            <td><input type="text" name="sibling" ><br></td>
                        </tr>
                        <tr>
                            <td>Employee Yes/No: </td>
                            <td><input type="text" name="employee"></td>
                        </tr>
                        <tr>
                            <td>Board Member Yes/No: </td>
                            <td><input type="text" name="board" ></td>
                        </tr>
                        <tr>
                            <td>Founder Yes/No: </td>
                            <td><input type="text" name="founder" ></td>
                        </tr>
                        <tr>
                            <td>Sibling Applying Yes/No: </td>
                            <td><input type="text" name="sibling_apply"></td>
                        </tr>
                        <tr>
                            <td>Sibling Linking ID: <br></td>
                            <td><input type="text" name="sibling_link"></td>
                        </tr>
                        <tr>
                            <td>Student Multiple Birthdays Yes/No: </td>
                            <td><input type="text" name="mult_birth" ></td>
                        </tr>
                        <tr>
                            <td>Multiple Birthday Number: </td>
                            <td><input type="text" name="birth_num"></td>
                        </tr>
                        <tr>
                            <td>Sibling 1 Name:</td>
                            <td><input type="text" name="sibling_name"></td>
                        </tr>
                        <tr>
                            <td>Student ID (Must exist already): </td>
                            <td><input type="text" name="stud_id" ></td>
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
                url: './application_data.php'
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
