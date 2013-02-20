<!DOCTYPE HTML>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width" name="viewport" />
  <title>pingSVN</title>
  <link rel="shortcut icon" href="/favicon.ico" />
  <style>
    body{font-family: "Microsoft Yahei","Helvetica Neue","Luxi Sans","DejaVu Sans",Tahoma,"Hiragino Sans GB",STHeiti;font-weight: 300;background: none repeat scroll 0% 0% #F0EEEE;color: #333;font-size: 14px;margin: 20px 0 0 0;}
    .content{border-bottom: 1px solid #FFFFFF;margin: 0 auto;text-align: center;width: 500px;}
    .action-form{border-bottom: 1px solid #aaa;overflow: hidden;padding-bottom: 20px;}
    .action-form input{border: none;height: 32px;}
    .action-form input[type="submit"] {
      color:#444;text-shadow:0px 1px 0px rgba(255, 255, 255, 1);display:inline-block;text-align:center;vertical-align: middle;cursor:pointer;
      font-weight:bold;font-size:13px;border-radius:3px;padding:0 10px;height:32px;line-height:32px;
      box-shadow:0px 2px 2px 0px rgba(0, 0, 0, .15), inset 0px 1px 0px 0px rgba(255, 255, 255, 1);
      background:#fdfdfd; /* Old browsers */ /* FF3.6+ */ /* Chrome,Safari4+ */
      background:-webkit-gradient(linear, 0 0, 0 100%, from(#fdfdfd), to(#f3f3f3));
      background:-webkit-linear-gradient(#fdfdfd 0%, #f3f3f3 100%);
      background:-moz-linear-gradient(#fdfdfd 0%, #f3f3f3 100%);
      background:-o-linear-gradient(#fdfdfd 0%, #f3f3f3 100%);
      background:linear-gradient(#fdfdfd 0%, #f3f3f3 100%); /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */ /* W3C */
      filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fdfdfd', endColorstr='#f3f3f3',GradientType=0 ); /* IE6-9 */
    }
    .action-form input[type="submit"]:hover {
      background:#fff; /* Old browsers */
      background:-moz-linear-gradient(top, #fff 0%, #f9f9f9 100%); /* FF3.6+ */
      background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#fff), color-stop(100%,#f9f9f9)); /* Chrome,Safari4+ */
      background:-webkit-linear-gradient(top, #fff 0%,#f9f9f9 100%); /* Chrome10+,Safari5.1+ */
      background:-o-linear-gradient(top, #fff 0%,#f9f9f9 100%); /* Opera 11.10+ */
      background:-ms-linear-gradient(top, #fff 0%,#f9f9f9 100%); /* IE10+ */
      background:linear-gradient(to bottom, #fff 0%,#f9f9f9 100%); /* W3C */
      filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f9f9f9',GradientType=0 ); /* IE6-9 */
    }
    .action-form input[type="submit"]:active {
      -webkit-box-shadow:0px 2px 0px 0px rgba(255, 255, 255, .8), inset 0px 1px 1px 0px rgba(0, 0, 0, .15);
      box-shadow:0px 2px 0px 0px rgba(255, 255, 255, .8), inset 0px 1px 1px 0px rgba(0, 0, 0, .15);
      background:#f3f3f3; /* Old browsers */
      background:-moz-linear-gradient(top, #f3f3f3 0%, #fff 100%); /* FF3.6+ */
      background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#f3f3f3), color-stop(100%,#fff)); /* Chrome,Safari4+ */
      background:-webkit-linear-gradient(top, #f3f3f3 0%,#fff 100%); /* Chrome10+,Safari5.1+ */
      background:-o-linear-gradient(top, #f3f3f3 0%,#fff 100%); /* Opera 11.10+ */
      background:-ms-linear-gradient(top, #f3f3f3 0%,#fff 100%); /* IE10+ */
      background:linear-gradient(to bottom, #f3f3f3 0%,#fff 100%); /* W3C */
      filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3f3f3', endColorstr='#fff',GradientType=0 ); /* IE6-9 */
      line-height:34px;
    }
    .action-form input[type="text"]{vertical-align: middle;text-align: center;height:25px;width: 250px;background:#fbfbfb;color:#444;font-weight:500;border:0px solid transparent;border-radius:3px;padding:1px 5px 0 5px;box-shadow:0px 1px 0px 0px rgba(255, 255, 255, 1), inset 0px 1px 1px 0px rgba(0, 0, 0, .15);}
    .action-form input[type="text"]:hover {background:#fff;}
    .action-form input[type="text"]:focus {background:#fff;box-shadow:0px 1px 0px 0px rgba(255, 255, 255, 1), inset 0px 1px 2px 0px rgba(0, 0, 0, .25);}
    .action-form input.warning {color: #eb6666;}
    .tips{background: none repeat scroll 0 0 #cff7ce;border: 1px solid #A4EFA3;display: inline-block;font-size: 12px;line-height: 20px;margin-bottom: 10px;padding: 2px 10px;}
    .lock-user{background: none repeat scroll 0 0 #F7F7F7;border-radius: 3px 3px 3px 3px;color: #EB6666;margin: 0 5px;padding: 1px 5px;text-shadow: 0 1px 0 #FFFFFF;}
    .svn-log{margin: 0;padding-top: 10px;text-shadow: 1px 1px 1px #FF2222;}
    .svn-log ul{background: none repeat scroll 0 0 #DDDDDD;border: 1px solid #AAAAAA;box-shadow: 0 0 3px #AAAAAA;height: 500px;margin: 10px;overflow-y: scroll;padding-bottom: 0;padding-left: 0;padding-top: 0;}
    .svn-log li{border-bottom: 1px solid #FFFFFF;color: #444444;overflow: hidden;padding: 5px 10px 5px 0;text-align: left;text-shadow: 1px 1px 1px #FFFFFF;}
    .svn-log li:nth-child(odd){background-color: #eee}
    .svn-log li .v{background: none repeat scroll 0 0 #D1DFF2;border: 1px solid #fff;border-left: 3px solid #77a7e8;padding:0 10px;font-size: 13px;display: inline-block;white-space: pre;margin-top: -15px;margin-bottom: 5px;}
    .svn-log li .meta{display: block;overflow: hidden;}
    .svn-log li .meta .u{    background: none repeat scroll 0 0 #5A8CD0;border-radius: 3px 3px 3px 3px;color: #FFFFFF;font-size: 13px;padding: 1px 3px;margin-left: 10px;text-shadow: none;}
    .svn-log li .meta .t{font-size: 12px;float: right;}
    .copyright{margin-top: 20px;color: #aaa;text-align: center;text-shadow: 1px 1px 1px #FFFFFF;}
  </style>
</head>
<body>
  <div class="content">
<?php

$lock_filename 	 	= 'pingSVN/lock.do';
$update_filename 	= 'pingSVN/update.do';
$admin_users 		  = array('administror1','Tom','Jack');
$submit_update 		= '更新';
$submit_locked 		= '锁定/解锁';
if( file_exists($update_filename) )
{
    echo "<div class='tips'>更新已经提交到服务器，请耐心等待，服务器会在两分钟内处理您的请求！</div>";
}

if( file_exists($lock_filename) )
{
	$data = implode( '', file($lock_filename) );
	$data = explode( '=',$data );
    if( in_array($data[1], $admin_users) )
    echo "<div class='tips'>更新已经被<span class='lock-user'>$data[1]</span>锁定，请联系管理员进行解锁</div>";
}
 
if( $_POST["action"]==$submit_update and !file_exists($update_filename) and !file_exists($lock_filename))
{
	if($_POST["token_key"])
	{
		$token 		= $_POST["token_key"];
		$fp			= fopen($update_filename, "w+"); //打开文件指针，创建文件
		if ( !is_writable($update_filename) )
		   die("文件:" .$update_filename. "不可写，请检查！");
 
		fwrite($fp,$token);
		fclose($fp);  //关闭指针
	}
}

if( $_POST["action"] == $submit_locked )
{
	if( $_POST["token_key"] )
	{
	    $token = $_POST["token_key"];
		if( file_exists($lock_filename) )
		{
			$data = implode('', file($lock_filename));
			if( $data == $token )
				unlink( $lock_filename );
			exit;
		}

		$token = $_POST["token_key"];
		$fp=fopen($lock_filename, "w+"); //打开文件指针，创建文件
		if ( !is_writable($lock_filename) )
		      die("文件:" .$lock_filename. "不可写，请检查！");
  
		fwrite($fp,$token);
		fclose($fp);  //关闭指针
	}
}
?>
    <form class="action-form"action="" method=post>
      <input type="text" name="token_key">
      <input type="hidden" name="action" id="action">
      <input type="submit" name="submit" value="<?php echo $submit_update;?>" onclick="javascript:document.getElementById('action').value=this.value;">
      <input class="warning" type="submit" name="submit" value="<?php echo $submit_locked;?>" onclick="javascript:document.getElementById('action').value=this.value;">
    </form>
  </div>
  <div class="svn-log">
    <ul>
<?php
echo file_get_contents("http://yoursite/pingSVN/svn.log");
?>
    </ul>
  </div>
  <div class="copyright">&copy; 2013 Windmaker - pingSVN</div>
</body>
</html>