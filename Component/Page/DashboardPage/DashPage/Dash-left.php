
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
const DashLeft  = (props) => {
   console.log(props)
        return (
            <div className='dash-left'> 
                <div className='dash-left-container'> 
                    <div className="dash-left-item"  onClick={props.product}>Manage product</div>
                    <div className="dash-left-item" onClick={props.services}>Add Services </div>
                    <div className="dash-left-item"  onClick={props.picture}> Manage picture</div>
                    <div className="dash-left-item"> Manage news </div>
                    <div className="dash-left-item"> Manage About us </div>
                    <div className="dash-left-item"> Manage contact us </div>
                    <div className="dash-left-item"> Manage Library </div>
                    <div className="dash-left-item"> Manage Footer </div>
                    
                    
                
                </div>
        
            </div>
        )
    }


</script>

   


   