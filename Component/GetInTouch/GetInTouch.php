<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
const GetInTouch = () => (
    <div>
        <div style={{display:"flex"}}>

            <div className="contact-izere-item-map">
                <h2>Information</h2> 
                <h3 style={{fontSize:'18px'}}>E-mail</h3> 
                <p style={{fontSize:'14px',color:'rgba(39, 37, 37, 0.548)'}}>info@abagroup.com</p>
                <h3 style={{fontSize:'18px'}}>Phone</h3> 
                <p style={{fontSize:'14px',color:'rgba(39, 37, 37, 0.548)'}}>+250789383982</p> 
                <h3 style={{fontSize:'18px'}}>Address</h3> 
                <p style={{fontSize:'14px',color:'rgba(39, 37, 37, 0.548)'}}>Kigali, Rwanda</p>            
                
            </div>
        
            <div class="page-section blog-page">
                <div class="container">
                    
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="img/about.jpg" alt=""/>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-right">
                                <div class="section-title">
                                    <h3>Get in touch</h3>
                                    <p>Browse houses and flats for sale and to rent in your area</p>
                                </div>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your name" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your email" />
                                        </div>
                                        <div class="col-md-12">
                                            <textarea  placeholder="Your message"></textarea>
                                            <button class="site-btn">SUBMIT NOW</button>
                                        </div>
                                    </div>
                                </form>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <div id="map-canvas"></div>

        <div class="clients-section">
            <div class="container">
                <div class="clients-slider owl-carousel">
                    <a href="#">
                        <img src="img/partner/1.png" alt=""/>
                    </a>
                    <a href="#">
                        <img src="img/partner/2.png" alt=""/>
                    </a>
                    <a href="#">
                        <img src="img/partner/3.png" alt=""/>
                    </a>
                    <a href="#">
                        <img src="img/partner/4.png" alt=""/>
                    </a>
                    <a href="#">
                        <img src="img/partner/5.png" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    )
</script>