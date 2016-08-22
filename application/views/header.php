<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <script src="http://cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">控制原理实验平台</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">所有实验 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">已预约实验</a></li>
            <li><a href="#">已完成实验</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{用户名}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">个人信息</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">登出</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>