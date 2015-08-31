<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>
        Administrator Section
    </title>

    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bugs/common.css"/>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bugs/theme/transdmin.css"/>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bugs/login.css"/>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/bugs/common.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/bugs/login.js"></script>

</head>
<body>
<div>

    <div id="wrapper" class="ys-adminform">

        <?php include('includes/header_logo.php'); ?>

        <form id="form-login" class="admin-section-form frm">

            <div class="header">
                <br/>

                <h1>Login</h1>
                <br/>
            </div>

            <div class="content">

                <div class="form-row">
                    <input name="email" class="input" placeholder="Email" type="text"/>

                    <div class="user-icon"></div>
                </div>
                <div class="form-row">
                    <input name="password" class="input password" placeholder="Password" type="password"/>

                    <div class="pass-icon"></div>
                </div>
            </div>

            <div class="footerlogin">
                <input class="button" name="btn-login" value="Authenticate" type="button"/>

                <div class="message" style="font-weight: bold; padding-top:16px;">&nbsp;</div>
            </div>

        </form>

    </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>