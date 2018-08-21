

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">

        <li class="nav-item"> <a class="nav-link" href="/"> <i class="mdi mdi-compass-outline menu-icon"></i> <span class="menu-title">Dashboard</span> </a> </li>
        <!-- <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-sitemap menu-icon"></i> <span class="menu-title">Class</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
          <div class="collapse" id="uiBasicSubmenu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Add Class</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">View List</a></li>
            </ul>
          </div>
        </li> -->


      <li class="nav-item"> <a class="nav-link" href="{{ route('teachers.index') }}"> <i class="mdi mdi-teacher menu-icon"></i> <span class="menu-title">Teacher</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('students.index') }}"> <i class="mdi mdi-calendar-check menu-icon"></i> <span class="menu-title">Student</span> </a> </li>
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
        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#enrollSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-tick menu-icon"></i> <span class="menu-title">Academic Periods</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>

          <div class="collapse" id="enrollSubmenu">
            <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{ route('enrollments.index') }}">Enrollments</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('enrollmentstudents.index') }}">Enrolled Students</a></li>
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
              <li class="nav-item"> <a class="nav-link" href="{{ route('exams.create') }}">Add Exam Results</a> </li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('exams.index') }}">View Exam Results</a> </li>
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


        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#EditorSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-code-brackets menu-icon"></i> <span class="menu-title">Editors</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
          <div class="collapse" id="EditorSubmenu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="pages/apps/email.html"> <i class="mdi mdi-email-outline menu-icon"></i> <span class="menu-title">E-mail</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="pages/apps/calendar.html"> <i class="mdi mdi-calendar-check menu-icon"></i> <span class="menu-title">Calendar</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="pages/apps/todo.html"> <i class="mdi mdi-calendar-text menu-icon"></i> <span class="menu-title">To-do list</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="pages/apps/gallery.html"> <i class="mdi mdi-folder-multiple-image menu-icon"></i> <span class="menu-title">Gallery</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="pages/documentation.html"> <i class="mdi mdi-file-document-box menu-icon"></i> <span class="menu-title">Documentation</span> </a> </li>
      </ul>
    </nav>

        </ul>
    </nav>
