#!/bin/sh
#密码文件存放位置
passwdFile="/data/tools/svn_passwod.txt"
pwds=(`cat $passwdFile`)
#用户写的更新文件的位置
updateFile="/data/www/webapps/pingSVN/update.do"
#当前待更新svn的应用的目录
current_svn="/data/www/webapps/"
#日志文件在应用目录下的存放位置，该位置需要可读写
logFile="pingSVN/svn.log"
if [ ! -f $updateFile ];then
 echo "$updateFile is not here!"
else
#--------------------------------------
  for line in `cat $updateFile`
  do 
    ##***************************
    for(( i=0;i<${#pwds[@]};i++ ))
    do
    
  	if [ $line = ${pwds[$i]} ]; then 
	   username=`echo $line | awk -F '=' '{print $2}'`
	   echo "$username 进行操作"
	   rm -rf "$updateFile"
           echo "<li>" >> ${current_svn}${logFile} 2>&1
           echo "<span class='v'>" >> ${current_svn}${logFile} 2>&1
	       svn up ${current_svn} >> ${current_svn}${logFile}
	  
           echo "</span><span class='meta'><span class='u'>" >> ${current_svn}${logFile} 2>&1
           echo $username >> ${current_svn}${logFile} 2>&1
           
           echo "</span><span class='t'>" >> ${current_svn}${logFile} 2>&1
           date >> ${current_svn}${logFile} 2>&1
           echo "</span></span>" >> ${current_svn}${logFile} 2>&1
           echo "</li>" >> ${current_svn}${logFile} 2>&1
  	fi
    done
    ##****************************

  done
 #-------------------------------------
fi
