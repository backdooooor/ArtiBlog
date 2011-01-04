<!DOCTYPE html>
<html lang="ru">
<head>
  <title>ArtiBlog -блок высоуровневый</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<? echo base_url(); ?>template/html5/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<? echo base_url(); ?>template/html5/css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/blog.js" ></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/Humanst521_Lt_BT_400.font.js"></script>
	<script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/roundabout.js"></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/gallery_init.js"></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/cufon-replace.js"></script>
  <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/slidemenu.js"></script>
  <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>template/html5/css/slidemenu.css" /> 
<script> 
jqueryslidemenu.buildmenu("myslidemenu", arrowimages, 1)
</script> 
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="<? echo base_url(); ?>template/html5/css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/html5.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>template/html5/js/IE9.js"></script>
  <![endif]-->
</head>

<body onload="doContent();doListCategory();">
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="#">ArtiBlog</a></h1>
      <nav>
        <ul>
        	<li><a href="<? echo base_url(); ?>" class="current">Interesting</a></li>
          <li><a href="#" onclick="doContact();">Contacts</a></li>
          <li><a href="#" onclick="doAbout();">About me</a></li>
          
        </ul>
      </nav>
    </div>
	</header>

  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper" id="myslidemenu">
        	<!-- aside -->
          <aside>
           
            <!-- .news -->
	    <div id="myslidemenu" class="jqueryslidemenu">
            <ul class="news">
	      
	      <li ><a href="#">Категории</a>
  <ul id="category_dd">
  <li><a href="#">Новости</a></li>
  <li><a href="#">Статьи</a></li>
  <li><a href="#">Интервью</a></li>
  <li><a href="#">Репотражи</a></li>
  </ul>
</li>
</ul>
<br style="clear: left" />

            </ul>
	    </div>
            <!-- /.news -->
          </aside>
          <!-- content -->
	  <div id="page" value="0">
	    <div id="id_cat" value="0">
          <section id="content">
           
          </section>
	 <br><br><br><br><center><a  id="nextread" href="#" onclick="doContent();return false;" >Читать еще</a></center>
        </div>
	 
      </div>
      
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">Copyright - &copy;backdoor</div>
        
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
