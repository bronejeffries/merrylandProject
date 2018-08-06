<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item"> <a class="nav-link" href="index.html"> <i class="mdi mdi-compass-outline menu-icon"></i> <span class="menu-title">Dashboard</span> </a> </li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('teachers.index') }}"> <i class="mdi mdi-calendar-check menu-icon"></i> <span class="menu-title">Teacher</span> </a> </li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('students.index') }}"> <i class="mdi mdi-calendar-check menu-icon"></i> <span class="menu-title">Student</span> </a> </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#tablesSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-table-large menu-icon"></i> <span class="menu-title">Academics</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="tablesSubmenu">
          <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Class</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Stream</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Subject</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Assignment</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Routine</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Syllaus</a></li>
          
          </ul> 
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-arrow-expand-all menu-icon"></i> <span class="menu-title">Attendance</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="layoutsSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Student Attendance</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">Teacher Attendance</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">User Attendance</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> <span class="menu-title">Exams</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="sidebar_layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Exam</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Exam Schedule</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Grade</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Exam Attendance</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-google-pages menu-icon"></i> <span class="menu-title">Marks</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="generalSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html"> Marks </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Mark Distribution</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> Promotion</a></li>
          </ul>
        </div>
      </li>
     
      </li>
      </ul>
  </nav>