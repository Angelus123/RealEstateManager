<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCP355BXjRZwQfIRzEDp8vma8O7YhEjUBw&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<script  type="text/babel">
const GetInTouch = () => (
    <div>
        <div className="contact-container">

            <div className="contact-item">
                <h2>Information</h2> 
                <h3 >E-mail</h3> 
                <p>info@abagroup.com</p>
                <h3 >Phone</h3> 
                <p>+250789383982</p> 
                <h3 >Address</h3> 
                <p>Kigali, Rwanda</p>            
                
            </div> 
           
            

            <div className="contact-item">
                <h4> Send Message to product manager </h4>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name"/>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email"/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
           
                
        <div className="ab-map">
        
        <h3>Our Company Locatio on map</h3>
            <pre>
                < iframe src="//maps.google.com/maps?q=-1.94995,30.05885&z=15&output=embed"></iframe >
            </pre>
                
  
        </div>

</div>
 
    )
</script>