<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sign up</title>
	<style type="text/css">
      input.parsley-success,
       select.parsley-success,
       textarea.parsley-success {
         color: #468847;
         background-color: #DFF0D8;
         border: 1px solid #D6E9C6;
       }

       input.parsley-error,
       select.parsley-error,
       textarea.parsley-error {
         color: #B94A48;
         background-color: #F2DEDE;
         border: 1px solid #EED3D7;
       }

       .parsley-errors-list {
         margin: 2px 0 3px;
         padding: 0;
         list-style-type: none;
         font-size: 0.9em;
         line-height: 0.9em;
         opacity: 0;

         transition: all .3s ease-in;
         -o-transition: all .3s ease-in;
         -moz-transition: all .3s ease-in;
         -webkit-transition: all .3s ease-in;
       }

       .parsley-errors-list.filled {
         opacity: 1;
       }

       .parsley-type,
       .parsley-required,
       .parsley-equalto,
       .parsley-pattern,
       .parsley-urlstrict,
       .parsley-length,
       .parsley-checkemail{
        color:#ff0000;
       }

	#body {
		margin: 0 400px 0 400px;
	}

	#h1Tag{
		margin-left: 320px;
	}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  </head>
  <body>
	  <input type="hidden" name="" id="host" value="<?php echo base_url();?>">
	  <div class="container">
		  <h1 id="h1Tag">Send email for Sign Up Account</h1>
  		<div class="card" id="body">
			<?php echo form_open('',["id"=>"signup_form",'data-parsley-validate'=>'true']);?>
				<div class="row">
					<div class="col-md-6 form-group">
						<label for="user_email" class="sr-only">Email address</label>
						<input type="email" id="user_email" class="form-control" placeholder="Email address" required="" autofocus="">
					</div>
					<div class="col-md-6">
						<button class="btn  btn-primary " type="submit">Sign in</button>
					</div>
				</div>
			<?php echo form_close();?>
  		</div>
  	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>Api-Plugins/parsley.js" charset="utf-8"></script>
	<script src="<?php echo base_url();?>Api-Plugins/signup.js" charset="utf-8"></script>
  </body>
</html>
