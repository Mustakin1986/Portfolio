<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Core</div>
             <a class="nav-link" href="{{url('/Dashboard') }}">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
             </a>
             <div class="sb-sidenav-menu-heading">Interface</div>
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Menu
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('menus.create') }}">Create</a>
                     <a class="nav-link" href="{{ route('menus.index') }}">List</a>

                 </nav>
             </div>

             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sliderLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Slider
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             {{-- <div class="collapse" id="sliderLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('categories.create') }}">Category Create</a>
                     <a class="nav-link" href="{{ route('categories.index') }}">Category List</a>
                 </nav>
             </div> --}}

             <div class="sb-sidenav-menu-heading">Addons</div>
             <a class="nav-link" href="charts.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                 Charts
             </a>
             <a class="nav-link" href="tables.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                 Tables
             </a>
         </div>
     </div>
     <div class="sb-sidenav-footer">
         <div class="small">Logged in as:</div>
         {{ Auth::user()->name }}
     </div>
 </nav>
