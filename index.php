
<?php require "./App.php"; ?>
<?php require "./Component/ContactForm/ContactForm.php"; ?>
<?php require_once "./hoc/head/head.php"; ?>

<link rel="stylesheet" type="text/css" href="./Asset/css/style.css">
<div id='root'></div>
<script  type="text/babel">
    ReactDOM.render(<App />, document.getElementById('root'));
</script>

<?php require_once "./hoc/foot/foot.php" ?>