<!DOCTYPE html>
<html>

<head>
    <title>Student</title>
    <?php include("external.php") ?>

    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 20px;
        }

     
    </style>
</head>

<body>
    <header style="margin-bottom:100px;">
        <?php include("header.php") ?>
    </header>

    <div class="container d-flex align-items-center justify-content-end py-3">
        
       
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addstdmodal">Add Student</button>
           
            <button type="button" class="btn btn-success"><a href="voting-titles.php" style="text-decoration:none; color:white">Add Voting Title</a></button>

        </div>
       
    </div>

    <div class="container-fluid d-flex justify-content-center my-3">

    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>FATHER'S NAME</th>
                <th>SURNAME</th>
                <th>GR NO</th>
                <th>CURRENTLY ENROLLED CLASS</th>
                <th>CURRENT ACADEMIC YEAR</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Noshad</td>
                <td>Mumtaz ali</td>
                <td>Leghari</td>
                <td>534</td>
                <td>4th</td>
                <td>2nd</td>
                <td>
                    <button class="btn btn-success">Print ID</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">Edit</button>

                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Noshad</td>
                <td>Mumtaz ali</td>
                <td>Leghari</td>
                <td>534</td>
                <td>4th</td>
                <td>2nd</td>
                <td>
                    <button class="btn btn-success">Print ID</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">Edit</button>

                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Noshad</td>
                <td>Mumtaz ali</td>
                <td>Leghari</td>
                <td>534</td>
                <td>4th</td>
                <td>2nd</td>
                <td>
                    <button class="btn btn-success">Print ID</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">Edit</button>

                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Noshad</td>
                <td>Mumtaz ali</td>
                <td>Leghari</td>
                <td>534</td>
                <td>4th</td>
                <td>2nd</td>
                <td>
                    <button class="btn btn-success">Print ID</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">Edit</button>

                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
          

        </tbody>
    </table>
    </div>


          <!-- Button trigger modal-1 starts-->
          <div class="modal fade" id="addstdmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <!-- Form Starts Here -->

                <form action="">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name">

                    <label for="fname" class="form-label">Father's Name:</label>
                    <input type="text" class="form-control" id="fname">

                    <label for="surname" class="form-label">Surname:</label>
                    <input type="text" class="form-control" id="surname">

                    <label for="grno" class="form-label">GR NO:</label>
                    <input type="text" class="form-control" id="grno">

                    <label for="currently-enrolled" class="form-label">Currently Enrolled Class:</label>
                    <Select id="currently-enrolled" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </Select>
                   
                    <label for="current-academic-year" class="form-label">Current Academic Year:</label>  
                    <Select id="current-academic-year" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </Select>
                    
                    
                </form>
                <!-- Form ends Here -->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<!-- Button Trigger Model-1 Ends -->


    <!-- Button trigger modal 2 starts-->

    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <!-- Form Starts Here -->

                <form action="">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name">

                    <label for="fname" class="form-label">Father's Name:</label>
                    <input type="text" class="form-control" id="fname">

                    <label for="surname" class="form-label">Surname:</label>
                    <input type="text" class="form-control" id="surname">

                    <label for="grno" class="form-label">GR NO:</label>
                    <input type="text" class="form-control" id="grno">

                    <label for="currently-enrolled" class="form-label">Currently Enrolled Class:</label>
                    <Select id="currently-enrolled" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </Select>
                   
                    <label for="current-academic-year" class="form-label">Current Academic Year:</label>  
                    <Select id="current-academic-year" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </Select>
                    
                    
                </form>
                <!-- Form ends Here -->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<!-- Button Trigger Model 2 end -->

<?php include("footer.php");?>
</body>

</html>