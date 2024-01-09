<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>K-WD Dashboard</title>
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
      rel="stylesheet"
    /> -->
    <!-- <link rel="stylesheet" href="../../build/css/tailwind.css" /> -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script> -->
  </head>
  <body>
  <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">CodzSword</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                      

                        <a href="#" class="sidebar-link">
                          <i class="fa-solid fa-sliders pe-2"></i>Statistic</a>

                      

                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>Tables</a>

                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" ><i class="fa-regular fa-user pe-2"></i>
                            Auth
                        </a></li>  
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Tags</a>
                            </li>    
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Categories</a>
                            </li>
                            
                            <li class="sidebar-item">
                                <a href="../Articles.php" class="sidebar-link">Articles</a>
                            </li>
                        </ul>
                    </li>
                  
                    <li class="sidebar-item"><a href="../../Home.php" class="sidebar-link">Home page</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Setting</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Logout</a></li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom" style="background: #888888;">
                <!-- <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>