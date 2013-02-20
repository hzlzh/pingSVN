# pingSVN v1.0
====

`pingSVN`是一个团队多人协作时，针对`SVN`频繁更新带来效率损耗的解决方案。  

* 下放服务器管理员的权限到部分团队成员，避免由长期值守带来的资源浪费；
* 分摊更新频率到成员个人，提高开发迭代效率；

## 系统需求
* OS: `Linux` with `crontab`  
* Web Server: `Apache`/`PHP`  

## 文件结构
    --- 
     |---- pingSVN.php            入口页    
     |---- manual_check_svn.sh    定时检测用户是否有更新请求的shell脚本                
     |---- svn_passwod.txt        授权密码

## 部署方法

### 1. 配置 `manual_check_svn.sh`  

```sh
#修改为你的密码文件的路径
passwdFile="/data/tools/svn_passwod.txt"
#修改为你的应用部署的目录下存放的更新的文件，检测的svn是否更新的文件。此文件由授权人在update_svn.php产生。update.do最好不修改
updateFile="/data/www/webapps/pingSVV/update.do"
#修改为你的应用部署的目录
current_svn="/data/www/webapps"
#修改为你的应用部署的目录下的log的存放位置
logFile="pingSvn/svn.log"
```

### 2. 配置 `pingSVN.php`

```php
<?php

$lock_filename      = "pingSvn/lock.do";
//修改为你的锁文件，后面的文件最好为lock.do不变
$update_filename = "pingSvn/update.do";
//修改为你的更新文件，后面的update.do不变，如果需要修改，则manual_check_svn.sh中的update.do需要修改为一致的名称
echo file_get_contents("http://yoursite/pingSvn/svn.log");

?>
```

### 3. 设置 `svn_passwod.txt`格式

    1234567890woejfsdsfasd=administror1
    23rwerwerwwosdfsdfsdfs=Tom
    qwertyuasdfhjkzxcyuqwe=Jack
    
之后将此`Token`逐行发给对应成员，他们在 [http://yoursiteurl/pingSVN.php](http://yoursiteurl/pingSVN.php) 中键入便可发送更新请求。

### 4. 设置定时任务

ssh登录到服务器，执行下面命令：

```sh
crontab -e
```

然后加入计划：*(例如每1分钟进行1次更新)*  

```sh
*/1 * * * *  /data/tools/manual_check_svn.sh
```

## 版权协议

`PHP`&`Shell` by [@Lucky](https://twitter.com/lucky9805) | `HTML/CSS` by [@hzlzh](https://twitter.com/hzlzh)  
Available under [MIT License](http://rem.mit-license.org "MIT License").

## 界面预览

![pingSVN Screenshot](https://raw.github.com/hzlzh/pingSVN/master/screenshot.png)