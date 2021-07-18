<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
const Footer = () => (

	<div className="footer-iz">
		<div className="footer-product-izere"> 
			<div className="footer-product-item">
				<p>We provide you with the best services which is best for your family and which suits your pocket.</p>
					<div class="social-footer">	
						<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>		
					</div>
			</div>


			<div className="footer-product-item">
			<h5 class="footer-title">CONTACT US</h5>
							<p>You can contact us here......  </p>
							<p>+250785182823</p>
							<p>nfo.abgroup@gmail.com</p>
							<p>Mon - Sat, 08 AM - 06 PM</p>
			</div>

			<div className="footer-product-item">
			<div >
							<h5 class="footer-title">POPULAR PLACES</h5>
							<ul>
								<li><a href="">Kigali</a></li>
								<li><a href="">MUSANZE</a></li>
								<li><a href="">RUBAVU</a></li>


							
							</ul>
							<ul>
								<li><a href="">RUSIZI</a></li>
								<li><a href="">RWAMAGANA</a></li>
								<li><a href="">NYAGATARE</a></li>
							
							</ul>
						</div>
			</div> 


			<div className="footer-product-item">
			<div ><div >
							
							<h5 class="footer-title">NEWSLETTER</h5>
							<p>Subscribe your email to get the latest news and new offer also discount</p>
							<form >
								<input type="text" placeholder="Email address" />
								<button><i class="fa fa-send"></i></button>
							</form>
							<Link to="/about"><h3 style={{color:'green'}}>CLIENT COMMENT AND REVIEW</h3></Link>
				</div>
				</div>
			</div> 
   </div>
			
		</div>
	
   
)
</script>


