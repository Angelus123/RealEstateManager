import React from 'react'
import Logo from '../../Logo/Logo'
import NavigationItems from '../NavigationItems/NavigationItems'
import DrawToggle from '../SideDrawer/DrawerToggle/DrawerToggle'
import ArrowDropDownIcon from '@material-ui/icons/ArrowDropDown';

import './toolbar.css'
const toolbar = (props) => {
  console.log(props.open)
    return <header className="Toolbar">
     
       <DrawToggle clicked ={props.toggle} />
        
        <Logo />
        <div className="dropdown">
          <span className="language">Language <ArrowDropDownIcon /></span>
          <div className="dropdown-content">
            <p>Kinyarwanda</p>
            <p>German</p>
            <p>ENG</p>
          </div>
        </div>
        
        <nav className="DesktopOnly">
          <NavigationItems />

        </nav>
    </header>
}
export default toolbar