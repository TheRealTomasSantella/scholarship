<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOST Scholarship</title>

    <link rel="shortcut icon" href="<?php echo base_url()?>images/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation-icons.css"/>

    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/fastclick.js"></script>

    <style>
      .contain{
        padding-bottom: 60px;
      }
    </style>

  </head>
  
  <body>
 <div class="contained-to-grid fixed"> 
   <!--Navbar-->
   <nav class="top-bar" data-topbar role="navigation">
   	<ul class="title-area">
   		<li class="name">
   			<img src="<?php echo base_url(); ?>images/ah.png" alt="" heigth="48" width="45">
   			<a href="center">DOST Scholarship</a>
   		</li>
   		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
   	</ul>

   	<selection class="top-bar-section">
   		<!--Rigth side-->
   		<ul class="right">
   			<li class="active"><a href="center">Home</a></li>
   			<li><a href="/scholarship/scholarProfile">Scholar Profile</a></li>
   			<li><a href="/scholarship/breakdown">Breakdown </a></li>
   			<li><a href="/scholarship/monitor">Monitoring Sheet</a></li>
   			<li><i class="fi-star" style="color:blue;"><a href="/scholarship/tracer">Tracer</a></i></li>
        <li class="has-dropdown not-click">
          <a href="#"><?php echo $this->session->userdata('name');?></a>
          <ul class="dropdown">
            <li><a href="logout">Log out</a></li>
          </ul>
        </li>
   		</ul>
   	</selection>
   </nav>
</div>
<div class="contain">

</div>