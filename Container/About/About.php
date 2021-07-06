
<?php require "./hoc/head/head.php"; ?>
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Component/Page/AboutPage/HeroAbout/HeroAbout.php"; ?>
<?php require "./Component/HomePage/Footer/Footer.php"; ?>
<script  type="text/babel">
    class About extends React.Component {
    
        render() {
      
            return (
                <React.Fragment>
                    <HeroAbout />
                    <Footer />
                    <p style={{fontSize:'100px', height:'500px'}}> Hello </p>
                </React.Fragment>
                );
            }
        }
</script>