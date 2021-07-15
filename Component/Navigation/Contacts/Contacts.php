
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">

const scrollToRef = (ref) => window.scrollTo(0, ref.current.offsetTop)   
const Contacts = (props) =>{
	const myRef = React.useRef(null)
	const[redirect, setCount] = React.useState(null);
	const[keywords, setKeywords] = React.useState("Search");

  const executeScroll = () => scrollToRef(myRef)

const handleFormSubmit=( event )=> {
        console.log('izere----',{keywords});
		
        event.preventDefault();
        let formData = new FormData();    //formdata object
        formData.append('keywords', {keywords})
       
        console.log('dyd',formData)
        axios({
            method: 'get',
            url: '/api/backend/manageProducts/search.php',
            data: formData,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
        .then(function (response) {
            //handle success
            console.log(response)

        })
        .catch(function (err) {
            //handle error
            console.log(err)
        });
    }
              
	return(

 
<div className="header-container">
		<div class="header-top">
				<div className="row-top">
               
					<div class="col-lg-12 text-lg-right header-top-right">
                    <div class="top-social">
					<div class="btn-group">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						Select Language
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="http://localhost/api/Component/Navigation/Contacts/Contacts.php?lang=eng">ENG</a></li>
						<li><hr class="dropdown-divider"/></li>
						<li><a class="dropdown-item" href="http://localhost/api/Component/Navigation/Contacts/Contacts.php?lang=kiny">KINY</a></li>
						<li><hr class="dropdown-divider"/></li>
						<li><a class="dropdown-item" href="http://localhost/api/Component/Navigation/Contacts/Contacts.php?lang=fr">FR</a></li>
					</ul>
					</div>
					
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>	
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>		
						</div>
                        <ul class="main-menu">
							<li><Link to="/">Home </Link></li>
							<li><Link to="/about">ABOUT US</Link></li>
							<li><Link to="/contact">CONTACT US</Link></li>
							<li><Link to="/library">LIBRARY</Link></li>
							<li><a href ="http://localhost/api/backend/auth/"><div >Go to dashboard</div></a> </li>
							<div ref={myRef}></div> 
						
							<button className="auto-scroll-top" onClick={executeScroll}>
								Top
							</button> 
						</ul>
					</div>
				</div>
		</div>
		


		<div className="header-sub-top">
			<div className="row-sub-top">
				<Link to="/" class="site-logo"> </Link>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<form style={{textAlign:'center'}}  action="/api/backend/public/products/search.php" method="GET">
					<div style={{display:'flex'}}>
						<div className="nav-search">
							<span>
							<input type="text" name="search" class="form-control" placeholder="Search..." 
							onChange={e => setKeywords(e.target.value )}/>
								
							</span>
						</div>
						<div className="toggle-scroll-container">
							<div class="btn-group toggle-controller">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								Category
							</button>
							<ul class="dropdown-menu toggle">
								<li><a class="dropdown-item" href="#">Residantial</a></li>
								<li><hr class="dropdown-divider"/></li>
								<li><a class="dropdown-item" href="#">Commecial</a></li>
								<li><hr class="dropdown-divider"/></li>
								<li><a class="dropdown-item" href="#">Offices</a></li>
								<li><hr class="dropdown-divider"/></li>
								<li><a class="dropdown-item" href="#">Warehouse</a></li>
							
								
							</ul>
						</div>

						<div class="btn-group toggle-controller">
						<button type="button" class="btn btn-secondary dropdown-toggle tog" data-bs-toggle="dropdown" aria-expanded="false">
							Subcategory
						</button>
						<ul class="dropdown-menu scroll" >
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php"></a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php"><h2>SIZE</h2></a></li>
							<li><hr class="dropdown-divider"/></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">20-40sqm</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">41-100sqm</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">101-500sqm</a></li>
							<li><hr class="dropdown-divider"/></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php"><h2>Price</h2></a></li>
							<li><hr class="dropdown-divider"/></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">100$-300$</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">301$-500$</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">501$-800$</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">800$-10000$</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">10000$-10000$</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">800$-80000$</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">80000$- more</a></li>
							<li><hr class="dropdown-divider"/></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php"><h1><h2>Location</h2></h1></a></li>
							<li><hr class="dropdown-divider"/></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Kimihurura</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Nyamirambo</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Remera</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Kacyiru</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Gikondo</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Gisenyi</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Rusizi</a></li>
							<li><a class="dropdown-item" href="/api/backend/public/products/search.php">Musanze</a></li>
							
						</ul>
						</div>
				</div>

						
						
						<div className="nav-search-item">
							<input type="submit" value="" />
						</div>
					
					</div>
				</form>

				<Link to="#" > <div  className="site-adv"> <p>Here are the best House for you to buy or rent</p></div> </Link>			
			</div>	
		</div>
	</div>
)}
</script>
