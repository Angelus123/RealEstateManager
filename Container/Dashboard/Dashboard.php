
<?php require "./hoc/head/head.php"; ?>
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Component/HomePage/Hero/Hero.php"; ?>
<?php require "./Component/Page/DashboardPage/DashRight/DashRight.php"; ?>
<?php require "./Component/HomePage/Blog/Blog.php"; ?>
<?php require "./Component/HomePage/Client/Client.php"; ?>
<?php require "./Component/HomePage/Footer/Footer.php"; ?>
<?php require "./Component/ManageProducts/ManageProducts.php"?>
<?php require "./Component/Page/DashboardPage/DashPage/Dash-left.php"; ?>
<script  type="text/babel">
    class Dashboard extends React.Component {
        state={
        manageProduct: false,
        manageServices: false,
        }
    ManageProduct= () =>{
        const less=this.state.manageProduct
        console.log(less)
        this.setState({manageProduct:!less,
            manageServices:false
        })
        console.log(less);
        if(!less)
            this.setState({btnOpen:'less'})  
        else
        this.setState({btnOpen:'more'})  
    }

    ManageServices= () =>{
        const less=this.state.manageServices
        console.log(less)
        this.setState({manageServices:!less,
            manageProduct: false,
            
        })
        console.log(less);
        if(!less)
            this.setState({btnOpen:'less'})  
        else
        this.setState({btnOpen:'more'})  
    }
   signOut=() => {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

    
    render(){
        return( <React.Fragment>
                    <DashLeft
                    services={this.ManageServices}
                     product={this.ManageProduct}/>
                     
                    <div className="dash-content">
                    
                        <DashRight />
                        <Link to="/"  onclick={this.signOut}>Sign out</Link>
                        {this.state.manageProduct?
                    
                    <ManageProducts />
                  
                   :null }

                   {this.state.manageServices?
                    <div className="how-to-proceed-content-elig" >
                       
                        <div class="col-lg-6">
                            <div class="contact-right">
                            <h1>Manage Services</h1>
                                <div class="section-title">
                                    <h3>ADD NEW SERVICES</h3>
                                   
                                </div>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Enter Title" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Short Description" />
                                        </div>
                                        <div class="col-md-12">
                                            <textarea  placeholder="Enter Full Description"></textarea>
                                            <button class="site-btn">SUBMIT NOW</button>
                                        </div>
                                    </div>
                                </form>
                                <button><a href="../"> Manage Services in Database</a> </button>
                            </div>  
                        </div>  
                     
                    </div>
                   :null }

                        <Blog />
                        <Client />
                    </div>
                    
                    <Footer />
                    <p> {this.state.datas} </p>
                </React.Fragment>
                );
            }
        }
</script>