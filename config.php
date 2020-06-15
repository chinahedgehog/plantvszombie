<?php

include "Mysql.php";
ini_set('date.timezone', 'asia/shanghai');

$mysql = new Mysql();
$config = $mysql->find('select * from config');
$type = $config['type'];
$response = $config['response'];
if ($_POST) {

    $config = $mysql->find('select * from config');

    $type = $_POST['type'];
    $response = $_POST['response'] ?$_POST['response'] : base64_decode($_POST['type3']);

    $sql = "update config set response='$response', `type`='$type'";
    $mysql->query($sql);

    exit('<script>location.href="/config.php";</script>');
}

?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>代理配置</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">请选择事项</h2>

        <input type="radio" name="type" value="1" <?php if ($type == 1) echo 'checked';?>> 本地模式+远程模式 即本完全存在,直返,否则远程获取并更新本地<hr>
        <input type="radio" name="type" value="4" <?php if ($type == 4) echo 'checked';?>> 纯网络模式,常用于更新本地信息<hr>
        <input type="radio" name="type" value="2" <?php if ($type == 2) echo 'checked';?> > 断网模式,没远程什么事了, 找不到的返回空.模式断网<hr>
        刷药说明: 第一步,切到网络模式, 第二步,找到无尽模式里的无尽商店.第三步,切模式,第四步,刷对应的药   刷新按钮不扣费<hr>
        <input type="radio" name="type" value="51" <?php if ($type == 51) echo 'checked';?> > 刷药模式  绿药水+橙色药水 先点绿,后点橙色  |
        <input type="radio" name="type" value="52" <?php if ($type == 52) echo 'checked';?> > 刷药模式  蓝色  只能刷蓝色|
        <input type="radio" name="type" value="53" <?php if ($type == 53) echo 'checked';?> > 刷药模式  紫色  只能刷紫色|
        <input type="radio" name="type" value="54" <?php if ($type == 54) echo 'checked';?> > 刷药模式  仅 魔音甜菜 <hr>
        <input type="radio" name="type" value="3" <?php if ($type == 3) echo 'checked';?>> 直返模式 同上.比上面还要暴力,只返回文本框,文本框没内容,从选择列表中获取<hr>
        <textarea name="response"><?=$response?></textarea>

        <br>
        直返列表,仅直返模式,且优先级低于上框<hr>
        <?php
        $responseList = $mysql->query('select * from plant_prize');
        foreach ($responseList as $response) {
            echo '<input type="radio" name="type3" value="'.base64_encode($response['response']) .'" /> ' . $response['desc'] . '   | ';
        }

        ?>

        <button class="btn btn-lg btn-primary btn-block" type="submit">提交</button>
    </form>

</div> <!-- /container -->

</body>
</html>
