<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
const Contacts = () => (
    <div className='Contacts'>
    <header class="header-section">
		<div class="header-top">
		
			<div class="container">

				<div class="row">
               
					<div class="col-lg-12 text-lg-right header-top-right">
                    <div class="top-social">
							<Link to="/dashboard">Dashboard</Link>
							<a href="#"> <i>Language</i></a>
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>	
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>		
						</div>
                        <ul class="main-menu">
							<li><Link to="/">HOME</Link></li>
							<li><Link to="/about">ABOUT US</Link></li>
							<li><Link to="/contact">CONTACT US</Link></li>
							<li><Link to="/library">LIBRARY</Link></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
			
        <div class="site-navbar">
            <a href="#" class="site-logo"> <img src='https://github.com/Angelus123/Abgroup/blob/main/img/logo1.png' alt=""/></a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
         
			<form style={{textAlign:'center'}}  method="get" action="search.php">
				<div style={{display:'flex'}}>
					<div className="nav-search">
						<span>
							<input type="text"name="keywords" placeholder="Search for property"/>
						</span>
					</div>
					<div className="nav-search-item"> 
						<select name="field">
							<option value="title">Select Category</option>
							<option value="description">description</option>
							<option value="description">Location</option>
							<option value="description">Size</option>
							<option value="description">Bedroom</option>
							<option value="description">Commercial</option>
							<option value="description">Residantial</option>
							<option value="description">Offoces</option>
							<option value="price">price</option>
						</select>
					</div>
					<div className="nav-search-item">
						<input type="submit" value=""/>
					</div>
				
				</div>
			</form>
  
        
	
		
			
			
            <a href="#" class="site-logo"> <img src='https://github.com/Angelus123/Abgroup/blob/main/img/logo1.png' alt=""/></a>			
		</div>
	</header>
     
</div>
)
</script>
<?php print_r($_POST); 
				if(isset($_GET['keywords'])) {
				$keywords = $db->escape_string($_GET['keywords']);

				$query = $db->query("SELECT title, description, price FROM products WHERE '%{$keywords}%' LIKE '%{$keywords}%' ");
				}

				?>

<!-- <div  className="adv-nav-search">
				<form adv-nav-search method="post" action="test1.php">
					<select name="keywords" >
					<option value="title">Category</option>
					<option value="description">description</option>
					<option value="description">Location</option>
					<option value="description">Size</option>
					<option value="description">Bedroom</option>
					<option value="description">Commercial</option>
					<option value="description">Residantial</option>
					<option value="description">Offoces</option>
					<option value="price">price</option>
					</select>
					<input type="submit" />
				</form>
			</div> -->