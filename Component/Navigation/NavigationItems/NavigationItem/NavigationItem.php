
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">

const navigationItem =(props) =>(

        <li className='NavigationItem'>
            <Link to = {props.link} exact={props.exact}>{props.children}</Link>

        </li>
    
)
</script>