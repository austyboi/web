<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>มหาวิทยาลัยอุบลราชธานี วิทยาเขตมุกดาหาร :: MUK CAMPUS ::</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta charset="utf-8"> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>

</head>
<body>
<div class="header wow fadeInUpBig" data-wow-delay="0.4s">
   <div class="container">
	  <div class="header_top">
		<h2> Welcome to </h2>
		<h2>MUKDAHAN CAMPUS</h2>
	  </div>
   </div>
 </div>
  <div class="header-home">
	<div class="fixed-header">
		<div class="logo wow bounceInDown" data-wow-delay="0.4s">
			<a href="index.html">
	          <span class="secondary">UBON RATCHATHANI UNIVERSITY</span>
	          <span class="main">MUK CAMPUS</span>
	        </a>
		</div>
				<div class="top-nav wow bounce" data-wow-delay="0.4s">
				    <span class="menu"> </span>
					<ul>
						<li class="active"><a href="index.html">หน้าหลัก</a></li>
                        <li><a href="about.html">เกี่ยวกับเรา</a></li>
					  	<li><a href="#course">หลักสูตร</a></li>
					  	<li><a href="http://www.entry.ubu.ac.th">สมัครเรียน</a></li>
					  	<li><a href="#students">Students</a></li>
					  	<li><a href="contact.html">ติดต่อ</a></li>		
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
    </div>
	<div class="grid_1">
		<div class="container">
		  <div class="box_1  wow fadeInUpBig" data-wow-delay="0.4s">
			<h3>ข่าวประชาสัมพันธ์</h3>
		  </div>
          <?
	$objConnect = mysql_connect("localhost","mukdahan_usr","ubu,6dfkski") or die("Error Connect to Database");
	$objDB = mysql_select_db("mukdahan_db");
	mysql_query("SET NAMES utf8");
	$strSQL ="SELECT * FROM news_system ORDER BY id_news DESC LIMIT 5";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	for($i = 0; $i < mysql_num_rows($objQuery); $i = $i+2) {
		<div box_2>
			<div col-md-6>$result = mysql_result($objQuery, i)</div>
			<div col-md-6>$result = mysql_result($objQuery, i+1)</div>
			<div clear-fix></div>
		</div>
		
	}
	

?>
		  <div class="box_2">
			  <div class="col-md-6">
			  	<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
	                   <i class="fa fa-film"> </i>
	                   <h4>news heading 1</h4>
	                    <p>
	                        description
	                    </p>
	            </div>
			  </div>
             
			  <div class="col-md-6">
			  	<div class="feature wow fadeInLeft" data-wow-delay="0.4s">
	                   <i class="fa fa-check"> </i>
	                   <h4>news heading 2</h4>
	                    <p>
	                       description
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div>
               
		  </div>
          <div class="box_2">
			  <div class="col-md-6">
			  	<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
	                   <i class="fa fa-film"> </i>
	                   <h4>news heading 5</h4>
	                    <p>
	                        description
	                    </p>
	            </div>
			  </div>
             
			  <div class="col-md-6">
			  	<div class="feature wow fadeInLeft" data-wow-delay="0.4s">
	                   <i class="fa fa-check"> </i>
	                   <h4>news heading 6</h4>
	                    <p>
	                       description
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div> 
		  </div>
          <div class="box_2">
			  



<div class="col-md-6">
			  	<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
	                   <i class="fa fa-film"> </i>
	                   <h4>news heading 5</h4>
	                    <p>
	                        description
	                    </p>
	            </div>
			  </div>
             
			  <div class="col-md-6">
			  	<div class="feature wow fadeInLeft" data-wow-delay="0.4s">
	                   <i class="fa fa-check"> </i>
	                   <h4>news heading 6</h4>
	                    <p>
	                       description
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div> 
		  </div>
          <a id="course"></a>
		  <div class="box_1 wow fadeInUpBig" data-wow-delay="0.4s">
			 <h4>
             	<a href="#">อ่านข่าวทั้งหมด</a>
	         </h4>
		  </div>
		</div>
 	</div>
 </div>
</body>
</html>
