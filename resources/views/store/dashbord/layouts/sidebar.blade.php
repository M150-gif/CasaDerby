
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<div id="app-sidepanel" class="app-sidepanel"> 
     <div id="sidepanel-drop" class="sidepanel-drop"></div>
     <div class="sidepanel-inner d-flex flex-column">
          <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
          <div class="app-branding">
              <a class="app-logo" href="index.html">
  
          
           <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                     <li class="nav-item">
                         <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                         <a class="nav-link active" href="{{ route('dashbord_admin_store') }}">
                              <span class="nav-icon">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  </svg>
                               </span>
                           <span class="nav-link-text">Dashboard</span>
                         </a><!--//nav-link-->
                     </li><!--//nav-item-->




                     <li class="nav-item has-submenu">
                         <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                         <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-departements" aria-expanded="false" aria-controls="submenu-departements">
                             <span class="nav-icon">
                                 <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
                                     <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
                                 </svg>
                             </span>
                             <span class="nav-link-text">Categories</span>
                             <span class="submenu-arrow">
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                 </svg>
                             </span><!--//submenu-arrow-->
                         </a><!--//nav-link-->
                         <div id="submenu-departements" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                             <ul class="submenu-list list-unstyled">
                                 <li class="submenu-item"><a class="submenu-link" href="{{ route('categories.index') }}">Liste</a></li>
                             </ul>
                         </div>
                     </li><!--//nav-item-->
                     
                     <li class="nav-item has-submenu">
                         <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                         <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-products" aria-expanded="false" aria-controls="submenu-departements">
                             <span class="nav-icon">
                                 <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
                                     <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
                                 </svg>
                             </span>
                             <span class="nav-link-text">Products</span>
                             <span class="submenu-arrow">
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                 </svg>
                             </span><!--//submenu-arrow-->
                         </a><!--//nav-link-->
                         <div id="submenu-products" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                             <ul class="submenu-list list-unstyled">
                                 <li class="submenu-item"><a class="submenu-link" href="{{ route('products.index')}}">Liste</a></li>
                             </ul>
                         </div>
                     </li><!--//nav-item-->
                     <!--//nav-item-->
                     <li class="nav-item has-submenu">
                         <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                         <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-commandes" aria-expanded="false" aria-controls="submenu-departements">
                             <span class="nav-icon">
                                 <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
                                     <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
                                 </svg>
                             </span>
                             <span class="nav-link-text">Commandes</span>
                             <span class="submenu-arrow">
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                 </svg>
                             </span><!--//submenu-arrow-->
                         </a><!--//nav-link-->
                         <div id="submenu-commandes" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                             <ul class="submenu-list list-unstyled">
                                 <li class="submenu-item"><a class="submenu-link" href="{{ route('products.index')}}">Liste</a></li>
                             </ul>
                         </div>
                     </li><!--//nav-item-->
                     <!--//nav-item-->
                     <li class="nav-item has-submenu">
                         <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                         <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
                              <span class="nav-icon">
                              <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
<path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
</svg>
                               </span>
                           <span class="nav-link-text">Clients</span>
                           <span class="submenu-arrow">
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg>
                          </span><!--//submenu-arrow-->
                         </a><!--//nav-link-->
                         <div id="submenu-2" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                              <ul class="submenu-list list-unstyled">
                                   <li class="submenu-item"><a class="submenu-link" href="{{ route("clients") }}">Liste</a></li>
                              </ul>
                         </div>
                     </li><!--//nav-item-->


                    

                     
				    
                </ul><!--//app-menu-->
           </nav><!--//app-nav-->
         
     </div><!--//sidepanel-inner-->
 </div><!--//app-sidepanel-->
</header><!--//app-header-->