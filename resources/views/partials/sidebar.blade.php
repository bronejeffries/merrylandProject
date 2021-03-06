

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">

        <li class="nav-item">
          <a class="nav-link" href="/"> <i class="mdi mdi-compass-outline menu-icon"></i> <span class="menu-title">Dashboard</span>
          </a>
        </li>


      <li class="nav-item">
        <a class="nav-link" href="{{ route('staffs.index') }}"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> <span class="menu-title">Staff</span>
        </a>
       </li>
        <li class="nav-item">
         <a class="nav-link" href="{{ route('students.index') }}"> <i class="mdi mdi-calendar-check menu-icon"></i> <span class="menu-title">Student</span>
          </a>
       </li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('subjects.index') }}"> <i class="mdi mdi-content-copy menu-icon"></i> <span class="menu-title">Subjects</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#tablesSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-book menu-icon"></i> <span class="menu-title">Academics</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>

          <div class="collapse" id="tablesSubmenu">
            <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{ route('classes.index') }}">Class</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Stream</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Assignment</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Routine</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Syllaus</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
           <a class="nav-link" data-toggle="collapse" href="#enrollSubmenu" aria-expanded="false" aria-controls="collapseExample">
            <i class="mdi mdi-tick menu-icon"></i>
            <span class="menu-title">
            Academic Periods
          </span>
          <i class="mdi mdi-menu-down menu-arrow"></i>
         </a>

          <div class="collapse" id="enrollSubmenu">
            <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{ route('enrollments.index') }}">Enrollments</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('enrollmentstudents.index') }}">Enrolled Students</a></li>
            </ul>
          </div>
        </li>

        <li style="display:none;" class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-arrow-expand-all menu-icon"></i> <span class="menu-title">Attendance</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
          <div class="collapse" id="layoutsSubmenu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Student Attendance</a> </li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">Teacher Attendance</a> </li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">User Attendance</a> </li>
            </ul>
          </div>
        </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> <span class="menu-title">Exams</span> <i class="mdi mdi-menu-down menu-arrow"></i>
        </a>
          <div class="collapse" id="sidebar_layouts">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item">
               <a class="nav-link" href="{{ route('exams.create') }}">
               Add Exam Results
             </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('exams.index') }}">
                View Exam Results
              </a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                Exam Schedule
              </a>
               </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                Grade
              </a>
            </li>
              <li class="nav-item">
               <a class="nav-link" href="#">
               Exam Attendance
             </a>
           </li>
            </ul>
          </div>
        </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="collapseExample">
         <i class="mdi mdi-google-pages menu-icon"></i>
          <span class="menu-title">Marks</span>
           <i class="mdi mdi-menu-down menu-arrow"></i>
            </a>
          <div class="collapse" id="generalSubmenu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
               <a class="nav-link" href="pages/samples/landing-page.html">
                Marks
              </a>
            </li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Mark Distribution</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> Promotion</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
