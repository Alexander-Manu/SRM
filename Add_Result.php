<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TOTAL STUDENTS, TOTAL STAFF​, Quick Links:, Students">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Add Results-Reporting Sys.</title>
    <link rel="stylesheet" href="nicepage.css" type="text/css">
    <link rel="stylesheet" href="Edit_Staff.css" type="text/css">
    <!-- <link rel="stylesheet" href="footer.css" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Student_Report_System",
		"logo": "images/default-logo.png"}
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Add Resultf">
    <meta property="og:type" content="website">
  </head>
  <body>

 <nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand" href="#"><img src="images/images.png" alt="" width="50" height="50" class="d-inline-block align-text-top"></a>
    <h3 class="text-primary">Student Reporting System</h3>
  </div>
</nav>

<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">   
  <div class="container">
    <button class="navbar-toggler border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon expand-lg"><b class="text-primary">X</b></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-pills mx-auto mb-lg-0 fw-bolder fs-6">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Staffs
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Staff.php">Add Staff</a></li>
            <li><a class="dropdown-item" href="Edit_Staff.php">Edit Staff</a></li>
            <li><a class="dropdown-item" href="Remove_Staff.php">Remove Staff</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="All_Staff.php">All Staff</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Students
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Student.php">Add Student</a></li>
            <li><a class="dropdown-item" href="Edit_Student.php">Edit Student</a></li>
            <li><a class="dropdown-item" href="Remove_Student.php">Remove Student</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="All_Student.php">All Student</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown fst-italic">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Results
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Result.php">Add Results</a></li>
            <li><a class="dropdown-item" href="Edit_Result.php">Edit Results</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Check_Result.php">Check Results</a></li>
            <li><a class="dropdown-item" href="Student_Trancript.php">Student Transcript</a></li>
            <li><a class="dropdown-item" href="Print_Report.php">Print Terminal Report</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Class.php">Add Class</a></li>
            <li><a class="dropdown-item" href="Edit_Class.php">Edit Class</a></li>
            <li><a class="dropdown-item" href="Remove_Class.php">Remove Class</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Add_Subject.php">Add Subject</a></li>
            <li><a class="dropdown-item" href="Edit_Subject.php">Edit Subject</a></li>
            <li><a class="dropdown-item" href="Remove_Subject.php">Remove Subject</a></li>
          </ul>
        </li>
        <button class="btn btn-outline-primary" type="submit">Logout</button>
      </ul>  
    </div>
  </div>
</nav>
  


        <div class="container">
            <form method="post">
                <p class="text-center shadow rounded heading">Enter Results Information</p>
                <div id="student" class="information">
                    <div class="form-row">
                        <div class="form-group col-md-6 my-3">
                        <label for="inputClass">CLASS:</label>
                            <select name="Class" id="Input_Class" require="" class="form-control shadow">
                                <option selected>Select Class...</option>
                                <option>Primary 1</option>
                                <option>Primary 2</option>
                                <option>Primary 3</option>
                                <option>Primary 4</option>
                                <option>Primary 5</option>
                                <option>Primary 6</option>
                                <option>JHS 1</option>
                                <option>JHS 2</option>
                                <option>JHS 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">                        
                    <div class="form-group col-md-6 my-3">
                        <label for="inputYear">YEAR:</label>
                            <input type="number" name="Year" required="" class="form-control shadow" id="Year" placeholder="Enter Year...">
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6 my-3">
                        <label for="inputTerm">SELECT TERM:</label>
                            <select name="Term" id="Input_Term" require="" class="form-control shadow">
                                <option selected>Select Term...</option>
                                <option>First Term</option>
                                <option>Second Term</option>
                                <option>Third Term</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div style="margin: 20px;">
                    <fieldset class="form-group">
                        <input style="margin-left: 40%" class="btn btn-primary shadow" type="submit" name="details" value="ENTER DETAILS">
                    </fieldset>
                </div>
            </form>
        </div>


        <div id="table">
            <span id="allStaff">ENTER STUDENTS RESULT HERE:</span>
            <table class="table table-striped table-primary">
                <tr>
                    <th scope="col">ID:</th>
                    <th scope="col">FIRST NAME:</th>
                    <th scope="col">LAST NAME:</th>
                    <th scope="col">ENGLISH:</th>
                    <th scope="col">MATHS:</th>
                    <th scope="col">INT. SCIENCE:</th>
                    <th scope="col">SOCIAL STUDIES:</th>
                    <th scope="col">I.C.T:</th>
                    <th scope="col">B.D.T:</th>
                    <th scope="col">GH LANG.:</th>
                    <th scope="col">R.M.E:</th>
                    <th scope="col">TECHNICAL:</th>
                </tr>
                <!-- PHP CODE (IF STATEMENT) THAT WILL CHECK THE CLASS THE USER SELECTED AND POPULATE THE SUBJECTS INTO THE TABLE HEADING (LIKE THE EXAMPLE ABOVE) FOLLOWS HERE. -->
        
            </table>
            
            <div style="margin: 20px;">
                    <fieldset class="form-group" id="btnAlign" style="margin-left: 40%">
                        <input class="btn btn-primary shadow" type="submit" name="details" value="SUBMIT RESULTS">
                        <input style="margin-left: 20px" class="btn btn-primary shadow" type="submit" name="details" value="CLEAR">
                    </fieldset>
                </div>
        </div>
        </div>


              <!-- FOOTER -->
              <nav class="navbar mt-4 mb-n4 pt-2" style="background-color: #e3f2fd;">
  <div class="container justify-content-center fw-bolder fs-5">
    <a class="navbar-brand" href="#"><h6>&copy; All Rights Reserved, 2022 - School Reporting System ~ (v1.0)</h6></a>
  </div>
</nav>

<nav class="navbar navbar-expand-sm pt-0" style="background-color: #e3f2fd;">
<div class="container-fluid justify-content-center fst-italic fs-5 mt-n3">
   
  <ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link" href="#">Design By  &RightArrow; </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-globe"></i> SupaTech Developers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> info@supatech.com</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 02345678000</a>
    </li>
  </ul>
</div>
</nav>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>