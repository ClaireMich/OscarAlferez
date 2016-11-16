<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escuela de Dibujo Oscar Alferez </title>

    <!-- Bootstrap -->
    {!!HTML::style('css/app.css')!!}
    <!-- Font Awesome -->
    {!!HTML::style('fonts/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!HTML::style('css/nprogress.css')!!}    
    <!-- bootstrap-daterangepicker -->
    {!!HTML::style('css/daterangepicker.css')!!}  

    <!-- Custom Theme Style -->
    {!!Html::style('css/custom.min.css')!!} 
    <!-- Datatables -->
    {!!Html::style('//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css')!!} 
    {!!Html::style('DataTables/responsive.bootstrap.min.css')!!}
    {!!Html::style('//cdn.datatables.net/1.10.12/css/dataTables.bootstrap4.min.css')!!}
  
    <!-- Dropzone -->
    {!!Html::style('css/dropzone.css')!!}
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed ">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paint-brush"></i> <span>Escuela de Dibujo</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{asset('images/axel.jpg')}}" alt="..." class="img-circle profile_img">
  
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Axel</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> Alumnos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/alumnos">Ver Alumnos</a></li>
                      <li><a href="/admin/registrarAlumno">Registrar Alumno</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-coffee"></i> Profesor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/profesores">Ver Profesores</a></li>
                      <li><a href="/admin/registrarProfesor">Registrar Profesor</a></li>
                      <li><a href="/admin/asignarGrupo">Asignar Grupo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Grupo<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/grupos">Ver Grupos</a></li>
                      <li><a href="/admin/registrarGrupo">Registrar Grupo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-level-up"></i> Nivel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Ver Niveles</a></li>
                      <li><a href="tables_dynamic.html">Registrar Nivel</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Materia<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Ver Materias</a></li>
                      <li><a href="chartjs2.html">Registrar Materia</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/axel.jpg')}}" alt="">Axel
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href=""> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
      </div>
    </div>
    @include('layouts.include.script')
    @yield('scripts')
  </body>
</html>
