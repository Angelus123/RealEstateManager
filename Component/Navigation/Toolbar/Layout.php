<?php  require 'Toolbar.php'?>
<?php  require 'Aux.php'?>

<?php  require 'SideDrawer.php' ?>
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">

class Layout extends React.Component{
    state = {
        showSideDrawer:false
    }
    sideDrawerClosedHandler = () => {
                this.setState({showSideDrawer: false})

    }

    sideDrawerToggleHandler = () => {
        this.setState( ( prevState ) => {
            return { showSideDrawer: !prevState.showSideDrawer}
            
        } )
      
    }
    render(){
        return (
            <Aux>
              
                <Toolbar 
        
                    open={this.state.showSideDrawer} 
                    toggle ={this.sideDrawerToggleHandler }
                    /> 
                <SideDrawer 
                    open={this.state.showSideDrawer} 
                    closed ={this.sideDrawerClosedHandler }/>
                <main className ='content'>
                    {this.props.children}  
                </main>
            </Aux>
   
        )

    }
}

</script>