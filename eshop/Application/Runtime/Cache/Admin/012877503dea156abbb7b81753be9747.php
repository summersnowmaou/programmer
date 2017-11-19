<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/eshop/Public/Admin/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add"></i><em>编辑/添加产品</em></span>
    <span class="modular fr"><a href="product_list.html" class="pt-link-btn">产品列表</a></span>
  </div>
  <form action="" method="post">
  <table class="list-style">
   <tr>
    <td style="text-align:right;width:15%;">商品名称：</td>
    <td><input name="goods_name" type="text" class="textBox length-long"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">商品价格：</td>
    <td>
     <input name="goods_price" type="text" class="textBox length-short"/>
     <span>元</span>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">商品数量：</td>
    <td>
     <input name="goods_number" type="text" class="textBox length-short"/>
     <span>个</span>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">商品重量：</td>
    <td><input goods_weight type="text" class="textBox length-short"/>
    <span>kg</span>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">产品主图：</td>
    <td>
     <input name="goods_logo" type="file"  multiple="multiple" id="chanpinzhutu" class="hide"/>
     <label for="chanpinzhutu" class="labelBtn2">本地上传(最多选择N张)</label>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">商品详情介绍：</td>
    <td><input name="goods_introduce" type="text" class="textBox length-long"/></td>
   </tr>   
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" value="发布新商品" class="tdBtn"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
</html>