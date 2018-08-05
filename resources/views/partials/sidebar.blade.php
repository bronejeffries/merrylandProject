<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item"> <a class="nav-link" href="{{route('home')}}"> <i class="mdi mdi-compass-outline menu-icon"></i> <span class="menu-title">Dashboard</span> </a> </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-buffer menu-icon"></i> <span class="menu-title">Class</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="uiBasicSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Add Class</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">View List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#uiAdvancedSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-cube-outline menu-icon"></i> <span class="menu-title">Subjects</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="uiAdvancedSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('subjects.create')}}">Add Subject</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('subjects.index')}}">View List</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#formsSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-clipboard-outline menu-icon"></i> <span class="menu-title">Students</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="formsSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('students.create')}}">Add Student</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">View List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#uiExamSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-clipboard-outline menu-icon"></i> <span class="menu-title">Manage Marks</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="uiExamSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('exams.create')}}">Add Subject Marks</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('exams.index')}}">View Subject Performances</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#tablesSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-table-large menu-icon"></i> <span class="menu-title">Tables</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="tablesSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-arrow-expand-all menu-icon"></i> <span class="menu-title">Page Layouts</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="layoutsSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">Rtl</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> <span class="menu-title">Sidebar Layouts</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="sidebar_layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="collapseExample"> <i class="mdi mdi-google-pages menu-icon"></i> <span class="menu-title">General Pages</span> <i class="mdi mdi-menu-down menu-arrow"></i> </a>
        <div class="collapse" id="generalSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a> </li>
          </ul>
        </div>
      </li>

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
