
<?php  require 'NavigationItems.php'?>
<?php  require 'DrawerToggle.php' ?>
<?php  require 'Contacts.php' ?>
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">



const Toolbar = (props) => {
  console.log(props.open)
    return <header className="Toolbar">
     
     <div >
     <div  className="mobile-only">
        <div class="nav-switch" onClick={props.toggle}>
					<i class="fa fa-bars"></i>
				</div>
				<form style={{textAlign:'left'}}  action="/api/backend/public/products/search.php" method="GET">
        <div className="nav-search-item-mob">
							<input type="submit" value="" />
					</div>
					
			
				</form>
	
      </div>
        <nav className="DesktopOnly">
          <Contacts/>
        </nav>
      
        
        </div>
    </header>
}

</script>