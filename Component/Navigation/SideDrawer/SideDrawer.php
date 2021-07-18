<?php  require  '../NavigationItems/NavigationItems'?>
<?php  require  '../../UI/Backdrop/Backdrop'?>
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">

const SideDrawer = ( props ) => {  
    let attachedClasses = ['SideDrawer', 'Close']
    if(props.open){

        attachedClasses = ['SideDrawer', 'Open']
    }
   
    return  <Aux> 
              
      <Backdrop show ={props.open} clicked= {props.closed} />  
            <div className = {attachedClasses.join(' ')}>
            <div style ={{marginLeft:'95%'}}onClick={props.closed}>X</div>
                   
                    
                <nav>
                    <NavigationItems />
                </nav>
               
            </div>
        </Aux>
        }
    
</script>