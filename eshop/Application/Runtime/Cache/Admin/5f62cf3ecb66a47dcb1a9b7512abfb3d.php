<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>左侧导航</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/eshop/Public/Admin/style/adminstyle.css" rel="stylesheet" type="text/css" />
<script src="/eshop/Public/Admin/js/jquery.js"></script>
<script src="/eshop/Public/Admin/js/public.js"></script>
</head>
<body style="background:#313131">
<div class="menu-list">
 <a href="main.html" target="mainCont" class="block menu-list-title center" style="border:none;margin-bottom:8px;color:#fff;">起始页</a>
 <ul>
  <li class="menu-list-title">
   <span>订单管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="<?php echo U('Goods/order_list');?>" title="商品列表" target="mainCont">订单列表</a></li>
   </ul>
  </li>
 
  <li class="menu-list-title">
   <span>商品管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="<?php echo U('Goods/product_list');?>" title="商品列表" target="mainCont">商品列表</a></li>
    <li><a href="<?php echo U('Goods/product_category');?>" title="商品分类" target="mainCont">商品分类</a></li>
    <li><a href="<?php echo U('Goods/recycle_bin');?>" title="商品分类" target="mainCont">商品回收站</a></li>
   </ul>
  </li>
  
  <li class="menu-list-title">
   <span>会员管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="<?php echo U('Goods/user_list');?>" title="会员列表" target="mainCont">会员列表</a></li>
    <li><a href="<?php echo U('Goods/add_user');?>" title="添加会员" target="mainCont">添加会员</a></li>
    <li><a href="<?php echo U('Goods/user_rank');?>" title="会员等级" target="mainCont">会员等级</a></li>
    <li><a href="<?php echo U('Goods/user_message');?>" title="会员留言" target="mainCont">会员留言</a></li>
   </ul>
  </li>
  
  <li class="menu-list-title">
   <span>系统设置</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="<?php echo U('Goods/basic_settings');?>" title="站点基本设置" target="mainCont">站点基本设置</a></li>
    <li><a href="<?php echo U('Goods/admin_list');?>" title="站点基本设置" target="mainCont">站点管理员</a></li>
   </ul>
  </li>
  
  <li class="menu-list-title">
   <span>广告管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="<?php echo U('Goods/advertising_list');?>" title="站点基本设置" target="mainCont">广告列表</a></li>
   </ul>
  </li>
    
 </ul>
</div>
</body>
</html>