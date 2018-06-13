	<!-- Footer -->
			<footer id="footer" class="sm-padding bg-dark">

				<!-- Container -->
				<div class="container">

<!-- Row -->
					<div class="row">

						<div class="col-md-4">

							
							<p>

								HEADQUARTERS<br>
								Gateway Place North, Suite 102<br>
13751 Lake City Way NE<br>
Seattle, Washington 98125<br>

Phone: (206) 501-4496<br>
E-mail: s.ikbal@optimapm.com</p>

						</div>

						<div class="col-md-4">

							
<p>

								ASIA BRANCH OFFICE<br>
								House#41, Road#35/A<br>
Suite 05, Gulshan-2<br>
Dhaka-1212, Bangladesh<br>

Phone: +880-173-049-5516<br>
E-mail: a.ikbal@optimapm.com</p>

						</div>

<div class="col-md-4">
	
	<button class="main-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Subscribe</button>
	<br>

		<a href="contact.php" class="main-btn">Contact Us</a>


</div>
					</div>
					<!-- /Row -->


					<!-- Row -->
					<div class="row">

						<div class="col-md-12">

							

							<!-- footer copyright -->
							<div class="footer-copyright"><br><br>
								<p>Copyright © 2018. All Rights Reserved. </p>
							</div>
							<!-- /footer copyright -->

						</div>

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</footer>




<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
.buttonSubscribe {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.buttonSubscribe :hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 200px;
}

/* Modal Content/Box */
.modal2-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

			<div id="id01" class="modal2">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal2-content" action="subscribe.php" method="post">
    <div class="container">
      <h2>Subscribe</h2>
    
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" title="email" required>

     
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="buttonSubscribe cancelbtn">Cancel</button>
        <button type="submit" class="buttonSubscribe signupbtn">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>