<style>
.dropdown1{

    color:black;  font-weight: 400;
  font-size: 20px;
  text-align: justify;
  border: none;
}
.dropdown1:hover{
    color: blue;
  background-color: #e5e5e5;
  box-shadow: 2px 2px 4px black;
  font-weight: 600;
    
}

</style>

<div class="border-end sidebar1 " id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dashboard.php"><i
                class="fa-solid fa-gauge"></i> &nbsp;Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="profile.php"> <i
                class="fa-solid fa-user"></i> &nbsp;Profile</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="teacher_list.php"><i
                class="fa-solid fa-chalkboard-user"></i> &nbsp;Teacher </a>

        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"> <i
                class="fa-solid fa-calendar-days"></i> &nbsp;Events</a>



       <!-- Dropdown for Teacher -->
       <div class="dropdown list-group-item list-group-item-action list-group-item-light p-3" id="teacherDropdown">
                
                <a class="  dropdown-toggle   btn dropdown1" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=" 
  "> <i
                class="fa-solid fa-chalkboard-user"></i> &nbsp;Student</a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="teacherDropdown">
                <li><a class="dropdown-item list-group-item list-group-item-action list-group-item-light p-3" href="teacher_list.php"> Student List</a></li>
                <li><a class="dropdown-item list-group-item list-group-item-action list-group-item-light p-3"href="teacher_add.php">Add Batch</a></li>
              
                </ul>
            </div>









        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"> <i
                class="fa-solid fa-calendar-days"></i> &nbsp;Events</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"> <i
                class="fa-solid fa-book-open"></i> &nbsp;Subject</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="logout.php"><i
                class="fa-solid fa-right-from-bracket"></i> &nbsp;Logout</a>
    </div>
</div>
<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle"><i class="fa-solid fa-list"></i></button>

        </div>
    </nav>


    <!-- Custom JavaScript for hoverable dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdown = document.getElementById('teacherDropdown');

            dropdown.addEventListener('mouseover', function() {
                var dropdownMenu = new bootstrap.Dropdown(dropdown.querySelector('.dropdown1'));
                dropdownMenu.show();
            });

            dropdown.addEventListener('mouseleave', function() {
                var dropdownMenu = new bootstrap.Dropdown(dropdown.querySelector('.dropdown1'));
                dropdownMenu.hide();
                document.querySelector('.dropdown1').style.boarder = 'none';

            });
        });
    </script>