<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Realistic
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> @yield('judul')</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="{{ asset('/layout/styles/layout.css') }}">
<!-- Superfish Menu -->
<script type="text/javascript" src="/public/layout/scripts/superfish/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="/public/layout/scripts/superfish/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
<!-- / Superfish Menu -->
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <h1><a href="index.html">Realistic</a></h1>
    <p>Free Website Template</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topbar">
    <div class="fl_left">Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com</div>
    <div class="fl_right">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topnav">
    <ul class="nav">
    <li class="nav-item"><a class="nav-link active" href="/Home">Home</a></li>
      <li><a href="#">Program</a>
        <ul>
        <li class="nav-item" ><a class="nav-link active" href="/Program/Karir">Karir</a></li>
        <li class="nav-item" ><a class="nav-link active" href="/Program/Magang">Magang</a></li>         
        <li class="nav-item" ><a class="nav-link active" href="/Program/Kunjungan-Industri">Kunjungan Industri</a></li>          
        </ul>
      </li>
      <li class="nav-item"><a class="nav-link active" href="/Tentang">Tentang</a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="whitebox">
      @yield('konten')
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>