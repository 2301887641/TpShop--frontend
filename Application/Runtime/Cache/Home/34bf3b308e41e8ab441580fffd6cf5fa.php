<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <title>用户注册</title>
            <link rel="stylesheet" href="/Public/style/base.css" type="text/css">
                <link rel="stylesheet" href="/Public/style/global.css" type="text/css">
                    <link rel="stylesheet" href="/Public/style/header.css" type="text/css">
                        <link rel="stylesheet" href="/Public/style/login.css" type="text/css">
                            <link rel="stylesheet" href="/Public/style/footer.css" type="text/css">
                                <script type="text/javascript" src="/Public/js/jquery-1.8.3.min.js"></script>    
                                </head>
                                <body>
                                    <!-- 顶部导航 start -->
                                    <div class="topnav">
                                        <div class="topnav_bd w990 bc">
                                            <div class="topnav_left">

                                            </div>
                                            <div class="topnav_right fr">
                                                <ul>
                                                    <li>您好，欢迎来到京西！[<a href="login.html">登录</a>] [<a href="register.html">免费注册</a>] </li>
                                                    <li class="line">|</li>
                                                    <li>我的订单</li>
                                                    <li class="line">|</li>
                                                    <li>客户服务</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 顶部导航 end -->

                                    <div style="clear:both;"></div>

                                    <!-- 页面头部 start -->
                                    <div class="header w990 bc mt15">
                                        <div class="logo w990">
                                            <h2 class="fl"><a href="index.html"><img src="/Public/images/logo.png" alt="京西商城"></a></h2>
                                        </div>
                                    </div>
                                    <!-- 页面头部 end -->

                                    <!-- 登录主体部分start -->
                                    <div class="login w990 bc mt10 regist">
                                        <div class="login_hd">
                                            <h2>用户注册</h2>
                                            <b></b>
                                        </div>
                                        <div class="login_bd">
                                            <div class="login_form fl">
                                                <form action="/index.php/Home/Index/regist.html" method="post" onclick="return chkForm()">
                                                    <ul>
                                                        <li>
                                                            <label for="">用户名：</label>
                                                            <input type="text" class="txt" name="username" /> <span class="nameError" style="color:red;display:none">用户名已经存在</span>
                                                            <p>3-20位字符，可由中文、字母、数字和下划线组成</p>
                                                        </li>
                                                        <li>
                                                            <label for="">邮箱：</label>    
                                                            <input type="text" class="txt" name="email" />  <span class="emailError" style="color:red;display:none">邮箱已经存在</span>
                                                            <p>输入正确的邮箱</p>
                                                        </li>
                                                        <li>
                                                            <label for="">密码：</label>
                                                            <input type="password" class="txt" name="password" /> <span class="passwordError" style="color:red;display:none">密码格式错误</span>
                                                            <p>6-20位字符，可使用字母、数字和符号的组合，不建议使用纯数字、纯字母、纯符号</p>
                                                        </li>
                                                        <li>
                                                            <label for="">确认密码：</label>
                                                            <input type="password" class="txt" name="rpassword" />  <span class="rpasswordError" style="color:red;display:none">两次密码不相同</span>
                                                            <p> <span>请再次输入密码</p>
                                                        </li>
                                                        <li class="checkcode">
                                                            <label for="">验证码：</label>
                                                            <input type="text"  name="checkcode" /> <span class="codeError" style="color:red;display:none">验证码格式错误</span>
                                                            <img src="/Home/Index/Verify" onclick="this.src = '/Home/Index/Verify'"/>
                                                            <span>看不清？<a href="">换一张</a></span>
                                                        </li>
                                                        <li>
                                                            <label for="">&nbsp;</label>
                                                            <input name="mustCheck" type="checkbox" class="chb" checked="checked" /> 我已阅读并同意《用户注册协议》
                                                        </li>
                                                        <li>
                                                            <label for="">&nbsp;</label>
                                                            <input type="submit" value="" class="login_btn" />
                                                        </li>
                                                    </ul>
                                                </form>


                                            </div>

                                            <div class="mobile fl">
                                                <h3>手机快速注册</h3>			
                                                <p>中国大陆手机用户，编辑短信 “<strong>XX</strong>”发送到：</p>
                                                <p><strong>1069099988</strong></p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- 登录主体部分end -->

                                    <div style="clear:both;"></div>
                                    <!-- 底部版权 start -->
                                    <div class="footer w1210 bc mt15">
                                        <p class="links">
                                            <a href="">关于我们</a> |
                                            <a href="">联系我们</a> |
                                            <a href="">人才招聘</a> |
                                            <a href="">商家入驻</a> |
                                            <a href="">千寻网</a> |
                                            <a href="">奢侈品网</a> |
                                            <a href="">广告服务</a> |
                                            <a href="">移动终端</a> |
                                            <a href="">友情链接</a> |
                                            <a href="">销售联盟</a> |
                                            <a href="">京西论坛</a>
                                        </p>
                                        <p class="copyright">
                                            © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
                                        </p>
                                        <p class="auth">
                                            <a href=""><img src="/Public/images/xin.png" alt="" /></a>
                                            <a href=""><img src="/Public/images/kexin.jpg" alt="" /></a>
                                            <a href=""><img src="/Public/images/police.jpg" alt="" /></a>
                                            <a href=""><img src="/Public/images/beian.gif" alt="" /></a>
                                        </p>
                                    </div>
                                    <!-- 底部版权 end -->

                                </body>
                                </html>
                                <script>
                                    var chkName = false;//验证用户名
                                    var chkEmail=false;//验证邮箱
                                    var chkPass=false;//验证密码
                                    var chkrPass=false;//验证确认密码
                                    var chkCode=false//验证验证码
                                    //验证用户名
                                    $("input[name='username']").blur(function () {
                                        var _this = $(this);
                                        var _val = _this.val();
                                        if ($.trim(_val) == '') {
                                            alert('用户名不能为空');
                                               _this.focus();

                                            chkName=false;
                                            return false;
                                        }
                                        if (/^[\w]{3,20}$/.test(_val)) {
                                            _this.css('borderColor', '#ccc');
                                            $('.nameError').hide();
                                            chkName = true;
                                        } else {
                                            _this.css('borderColor', '#F00');
                                            $('.nameError').html('用户名格式不正确').show();
                                            _this.focus();
                                            _this.select();

                                            chkName = false;
                                            return false;
                                        }
                                        $.ajax({
                                            type: 'get',
                                            url: "/Home/Index/ajaxChkName/name/" + encodeURIComponent(_val),
                                            success: function (value) {
                                                if (value == -1) {
                                                    _this.css('borderColor', '#F00');
                                                    $('.nameError').show();
                                                    _this.focus();
                                                    _this.select();
                                                    chkName = false;

                                                } else {
                                                    _this.css('borderColor', '#ccc');

                                                    $('.nameError').hide();
                                                    chkName = true;
                                                }

                                            }
                                        });

                                    });
                                    //验证邮箱
                                     $("input[name='email']").blur(function () {
                                        var _this = $(this);
                                        var _val = _this.val();
                                        if ($.trim(_val) == '') {
                                            alert('邮箱不能为空');
                                            chkEmail=false;
                                            return false;
                                        }
                                        $.ajax({
                                            type: 'get',
                                            url: "/Home/Index/ajaxChkEmail/email/" + encodeURIComponent(_val),
                                            success: function (value) {
                                                if (value == -1) {
                                                    _this.css('borderColor', '#F00');
                                                    $('.emailError').show();
                                                    _this.focus();
                                                    _this.select();
                                                    chkEmail = false;

                                                } else {
                                                    _this.css('borderColor', '#ccc');

                                                    $('.emailError').hide();
                                                    chkEmail = true;
                                                }

                                            }
                                        });

                                    });
                                     //验证密码
                                     $("input[name='password']").blur(function () {
                                        var _this = $(this);
                                        var _val = _this.val();
                                        if ($.trim(_val) == '') {
                                            alert('密码不能为空');
                                            chkPass=false;
                                            return false;
                                        }
                                        if (/^[\w]{6,20}$/.test(_val)) {
                                            _this.css('borderColor', '#ccc');
                                            $('.passwordError').hide();
                                            chkPass = true;
                                        } else {
                                            _this.css('borderColor', '#F00');
                                            $('.passwordError').show();
                                            _this.focus();
                                            _this.select();
                                            chkPass = false;
                                        }

                                    });
                                    //验证确认密码
                                     $("input[name='rpassword']").blur(function () {
                                        var _this = $(this);
                                        var _val = $.trim(_this.val());
                                        if (_val =='') {
                                            alert('确认密码不能为空');
                                            chkrPass=false;
                                            return false;
                                        }
                                        if (_val == $.trim($("input[name='password']").val())) {
                                            _this.css('borderColor', '#ccc');
                                            $('.rpasswordError').hide();
                                            chkrPass = true;
                                        } else {
                                            _this.css('borderColor', '#F00');
                                            $('.rpasswordError').show();
                                            _this.focus();
                                            _this.select();
                                            chkrPass = false;
                                        }

                                    });
                                    //验证验证码
                                     $("input[name='checkcode']").blur(function () {
                                        var _this = $(this);
                                        var _val = _this.val();
                                        if ($.trim(_val) == '') {
                                            alert('验证码不能为空');
                                            chkCode=false;
                                            return false;
                                        }
                                      
                                        $.ajax({
                                            type: 'get',
                                            url: "/Home/Index/ajaxChkCode/code/" + encodeURIComponent(_val),
                                            success: function (value) {
                                                if (value==false) {
                                                    _this.css('borderColor', '#F00');
                                                    $('.codeError').show();
                                                    _this.focus();
                                                    _this.select();
                                                    chkCode = false;

                                                } else {
                                                    _this.css('borderColor', '#ccc');

                                                    $('.codeError').hide();
                                                    chkCode = true;
                                                }

                                            }
                                        });

                                    });
                                    //提交表單前,先判斷下這五個全局變量是否都爲真
                                    function chkForm(){
                                       var che= $("input[name='mustCheck']").attr('checked');
                                        if(che!='checked'){
                                            alert('必須同意協議');
                                            return false;
                                        }    
                                            
                                        
                                        return chkName && chkEmail && chkPass && chkrPass && chkCode;
                                        
                                    }


                                </script>