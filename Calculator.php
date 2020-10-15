<?php 
////declaring the variables
$result = "0";
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];


////Performing the Artimentic Functions


if (isset($_POST['mutiply'])) {
	$result = $number1 * $number2;
}elseif (isset($_POST['divide'])) {
	$result = $number1 / $number2;
}elseif (isset($_POST['sum'])) {
	$result = $number1 + $number2;
}elseif (isset($_POST['minus'])) {
	$result = $number1 - $number2;
}elseif (isset($_POST['avarage'])) {
	$sum = $number1 + $number2;
	$result = $sum/2;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator by Sonawap</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Simple Calculator - Github/sonawap</h1>
        <div class="col-md-6 col-md-offset-3 form-con">
            <h1 class="text-center">Basic Calculator</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="Calculator.php" method="POST">
                    	<h4 class="text-center text-danger">Input must be an Integer or Float </h4>
                        <div class="col-md-6">
                            <label>Enter Integer 1</label>
                            <input class="form-control" value="<?php echo $number1 ?>" type="text" required="required" name="number1">
                        </div>
                        <div class="col-md-6">
                            <label>Enter Integer 2</label>
                            <input class="form-control" type="text" value="<?php echo $number2 ?>" required="required" name="number2">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-lg" name="mutiply" type="submit">Multiply </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-lg" name="divide" type="submit">Divide </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-lg" name="sum" type="submit">Sum </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-lg" name="minus" type="submit">Minus </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-lg" name="avarage" type="submit">Avarage </button>
                        </div>
                        <div class="col-md-12">
                            <h2>Result = <?php echo $result ?></h2></div>
                    </form>
                </div>
            </div>
            <p>Simple Calculator with php by Sonawap</p>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>