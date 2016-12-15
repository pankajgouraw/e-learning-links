<!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

	<script
  		src="https://code.jquery.com/jquery-2.2.4.min.js"
  		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  		crossorigin="anonymous">
  	</script>
    <link href="css/mdb.min.css" type="text/css" rel="stylesheet">

</head>
<body class="body">
	<div class="container">
		<div class="col">
			<div class="col-md-12">
				<h1 class="elearning">e-Learning Links</h1>
			</div>
			<br>
		</div>

		<div class="col">

		    <form  class="form-horizontal">
				<div class="col-md-9">
					<div class="form-group">
					    <!-- <input id="search" name="name" type="text" class="form-control" placeholder="Jane Doe"> -->
					    <div class="md-form">
						    <input type="text" id="search" class="form-control">
						    <label for="search" class="">Example html</label>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<button  id="sub" class="btn btn-success search">search</button>	
				</div>
			</form>

			    
		    <div class="col-md-9">
				<div id="result">
	    		</div>
    		</div>
    		<div class="center col-md-3">
	    		<button  data-toggle="modal"  id="add" data-target="#my-modal"  class="btn mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored ">

	 	           <i class="material-icons">add</i>
	           </button>


               <div class="modal fade modal-ext" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="   myModalLabel" aria-hidden="true">
				    <div class="modal-dialog" role="document">
				        <!--Content-->
				        <div class="modal-content">
				            <!--Header-->
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                    <span aria-hidden="true">&times;</span>
				                </button>
				                <h3 class="elearning-color">Add Your Link</h3>
				               
				            </div>
				            <!--Body-->
				            <div class="modal-body">
				                <div class="md-form">
				                    
				                    <input type="text" id="title" class="form-control">
				                    <label for="title">Title Example Javascript</label>
				                </div>

				                <div class="md-form">
				                    <input type="text" id="description" class="form-control">
				                    <label for="description">Descprition Example Javascript</label>
				                </div>

				                <div class="md-form">
				                    
				                    <input type="text" id="link" class="form-control">
				                    <label for="link">Link: Example http://www.w3school.com</label>
				                </div>

				                <div class="text-xs-center">
				                    
                                    <p id="error"></p>
                                    <!-- <button type="button" class="btn btn-primary" id="receive">+</button> -->
				                   <button id="receive" class="btn  mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored " >

							 	        <i class="material-icons">add</i>
							       </button>
				               </div>
				            <!--Footer-->
				            <!-- <div class="modal-footer">
				                <div class="options">
				                    <p>Already have an account? <a href="#">Log in</a></p>
				                </div>
				                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				            </div> -->
				           </div>
				        <!--/.Content-->
			   			</div>
    				</div>	
	    		</div>
			</div>		
	   </div>	
	</div>
		<script type="text/javascript" src="js/main.js"></script>
		<!-- JQuery -->
	    <!-- <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script> -->

	    <!-- Bootstrap tooltips -->
	   <!--  <script type="text/javascript" src="js/tether.min.js"></script> -->

	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>

	    <!-- MDB core JavaScript -->
	    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>