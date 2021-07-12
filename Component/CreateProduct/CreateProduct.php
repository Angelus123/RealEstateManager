
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
  class CreateProduct extends React.Component {
      
    state = {
        image: '',
        title: '',
        description: '',
        price: '',
       
    }   

    handleFormSubmit( event ) {
        event.preventDefault();
        console.log('izeree----',this.state);
    }
    handleFormSubmit( event ) {
        console.log('izere----',this.state);
        event.preventDefault();
        let formData = new FormData();    //formdata object
        formData.append('image', this.state.image)
        formData.append('title', this.state.title)
        formData.append('description', this.state.description)
        formData.append('price', this.state.price)
        console.log('dyd',formData)
        axios({
            method: 'post',
            url: '/api/backend/manageProducts/create.php',
            data: formData,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
        .then(function (response) {
            //handle success
            console.log(response)

        })
        .catch(function (err) {
            //handle error
            console.log(err)
        });
    }
                    
            render(){
             
                return(
                        <div className='products-manager'>
                
            <h1>Create new Product</h1>
                <div class="alert alert-danger">                  
                    <div></div>                 
                </div>
           

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Product Image</label><br />
                    <input type="file" name="image"  value={this.state.image} 
                    onChange={e => this.setState({ image: e.target.value })}/>
                </div>
                <div class="form-group">
                    <label>Product title</label>
                    <input type="text" name="title" class="form-control" value={this.state.title} 
                    onChange={e => this.setState({ title: e.target.value })}/>
                </div>
                <div class="form-group">
                    <label>Product description</label>
                    <textarea class="form-control" name="description"  value={this.state.description} 
                    onChange={e => this.setState({ description: e.target.value })}></textarea>
                </div>
                <div class="form-group">
                    <label>Product price</label>
                    <input type="number" step=".01" name="price" class="form-control" value={this.state.price} 
                    onChange={e => this.setState({ price: e.target.value })}/>
                </div>
                
                <button type="submit" class="btn btn-primary" onClick={e => this.handleFormSubmit(e)}>Submit</button>
            </form>

            </div>
                )
                    }
}
</script>