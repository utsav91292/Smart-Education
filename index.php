<!DOCTYPE html>
<html>

<head>
	<title>Smart Learning </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
</script>
<style>
	html,body{
	background-image:url('bg.jpg');
	background-repeat:no-repeat;
	 background-size: cover;
	 
	}
	#formSmart{
	height:620px!important;

	margin-right:2%;

	}
	</style>
</head>


       <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="writefile.php" id="formSmart">

            <div class="form-title-row">
                <h1>Smart Learning</h1>
                <h3>By Team Ingenious</h3>
            </div>

            <div class="form-row">
                <label>
                    <span>Enter the text, you want to teach today. </span>
                    <textarea name="txtarea" placeholder="a:'a for Apple',b:'b for Banana'"></textarea>
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Submit Form</button>
            </div>

        </form>



</body>

</html>
