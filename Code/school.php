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
        <input type="submit" value="School" class="btn btn-primary" style="margin-right: 12px"/>
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
        Add School
    </button>
    <div style="width:80%">
        <table id="myTable" class="display nowrap">
            <thead>
            <tr>
                <th>School ID</th>
                <th>School Name</th>
                <th>Public Flag</th>
                <th>School Type</th>
                <th>SAU</th>
                <th>SAU ID</th>
                <th>County</th>
                <th>Location</th>
                <th>Mailing Street</th>
                <th>Mailing City</th>
                <th>Mailing Zip</th>
                <th>Phone</th>
                <th>Grade Low</th>
                <th>Grade High</th>
                <th>Contact</th>
                <th>Contact Email</th>
            </tr>

            </thead>
            <tfoot>
            <tr>
                <th>School ID</th>
                <th>School Name</th>
                <th>Public Flag</th>
                <th>School Type</th>
                <th>SAU</th>
                <th>SAU ID</th>
                <th>County</th>
                <th>Location</th>
                <th>Mailing Street</th>
                <th>Mailing City</th>
                <th>Mailing Zip</th>
                <th>Phone</th>
                <th>Grade Low</th>
                <th>Grade High</th>
                <th>Contact</th>
                <th>Contact Email</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add School Entry</h5>
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="justify-items: center; justify-content: center">
                    <form action="insert_school.php" method="POST">
	                <table>
                        <tr>
                            <td>School ID: </td>
                            <td><input type="text" name="schid"></td>
                        </tr>
                        <tr>
                            <td>School Name: </td>
                            <td><input type="text" name="scname" ></td>
                        </tr>
                        <tr>
                            <td>Public Flag: </td>
                            <td><input type="text" name="flag" ></td>
                        </tr>
                        <tr>
                            <td>School Type: </td>
                            <td><input type="text" name="type"></td>
                        </tr>
                        <tr>
                            <td>SAU: </td>
                            <td><input type="text" name="sa" ></td>
                        </tr>
                        <tr>
                            <td>SAU ID: </td>
                            <td><input type="text" name="said" ></td>
                        </tr>
                        <tr>
                            <td>County: </td>
                            <td><input type="text" name="cou"></td>
                        </tr>
                        <tr>
                            <td>Location: </td>
                            <td><input type="text" name="loc" ></td>
                        </tr>
                        <tr>
                            <td>Mailing Street: </td>
                            <td><input type="text" name="str" ></td>
                        </tr>
                        <tr>
                            <td>Mailing City: </td>
                            <td><input type="text" name="cit"></td>
                        </tr>
                        <tr>
                            <td>Mailing Zip: </td>
                            <td><input type="text" name="zip" ></td>
                        </tr>
                        <tr>
                            <td>Phone: </td>
                            <td><input type="text" name="pho" ><br></td>
                        </tr>
                        <tr>
                            <td>Grade Low: </td>
                            <td><input type="text" name="grlow"></td>
                        </tr>
                        <tr>
                            <td>Grade High: </td>
                            <td><input type="text" name="grhigh" ></td>
                        </tr>
                        <tr>
                            <td>Contact: </td>
                            <td><input type="text" name="con" ></td>
                        </tr>
                        <tr>
                            <td>Contact Email: </td>
                            <td><input type="text" name="conem"></td>
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
                url: './school_data.php'
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
