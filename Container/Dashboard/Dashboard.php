
<?php require "./hoc/head/head.php"; ?>
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Component/HomePage/Hero/Hero.php"; ?>
<?php require "./Component/Page/DashboardPage/DashRight/DashRight.php"; ?>
<?php require "./Component/HomePage/Blog/Blog.php"; ?>
<?php require "./Component/HomePage/Client/Client.php"; ?>
<?php require "./Component/HomePage/Footer/Footer.php"; ?>
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


    
    render(){
        return( <React.Fragment>
                    <DashLeft
                    services={this.ManageServices}
                     product={this.ManageProduct}/>
                  
                    <div className="dash-content">
                        <DashRight />
                       
                        {this.state.manageProduct?
                    
                    
                  
                    <div className="how-to-proceed-content-elig" >
                        <h1>Manage Product</h1>
                        Our Center assesses  your personal situationfree of charge using our 
                        digital-automated assessment instrument.
                        To check is you are eligible on one of our programms. 
                        <div className="get-content-elig">Check your elegibility </div>
                    </div>
                   :null }

                   {this.state.manageServices?
                    <div className="how-to-proceed-content-elig" >
                        <h1>Manage Services</h1>
                        Our Center assesses  your personal situationfree of charge using our 
                        digital-automated assessment instrument.
                        To check is you are eligible on one of our programms. 
                        <div className="get-content-elig">Check your elegibility </div>
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