Gt Php SDK
===============
使用 3.1 之前版本SDK的用户如果想更新到3.1以及以后版本请先联系极验客服,因为为了兼容老用户,新的特性需要修改验证设置
本项目是面向服务器端的，具体使用可以参考我们的 `文档 <http://www.geetest.com/install/sections/idx-server-sdk.html>`_ ,客户端相关开发请参考我们的 `前端文档 <http://www.geetest.com/install/>`_.

**注意事项：部署在生产环境中时，需要将gt.js文件存放到项目中并在页面中引用该文件。该js的作用是充分利用多CDN，使静态文件尽可能加载成功。**

开发环境
----------------

 - php5.2+ 及php7


部署架构
---------------
详见 `部署架构 <http://www.geetest.com/install/sections/idx-basic-introduction.html#id7>`__ 


前端接口
-------------------
详见 `前端接口 <http://www.geetest.com/install/sections/idx-client-sdk.html#config-para>`__ 

宕机回滚
--------------
详见 `宕机回滚 <http://www.geetest.com/install/sections/idx-basic-introduction.html#id8>`__ 


文件说明
---------------
 - config/config.php 极验ID和KEY配置文件,请在 `极验后台 <http://account.geetest.com>`__ 申请,进行替换
 - lib/class.geetestlib.php 极验库文件(请不要随意改动)
 - static/login.php 前端展示页面,根据您的需求进行自定义
 - web/StartCaptchaServlet.php 根据自己的私钥初始化验证
 - web/VerifyLoginServlet.php 根据post参数进行二次验证



注意
--------------
注意前端参数中 new_captcha参数
