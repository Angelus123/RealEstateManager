
<?php  require 'NavigationItem.php'?>
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script  type="text/babel">
const NavigationItems = () => (
<ul className='NavigationItems'>
    <NavigationItem link ="/" exact>Home</NavigationItem>
    <NavigationItem link ="/services">Services</NavigationItem>
    <NavigationItem link ="/about">About</NavigationItem>
    {/* <NavigationItem link ="/booking">Booking</NavigationItem> */}
    <NavigationItem link ="/contact">Contact</NavigationItem>
    <NavigationItem link ="/involved">Get involved</NavigationItem>
    <NavigationItem link ="/faq">FAQ</NavigationItem>
    
  
</ul>
)
</script>