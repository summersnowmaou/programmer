<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/eshop/Public/Admin/style/adminStyle.css" rel="stylesheet" type="text/css" />
<script src="/eshop/Public/Admin/js/jquery.js"></script>
<script src="/eshop/Public/Admin/js/public.js"></script>
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>产品列表</em></span>
    <span class="modular fr"><a href="edit_product.html" class="pt-link-btn">+添加商品</a></span>
  </div>
  <div class="operate">
   <form>
    <select class="inline-select">
     <option>A店铺</option>
     <option>B店铺</option>
    </select>
    <input type="text" class="textBox length-long" placeholder="输入产品名称..."/>
    <input type="button" value="查询" class="tdBtn"/>
   </form>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th>ID编号</th>
    <th>商品名称</th>
    <th>商品描述</th>
    <th>单价</th>
    <th>商品重量</th>
    <th>库存</th>
    <th>添加时间</th>
    <th>修改时间</th>
    <th>操作</th>
   </tr>
   <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
    <td>
     <span>
     <input name="" type="checkbox" class="middle children-checkbox"/>
     <i><?php echo ($vol["goods_id"]); ?></i>
     </span>
    </td>
    <td><?php echo ($vol["goods_name"]); ?></td>
    <td class="td-name">
      <span class="ellipsis td-name block"><?php echo ($vol["goods_introduce"]); ?></span>
    </td>
    <td class="center">
     <span>
      <i>￥</i>
      <em><?php echo ($vol["goods_price"]); ?></em>
     </span>
    </td>
    <td class="center">
     <span>
      <em><?php echo ($vol["goods_height"]); ?></em>
      <i>kg</i>
     </span>
    </td>
    <td class="center">
     <span>
      <em><?php echo ($vol["goods_number"]); ?></em>
      <i>个</i>
     </span>
    </td>
    <td class="center"><?php echo (date('Y-m-d H:i:s',$vol["add_time"])); ?></td>
    <td class="center"><?php echo (date('Y-m-d H:i:s',$vol["upd_time"])); ?></td>
    <td class="center">
     <a href="product_category.html" title="查看" target="_blank"><img src="/eshop/Public/Admin/images/icon_view.gif"/></a>
     <a href="edit_product.html" title="编辑"><img src="/eshop/Public/Admin/images/icon_edit.gif"/></a>
     <a title="删除"><img src="/eshop/Public/Admin/images/icon_drop.gif"/></a>
    </td>
   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  <!-- BatchOperation -->
  <div style="overflow:hidden;">
      <!-- Operation -->
	  <div class="BatchOperation fl">
	   <input type="checkbox" id="del"/>
	   <label for="del" class="btnStyle middle">全选</label>
	   <input type="button" value="批量删除" class="btnStyle"/>
	  </div>
	  <!-- turn page -->
	  <div class="turnPage center fr">
	   <a>第一页</a>
	   <a>1</a>
	   <a>最后一页</a>
	  </div>
  </div>
 </div>
</body>
</html>