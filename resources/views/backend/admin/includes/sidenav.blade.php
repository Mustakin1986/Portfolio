<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Core</div>
             <a class="nav-link" href="{{ url('/dashboard') }}">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
             </a>
             <div class="sb-sidenav-menu-heading">Interface</div>
<!-- Menu Start--->
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
             
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBuyer" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Buyer Review
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseBuyer" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('buyer.create') }}">Buyer Review Create</a>
                    <a class="nav-link" href="#">Buyer Review List</a>

                </nav>
            </div>
<!-- Menu End--->
<!-- Slider Start--->
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sliderLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Slider
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="sliderLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('sliders.create') }}">Slider Create</a>
                     <a class="nav-link" href="{{ route('sliders.index') }}">Slider List</a>
                 </nav>
             </div>
<!-- Slider End--->
<!-- Service Start--->
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseService" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Service
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseService" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('service.create') }}">Service Create</a>
                     <a class="nav-link" href="{{ route('service.list') }}">Service List</a>

                 </nav>
             </div>
<!-- Slider End--->
<!-- Contact Form Start--->
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContact" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Contact Info
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseContact" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('contact.list') }}">Contact List</a>
                 </nav>
             </div>
<!-- Contact Form End--->
<!-- Faq Start--->
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFaq" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Faq
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseFaq" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('faq.create') }}">Faq Create</a>
                     <a class="nav-link" href="{{ route('faq.list') }}">Faq List</a>
                 </nav>
             </div>
<!-- Faq End--->
<!-- Client Logo Start--->
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClient" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Client Logo
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseClient" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('client.logo.create') }}">Logo Create</a>
                     <a class="nav-link" href="{{ route('client.logo.list') }}">Logo List</a>
                 </nav>
             </div>
<!-- Client Logo End--->
<!-- Contact Info Start--->
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContactInfo" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Contact Info
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseContactInfo" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ route('contact.info.create') }}">Contact Info Create</a>
                     <a class="nav-link" href="{{ route('contact.info.list') }}">Contact Info List</a>
                 </nav>
             </div>
<!-- Contact Info End--->

<!-- Contact Form Start--->
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
