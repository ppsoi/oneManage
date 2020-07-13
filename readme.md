# **Tfo**
###### A website for two-point filestorage online (tfo)(20200713). 

<img src="https://tfo.herokuapp.com/index/Uploaded/WebContents/Github/Tfo/Tfo.logo.svg" alt="Tfo's Logo" width="250" height="250"/>

## List of feature files 特色文件表
Information [app.json](/app.json "app.json"),[version](/version "version"),[readme.md](/readme.md "readme.md"),[conststr.php](/conststr.php "conststr.php")

UpdateAddress [Heroku.php](/platform/Heroku.php "Heroku.php"),[TencentSCF.php](/platform/TencentSCF.php "TencentSCF.php"),[HuaweiFG.php](/platform/HuaweiFG.php "HuaweiFG.php"),[AliyunFC.php](/platform/AliyunFC.php "AliyunFC.php")

Theme

Material Design for Classic Series(对默认主题的MD风格小优化，有对响应式、按钮外观、上传界面、路径栏随机赋色、背景模糊等的调整): [tfo_mdtr.php](/theme/tfo_mdtr.php "tfo_mdtr.php")(Transparent Material Design), [tfo_md.php](/theme/tfo_md.php "tfo_md.php")(Material Design), [tfo_mdtrbaw.php](/theme/tfo_mdtrbaw.php "tfo_mdtrbaw.php")(Black & White Material Design for Tomb-Sweeping Day) (All based on classic.php,latest at 2020.5.17)

具体地，您可以下载/复制体验一下或参考示例中运用tfo_mdtr.php的[Li Share Storage Mini](https://tfo.herokuapp.com/ "Li Share Storage Mini")。需要注意：以上系列主题**默认隐藏右上角语言框**，请谨慎使用！示例中隐藏了多盘，但实际使用不隐藏哦。目前，主题仍存在诸多问题，请谅解。PS:主题将要实现的功能有狠多，敬请期待...

## Deploy 部署
Install program first, then add onedrive in setup after login.  
先安装程序，登录后在设置中添加onedrive。  

### Deploy to heroku  部署到Heroku
Official: https://heroku.com  

How to Install: Click the button [![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy) to Deploy a new app, or create an app then deploy via connect to your github fork.  

### Deploy to VPS (Virtual Private Server) 部署到VPS或空间  
How to Install:  
* 1.Start web service on your server (httpd or other), make sure you can visit it.  
    启动web服务器，确保你能访问到。  
* 2.Make the rewrite works, the rule is in .htaccess file, make sure any query redirect to index.php.  
    开启伪静态(重写)功能，规则在.htaccess文件中，ngnix从里面复制，我们的目的是不管访问什么都让index.php来处理。  
* 3.Upload code.  
    上传好代码。  
* 4.Change the file config.php can be read&write (666 is suggested).  
    让代码中的config.php文件程序可读写，推荐chmod 666 config.php。  
* 5.View the website in chrome or other.  
    在浏览器中访问。  

### Deploy to SCF  部署到腾讯云函数
Official: https://cloud.tencent.com/product/scf  
添加网盘时，SCF反应不过来，会添加失败，请不要删除，再添加一次相同的就可以了。  
~~How to Install:  https://service-pgxgvop2-1258064400.ap-hongkong.apigateway.myqcloud.com/test/abcdef/%E6%97%A0%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%87%BD%E6%95%B0SCF%E6%90%AD%E5%BB%BAOneDrive.mp4?preview~~  

先手动在环境变量添加Region，ap-hongkong或ap-guangzhou之类，具体看 https://cloud.tencent.com/document/api/583/17238 最底下，然后再安装。  
添加网盘时，SCF反应不过来，会添加失败，请不要删除，再添加一次相同的就可以了。  


### Deploy to Aliyun Function Compute (FC 阿里函数计算)  
Official: https://fc.console.aliyun.com/  
How to Install:  
* 1，新建函数 -- HTTP函数  
* 2，运行环境选择php7.2  
* 3，触发器认证方式选择anonymous，请求方式里面，点一下GET，再点一下POST，最终框框里面有这2个  
* 4，上传代码  
* 5，触发器中点进去，找到配置自定义域名，点击前往，创建，路径中填 /* ，其它下拉选择。  
* 6，访问你的域名，开始安装  

## Original Features 原始特性 
When downloading files, the program produce a direct url, visitor download files from MS OFFICE via the direct url, the server expend a few bandwidth in produce.  
下载时，由程序解析出直链，浏览器直接从微软Onedrive服务器下载文件，服务器只消耗与微软通信的少量流量。  
When uploading files, the program produce a direct url, visitor upload files to MS OFFICE via the direct url, the server expend a few bandwidth in produce.  
上传时，由程序生成上传url，浏览器直接向微软Onedrive的这个url上传文件，服务器只消耗与微软通信的少量流量。  
The XXX_path in setting is the path in Onedrive, not in url, program will find the path in Onedrive.  
设置中的 XXX_path 是Onedrive里面的路径，并不是你url里面的，程序会去你Onedrive里面找这个路径。  
LOGO ICON: put your 'favicon.ico' in the path you showed, make sure xxxxx.com/favicon.ico can be visited.   
网站图标：将favicon.ico文件放在你要展示的目录中，确保 xxxxx.com/favicon.ico 可以访问到。  
Program will show content of 'readme.md' & 'head.md'.  
可以在文件列表显示head.md跟readme.md文件的内容。  
guest up path, is a folder that the guest can upload files, but can not be list (exclude admin).  
游客上传目录（也叫图床目录），是指定一个目录，让游客可以上传文件，不限格式，不限大小。这个目录里面的内容不列清单（除非管理登录）。  
If there is 'index.html' file, program will only show the content of 'index.html', not list the files.  
如果目录中有index.html文件，只会输出显示html文件，不显示程序框架。  
Click 'EditTime' or 'Size', the list will sort by time or size, Click 'File' can resume sort.  
点击“时间”、“大小”，可以排序显示，点“文件”恢复原样。  
