<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>PRISM - Bootstrap Admin Template</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.min.css"/>

    <script src="/js/demo-rtl.js"></script>


    <link rel="stylesheet" type="text/css" href="/css/libs/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="/css/libs/nanoscroller.css"/>

    <link rel="stylesheet" type="text/css" href="/css/compiled/theme_styles.css"/>

    <link rel="stylesheet" href="/css/libs/daterangepicker.css" type="text/css"/>
    <link rel="stylesheet" href="/css/libs/jquery-jvectormap-1.2.2.css" type="text/css"/>
    <link rel="stylesheet" href="/css/libs/weather-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/css/libs/morris.css" type="text/css"/>
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<div id="theme-wrapper">
    <header class="navbar" id="header-navbar">
        <div class="container">
            <a href="index.html" id="logo" class="navbar-brand">
                <img src="/img/logo.png" alt="" class="normal-logo logo-white"/>
                <img src="/img/logo-black.png" alt="" class="normal-logo logo-black"/>
                <img src="/img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
            </a>
            <div class="clearfix">
                <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a class="btn" id="make-small-nav">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-no-collapse pull-right" id="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="mobile-search">
                            <a class="btn">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="drowdown-search">
                                <form role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="fa fa-search nav-search-icon"></i>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="count">5</span>
                            </a>
                            <ul class="dropdown-menu notifications-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>

                                <li class="item-header">You have 5 pending tasks</li>
                                <li class="item">
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Dashboard v1.3 <span class="pull-right">40%</span></div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Database Update <span class="pull-right">60%</span></div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Iphone Development <span class="pull-right">87%</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 87%">
                                                <span class="sr-only">87% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Mobile App <span class="pull-right">33%</span></div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 33%">
                                                <span class="sr-only">33% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Dashboard v1.3 <span class="pull-right">45%</span></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all tasks
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="count">8</span>
                            </a>
                            <ul class="dropdown-menu notifications-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item-header">You have 6 new notifications</li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-comment"></i>
                                        <span class="content">New comment on ‘Awesome P...</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-plus"></i>
                                        <span class="content">New user registration</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                        <span class="content">New Message from George</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="content">New purchase</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                        <span class="content">New order</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="count">16</span>
                            </a>
                            <ul class="dropdown-menu notifications-list messages-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item first-item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-1.png" alt=""/>
                                        <span class="content">
<span class="content-headline">
George Clooney
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-2.png" alt=""/>
                                        <span class="content">
<span class="content-headline">
Emma Watson
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-3.png" alt=""/>
                                        <span class="content">
<span class="content-headline">
Robert Downey Jr.
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown profile-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/samples/scarlet-159.png" alt=""/>
                                <span class="hidden-xs">Jennifer L.</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown language hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                English
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="item">
                                    <a href="#">
                                        Spanish
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        German
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        Italian
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="page-wrapper" class="container">
        <div class="row">
            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
                            <img alt="" src="img/samples/scarlet-159.png"/>
                            <div class="user-box">
<span class="name">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
Jennifer L.
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
<li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</span>
                                <span class="status">
<i class="fa fa-circle"></i> Online
</span>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-header nav-header-first hidden-sm hidden-xs">
                                    Navigation
                                </li>
                                <li class="active">
                                    <a href="index.html">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Dashboard</span>
                                        <span class="label label-primary label-circle pull-right">23</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-table"></i>
                                        <span>Tables</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="tables.html">
                                                Simple
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Users
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-envelope"></i>
                                        <span>Email</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="email-inbox.html">
                                                Inbox
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-detail.html">
                                                Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-compose.html">
                                                Compose
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Graphs</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="graphs-morris.html">
                                                Morris &amp; Mixed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="graphs-flot.html">
                                                Flot
                                            </a>
                                        </li>
                                        <li>
                                            <a href="graphs-dygraphs.html">
                                                Dygraphs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="graphs-xcharts.html">
                                                xCharts
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="widgets.html">
                                        <i class="fa fa-th-large"></i>
                                        <span>Widgets</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-copy"></i>
                                        <span>Pages</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="calendar.html">
                                                Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">
                                                Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery-v2.html">
                                                Gallery v2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pricing.html">
                                                Pricing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="projects.html">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a href="team-members.html">
                                                Team Members
                                            </a>
                                        </li>
                                        <li>
                                            <a href="timeline.html">
                                                Timeline
                                            </a>
                                        </li>
                                        <li>
                                            <a href="timeline-grid.html">
                                                Timeline Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                User Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="search.html">
                                                Search Results
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:if(confirm('http://view.jqueryfuns.com/Ԥ��-/2015/2/27/35887895fbe6330ccabfb4bbee909f7a/invoice.html  \n\n���ļ�δ�� Teleport Pro ���أ���Ϊ ���������� - �޷��ҵ����ļ���  \n\n����Ҫ�ӷ�����������?'))window.location='http://view.jqueryfuns.com/Ԥ��-/2015/2/27/35887895fbe6330ccabfb4bbee909f7a/invoice.html'">
                                                Invoice
                                            </a>
                                        </li>
                                        <li>
                                            <a href="intro.html">
                                                Tour Layout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-header hidden-sm hidden-xs">
                                    Components
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-edit"></i>
                                        <span>Forms</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="form-elements.html">
                                                Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="x-editable.html">
                                                X-Editable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-wizard.html">
                                                Wizard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-wizard-popup.html">
                                                Wizard popup
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-wysiwyg.html">
                                                WYSIWYG
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-summernote.html">
                                                WYSIWYG Summernote
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-ckeditor.html">
                                                WYSIWYG CKEditor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-dropzone.html">
                                                Multiple File Upload
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-desktop"></i>
                                        <span>UI Kit</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="ui-elements.html">
                                                Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="notifications.html">
                                                Notifications &amp; Alerts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="modals.html">
                                                Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="video.html">
                                                Video
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                Icons
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="icons-awesome.html">
                                                        Awesome Icons
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="icons-halflings.html">
                                                        Halflings Icons
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="ui-nestable.html">
                                                Nestable List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="typography.html">
                                                Typography
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="maps.html">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Google Maps</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-file-text-o"></i>
                                        <span>Extra pages</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="faq.html">
                                                FAQ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="emails.html">
                                                Email Templates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.html">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-full.html">
                                                Login Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="registration.html">
                                                Registration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="registration-full.html">
                                                Registration Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forgot-password.html">
                                                Forgot Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forgot-password-full.html">
                                                Forgot Password Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="lock-screen.html">
                                                Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="lock-screen-full.html">
                                                Lock Screen Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-404.html">
                                                Error 404
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-404-v2.html">
                                                Error 404 Nested
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-500.html">
                                                Error 500
                                            </a>
                                        </li>
                                        <li>
                                            <a href="extra-grid.html">
                                                Grid
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </section>
                <div id="nav-col-submenu"></div>
            </div>
            <div id="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="content-header" class="clearfix">
                                    <div class="pull-left">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li class="active"><span>Dashboard</span></li>
                                        </ol>
                                        <h1>Dashboard</h1>
                                    </div>
                                    <div class="pull-right hidden-xs">
                                        <div class="xs-graph pull-left">
                                            <div class="graph-label">
                                                <b><i class="fa fa-shopping-cart"></i> 838</b> Orders
                                            </div>
                                            <div class="graph-content spark-orders"></div>
                                        </div>
                                        <div class="xs-graph pull-left mrg-l-lg mrg-r-sm">
                                            <div class="graph-label">
                                                <b>&dollar;12.338</b> Revenues
                                            </div>
                                            <div class="graph-content spark-revenues"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="main-box small-graph-box emerald-bg">
                                    <div class="box-button">
                                        <a href="#" class="box-close tooltips" data-toggle="tooltip"
                                           title="Close Panel"><i class="fa fa-times"></i></a>
                                    </div>
                                    <span class="value">69,600</span>
                                    <span class="headline">Visits</span>
                                    <div class="progress">
                                        <div style="width: 84%;" aria-valuemax="100" aria-valuemin="0"
                                             aria-valuenow="84" role="progressbar" class="progress-bar">
                                            <span class="sr-only">84% Complete</span>
                                        </div>
                                    </div>
                                    <span class="subinfo">
<i class="fa fa-caret-down"></i> 22% less than last week
</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="main-box small-graph-box blue-bg">
                                    <div class="box-button">
                                        <a href="#" class="box-close tooltips" data-toggle="tooltip"
                                           title="Close Panel"><i class="fa fa-times"></i></a>
                                    </div>
                                    <span class="value">923</span>
                                    <span class="headline">Orders</span>
                                    <div class="progress">
                                        <div style="width: 42%;" aria-valuemax="100" aria-valuemin="0"
                                             aria-valuenow="42" role="progressbar" class="progress-bar">
                                            <span class="sr-only">42% Complete</span>
                                        </div>
                                    </div>
                                    <span class="subinfo">
<i class="fa fa-caret-up"></i> 15% higher than last week
</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="main-box small-graph-box red-bg">
                                    <div class="box-button">
                                        <a href="#" class="box-close tooltips" data-toggle="tooltip"
                                           title="Close Panel"><i class="fa fa-times"></i></a>
                                    </div>
                                    <span class="value">2,562</span>
                                    <span class="headline">Users</span>
                                    <div class="progress">
                                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
                                             aria-valuenow="60" role="progressbar" class="progress-bar">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                    <span class="subinfo">
<i class="fa fa-caret-up"></i> 10% higher than last week
</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="main-box small-graph-box purple-bg">
                                    <div class="box-button">
                                        <a href="#" class="box-close tooltips" data-toggle="tooltip"
                                           title="Close Panel"><i class="fa fa-times"></i></a>
                                    </div>
                                    <span class="value">$61,600</span>
                                    <span class="headline">Revenue</span>
                                    <div class="progress">
                                        <div style="width: 77%;" aria-valuemax="100" aria-valuemin="0"
                                             aria-valuenow="77" role="progressbar" class="progress-bar">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                    <span class="subinfo">
<i class="fa fa-caret-down"></i> 22% More than last week
</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-box">
                                    <header class="main-box-header clearfix">
                                        <h2>Server Statistics</h2>
                                        <div class="toolbar">
                                            <div class="pull-left">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-xs">Daily</a>
                                                    <a href="#" class="btn btn-default btn-xs active">Monthly</a>
                                                    <a href="#" class="btn btn-default btn-xs">Yearly</a>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="btn-group">
                                                    <a aria-expanded="false"
                                                       class="btn btn-default btn-xs dropdown-toggle"
                                                       data-toggle="dropdown">
                                                        Export <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#">Export as PDF</a></li>
                                                        <li><a href="#">Export as CSV</a></li>
                                                        <li><a href="#">Export as PNG</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i></a>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <div id="hero-area"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="main-box feed">
                                    <header class="main-box-header clearfix">
                                        <h2 class="pull-left">Server status</h2>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <div id="graph-flot-realtime"
                                             style="height: 400px; padding: 0px; position: relative;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="main-box feed">
                                    <header class="main-box-header clearfix">
                                        <h2 class="pull-left">Project feed</h2>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <ul>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/robert-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Robert Downey Jr.</a> took photo with Instagram.
                                                </div>
                                                <div class="post-time">
                                                    Today 5:22 pm
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 5 min.
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/lima-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Adriana Lima</a> checked in at Las Vegas Oscars
                                                </div>
                                                <div class="post-time">
                                                    Yesterday 11:38 am
                                                </div>
                                                <div class="photos clearfix">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/robert-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/emma-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/scarlett-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 9 hours.
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/emma-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Emma Watson</a> commented on Jennifer Lawrence's video.
                                                </div>
                                                <div class="post-time">
                                                    Today 11:59 pm
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 28 min.
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/ryan-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Ryan Gosling</a> likes Ryan Gosling's link on his own
                                                    Timeline.
                                                </div>
                                                <div class="post-time">
                                                    Yesterday 9:43 pm
                                                </div>
                                                <div class="photos clearfix">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/scarlett-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/robert-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/emma-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 5 hours.
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/kunis-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Mila Kunis</a> invited you to his birthday party at her
                                                    mansion.
                                                </div>
                                                <div class="post-time">
                                                    Yesterday 7:50 am
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 9 hours.
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/emma-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Emma Watson</a> commented on Jennifer Lawrence's video.
                                                </div>
                                                <div class="post-time">
                                                    Today 11:59 pm
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 28 min.
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="img">
                                                    <img src="img/samples/lima-300.jpg" alt=""/>
                                                </div>
                                                <div class="title">
                                                    <a href="#">Adriana Lima</a> checked in at Las Vegas Oscars
                                                </div>
                                                <div class="post-time">
                                                    Yesterday 11:38 am
                                                </div>
                                                <div class="photos clearfix">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/robert-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/emma-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="img/samples/scarlett-300.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="time-ago">
                                                    <i class="fa fa-clock-o"></i> 9 hours.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <h2 class="pull-left">Last orders</h2>
                                        <div class="filter-block pull-right">
                                            <div class="form-group pull-left">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <i class="fa fa-search search-icon"></i>
                                            </div>
                                            <a href="#" class="btn btn-primary pull-right">
                                                <i class="fa fa-eye fa-lg"></i> View all orders
                                            </a>
                                        </div>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <div class="table-responsive clearfix">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th><a href="#"><span>Order ID</span></a></th>
                                                    <th><a href="#" class="desc"><span>Date</span></a></th>
                                                    <th><a href="#" class="asc"><span>Customer</span></a></th>
                                                    <th class="text-center"><span>Status</span></th>
                                                    <th class="text-right"><span>Price</span></th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">#8002</a>
                                                    </td>
                                                    <td>
                                                        2015/01/07
                                                    </td>
                                                    <td>
                                                        <a href="#">Robert De Niro</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-success">Completed</span>
                                                    </td>
                                                    <td class="text-right">
                                                        &dollar; 825.50
                                                    </td>
                                                    <td class="text-center" style="width: 15%;">
                                                        <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">#5832</a>
                                                    </td>
                                                    <td>
                                                        2015/01/07
                                                    </td>
                                                    <td>
                                                        <a href="#">John Wayne</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-warning">On hold</span>
                                                    </td>
                                                    <td class="text-right">
                                                        &dollar; 923.93
                                                    </td>
                                                    <td class="text-center" style="width: 15%;">
                                                        <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">#2547</a>
                                                    </td>
                                                    <td>
                                                        2015/01/07
                                                    </td>
                                                    <td>
                                                        <a href="#">Anthony Hopkins</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Pending</span>
                                                    </td>
                                                    <td class="text-right">
                                                        &dollar; 1.625.50
                                                    </td>
                                                    <td class="text-center" style="width: 15%;">
                                                        <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">#9274</a>
                                                    </td>
                                                    <td>
                                                        2015/01/07
                                                    </td>
                                                    <td>
                                                        <a href="#">Charles Chaplin</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-danger">Cancelled</span>
                                                    </td>
                                                    <td class="text-right">
                                                        &dollar; 35.34
                                                    </td>
                                                    <td class="text-center" style="width: 15%;">
                                                        <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">#8463</a>
                                                    </td>
                                                    <td>
                                                        2015/01/07
                                                    </td>
                                                    <td>
                                                        <a href="#">Gary Cooper</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-success">Completed</span>
                                                    </td>
                                                    <td class="text-right">
                                                        &dollar; 34.199.99
                                                    </td>
                                                    <td class="text-center" style="width: 15%;">
                                                        <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="main-box weather-box">

                                    <div class="main-box-body clearfix">
                                        <div class="main-box weather-box-large" style="margin-bottom:0">
                                            <div class="main-box-body main-box-no-header clearfix">
                                                <div class="current" style="min-height:305px">
                                                    <h4>Current weather</h4>
                                                    <div class="place">
                                                        <i class="fa fa-map-marker"></i> New York City
                                                    </div>
                                                    <div class="temp-out-wrapper clearfix">
                                                        <canvas class="icon" id="current-weather" width="100"
                                                                height="100"></canvas>
                                                        <div class="temp-wrapper">
                                                            <div class="temperature">
                                                                35<span class="sign">°</span>
                                                            </div>
                                                            <div class="desc">
                                                                Sunny day
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next">
                                            <ul class="clearfix">
                                                <li>
                                                    <div class="day">
                                                        MON
                                                    </div>
                                                    <div class="icon" title="Hot" data-toggle="tooltip">
                                                        <i class="wi wi-hot"></i>
                                                    </div>
                                                    <div class="temperature">
                                                        45<span class="sign">°</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="day">
                                                        TUE
                                                    </div>
                                                    <div class="icon" title="Showers" data-toggle="tooltip">
                                                        <i class="wi wi-day-showers"></i>
                                                    </div>
                                                    <div class="temperature">
                                                        28<span class="sign">°</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="day">
                                                        WED
                                                    </div>
                                                    <div class="icon" title="Cloudy" data-toggle="tooltip">
                                                        <i class="wi wi-cloudy-windy"></i>
                                                    </div>
                                                    <div class="temperature">
                                                        16<span class="sign">°</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="day">
                                                        THU
                                                    </div>
                                                    <div class="icon" title="Thunderstom" data-toggle="tooltip">
                                                        <i class="wi wi-thunderstorm"></i>
                                                    </div>
                                                    <div class="temperature">
                                                        18<span class="sign">°</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="day">
                                                        FRI
                                                    </div>
                                                    <div class="icon" title="Lightning" data-toggle="tooltip">
                                                        <i class="wi wi-night-alt-lightning"></i>
                                                    </div>
                                                    <div class="temperature">
                                                        22<span class="sign">°</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <h2>Todo</h2>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <ul class="widget-todo">
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-1"/>
                                                        <label for="todo-1">
                                                            New products introduction <span class="label label-danger">High Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-2"/>
                                                        <label for="todo-2">
                                                            Checking the stock <span class="label label-success">Low Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="#" class="table-link">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="table-link danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-3" checked="checked"/>
                                                        <label for="todo-3">
                                                            Buying coffee <span class="label label-warning">Medium Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="#" class="table-link">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="table-link danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-4"/>
                                                        <label for="todo-4">
                                                            New marketing campaign <span class="label label-success">Low Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-5"/>
                                                        <label for="todo-5">
                                                            Calling Mom <span class="label label-warning">Medium Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="#" class="table-link badge">
                                                        <i class="fa fa-cog"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-6"/>
                                                        <label for="todo-6">
                                                            Ryan's birthday <span class="label label-danger">High Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="name">
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="todo-4"/>
                                                        <label for="todo-4">
                                                            New marketing campaign <span class="label label-success">Low Priority</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <h2>Conversation</h2>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <div class="conversation-wrapper">
                                            <div class="conversation-content">
                                                <div class="conversation-inner">
                                                    <div class="conversation-item item-left clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/ryan.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Ryan Gossling
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 10:36 am
                                                            </div>
                                                            <div class="text">
                                                                I don't think they tried to market it to the
                                                                billionaire, spelunking,
                                                                base-jumping crowd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-right clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/kunis.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Mila Kunis
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 10:40 am
                                                            </div>
                                                            <div class="text">
                                                                The path of the righteous man is beset on all sides by
                                                                the iniquities of the
                                                                selfish and the tyranny of evil men. Blessed is he who,
                                                                in the name of charity and
                                                                good will.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-right clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/kunis.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Mila Kunis
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 10:45 am
                                                            </div>
                                                            <div class="text">
                                                                The path of the righteous man is beset on all sides by
                                                                the iniquities of the
                                                                selfish and the tyranny of evil men. Blessed is he who,
                                                                in the name of charity and
                                                                good will.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-left clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/ryan.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Ryan Gossling
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 10:50 am
                                                            </div>
                                                            <div class="text">
                                                                I don't think they tried to market it to the
                                                                billionaire, spelunking,
                                                                base-jumping crowd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-right clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/kunis.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Mila Kunis
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 11:07 am
                                                            </div>
                                                            <div class="text">
                                                                The path of the righteous man is beset on all sides by
                                                                the iniquities of the
                                                                selfish and the tyranny of evil men. Blessed is he who,
                                                                in the name of charity and
                                                                good will.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-right clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/kunis.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Mila Kunis
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 11:16 am
                                                            </div>
                                                            <div class="text">
                                                                The path of the righteous man is beset on all sides by
                                                                the iniquities of the
                                                                selfish and the tyranny of evil men. Blessed is he who,
                                                                in the name of charity and
                                                                good will.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-left clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/ryan.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Ryan Gossling
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 11:21 am
                                                            </div>
                                                            <div class="text">
                                                                I don't think they tried to market it to the
                                                                billionaire, spelunking,
                                                                base-jumping crowd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-item item-right clearfix">
                                                        <div class="conversation-user">
                                                            <img src="img/samples/kunis.png" alt=""/>
                                                        </div>
                                                        <div class="conversation-body">
                                                            <div class="name">
                                                                Mila Kunis
                                                            </div>
                                                            <div class="time hidden-xs">January 17th 2015, 11:27 am
                                                            </div>
                                                            <div class="text">
                                                                The path of the righteous man is beset on all sides by
                                                                the iniquities of the
                                                                selfish and the tyranny of evil men. Blessed is he who,
                                                                in the name of charity and
                                                                good will.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-new-message">
                                                <form>
                                                    <div class="form-group">
                                                        <textarea class="form-control chat-input" rows="2"
                                                                  placeholder="Enter your message..."></textarea>
                                                    </div>
                                                    <div class="clearfix chat-send">
                                                        <button type="submit" class="btn btn-success pull-right">Send
                                                            message
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-xs-12">
                                <div class="main-box">
                                    <header class="main-box-header clearfix">
                                        <h2 class="pull-left">Visitors location</h2>
                                        <div class="icon-box pull-right">
                                            <a href="#" class="btn pull-left">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a href="#" class="btn pull-left">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                        </div>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="world-map" style="width: 100%; height: 400px"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="map-stats">
                                                    <div class="table-responsive">
                                                        <table class="table table-condensed table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th><span>Country</span></th>
                                                                <th class="text-center"><span>Last Visit</span></th>
                                                                <th class="text-center"><span>Status</span></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    USA
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status green">
                                                                    <i class="fa fa-level-up"></i> 27%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Russia
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status red">
                                                                    <i class="fa fa-level-down"></i> 43%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    China
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status green">
                                                                    <i class="fa fa-level-up"></i> 18%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    India
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status green">
                                                                    <i class="fa fa-level-up"></i> 63%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Australia
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status red">
                                                                    <i class="fa fa-level-down"></i> 82%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Canada
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status red">
                                                                    <i class="fa fa-level-down"></i> 11%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Argentina
                                                                </td>
                                                                <td class="text-center">
                                                                    2015/01/07
                                                                </td>
                                                                <td class="text-center status green">
                                                                    <i class="fa fa-level-up"></i> 74%
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer id="footer-bar" class="row">
                    <p id="footer-copyright" class="col-xs-12">
                        Powered by PRISM Theme.
                    </p>
                </footer>
            </div>
        </div>
    </div>
</div>
<div id="config-tool" class="closed">
    <a id="config-tool-cog">
        <i class="fa fa-cog"></i>
    </a>
    <div id="config-tool-options">
        <h4>Layout Options</h4>
        <ul>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-fixed-header"/>
                    <label for="config-fixed-header">
                        Fixed Header
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-fixed-sidebar"/>
                    <label for="config-fixed-sidebar">
                        Fixed Left Menu
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-fixed-footer"/>
                    <label for="config-fixed-footer">
                        Fixed Footer
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-boxed-layout"/>
                    <label for="config-boxed-layout">
                        Boxed Layout
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-rtl-layout"/>
                    <label for="config-rtl-layout">
                        Right-to-Left
                    </label>
                </div>
            </li>
        </ul>
        <br/>
        <h4>Skin Color</h4>
        <ul id="skin-colors" class="clearfix">
            <li>
                <a class="skin-changer" data-skin="theme-navyBlue" data-toggle="tooltip" title="Navy Blue"
                   style="background-color: #34495e;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green"
                   style="background-color: #2ecc71;">
                </a>
            </li>
            <li>
                <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip"
                   title="Gradient">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-greenSea" data-toggle="tooltip" title="Green Sea"
                   style="background-color: #6ff3ad;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst"
                   style="background-color: #9b59b6;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue"
                   style="background-color: #7FC8BA;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red"
                   style="background-color: #e74c3c;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue"
                   style="background-color: #1ABC9C;">
                </a>
            </li>
        </ul>
    </div>
</div>

<script src="js/demo-skin-changer.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>

<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-merc-en.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/flot/jquery.flot.min.js"></script>
<script src="js/flot/jquery.flot.resize.min.js"></script>
<script src="js/flot/jquery.flot.time.min.js"></script>
<script src="js/flot/jquery.flot.threshold.js"></script>
<script src="js/flot/jquery.flot.axislabels.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/skycons.js"></script>

<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>

<script>
    $(document).ready(function () {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function () {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function () {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function () {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [
                {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2010 Q2', iphone: 15778, ipad: 13794, itouch: 12041},
                {period: '2010 Q3', iphone: 12912, ipad: 10969, itouch: 9901},
                {period: '2010 Q4', iphone: 8767, ipad: 6597, itouch: 6689},
                {period: '2011 Q1', iphone: 10810, ipad: 10914, itouch: 12293},
                {period: '2011 Q2', iphone: 9670, ipad: 9000, itouch: 7881},
                {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2011 Q4', iphone: 15073, ipad: 8967, itouch: 5175},
                {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
                {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
            ],
            lineColors: ['#869d9d', '#EFC94C', '#45B29D'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });

        // graph real time
        if ($('#graph-flot-realtime').length) {

            var data = [],
                totalPoints = 300;

            function getRandomData() {

                if (data.length > 0)
                    data = data.slice(1);

                // Do a random walk

                while (data.length < totalPoints) {

                    var prev = data.length > 0 ? data[data.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }

                    data.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }

                return res;
            }

            // Set up the control widget

            var updateInterval = 30;
            $().val(updateInterval).change(function () {
                var v = $(this).val();
                if (v && !isNaN(+v)) {
                    updateInterval = +v;
                    if (updateInterval < 1) {
                        updateInterval = 1;
                    } else if (updateInterval > 2000) {
                        updateInterval = 2000;
                    }
                    $(this).val("" + updateInterval);
                }
            });

            var plot = $.plot("#graph-flot-realtime", [getRandomData()], {
                series: {
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {colors: [{opacity: 0.5}, {opacity: 0.5}]}
                    },
                    shadowSize: 0	// Drawing is faster without shadows
                },
                colors: ["#1ABC9C"],

                yaxis: {
                    min: 0,
                    max: 110
                },
                xaxis: {
                    show: false
                },
                grid: {borderWidth: 1, backgroundColor: "#FFF"}
            });

            function update() {

                plot.setData([getRandomData()]);

                // Since the axes don't change, we don't need to call plot.setupGrid()

                plot.draw();
                setTimeout(update, updateInterval);
            }

            update();
        }

        //WORLD MAP
        $('#world-map').vectorMap({
            map: 'world_merc_en',
            backgroundColor: '#ffffff',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#e1e1e1',
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.8
                },
                selected: {
                    fill: '#8dc859'
                },
                selectedHover: {}
            },
            markerStyle: {
                initial: {
                    fill: '#FF6C60',
                    stroke: '#FF6C60'
                }
            },
            markers: [
                {latLng: [38.35, -121.92], name: 'Los Angeles - 23'},
                {latLng: [39.36, -73.12], name: 'New York - 84'},
                {latLng: [50.49, -0.23], name: 'London - 43'},
                {latLng: [36.29, 138.54], name: 'Tokyo - 33'},
                {latLng: [37.02, 114.13], name: 'Beijing - 91'},
                {latLng: [-32.59, 150.21], name: 'Sydney - 22'},
            ],
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#6fc4fe', '#58DDD0'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionLabelShow: function (e, el, code) {
                el.html(el.html() + ' (' + gdpData[code] + ')');
            }
        });

        /* SPARKLINE - graph in header */
        var orderValues = [10, 8, 5, 7, 4, 4, 3, 8, 0, 7, 10, 6, 5, 4, 3, 6, 8, 9];

        $('.spark-orders').sparkline(orderValues, {
            type: 'bar',
            barColor: '#7FC8BA',
            height: 25,
            barWidth: 6
        });

        var revenuesValues = [8, 3, 2, 6, 4, 9, 1, 10, 8, 2, 5, 8, 6, 9, 3, 4, 2, 3, 7];

        $('.spark-revenues').sparkline(revenuesValues, {
            type: 'bar',
            barColor: '#7FC8BA',
            height: 25,
            barWidth: 6
        });

        /* ANIMATED WEATHER */
        var skycons = new Skycons({"color": "#58DDD0"});
        // on Android, a nasty hack is needed: {"resizeClear": true}

        // you can add a canvas by it's ID...
        skycons.add("current-weather", Skycons.SNOW);

        // start animation!
        skycons.play();

        $('.conversation-inner').slimScroll({
            height: '405px',
            wheelStep: 35,
        });

        $('.chat-input').keypress(function (ev) {
            var p = ev.which;
            var chatTime = moment().format("MMMM Do YYYY, h:mm a");
            var chatText = $('.chat-input').val();
            if (p == 13) {
                if (chatText == "") {
                    alert('Empty Field');
                } else {
                    $('<div class="conversation-item item-left clearfix"><div class="conversation-user"><img src="img/samples/ryan.png"/*tpa=http://view.jqueryfuns.com/Ԥ��-/2015/2/27/35887895fbe6330ccabfb4bbee909f7a/img/samples/ryan.png*/ alt="male"/></div><div class="conversation-body"><div class="name">Ryan Gossling</div><div class="time hidden-xs">' + chatTime + '</div><div class="text">' + chatText + '</div></div></div>').appendTo('.conversation-inner');
                    $(this).val('');
                    $('.conversation-inner').scrollTo('100%', '100%', {
                        easing: 'swing'
                    });
                }
                return false;
                ev.epreventDefault();
                ev.stopPropagation();
            }
        });
        $('http://view.jqueryfuns.com/Ԥ��-/2015/2/27/35887895fbe6330ccabfb4bbee909f7a/.chat-send .btn').click(function () {
            var chatTime = moment().format("MMMM Do YYYY, h:mm a");
            var chatText = $('.chat-input').val();
            if (chatText == "") {
                alert('Empty Field');
                $(".chat-input").focus();
            } else {
                $('<div class="conversation-item item-left clearfix"><div class="conversation-user"><img src="img/samples/ryan.png"/*tpa=http://view.jqueryfuns.com/Ԥ��-/2015/2/27/35887895fbe6330ccabfb4bbee909f7a/img/samples/ryan.png*/ alt="male"/></div><div class="conversation-body"><div class="name">Ryan Gossling</div><div class="time hidden-xs">' + chatTime + '</div><div class="text">' + chatText + '</div></div></div>').appendTo('.conversation-inner');
                $('.chat-input').val('');
                $(".chat-input").focus();
                $('.conversation-inner').scrollTo('100%', '100%', {
                    easing: 'swing'
                });
            }
            return false;
        });
    });
</script>
</body>
</html>
