<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'header.php';
        ?>
      </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider" style="float: right;"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                           
                            <a class="nav-link" href="request.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Request </a
                            >
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1> 
                                               
                         <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Email.." title="Type in a name">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>MobileNo</th>
                                            <th>Email</th>
                                            <th>DateOfBirth</th>
                                            <th>Address</th>
                                            <th>HousingSavingNo</th>
                                            <th>NID(FORNT)</th>
                                            <th>NID(BACK)</th>
                                            <th>Case</th>
                                        </tr>
                                    </thead>
                                    <tbody id="list">
                                      
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>MobileNo</th>
                                            <th>Email</th>
                                            <th>DateOfBirth</th>
                                            <th>Address</th>
                                            <th>HousingSavingNo</th>
                                            <th>NID(FORNT)</th>
                                            <th>NID(BACK)</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               <?php
                     include 'footer.php';
               ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        
        <script>
 // initial database
  var firebaseConfig = {
    apiKey: "AIzaSyCQupI3fL799Lc9cyValD4n3IEAStCODEA",
    authDomain: "checklist-db091.firebaseapp.com",
    databaseURL: "https://checklist-db091.firebaseio.com",
    projectId: "checklist-db091",
    storageBucket: "checklist-db091.appspot.com",
    messagingSenderId: "974206699675",
    appId: "1:974206699675:web:16f8bbccff05bf330cde3e"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();
//   db.settings({timestampsInSnapshots: true});
</script>
<script src="request.js"></script>
<!-- <script src="js/table.js"></script> -->
 <!-- fetching -->
 <script>
function myFunction() {
  var input, filter, table, tr, td,td2, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2] ;
    td2= tr[i].getElementsByTagName("td")[1] ;
    if (td ) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
     
    }
     
  }
}
</script>



 <!-- fetching -->
    </body>
</html>
