<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>HouDun许愿墙</title>
	<link rel="stylesheet" href="/think/Public/Home/Css/index.css" />
	<script type="text/javascript" src='/think/Public/Home/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='/think/Public/Home/Js/index.js'></script>
    <script type="text/javascript">
        var ajaxSubmitUrl = "<?php echo U('Index/ajaxSubmit');?>";
//        alert(ajaxSubmitUrl);
    </script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl class='paper a<?php echo mt_rand(0,5);?>'>
			<dt>
				<span class='username'><?php echo ($vo['title']); ?></span>
				<span class='num'>No.<?php echo ($vo['id']); ?></span>
			</dt>
			<dd class='content'><?php echo (phiz($vo['common'])); ?></dd>
			<dd class='bottom'>
				<span class='time'><?php echo (date('Y-m-d H:i:s',$vo['time'])); ?></span>
				<a href="" class='close'></a>
			</dd>
		</dl><?php endforeach; endif; else: echo "" ;endif; ?>

	</div>


	<div id='send-form'>
		<p class='title'><span>许下你的愿望</span><a href="" id='close'></a></p>
		<form action="<?php echo U('Index/add');?>" method="post" id="ff">
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='title' id='username'/>
			</p>
			<p>
				<label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="common" id='content'></textarea>
				<div id='phiz'>
					<img src="/think/Public/Home/Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="/think/Public/Home/Images/phiz/baobao.gif" alt="抱抱" />
					<img src="/think/Public/Home/Images/phiz/haixiu.gif" alt="害羞" />
					<img src="/think/Public/Home/Images/phiz/ku.gif" alt="酷" />
					<img src="/think/Public/Home/Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="/think/Public/Home/Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="/think/Public/Home/Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="/think/Public/Home/Images/phiz/qian.gif" alt="钱" />
					<img src="/think/Public/Home/Images/phiz/huaxin.gif" alt="花心" />
					<img src="/think/Public/Home/Images/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<span id='send-btn'></span>
		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="/think/Public/Home/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>