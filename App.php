
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Container/Home/Home.php"; ?>
<?php require "./Container/About/About.php"; ?>
<?php require "./Container/Library/Library.php"?>
<?php require "./Container/Contact/Contact.php"?>
<?php require "./Container/Dashboard/Dashboard.php" ?>

<?php require "./Component/Navigation/Contacts/Contacts.php" ?>
<?php require "./Component/CreateProduct/CreateProduct.php"?>


<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script  type="text/babel">

const Link = ReactRouterDOM.Link;

const Route = ReactRouterDOM.Route;

const App = () => (

  <ReactRouterDOM.HashRouter>
    <Contacts />
  


    <Route path="/" exact component={home} />
    <Route path="/about" exact   component={about} />
    <Route path="/contact"  component={contact} />
    <Route path="/library"  component={library} />
    <Route path="/dashboard"  component={dashboard} />
    <Route path="/createproduct"  component={createproduct} />


    <Route exact path="/updateproduct/:id" render={({ match }) => (
       
          <UpdateProduct id={match.params.id} />
       
    )} />


  </ReactRouterDOM.HashRouter>

)


    // <Route path="/library"  component={library} />

const home = () => <div><Home /></div>
const about= () => <div><About /></div>
const contact= () => <div><Contact /></div>
const library = () => <div><Library/></div>  
const dashboard = () => <div><Dashboard/></div>  
const createproduct = () => <div><CreateProduct/></div>  
const updateproduct = () => <div><UpdateProduct/></div> 
const login = () => <div><Login/></div>   


</script>