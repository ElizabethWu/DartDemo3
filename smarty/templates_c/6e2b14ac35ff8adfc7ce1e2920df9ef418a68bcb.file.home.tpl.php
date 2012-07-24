<?php /* Smarty version Smarty-3.0.8, created on 2012-07-02 13:38:33
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6919010004e1d09cf4318b6-42457917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2b14ac35ff8adfc7ce1e2920df9ef418a68bcb' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/home.tpl',
      1 => 1310525876,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6919010004e1d09cf4318b6-42457917',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>DSD DART: 
Home Page
</title>
<!--        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
        <script type="text/javascript"
        src="js/jquery/jquery-1.6.2.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">
            <link rel="stylesheet" type="text/css"
                  href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" />

            <link rel="stylesheet" href="css/dart.css" type="text/css" media="screen" />


            
            <!--        <link rel="stylesheet" href="menu.css" type="text/css" media="screen" />-->
            <!--[if IE 6]>
            <link type='text/css' href='css/dart_ie.css' rel='stylesheet' media='screen' />
    <![endif]-->
                <?php echo (($tmp = @$_smarty_tpl->getVariable('head')->value)===null||$tmp==='' ? '' : $tmp);?>


                <script type="text/javascript" >
            

                    <?php echo (($tmp = @$_smarty_tpl->getVariable('js')->value)===null||$tmp==='' ? '' : $tmp);?>

                </script>
        </head>
        <body>
            <div id="wrapper">

                <?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

                <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

                <div id="container">
                    <div id="content">
                        <script type="text/javascript" >
                            document.getElementById("content").style.display = "none";
                        </script>



                        
    
 <div style="width:900px; margin:0 auto">   
   
    <?php if ($_smarty_tpl->getVariable('showDistrictReminders')->value){?>
<font size="4" color="#cc0000">DART System Status &amp; Reminders</font>

        <?php if ($_smarty_tpl->getVariable('district_important')->value!=''){?>
<div class="noteimportant"> <?php echo $_smarty_tpl->getVariable('district_important')->value;?>
</div>
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('district_warning')->value!=''){?>
<div class="notewarning"><?php echo $_smarty_tpl->getVariable('district_warning')->value;?>
</div>
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('district_tip')->value!=''){?>
<div class="notetip"><?php echo $_smarty_tpl->getVariable('district_tip')->value;?>
</div>
        <?php }?>
    <?php }?>

    <?php if ((($tmp = @$_smarty_tpl->getVariable('showSiteReminders')->value)===null||$tmp==='' ? 0 : $tmp)){?>
<font size="4" color="#cc0000">DART Site <?php echo $_smarty_tpl->getVariable('currentMySite')->value;?>
 System Status &amp; Reminders</font>

        <?php if ($_smarty_tpl->getVariable('site_important')->value!=''){?>
<div class="noteimportant"> <?php echo $_smarty_tpl->getVariable('site_important')->value;?>
</div>
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('site_warning')->value!=''){?>
<div class="notewarning"><?php echo $_smarty_tpl->getVariable('site_warning')->value;?>
</div>
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('site_tip')->value!=''){?>
<div class="notetip"><?php echo $_smarty_tpl->getVariable('site_tip')->value;?>
</div>
        <?php }?>
    <?php }?>

<font size="4">DART: System Introduction<br></font>
<div align="left"><br>
    <br>
    <font size="2">Welcome to the BSSD Data Analysis and Reporting Toolkit system - or DART. This is one of the three main systems BSSD now uses to link learner and teacher needs to curriculum development, and district resources.<br>
        <br>
						DART is a database system which allows the tracking and reporting of learner progress on a series of goal areas. It is unique for several reasons:</font>
    <ul>
        <li type="circle"><font size="2"><b>DART is Learner-centered!</b> - DART allows users to create, share and delete groups on THEIR own to individualize, track and plan group instruction or interventions.</font>
        <li type="circle"><font size="2"><b>DART is Smart</b>  - DART actually automatically links learner needs to the wiki-based BSSD Open Content development system to allow teachers and learners to build knowledge and capacity together!</font>
        <li type="circle"><font size="2"><b>DART is Complete</b> - DART tracks and reports all required school and student information for state & federal reporting.</font>
        <li type="circle"><font size="2"><b>DART is Intuitive</b> - Students, teachers and administrators find the interface so intuitive that very little support is needed.</font>
        <li type="circle"><font size="2"><b>DART is Open Source</b> - This means DART is <b>FREE,</b> to school districts, and that development and support takes place by users themselves.</font>
        <li type="circle"><font size="2"><b>DART is Modular</b> - Rather than telling users what data modules they need, users contribute modules that solve their problems.</font>
        <li type="circle"><font size="2"><b>DART is Powerful and Secure</b> - DART runs on the proven and secure Linux/Apache/MySQL/PHP platform with Secure Socket Layer (SSL) encryption technology. It practically never crashes.</font>
    </ul>
    <p><font size="2">For BSSD, DART tracks student progress through our 9 Content Areas, and the various levels within each Content Area. For a list, and detailed information about this BSSD Model, please see our explanation on the <a title="BSSD Standards Information" href="http://wiki.bssd.org/index.php/Standards_Information" target="_blank">BSSD OpenContent website</a>.<br>
            <br>
							Each standard and assessment task which makes up a level is tracked, and each user gets customized information about group and individual progress. All reports and level changes are done at the school building level, and District Office program staff can access and manage all 15 of our schools with ease.</font></p>
    <p><font size="2">Instructional needs and weaknesses are highlighted using ideas similar to &quot;tag clouding&quot; to produce weighted lists of potential areas of focus. These are keyed directly, and hot-linked to </font></p>
    <p><font size="2">User-based permissions mean that parents, students, teachers school and district administrators all have the power to do what they need, and no more.</font></p>
    <p><font size="2">For information about the DART project, or to learn about our other Open systems, see the <a title="DART Project Information" href="http://wiki.bssd.org/index.php/DART_System">DART wiki</a>.</font></p>

</div>

</div>

                        <?php echo (($tmp = @$_smarty_tpl->getVariable('body')->value)===null||$tmp==='' ? '' : $tmp);?>


                        
                            <script type="text/javascript" >
                                $(document).ready(function(){
                                    document.getElementById("content").style.display = "block";
                                });
                            </script>
                        
                    </div>
                </div>
                    <div class="clearfooter"></div>
            </div>

            <div id="footer">
                <?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
            </div>
            <div id="dialog" title="Your session is about to expire!" style="display:none">
                <p>You will be logged off in <span id="dialog-countdown"></span> seconds.</p>
                <p>Do you want to continue your session?</p>
            </div
            <script type="text/javascript" src="js/wz_tooltip.js"></script>


            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<!--            <script type="text/javascript" src="js/timeout.js"></script>-->
            <script type="text/javascript" src="js/jquery/jquery.idletimeout.js"></script>
            <script type="text/javascript" src="js/jquery/jquery.idletimer.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
        </body>


    </html>



