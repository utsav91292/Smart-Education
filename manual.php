<!DOCTYPE html>
<html>

<head>
        <title>Smart Learning </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/demo.css">
        <link rel="stylesheet" href="assets/form-basic.css">
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
<span>Enter a letter, you want to teach today. </span>
                    <input name="txtbox" maxLength ="1"></input>
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Pronounce It</button>
            </div>

        </form>


</body>
</html>

