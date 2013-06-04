<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo base_url() ?>"/>
        <title><?php // echo $this->title;            ?></title>

        <!-- CSS --> 
        <link href="common/css/style.css" rel="stylesheet" />
        <link href="common/css/sagud.css" rel="stylesheet" />
        <link href="common/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
        <link href="common/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="common/css/jquery.calendarPicker.css" rel="stylesheet" type="text/css" />

        
        <!-- JS -->
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="common/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="common/js/bootstrap.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="common/js/googleMaps.js"></script> 
        <script type="text/javascript" src="common/js/jquery.quick.pagination.min.js"></script>
        <script type="text/javascript" src="common/js/jquery.calendarPicker.js"></script>

        <!-- my jQuery -->
        <script type="text/javascript" src="common/js/jquery.mCustomScrollbar.js"></script>
        

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="background">
            <div id="layer-gradient"></div>
            <div id="layer-header"></div>
            <div id="layer-bubbles"></div>
        </div>

        <div id="header">
            <div id="locale">
                <div class="column-center">						
                    <ul id="locale-selector-list" class="dnl-ui-list vertical">
                        <li class=""><span class="dnl-ui-sprite nl-NL"></span><a href="/locale/nl_NL">nederlands</a></li>
                        <li class="divider">|</li>
                        <li class="active"><span class="dnl-ui-sprite en-US"></span><a href="/locale/en_US">english</a></li>
                    </ul>
                </div>			
            </div>			
            <div class="column-center">			
                <div id="website-logo" class="dnl-ui-img"></div>
                <div id="widget-apps" class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
                    <label><?php echo $this->lang->line('app_GET_THE_APP'); ?></label>
                    <ul id="app-list" class="dnl-ui-list">
                        <li><span class="dnl-ui-sprite app-ios"></span><div><?php echo $this->lang->line('app_IOS'); ?>:<br/><?php echo $this->lang->line('app_APPSTORE'); ?></div></li>
                        <li><span class="dnl-ui-sprite app-android"></span><div><?php echo $this->lang->line('app_ANDROID'); ?>:<br/><?php echo $this->lang->line('app_GOOGLE_PLAY'); ?></div></li>
                        <li><span class="dnl-ui-sprite app-blackberry"></span><div><?php echo $this->lang->line('app_BLACKBERRY'); ?>:<br/><?php echo $this->lang->line('app_APPWORLD'); ?></div></li>
                    </ul>
                </div>
            </div>					
        </div>
