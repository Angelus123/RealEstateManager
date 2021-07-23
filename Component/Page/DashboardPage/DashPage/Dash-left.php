
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">
const DashLeft  = (props) => {
   console.log(props)
        return (
            <div className='dash-left'> 
                <div className='dash-left-container'> 
                    <div className="dash-left-item"  onClick={props.product}>Manage product</div>
                    <div className="dash-left-item" onClick={props.home}>Manage Home Page </div>
                    <div className="dash-left-item"  onClick={props.urgent}> Manage Urgent news</div>
                    <div className="dash-left-item"  onClick={props.about}> Manage About us </div>
                </div>
        
            </div>
        )
    }


</script>

   


   