
<?php require "./hoc/head/head.php"; ?>
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Component/HomePage/Hero/Hero.php"; ?>
<?php require "./Component/HomePage/Blog/Blog.php"; ?>
<?php require "./Component/HomePage/Client/Client.php"; ?>
<?php require "./Component/HomePage/Footer/Footer.php"; ?>
<?php require "./Component/Services/Services.php"; ?>

<script  type="text/babel">
    class Home extends React.Component {
        state = {
            datas:[]
        }  
        componentDidMount(){
        axios.get('/api/backend/abaProducts.php')
        .then(res => {
            console.log('izere', res.data)
  
             const fetchOrders = [];
             console.log( '------------',res.data)
           for (let key in res.data ){
              fetchOrders.push({
                  ...res.data[key],
                  id:key
              })
           }
         
    
            this.setState({loading:false, orders:fetchOrders})
        })
        .catch (err => {
            this.setState({loading:false})
        })
    }
        render() {
        console.log(this.state.datas)
            return (
                <React.Fragment>
                    <Hero />
                    <Services />
                    <Footer />
                    <p> {this.state.datas} </p>
                </React.Fragment>
                );
            }
        }
</script>