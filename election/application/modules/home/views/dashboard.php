<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Rizvi">
        <meta name="keyword" content="Php, Election, Voting, Election Management, Software, Php, CodeIgniter, Ecms, Election Campaign">
        <link rel="shortcut icon" href="uploads/favicon.png">
        <title><?php echo $this->router->fetch_class(); ?> | Election Campaign System</title>
        <!-- Bootstrap core CSS -->
        <link href="common/css/bootstrap.min.css" rel="stylesheet">
        <link href="common/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="common/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="common/assets/DataTables/datatables.min.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="common/css/style.css" rel="stylesheet">
        <link href="common/css/style-responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="common/assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-datetimepicker/css/datetimepicker.css" />
        <link href="common/css/invoice-print.css" rel="stylesheet" media="print">
        <link rel="stylesheet" type="text/css" href="common/assets/jquery-multi-select/css/multi-select.css">
        <link href="common/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <section id="container" class="">
            <!--header start-->
            <header class="header white-bg">
                <div class="col-md-2 logo_bac">
                    <div class="sidebar-toggle-box">
                        <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
                    </div>
                    <!--logo start-->
                    <a href="" class="logo bold">TECS <span> </span></a>
                    <!--logo end-->
                </div>
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                    </ul>
                </div>
                <div class="top-nav ">
                    <?php
                    $message = $this->session->flashdata('feedback');
                    if (!empty($message)) {
                        ?>
                        <div class="flashmessage pull-left"><i class="fa fa-check"></i> <?php echo $message; ?></div>
                    <?php } ?> 
                    <ul class="nav pull-right top-menu">
                    </ul>
                    <div class=" col-md-3 pull-right padding_allright">
                        <a href="settings" class="allright"> <i class="fa fa-cog"></i> <?php echo lang('settings'); ?></a>
                        <a href="profile" class="allright"> <i class=" fa fa-suitcase"></i> <?php echo lang('profile'); ?></a>
                        <a href="auth/logout" class="allright"> <i class="fa fa-key"></i> <?php echo lang('log_out'); ?></a>
                    </div>
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a href="">
                                <i class="fa fa-dashboard"></i>
                                <span><?php echo lang('dashboard'); ?></span>
                            </a>
                        </li>
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <li>
                                <a href="area">
                                    <i class="fa fa-home"></i>
                                    <span><?php echo lang('area_list'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="volunteer" >
                                    <i class="fa fa-users"></i>
                                    <span><?php echo lang('volunteer_management'); ?></span>
                                </a>
                            </li>
                           
                            
                             <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-users"></i>
                                    <span><?php echo lang('voter_database'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="voter"><i class="fa fa-users"></i><?php echo lang('voter_database'); ?></a></li>
                                    <li><a  href="voter/voterCategory"><i class="fa fa-plus"></i><?php echo lang('voter_category'); ?></a></li>
                                </ul>
                            </li>
                            
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-users"></i>
                                    <span><?php echo lang('team'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="team"><i class="fa fa-users"></i><?php echo lang('all_teams'); ?></a></li>
                                    <li><a  href="team/addNewView"><i class="fa fa-plus"></i><?php echo lang('add_team'); ?></a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="event" >
                                    <i class="fa fa-hand-o-up"></i>
                                    <span><?php echo lang('event'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="snw" >
                                    <i class="fa fa-strikethrough"></i>
                                    <span><?php echo lang('campaign_analysis'); ?></span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-money"></i>
                                    <span><?php echo lang('expenses'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="finance/expense"><i class="fa fa-money"></i><?php echo lang('expenses'); ?></a></li>
                                    <li><a  href="finance/addExpenseView"><i class="fa fa-plus"></i><?php echo lang('add_expense'); ?></a></li>
                                    <li><a  href="finance/expenseCategory"><i class="fa fa-credit-card"></i><?php echo lang('expense_categories'); ?></a></li>
                                    <li><a  href="finance/addExpenseCategory"><i class="fa fa-plus"></i><?php echo lang('add_expense_category'); ?></a></li>
                                    <li><a  href="finance/financialReport"><i class="fa fa-money"></i><?php echo lang('expense_report'); ?></a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-envelope-o"></i>
                                    <span>SMS</span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="sms/sendView"><i class="fa fa-location-arrow"></i><?php echo lang('new_sms'); ?></a></li>
                                    <li><a  href="sms/sent"><i class="fa fa-list"></i><?php echo lang('sent_sms'); ?></a></li>
                                    <li><a  href="sms/settings"><i class="fa fa-gear"></i><?php echo lang('sms_settings'); ?></a></li>
                                </ul>
                            </li>  
                            <li> <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-cogs"></i>
                                    <span><?php echo lang('settings'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a href="settings"><i class="fa fa-gear"></i><?php echo lang('system_settings'); ?></a></li>
                                    <li><a href="settings/language"><i class="fa fa-wrench"></i><?php echo lang('language'); ?></a></li>
                                    <li><a href="settings/backups"><i class="fa fa-smile-o"></i><?php echo lang('backup_database'); ?></a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="profile" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('profile'); ?> </span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->




