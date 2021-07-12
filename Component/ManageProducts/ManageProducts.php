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

            const row =this.state.products.map(product =>{
                        return (<tr>
                        <td>{product.image}</td>
                        <td>{product.ProductId}</td>
                        <td>{product.title}</td>
                        <td>{product.description}</td>
                        <td>{product.price}</td>
                        <td>{product.create_date}</td>
                        <td>
                        <Link to ={'/updateproduct/'+ product.ProductId} key = {product.id}>
                        <button  id={product.id} class="btn btn-sm btn-outline-primary">Edit</button>
                       </Link>
                       
                        <button class="btn btn-sm btn-outline-danger" onClick={()=>this.deleteUser(product.create_date)}>Delete</button>
                        
                    </td>
                    
                </tr>)}
            )
    return(
            <div className='products-manager'>
        
        <h1>Products CRUD</h1>

        <p>
            <Link to="/createproduct" type="button" class="btn btn-sm btn-success">Add Product</Link>
        </p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">ProductId</th>
                <th scope="col">title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Actions</th>
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
