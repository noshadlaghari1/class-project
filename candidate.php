<!DOCTYPE html>
<html>
    <head>
        <title>Candidate</title>
        <?php require_once("external.php");?>

        <style>
            table,tr,td,th{
                border: 1px solid black;
                padding: 20px;
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>
        
    <header style="margin-bottom:100px">
        <?php require("header.php");?>
    </header>

    <div class="container">

    <div class="container d-flex justify-content-end">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Candidate</button>

    </div>

<div class="d-flex container justify-content-center flex-column gap-4 my-5">



    <h2>Candidates</h2>
    <table>

    <thead>
        <th>Name:</th>
        <th>Class:</th>
        <th>Voting Title:</th>
    </thead>

    <tbody>
        <tr>
            <td>Mahram Ali</td>
            <td>9th</td>
            <td>CR</td>
        </tr>
        <tr>
            <td>Noshad</td>
            <td>12th</td>
            <td>VCR</td>
        </tr>
        <tr>
            <td>Zeeshan</td>
            <td>4th</td>
            <td>CR</td>
        </tr>
    </tbody>
    </table>
         </div>

         </div>

                
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <!-- Form Starts Here -->

                <form action="">
                   

                    <label for="voting-title" class="form-label">Select Voting title:</label>
                    <Select id="voting-title" class="form-control">
                        <option value="cr">CR</option>
                        <option value="vcr">V.CR</option>
                        <option value="cr2">class representative</option>
                   
                    </Select>
                   
                    <label for="candidate-class" class="form-label">Select Class:</label>  
                    <Select id="candidate-class" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </Select>
                    
                    
                   
                    <label for="candidate-name" class="form-label">Select Name:</label>  
                    <Select id="candidate-name" class="form-control">
                        <option value="noshad">Noshad</option>
                        <option value="ali">Ali meer</option>
                        <option value="mahram">Mahram ali</option>
                        <option value="muzammil">Muzammil</option>
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

    <footer>
        <?php include("footer.php");?>
    </footer>
    </body>
</html>