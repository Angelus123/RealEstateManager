
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
const Services = () => (
  <div className="izere-item">
  <h1 style={{textAlign:'center'}}>Our Services </h1>
  <div className="service-panel">
 

        <div className="services-item">
            <div className="services-item-image"></div>
            <div className="services-up">
                  Rent and Buy
               </div>
            <p className="services-item-title">Property for Rent, Buy & Sell</p>
            <p>We provide you with the best services which is best for your family and which suits your pocket.</p>
            <Link to ="/contact" ><div className="bottom"> Get Service</div></Link>
        </div>


        <div className="services-item">
            <div className="services-item-image--1"></div>
            <div className="services-up">Properties Management</div>
            <p className="services-item-title">Properties Management</p>
            <p>We manage your property considering as our own and give you the best possible solution regarding it.</p>
            <Link to ="/contact" ><div className="bottom"> Get Service</div></Link>
        </div>

        <div className="services-item">
            <div className="services-item-image--2"></div>
            <div className="services-up">Property for Rent, Buy & Sell</div>
            <p className="services-item-title">Renting and Selling</p>
            <p>Enjoy various services provided by us without any mid-man, Book your dream home today!.</p>
            <Link to ="/contact" ><div className="bottom"> Get Service</div></Link>
        </div> 
        </div>

        <div className="service-panel">
        <div className="services-item">
            <div className="services-item-image--3"></div>
            <div className="services-up">
               Property Valuation
               </div>
            <p className="services-item-title">Properties Management</p>
            <p>Enjoy various services provided by us</p>
            <div className="bottom"> <Link to ="/contact" >Get Service</Link></div>
        </div>


        <div className="services-item">
            <div className="services-item-image--4"></div>
            <div className="services-up">Building Project Estimate</div>
            <p className="services-item-title">Properties Management</p>
            <p>Enjoy various services provided by us</p>
            <div className="bottom"> <Link to ="/contact" >Get Service</Link></div>
        </div>
        <div className="services-item">
            <div className="services-item-image--5"></div>
            <div className="services-up">DESIGN AND ICT</div>
            <p className="services-item-title">Building Drawing Design and ICT Computer Service</p>
            <p>Enjoy various services provided by us</p>
            <Link to ="/contact" ><div className="bottom"> Get Service</div></Link>
        </div> 
        </div>
   </div>

   
   
)
</script>
