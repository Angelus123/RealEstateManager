
<?php require "./hoc/head/head.php"; ?>
<?php require "./hoc/foot/foot.php"; ?>
<?php require "./Component/Page/ContactPage/HeroContact/HeroContact.php"; ?>
<?php require "./Component/HomePage/Service/Services.php"; ?>
<?php require "./Component/HomePage/Blog/Blog.php"; ?>
<?php require "./Component/HomePage/Client/Client.php"; ?>
<?php require "./Component/HomePage/Footer/Footer.php"; ?>
<script  type="text/babel">
    class Contact extends React.Component {
        state = {
            datas:[]
        }
        componentDidMount() {
            const url = '/api/backend/contacts.php'
            axios.get(url).then(response => response.data)
            .then((response) => {
                console.log(this.state.datas)
            this.setState({ datas: [response] })
            console.log(this.state.datas)
            })
        }
        render() {
        console.log(this.state.datas)
            return (
                <React.Fragment>
                    <HeroContact />
             
                    <Footer />
                    <p> {this.state.datas} </p>
                </React.Fragment>
                );
            }
        }
</script>