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
        <input type="submit" value="LOI" class="btn btn-primary" style="margin-right: 12px"/>
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
        Add LOI
    </button>
    <div style="width:80%">
        <table id="myTable" class="display nowrap">
            <thead>
            <tr>
                <th>LOI ID</th>
                <th>Student Name</th>
                <th>Submission Date</th>
                <th>LOI Class Of</th>
                <th>Parent Name</th>
                <th>Parent Email</th>
                <th>Parent Phone</th>
                <th>Sending School</th>
                <th>Status</th>
                <th>Student ID</th>
            </tr>

            </thead>
            <tfoot>
            <tr>
                <th>LOI ID</th>
                <th>Student Name</th>
                <th>Submission Date</th>
                <th>LOI Class Of</th>
                <th>Parent Name</th>
                <th>Parent Email</th>
                <th>Parent Phone</th>
                <th>Sending School</th>
                <th>Status</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add LOI Entry</h5>
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="justify-items: center; justify-content: center">
                    <form action="insert_loi.php" method="POST">
	                <table>
                        <tr>
                            <td>LOI ID: </td>
                            <td><input type="text" name="loiid"></td>
                        </tr>
                        <tr>
                            <td>Student Name: </td>
                            <td><input type="text" name="stu_name" ></td>
                        </tr>
                        <tr>
                            <td>Submission Date: </td>
                            <td><input type="text" name="sub_name" ></td>
                        </tr>
                        <tr>
                            <td>LOI Class Of: </td>
                            <td><input type="text" name="class_of"></td>
                        </tr>
                        <tr>
                            <td>Parent Name: </td>
                            <td><input type="text" name="pname" ></td>
                        </tr>
                        <tr>
                            <td>Parent Email: </td>
                            <td><input type="text" name="pem" ></td>
                        </tr>
                        <tr>
                            <td>Parent Phone: </td>
                            <td><input type="text" name="pphone"></td>
                        </tr>
                        <tr>
                            <td>Sending School: </td>
                            <td><input type="text" name="send" ></td>
                        </tr>
                        <tr>
                            <td>Status: </td>
                            <td><input type="text" name="stat" ></td>
                        </tr>
                        <tr>
                            <td>Student ID: </td>
                            <td><input type="text" name="studid"></td>
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
                url: './loi_data.php'
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
