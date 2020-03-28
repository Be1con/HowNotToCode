
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>สำนักงานคณะกรรมการข้าราชการพลเรือน </title>  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    <script src="lib/jquery.js" type="text/javascript"></script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92235547-1', 'auto');
  ga('send', 'pageview');

</script>
     <script type="text/javascript"> 
    function showSlidingDiv(i){
	
var str="#slidingDiv"+i;
$(str).animate({"height": "toggle"}, { duration: 1000 });
}
</script>
    <link href="assets/css/style.css" rel="stylesheet" />
 </head>
	
<style type="text/css">
.black-ribbon {
  position: fixed;
  z-index: 9999;
  width: 70px;
}
@media only all and (min-width: 768px) {
  .black-ribbon {
    width: auto;
  }
}

.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }
</style>	

<body>
	
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 header-logo">
					<br>
					<a href="index.php"><img src="assets/img/logo.png" alt="" ></a>
				</div>
			</div>
		</div>
	</div>
	

	<div class="container" style="margin-bottom:40px;">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-3" >
				  <? include("inc_left.php"); ?>
			</div>

				

      			<div class="col-md-9" > 
                <div class="cover">			
				  <div id="coverpageslide" class="owl-carousel">
				     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="50000">
				    <!-- Indicators -->
					   <!--   <ol class="carousel-indicators">
					        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					        
					     </ol> -->

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner" role="listbox">
                    
                    
                 
                    
<!--                     <div class="item active">
				        <img src="Carousel22.jpg" alt="" width="460" height="345">
				      </div>-->
                      
               			
						<!--	 <div class="item active">
				        <img src="assets/img/slide-four.jpg" alt="" width="460" height="345">
				      </div>-->
					<!--	
							 <div class="item active">
				        <img src="14.jpg" alt="" width="460" height="345">
				      </div>
						
						
						<div class="item">
				        <img src="15.jpg" alt="" width="460" height="345">
				      </div>
						 
						 <div class="item">
				        <img src="16.jpg" alt="" width="460" height="345">
				      </div>-->
						
						
						
						  <div class="item active">
				        <img src="BANNER3.jpg" alt="" width="460" height="345">
				      </div>
					
						<div class="item ">
				        <img src="b1.jpg" alt="" width="460" height="345">
				      </div>
						
						<div class="item ">
				        <img src="b2.jpg" alt="" width="460" height="345">
				      </div>
						
						<div class="item ">
				        <img src="b3.jpg" alt="" width="460" height="345">
				      </div>
						
						<div class="item ">
				        <img src="b4.jpg" alt="" width="460" height="345">
				      </div>
						
						<div class="item ">
				        <img src="b5.jpg" alt="" width="460" height="345">
				      </div>
						
						  
                     <!-- <div class="item ">
				        <img src="assets/img/slide-two.jpg" alt="" width="460" height="345">
				      </div>-->
                      
					
						
					
                    
                      
                   
                      
                   				    </div>

				    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
				  	</div>
				 </div>
				</div>	
                <br>         
                	<section class="panel panel-default" >
				<header>
					<h2>&nbsp;&nbsp;<img src="assets/img/l1.png" alt="" width="40px">&nbsp;<strong>ประชาสัมพันธ์</strong></h2>
				</header>
					
			   <?
mysqli_close($link);
									include_once("config1.inc.php");
$CompanyAlias=trim($CompanyAlias);

$mysqli=new mysqli($host,$user,$pwd,$dbname);
		$mysqli->set_charset("utf8");
		$stmt = $mysqli->prepare("SELECT  *  FROM  ocsc2020_news1  ORDER  BY  NewsPriority  ASC ");
		$stmt->bind_param("s",$CompanyAlias);
		/* execute query */
		$stmt->execute();

		/* instead of bind_result: */
		$result = $stmt->get_result();
		$num_group = mysqli_num_rows($result);

 for ($i=1; $i<=$num_group; $i++)
										{
				$rowx = $result->fetch_assoc();
				$NewsID=$rowx["NewsID"];
				$CompanyCode=$rowx["CompanyCode"];
				$CompanyAlias=$rowx["CompanyAlias"];
				$CompanyName=$rowx["CompanyName"];
				$NewsSubject=$rowx["NewsSubject"];
				$NewsStatus=$rowx["NewsStatus"];
				$NewsDetail=$rowx["NewsDetail"];
				$NewsPriority=$rowx["NewsPriority"];
				$idx_NewsDetail=$rowx["NewsDetail"];
?>
<?
if($NewsStatus!=''){
	$bb='bs-callout2 bs-callout-danger';
}else{
	$bb='bs-callout2 bs-callout-primary';

}


?>
				<div class="">
  				
  						<a href="#" onclick="showSlidingDiv('<? echo $i; ?>'); return true;"><img src="assets/img/document.png" alt="" width="35px"></a>
                        <a href="#" onclick="showSlidingDiv('<? echo $i; ?>'); return true;">
                       <b> <? if($NewsStatus!=''){echo '<img src="images/new.gif" width="5%"  />';}?></b>
                        </a>
                <div id="slidingDiv<? echo $i?>" style="display:none"><img src="image/spacer.gif" width="1" height="25" /><img src="image/arrow_50.gif" width="14" height="11" /><? echo "<br>".$idx_NewsDetail; ?></div>
                      
					</div>
				                    <?
		}
mysqli_close($link);	
?>
					
						
				
				</section>
                <br>
                                
			</div>
			

			


		</div>
		
	</div>
			
			


			<!-- footer starts here -->
			<footer class="footer clearfix">
<br />
        <div class="container">
            <div class="row">
              <div class="col-md-12 ">
                 <p align="center"> <i class="fa fa-phone"></i>&nbsp;
                 <b>หากมีปัญหาเกี่ยวกับระบบการสมัครสอบ สามารถติดต่อได้ที่ Call Center โทร. 02-257-7159 กด 1 ในวันจันทร์ - ศุกร์ เวลา 8.30-17.30 น.</b></p>
                 <p align="center"> <i class="fa fa-phone"></i>&nbsp;
                 <b>หากมีข้อสงสัยเกี่ยวกับการสอบของ ก.พ. สามารถติดต่อได้ที่ โทร. 0 2547 1000 ต่อ 8710,8711,8712,8713 ในวันจันทร์ - ศุกร์ เวลา 8.30-16.30 น.</b></p>
                     &nbsp;&nbsp;&nbsp;สถิติเข้าชมเว็บไซต์ :: <img src="http://simplehitcounter.com/hit.php?uid=2344253&f=0&b=16777215" border="0" height="18" width="83" alt="web counter">
                      <img src="images/Line_icon_w.png" height="20" width="20" name="imageLine" id="imageLine" style="margin-top:-10px;"/> <b>LineID : @Thaijobjob&nbsp;</b>
              </div>
                </div>
            </div>
</footer>


			<!-- 	footer -->

<!-- script tags
	============================================================= -->
	<script src="assets/js/jquery.js"></script>		
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	
<script>
		function nextpage(){

			bootbox.dialog({
  /* message: "<center><img src='1.png' width='150px'/><img src='2.png' width='150px'/><img src='3.png' width='150px'/><br><img src='4.png' width='150px'/><img src='5.png' width='150px'/><img src='6.png' width='150px'/><img src='7.png' width='150px'/></center><br><center>ผู้ที่ประสงค์จะสมัครสอบ หากมีปัญหาเกี่ยวกับการสมัครสอบ สามารถอ่านแนวทางการแก้ไขปัญหา<br>ในหัวข้อย่อย &quot;คู่มือแนะนำการสมัครสอบ&quot;</center>",*/
   
    message: "<center><font color='blue'>ผู้สมัครสอบสามารถค้นหารายชื่อผู้สอบผ่าน ดูผลคะแนนสอบ <br>และพิมพ์หนังสือรับรองผลการสอบผ่านฯ<br>ได้ตั้งแต่วันที่ 19 กันยายน 2562 เวลา 09:00 น. เป็นต้นไป</font></center>",
     

  title: "ผู้สมัครโปรดทราบ",
  buttons: {
    success: {
      label: "ข้าพเจ้ารับทราบ",
      className: "btn-success",
      callback: function() {
        // window.location = "index1.html";
      }
    },
     warning: {
      label: "ออกจากระบบ",
      className: "btn-warning",
      callback: function() {
        window.location = "index.php";
      }
    }
  }
}).css({'font-weight' : 'bold', color: '#000000', 'font-size': '1.5em', 'font-weight' : 'bold'} );;

		
			
		}
	</script>
	

	

	<!-- script tags
	============================================================= -->
	<script src="assets/js/jquery.js"></script>		
	<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	
	$('.carousel').carousel({
  
})
</script>
</body>
</html>