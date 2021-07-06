import React from 'react'
import './NavigationItems.css'
import NavigationItem from './NavigationItem/NavigationItem'
const navigationItems = () => (
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
export default navigationItems