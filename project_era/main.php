<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'project');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	$db=mysql_select_db(DB_NAME,$con);
	$user = "";
	if(isset($_POST['username4']) && isset($_POST['pass4'])){
		$username = $_POST['username4'];
		$pass = $_POST['pass4'];
		$sql = "SELECT * FROM `users` WHERE `login` = '".$username."'AND `password`='".$pass."'";
		$result = mysql_query($sql);
		$user = $username;

		SetCookie("name","value",time()+100);
		if(mysql_num_rows($result)>0){
			echo '<style>
			        #login {
			            display: none;
			        }
			        </style>';
		}
		else{
			echo "Incorrect  login or password";
		}
	}
	
	
?>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Main</title>
	<link rel = "stylesheet" href= "style.css">
	<link rel = "script" href="script.js">
	<script>
		
		window.onclick = function(event) {
    	if (event.target == modal) {
       		modal.style.display = "none";
    	}
		}
 		  function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("bcg").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("bcg").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 4000);
          }

          var images = [], x = -1;
          images[0]= "src/car2.jpg"
          images[1]= "src/car3.jpg"
          images[2]= "src/car1.jpg"
	</script>
</head>
<body onload = "startTimer()">
<div class="section-1">
	<div class="menu">
		<a id ="logo1" href="main.php"><img id="logo" src="src/logo.png"></a>
	  	<a id="home" href="main.php">Home</a>
	  	<button id="buy_js" onclick="document.getElementById('id_buy').style.display='block'" style="width:auto;" >Buy</button> 
	  	<button id="sell_js" onclick="document.getElementById('id_sell').style.display='block'" style="width:auto;">Sell</button> 
	  	<button id="about_js" onclick="document.getElementById('id_about').style.display='block'" style="width:auto;">About us</button>
	  	<button id ="delete_js" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Delete</button>
	  	<?php if(isset($_COOKIE['name'])){
	  		?><div class="user"><a id = "asd" href="#" onclick="#"><?php echo $user;?></a></div>
	  		
	  		<?php
	  	} else{?>
	  		<button id ="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log in</button>
	  	<?php }?>
	</div>
	<div  class="background-image">
		<p>For every<br> turn</p>
		<img id = "bcg" src="src/car1.jpg">
	</div>
	<div class="search">
		<div class="quick_s"><a>Quick search</a></div>
		<div class="options_s">
			<div class="options_s1">
				<select>
					<option>Not selected</option>
					<option value="new">New cars</option>
	  				<option value="used">Used cars</option>
				</select>
				<select>
					<option>Not selected</option>
	  				<option value="bmw">BMW</option>
	  				<option value="mercedes">Mercedes</option>
	  				<option value="subaru">Subaru</option>
	  				<option value="audi">Audi</option>
	  				<option value="toyota">Toyota</option>
					<option value="volvo">Volvo</option>
	  				<option value="hyundai">Hyundai</option>
	  				<option value="nissan">Nissan</option>
	  				<option value="lada">Lada</option>
	  				<option value="honda">Honda</option>
	  				<option value="lexus">Lexus</option>
				</select>
				<select>
					<option>Not selected</option>
					<option value="all_models">All models</option>
				</select>
				<select>
					<option>Not selected</option>
					<option value="volvo">No max price</option>
	  				<option value="saab">$10,000</option>
	  				<option value="saab">$15,000</option>
	  				<option value="saab">$20,000</option>
	  				<option value="saab">$30,000</option>
	  				<option value="saab">$40,000</option>
	  				<option value="saab">$50,000</option>
	  				<option value="saab">$60,000</option>
	  				<option value="saab">$70,000</option>
	  				<option value="saab">$100,000</option>
	  				<option value="saab">$200,000</option>
				</select>
				<select>
					<option>Not selected</option>
					<option value="volvo">No limit of car mileage</option>
	  				<option value="10000">10,000km</option>
	  				<option value="20000">20,000km</option>
	  				<option value="30000">30,000km</option>
	  				<option value="40000">40,000km</option>
	  				<option value="80000">80,000km</option>
	  				<option value="100000">100,000km</option>
	  				<option value="250000">250,000km</option>
	  				<option value="500000">500,000km</option>
				</select>
				
			<button id="button_s">Search</button>
			</div>
		</div>
	</div>
	</div>
<div class="section-2" >
		<div class="desc"><p>Most searched cars</p></div>
		<div class="cards">
			<div class="card">
			        <img src="http://cdn1.autoexpress.co.uk/sites/autoexpressuk/files/styles/gallery_adv/public/2017/04/toyota_ft4x_concept_6_0fefa39afd47d6717aeddfc16a83a136f94da767.jpg?itok=OHJeAnsD">
			        <div class="middle">
			        	<div class="maker">Toyota FJ Cruiser</div>
			        	<div class="info"><a href="Cruiser.html">В отличном состоянии, много вложено средств и времени! Варианты обмена рассмотрю!</a> </div>
			        	<div class="price">9,600,000 KZT</div>
			        </div>
			      
		    </div>
		    <div class="card">
			        <img src="http://cdn1.evo.co.uk/sites/evo/files/styles/gallery_adv/public/2017/11/im_4122.jpg?itok=zNkS5ATW">
			        <div class="middle">
			        	<div class="maker">Subaru Impreza</div>
			        	<div class="info"><a href="subaru.html">В отличном состоянии, много вложено средств и времени! Варианты обмена рассмотрю!</a> </div>
			        	<div class="price">2,600,000 KZT</div>
			        </div>.

		    </div>
		    <div class="card">
			        <img src="src/bmw-520.jpg"/>
			        <div class="middle">
			        	<div class="maker">BMW 520</div>
			        	<div class="info"><a href="bmw-520.html">В отличном состоянии, много вложено средств и времени! Варианты обмена рассмотрю!</a> </div>
			        	<div class="price">1,500,000 KZT</div>
			        </div>
		    </div>
		    <div class="card">
			        <img src="src/audi-a6.jpg"/>
			        <div class="middle">
			        	<div class="maker">Audi A6</div>
			        	<div class="info"><a href="audi-a6.html">В отличном состоянии, много вложено средств и времени! Варианты обмена рассмотрю!</a> </div>
			        	<div class="price">10,500,000 KZT</div>
			        </div>
		    </div>
		    <div class="card">
			        <img src="http://www.zercustoms.com/news/images/Mercedes/Mercedes-CL500-100-years-6.jpg"/>
			        <div class="middle">
			        	<div class="maker">Mercedes-Benz CL 500</div>
			        	<div class="info"><a href="merc-cl-500.html">Состояние как новое. Полная комплектация : алькантара, ночн. видение и итд.</a> </div>
			        	<div class="price">19,500,000 KZT</div>
			        </div>
		    </div>
		    <div class="card">
			        <img src="http://cdn2.evo.co.uk/sites/evo/files/styles/gallery_adv/public/2017/03/1343849_1ax7k7105.jpg?itok=1w048P_w"/>
			        <div class="middle">
			        	<div class="maker">Mercedes-Benz E 200</div>
			        	<div class="info"><a href="merc-e-200.html">В отличном состоянии, много вложено средств и времени! Варианты обмена рассмотрю!</a> </div>
			        	<div class="price">4,500,000 KZT</div>
			        </div>
		    </div>
		</div>	
</div>
	<div id="id01" class="modal">	  
	  <form class="modal-content animate" action="#" method="post">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	    </div>
	    <div class="container">
		    
		      <label><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="username4" required>

		      <label><b>Password</b></label>
		      <input  type="password" placeholder="Enter Password" name="pass4" required>
		        
		        <input type="submit" name="submit" value="Log in"   >
		 
	    </div>

	    

	   
	  </form>
	</div>
	<div id="id_buy" class="modal">
		<form class="options_sell" action="from.php" method="get">
			  <span onclick="document.getElementById('id_buy').style.display='none'" style="color:#6919FF" class="close" title="Close Modal">&times;</span>
		 <div class="submit">Find the car of your dream</div>
			<div class="options_sell1">
				<p>Choose category
				<select name="ccategory">
					<option value="Not selected">Not selected</option>
					<option value="new">New car</option>
	  				<option value="used">Used car</option>
				</select></p>
				<p> Brand and model
				<select name="cbrand">
					<option value="Null">Not selected</option>
	  				<option value="bmw">BMW</option>
	  				<option value="mercedes">Mercedes</option>
	  				<option value="subaru">Subaru</option>
	  				<option value="audi">Audi</option>
	  				<option value="toyota">Toyota</option>
					<option value="volvo">Volvo</option>
	  				<option value="hyundai">Hyundai</option>
	  				<option value="nissan">Nissan</option>
	  				<option value="lada">Lada</option>
	  				<option value="honda">Honda</option>
	  				<option value="lexus">Lexus</option>
				</select>
				<select>
					<option>Not selected</option>
					<option value="all_models">All models</option>
				</select>
				</p>
				<p> Price
					<select name="cprice">
					<option value="999999">Not selected</option>
					<option value="999999">No limit </option>
	  				<option value="10000">10,000$</option>
	  				<option value="20000">20,000$</option>
	  				<option value="30000">30,000$</option>
	  				<option value="40000">40,000$</option>
	  				<option value="80000">80,000$</option>
	  				<option value="100000">100,000$</option>
	  				<option value="250000">250,000$</option>
	  				<option value="500000">500,000$</option>
				</select>
				</p>
				<p> Year of manifacture
					<input type="number" id="year1" name="year">
				</p>
				<p> Mileage
				<select>
					<option>Not selected</option>
					<option value="volvo">No limit of car mileage</option>
	  				<option value="saab">10,000km</option>
	  				<option value="saab">20,000km</option>
	  				<option value="saab">30,000km</option>
	  				<option value="saab">40,000km</option>
	  				<option value="saab">80,000km</option>
	  				<option value="saab">100,000km</option>
	  				<option value="saab">250,000km</option>
	  				<option value="saab">500,000km</option>
				</select>
				</p>
				<p>
					City
					<select>
					<option>Not important</option>
	  				<option value="saab">Almaty</option>
	  				<option value="saab">Astana</option>
	  				<option value="saab">Ust'-Kamenogorsk</option>
	  				<option value="saab">Pavlodar</option>
	  				<option value="saab">Taraz</option>
	  				<option value="saab">Shymkent</option>
	  				<option value="saab">Aktau</option>
	  				<option value="saab">Oral</option>
					</select>
				</p>

				<button id="button_search1" action = "from.php">Search</button>	
	</div>
	</form>
</div>
	<div id="id_sell" class="modal">
		<form class="options_sell" action="for.php" method="get">
			<span onclick="document.getElementById('id_sell').style.display='none'" style="color:#6919FF;" class="close" title="Close Modal">&times;</span>
		 <div class="submit" >Submit an ad</div>
			<div class="options_sell1">
				<p>Choose category
				<select name="category">
					<option value="Not selected">Not selected</option>
					<option value="new">New car</option>
	  				<option value="used">Used car</option>
				</select></p>
				<p> Brand and model
				<select name="brand">
					<option>Not selected</option>
	  				<option value="bmw">BMW</option>
	  				<option value="mercedes">Mercedes</option>
	  				<option value="subaru">Subaru</option>
	  				<option value="audi">Audi</option>
	  				<option value="toyota">Toyota</option>
					<option value="volvo">Volvo</option>
	  				<option value="hyundai">Hyundai</option>
	  				<option value="nissan">Nissan</option>
	  				<option value="lada">Lada</option>
	  				<option value="honda">Honda</option>
	  				<option value="lexus">Lexus</option>
				</select>
				<select name="model">
					<option value="Not">Not selected</option>
					<option value="all">All models</option>
				</select>
				</p>
				<p> Price
					<input type="number" id="price1" name="price">
				</p>
				<p> Year of manifacture
					<input type="number" id="year" name="year">
				</p>
				<p>Upload a photo
	   					<input type="file" id="upload1" name="f">
	   					<input type="submit" id = "send1" value="Send">
	   				
	  			</p>
				<button id="button_search" action = "for.php">=Submit</button>
			</div>
		</form>

	</div>
	
	

<div id ="id_about" class="modal">
	 <div class="about">
	 	<span onclick="document.getElementById('id_about').style.display='none'" style="color:#6919FF;" class="close" title="Close Modal">&times;</span>
		  	<h1>About Us</h1>
		  	<p>This site is a leading online destination that helps car shoppers and owners navigate every turn of car ownership. A pioneer in automotive classifieds, the company has evolved into one of the largest digital automotive platforms, connecting consumers with local dealers across the country anytime, anywhere. Through trusted expert content, on-the-lot mobile app features, millions of new and used vehicle listings, a comprehensive set of research tools and the largest database of consumer reviews in the industry, site helps shoppers buy, sell and service their vehicles.</p>
	  </div>
</div>
<div id="id02" class="modal">	  
	  <form class="modal-content animate" action="#" method="post">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	    </div>
	    <div class="delete_obj" style="font-size: 30px; margin-left:40%;"> Delete one of the car</div>
			<div class="delete_option" style="margin-left:40%; ">
				<p>ID
				<input type="number" id="id_del" name="id_del">
				</p>
				<p> Brand
				
				<select name="brand_d">
	  				<option value="bmw">BMW</option>
	  				<option value="mercedes">Mercedes</option>
	  				<option value="subaru">Subaru</option>
	  				<option value="audi">Audi</option>
	  				<option value="toyota">Toyota</option>
					<option value="volvo">Volvo</option>
	  				<option value="hyundai">Hyundai</option>
	  				<option value="nissan">Nissan</option>
	  				<option value="lada">Lada</option>
	  				<option value="honda">Honda</option>
	  				<option value="lexus">Lexus</option>
				</select>
				</p>
				<p> Price
					<input type="number" id="price" name="price_d">
				</p>
				<button action = "delete.php" style="color:red; width: auto; background-color:#BCECFF; font-size: 30px; border: 1px red solid;">DELETE</button>
			</div>

	    

	   
	  </form>
	</div>

</body>
<footer>
	<div class = "foot">©2017 Yerassyl Nurlanov. All rights reserved</div>
</footer>
</html>