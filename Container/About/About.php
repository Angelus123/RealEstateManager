
<?php require "./hoc/head/head.php"; ?>
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Component/Page/AboutPage/HeroAbout/HeroAbout.php"; ?>
<?php require "./Component/ClientReview/ClientReview.php"; ?>
<?php require "./Component/HomePage/Footer/Footer.php"; ?>
<script  type="text/babel">
    class About extends React.Component {
    
        render() {
      
            return (
                <React.Fragment>
                    <HeroAbout />
                    <ClientReview />
                    <Footer />
                </React.Fragment>
                );
            }
        }
</script>