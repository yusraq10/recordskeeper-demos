<?php ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, target-densitydpi=device-dpi">
    <title>Faucet - Recordskeeper</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href = "css/style.css" rel="stylesheet">
   
  </head>

  <body>
  <!-- prelaoder spins here -->
  	<div class="se-pre-con"></div>
  <!-- prelaoder spins here -->

 <!-- header here  -->
   			<header id="top">
				<p id="logo">
					<img src="images/logo.png">
				</p>
				<nav id="skip">
					
				</nav>
				<nav id="nav">
					<ul>
						<label id="togglecontlabel">TestNetwork</label>
					</ul>	
				</nav>
			</header>
<!-- header ends here  -->

    <!-- Page Content -->
    <div class="container faucetcontainer">
        <!-- MultiStep Form -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Introduction</li>
                        <li>Get XRK </li>
                        <li>Capture Data</li>
                        <li>Review Data</li>
                        <li>Retrieve Data</li>
                    </ul>
                     <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Secure your data by uploading it on Recordskeeper </h2>
                            <h3 class="fs-subtitle">Let's learn How to upload your confidential  data on Recordskeeper        Blockchain in just few clicks.
                                
                            </h3>
                        <input type="button" name="next" class="next action-button width200" value="Start Learning"/>
                    </fieldset>
                    
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Get XRK Token</h2>
                            <p class="font15">
                                If you don't have XRK wallet which you need to upload data on Recordskeeper Blockchain then you can 
                                create a new XRK Wallet by clicking here.
                            </p>
                            <input type="button" name = "newUser" class="action-button newUser" value="Generate XRK Wallet" id="createkeypair"/>
                            <div class="topbot25">
                                <p class="font15">
                                   Or If you are already a registered user and already have a XRK wallet then you can simply
                                    enter your address here and continue.
                                </p>
<!--                                <h3 class="fs-subtitle">Already Registered ? Enter your address</h3>-->
                                <input type="text" name = "registered" class=" " value="" placeholder="Enter your Address" id = "registerd"/>
                            </div>
                        
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Record your Data </h2>
                        <h3 class="fs-subtitle">Secure Blockchain Network</h3>
                        <p class="font15">
                            Enter your data identifier which is associated with your data and it will be publically visible on blockchain.
                        </p>
                        <input type="text" name="idkey" placeholder="Enter an Identifier key" id="idkey"/>
                        <p class="font15">
                            Enter your data, which may be in any format like JSON, digest, hexcode, text, e.t.c.
                        </p>
                        <textarea placeholder="Enter your Data" rows="10" id="dataTextarea"></textarea>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/ id="textareaBtn" >
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Review your Data</h2>
                        <p class="font15">
                            Please Review your data carefully and enter your private key to authorize and submit the 
                            data on blockchain.
                        </p>
                        <div> 
                            <div class="row topbot25">
                                <div class="col-md-3">
                                    <p class="font15 themecolor text-left">Address</p>
                                     <p class="font15 themecolor text-left"></p>
                                     <p class="font15 themecolor text-left">
                                        Data Identifier Key
                                    </p>
                                    <p class="font15 themecolor text-left">
                                        Your Data
                                    </p>
                            
                                </div>
                                <div class="col-md-9">
                                    <p class="font15 text-left" id="reviewAddress">1LhiWkvppxvtcdZL2zjXfvUsCfSangoCY8HqeL  <span class="font15 themecolor balancespan">( Balance : 40 XRK ) </span> </p>
                                   
                                    
                                     <p class="font15 text-left" id="reviewKey">
                                        1a5XAgSR8KndTUWuiJaHFN6yLSSJmbbgoripUd
                                    </p>
                                    <p class="font15 text-left" id="reviewData">
                                        {
                                            "name":"John",
                                            "age":30,
                                            "cars":[ "Ford", "BMW", "Fiat" ]
                                            }
                                        
                                        <span class="font15 themecolor balancespan">( Transaction fee : 40 XRK ) </span>
                                    </p>
                                </div>
                            </div>
                            
                           
                                
                           
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button width200" value="Authorize"/> 
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Retreieve your Data</h2>
                        <p class="font15">
                            Please Review your data carefully and enter your private key to authorize and submit the 
                            data on blockchain.
                        </p>
                        <div> 
                            <div class="row topbot25">
                                <div class="col-md-6">
                                    <p class="font15 themecolor">Address</p>
                                    <p class="font15 ">1LhiWkvppxvtcdZL2zjXfvUsCfSangoCY8HqeL</p>
                            
                                </div>
                                <div class="col-md-6">
                                    <p class="font15 themecolor">Balance</p>
                                    <p class="font15">40 XRK</p>
                                </div>
                            </div>
                           
                             
                                
                           
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button width200" value="Authorize"/> 
                    </fieldset>
                    
                    
                </form>
            </div>
        </div>
<!-- /.MultiStep Form -->
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.all.min.js"></script>
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/faucet.js"></script>


  </body>

</html>