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
        manageProduct: true,
        manageHome: false,
        manageUrgent:false,
        manageAbout: false,
       
        btnOpen:''
        }
    ManageProduct= () =>{
        const less=this.state.manageProduct
        console.log(less)
        this.setState({manageProduct:!less,
            manageHome:false,
            manageUrgent:false,
            manageAbout: false,
        })
        console.log(less);
        if(!less)
            this.setState({btnOpen:'white'})  
        else
        this.setState({btnOpen:''})  
    }

    ManageHome= () =>{
        const less=this.state.manageHome
        this.setState({manageHome:!less,
            manageProduct:false,
            manageUrgent:false,
            manageAbout: false,
        })
        console.log(less);
        if(!less)
            this.setState({btnOpen:'white'})  
        else
        this.setState({btnOpen:''})  
    }
    ManageUrgent= () =>{
     
        const less=this.state.manageUrgent
        this.setState({manageUrgent:!less,
            manageProduct:false,
            manageHome:false,
            manageAbout: false,
        })
        if(!less)
            this.setState({btnOpen:'white'})  
        else
        this.setState({btnOpen:''})  
    }
    ManageAbout= () =>{
        const less=this.state.manageAbout
        this.setState({manageAbout:!less,
            manageProduct:less,
            manageHome:false,
            manageUrgent: false,
        })
        if(!less)
            this.setState({btnOpen:'white'})  
        else
        this.setState({btnOpen:''})  
    }

 
    render(){
        return( <React.Fragment>
                    <DashLeft
                    home={this.ManageHome}
                    product={this.ManageProduct}
                    urgent={this.ManageUrgent}
                    about={this.ManageAbout}/>

                     
                    <div className="dash-content">
                        <DashRight />
                        
                        {this.state.manageProduct?
                            <div >
                                <form action="/api/backend/product_crud/products/public/crud" class="contact-form">   
                                    <button class="site-btn">MANAGE PRODUCT</button>         
                                </form>
                                <ManageProducts />
                                <button><a href="/api/backend/product_crud/products/public/crud/create.php">ADD PRODUCT NEW PRODUCT</a> </button>
                            </div>  
                     
                    :null }

                    {this.state.manageHome?
                    <div>
                    <div class="col-lg-6">
                            <button><a href="/api/backend/product_crud/products/public/crud/create.php"> Manage Sales on Home Page</a> </button> 
                        </div>

                        <div class="col-lg-6">
                            <button><a href="/api/backend/product_crud/products/public/crud/create.php"> Manage Rent on Home Page</a> </button>
                        </div>  
                        <div class="col-lg-6">
                            <button><a href="/api/backend/product_crud/products/public/crud/create.php"> Manage Manage property on Home page</a> </button>
                        </div>  
                    </div>  
                   
                    :null }
                    {this.state.manageUrgent?
                    <div>
                        <div class="col-lg-6">
                            <button><a href="/apitest/RealEstateManager/backend/unews_crud/news/public/crud/create.php"> Manage Urgent News</a> </button> 
                        </div>
                    </div>  
                   
                    :null }
                    {this.state.manageAbout?
                    <div>
                        <div class="col-lg-6">
                            <button><a href="/api/backend/product_crud/products/public/crud/create.php"> Manage Client Comments</a> </button> 
                        </div>

                        <div class="col-lg-6">
                            <button><a href="/api/backend/product_crud/products/public/crud/create.php"> Manage  About us</a> </button>
                        </div>  

                    </div>                    
                    :null }
                    </div>
                    
                    <Footer />
                    <p> {this.state.datas} </p>
                </React.Fragment>
                );
            }
        }
</script>