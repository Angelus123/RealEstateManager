<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">

const scrollToRef = (ref) => window.scrollTo(0, ref.current.offsetTop)   
const Contacts = () =>{
	const myRef = React.useRef(null)
	const[redirect, setCount] = React.useState(null);

  const executeScroll = () => scrollToRef(myRef)



 const onSignIn =(googleUser) => {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  setCount("/dashboard");
  <Redirect to={redirect} />
  
  console.log('Email: ' + profile.getEmail());
  
  // This is null if the 'email' scope is not present.
}
	return(

    <div className='Contacts'>
    <header class="header-section">
		<div class="header-top">
		
			<div class="container">

				<div class="row">
               
					<div class="col-lg-12 text-lg-right header-top-right">
                    <div class="top-social">
					<Link to="/dashboard"><b>Dashboard</b></Link>
						
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
							<div ref={myRef}></div> 
							<div class="g-signin2" data-onsuccess={onSignIn} ></div>
							<button className="auto-scroll-top" onClick={executeScroll}>
								Top
							</button> 
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
  
        

            <a href="#" class="site-ads"> </a>			
		</div>

		
	</header>
     
</div>
)}
</script>
