<?php 
echo "electricity-equipment";
?>
  <!-- <div class="box-submenu">
				<div class="box-menu">
					<div class="box-text">
					    <img src="<?php echo get_template_directory_uri(); ?>/image/list.png" alt=" ">
	                    <h2>PRODUCT CATAGORIES</h2>
					</div>
					<ul class="list"><?php wp_nav_menu(array('theme_location'=>'primary'));?></ul> 
				</div>
		    </div> -->
		    <!-- <div class="box-content">
				<div class="content-1"><div class="tip"><h3>Our's latest Product</h3></div></div>
				<div class="content-2"> -->

					<!-- </div> -->
				  <!-- <div class="more"><a href="#">View More...</a></div> -->
		<!-- 	</div>   
        </div> -->


        .bdContent01{
	width: 800px;
	margin: 0 auto;
	display: block;
	padding-bottom: 20px;
	float: right;
	clear: both;
	overflow: hidden;
}
.catBox{
  display: block;
  width: 150px;
  border: 1px solid gray;
  float: left;
  padding:20px;
  margin-right: 30px;

}
.newBox{
  display: block;
  width: 150px;
  border: 1px solid gray;
  margin-right: 30px;
  float: left;
  padding:20px;
}
.promBox{
    display: block;
  width: 150px;
  border: 1px solid gray;
  float: left;
  padding:20px;
}
.box-submenu{
  width:250px;
  float: left;
  margin-top: 5px;

}
.box-menu{
	display: block;
	background-color: white;
	margin-bottom: 20px;
	padding-bottom: 20px;
	border: 1px solid  gray;
}
.box-text{
	display: block;
	background-color: #2ecc71;
	color: #fff;
	margin: 0;
	overflow: hidden;
	clear: both;
}
.box-text h2{
	font-size: 14px;    
	text-align: left;
	line-height: 1em;
	padding: 15px;
	float: left;
}
.box-text img{
	float: left;
	margin-top: 8px;
	margin-left: 5px;
}
ul.list{
	list-style-type:none;
	margin-right: 20px;
}
ul.list li{
border-bottom: 1px dotted gray;
padding: 20px;
text-align:left;
margin-left: 25px;
display: block;
}
ul.list li a{
	text-decoration: none;
	text-transform: uppercase;
	font-size: 16px;
	color: gray;
}

.box-content{
	width: 700px;
	margin: 0;
	float: right;  
}
.content-1,
.content-2{
	display: block;
	padding: 10px;
	overflow: hidden;
	padding: 5px;
	margin-bottom: 10px;
	clear: both;    
}


.tip h3{
	width: 300px;
	border: 2px solid #f44336;
	margin: 0;
	float: left;
	padding: 10px;
	font-size: 18px;
	color: #f44336;
	font-weight: bold;
	text-transform: none;
	text-align: center;
}
