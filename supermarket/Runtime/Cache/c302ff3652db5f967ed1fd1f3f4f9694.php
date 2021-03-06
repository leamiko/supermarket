<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登陆 超市管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="__ASSETS__/charisma/css/bootstrap-cosmo.css" />
    <link rel="stylesheet" type="text/css" href="__ASSETS__/charisma/css/charisma-app.css" />
    <!-- The fav icon -->
    <link rel="shortcut icon" href="__ASSETS__/charisma/img/favicon.ico">
</head>

<body>
<div class="container">
    <div class="row">

        <div class="row">
            <div class="span12 center login-header">
                <h2>欢迎登陆超市管理系统</h2>
            </div>
        </div>

        <div class="row">
            <div class="well span5 center login-box">
                <div class="alert alert-info">请输入登陆信息</div>
                <form class="form-horizontal" action="<?php echo U('public/checkLogin');?>" method="post">
                    <fieldset>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input autofocus name="account" type="text" value="admin" />
                        </div>

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input name="password" type="password" value="admin" />
                        </div>

                        <div class="input-prepend input-append">
                            <span class="add-on"><i class="icon-flag"></i></span>
                            <input name="verify" type="text" />
                            <img class="add-on verify" src="<?php echo U('public/verify');?>" />
                        </div>

                        <p class="center span5">
                            <button type="submit" class="btn btn-primary">登陆</button>
                        </p>
                    </fieldset>
                </form>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery -->
<script type="text/javascript" src="__ASSETS__/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $(function(){

        $('.verify').on('click',function(){
            $src = $(this).attr('src');
            $(this).attr("src", $src+"?"+(new Date().getTime()));
        });
    });
</script>



</body>
</html>