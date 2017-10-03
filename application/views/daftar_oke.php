<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
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
<body>

<h2>Pendaftaran Koi</h2>

<form role="form" action="<?php echo base_url().'index.php/daftar_sekarang/daftar_post'?>"  style="border:1px solid #ccc" method="post">
  <div class="container">
	  
    <label><b>Nama Anda</b></label>
    <input type="text" placeholder="Silahkan masukkan nama anda" name="nama_user" required>	  
    
    <label><b>Email</b></label>
    <input type="text" placeholder="Email anda" name="email" required>	  

	  
    <label><b>Username</b></label>
    <input type="text" placeholder="Username anda.." name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Silahkan masukkan password" name="psw" required>

    
    
    

    <div class="clearfix">
      
      <button type="submit" class="signupbtn">Daftar</button>
    </div>
  </div>
</form>

</body>
</html>
