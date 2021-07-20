<?php require './Component/UpdateProduct/UpdateProduct.php' ?>

<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">

  class ManageProducts extends React.Component {
        state = {
            products:[],
           
        }
        componentDidMount() {
        axios.get('/api/backend/manageProducts/abProducts.php')
        .then(res => {
            console.log('i', res.data)
             const fetchProducts = [];
             console.log( '',res.data)
            for (let key in res.data ){
              fetchProducts.push({
                  ...res.data[key],
                  id:key
              })
           }
           console.log(fetchProducts)
         
            this.setState({loading:false, products:fetchProducts})
        })
        .catch (err => {
            this.setState({loading:false})
        })
    }

     deleteUser = (create_date) => {
        let formData = new FormData();    //formdata object

        formData.append('create_date', create_date);   //append the values with key, value pair

        let url='/api/backend/manageProducts/delete.php'

        const config = {     
            headers: { 'content-type': 'multipart/form-data' }
        }

        axios.post(url, formData, config)
            .then(response => {
                console.log(response);
            })
            .catch(error => {
                console.log(error);
            });
            }

     
                         
                
        render(){
          
            let backgound='https://cdn.pixabay.com/photo/2017/01/29/21/35/button-2019445_960_720.png'      
            const row =this.state.products.map(product =>{
                backgound=`http:/localhost/api/backend/product_crud/products/public/${product.image}`
                        return (<tr>
                        <td >
                
                        <img src={backgound}/></td>
                        <td>{product.title}</td>
                        <td>{product.price}</td>
                        <td>{product.description}</td>
                        <td>{product.create_date}</td>
                        
                    
                </tr>)}
            )
    return(
            <div className='products-manager'>
        
        <h1>Products CRUD</h1>
            <a href="http://localhost/apitest/RealEstateManager/backend/product_crud/products/public/crud/create.php" > <div type="button" class="btn btn-sm btn-success">Manage Products</div></a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Created Date</th>
            </tr>
            </thead>
            <tbody>

                {row}
            
            </tbody>
        </table>


            </div>
)
    }
}
</script>
