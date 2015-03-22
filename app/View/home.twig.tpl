
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>MPWAR Framework - Home</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.min.css" />

 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
</head>
<body class=" intro">
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">

                   Menú

            </li>
            <li>
                <a href="/twig">Plantilla básica Twig</a>
            </li>
            <li>
                <a href="/smarty">Plantilla básica Smarty</a>
            </li>
            <li>
                <a href="/user/1">Usuario por URL</a>
            </li>
            <li>
                <a href="/eloquent">Usuario en DB con Eloquent</a>
            </li>
            <li>
                <a href="/pdo">Usuario en DB con PDO</a>
            </li>
            <li>
                <a href="/404">Respuesta Http 404</a>
            </li>
            <li>
                <a href="/json">Ajax con Json response</a>
            </li>
            <li>
                <a href="/quijote/es">Traducciones</a>
            </li>
            <li>
                <a href="/logout">Logout</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Bienvenido Pablo a tu portal de administración</h1>
                    <p>Este panel se compone de varios ejemplos sencillos utilizando el framework, desde el uso de diferentes motores de plantillas, hasta sel service container </p>

                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

 
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<style>
    /*!
* Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
* Code licensed under the Apache License v2.0.
* For details, see http://www.apache.org/licenses/LICENSE-2.0.
*/
    /* Toggle Styles */
    html{
        height: 100%;
    }
    .intro {

        height: 100%;
        text-align: center;
        color: #fff;
        background: url("assets/img/intro-bg.jpg") no-repeat scroll center bottom / cover #fff;
    }
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled {
        padding-left: 250px;
    }
    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background: #000;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }
    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }
    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }
    /* Sidebar Styles */
    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }
    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999999;
    }
    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
    }
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }
    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }
    .sidebar-nav > .sidebar-brand a {
        color: #999999;
    }
    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }
    @media(min-width:768px) {
        #wrapper {
            padding-left: 250px;
        }
        #wrapper.toggled {
            padding-left: 0;
        }
        #sidebar-wrapper {
            width: 250px;
        }
        #wrapper.toggled #sidebar-wrapper {
            width: 0;
        }
        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }
        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>
 
</body>
</html> 