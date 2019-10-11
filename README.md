极验行为验证
========
极验行为验证是一款可以帮助你的网站与 APP 应用识别与拦截机器程序批量自动化操作的SaaS应用。它是由极验开发的
新一代人机验证产品，它不基于传统“问题-答案”的检测模式，而是通过利用深度学习对验证过程中产生的行为数据进行
高维分析，发现人机行为模式与行为特征的差异，更加精准地区分人机行为。


集成流程
--------
行为验证的整个集成流程是顺序进行的，业务层主要涉及到客户端和服务端的部署，在下一个步骤开始前请确保上一个
步骤的检查点都已经正确完成；请开发者严格按照步骤进行。

步骤： 注册极验账户(1) - 登录极验后台(2) - 注册验证ID和Key (3) - 配置ID属性(4) - 集成服务端代码(5) -  集成客户端代码(6) - 服务上线(7) - 数据上线(8) - 登录后台查看数据(9)


新手指南
--------
0. 产品概述 - https://docs.geetest.com/install/overview/prodes/
1. 入门指引 - https://docs.geetest.com/install/overview/beginner/


文档导航
--------
* 部署指引 - https://docs.geetest.com/install/overview/guide
* 数据通讯流程 - https://docs.geetest.com/install/overview/flowchart
* 服务的部署 - https://docs.geetest.com/install/deploy/server/php
* 客户端部署 - https://docs.geetest.com/install/deploy/client/web
* 名词解释 - https://docs.geetest.com/install/help/glossary
* 常见问题 - https://docs.geetest.com/install/help/faq


联系我们
--------
* 官网： www.geetest.com
* 技术支持邮箱：service@geetest.com
* 技术支持电话：400-8521-816
* 联系商务邮箱：cooperation@geetest.com
* 联系商务电话：13720157161


Gt Php SDK
===============
使用 3.1 之前版本SDK的用户如果想更新到3.1以及以后版本请先联系极验客服,因为为了兼容老用户,新的特性需要修改验证设置

**注意事项：部署在生产环境中时，需要将gt.js文件存放到项目中并在页面中引用该文件。该js的作用是充分利用多CDN，使静态文件尽可能加载成功。**

开发环境
----------------

 - php5.2+ 及php7

文件说明
---------------
 - config/config.php 极验ID和KEY配置文件,请在[极验后台](http://account.geetest.com)申请,进行替换
 - lib/class.geetestlib.php 极验库文件(请不要随意改动)
 - static/login.php 前端展示页面,根据您的需求进行自定义
 - web/StartCaptchaServlet.php 根据自己的私钥初始化验证
 - web/VerifyLoginServlet.php 根据post参数进行二次验证



注意
--------------
注意前端参数中 new_captcha参数