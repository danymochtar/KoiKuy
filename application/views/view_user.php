<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Main User - Tulis Artikek</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
@import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

.page-header{
  text-align: center;    
}

/*social buttons*/
.btn-social{
  color: white;
  opacity:0.9;
}
.btn-social:hover {
  color: white;
    opacity:1;
}
.btn-facebook {
background-color: #3b5998;
opacity:0.9;
}
.btn-twitter {
background-color: #00aced;
opacity:0.9;
}
.btn-linkedin {
background-color:#0e76a8;
opacity:0.9;
}
.btn-github{
  background-color:#000000;
  opacity:0.9;
}
.btn-google {
  background-color: #c32f10;
  opacity: 0.9;
}
.btn-stackoverflow{
  background-color: #D38B28;
  opacity: 0.9;
}

/* resume stuff */

.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4 {
    margin-bottom: 10px;
    margin-top: 0;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4{
    color: #d9534f;
}

.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}

/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}

.resume-heading .social-btns{
  margin-top:15px;
}
.resume-heading .social-btns i.fa{
  margin-left:-5px;
}



@media (max-width: 992px) {
  .resume-heading .social-btn-holder{
    padding:5px;
  }
}


/* skill meter in resume. copy pasted from http://bootsnipp.com/snippets/featured/progress-bar-meter */

.progress-bar {
    text-align: left;
	white-space: nowrap;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	cursor: pointer;
}

.progress-bar > .progress-type {
	padding-left: 10px;
}

.progress-meter {
	min-height: 15px;
	border-bottom: 2px solid rgb(160, 160, 160);
  margin-bottom: 15px;
}

.progress-meter > .meter {
	position: relative;
	float: left;
	min-height: 15px;
	border-width: 0px;
	border-style: solid;
	border-color: rgb(160, 160, 160);
}

.progress-meter > .meter-left {
	border-left-width: 2px;
}

.progress-meter > .meter-right {
	float: right;
	border-right-width: 2px;
}

.progress-meter > .meter-right:last-child {
	border-left-width: 2px;
}

.progress-meter > .meter > .meter-text {
	position: absolute;
	display: inline-block;
	bottom: -20px;
	width: 100%;
	font-weight: 700;
	font-size: 0.85em;
	color: rgb(160, 160, 160);
	text-align: left;
}

.progress-meter > .meter.meter-right > .meter-text {
	text-align: right;
}


    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row info" style="text-align:center;">
    <div class="col-xs-12 alert alert-info">
        The skills meter from <a class="alert-link" href="http://bootsnipp.com/snippets/featured/progress-bar-meter">here</a> is used in this design. 
        Feel free to remove this div from the design.
    </div>
</div>

<div class="resume">
    <header class="page-header">
    <h1 class="page-title">Halo Mas Moh!</h1>
    <small> <i class="fa fa-clock-o"></i> Akitivitas terakhir: <time>10 menit yang lalu</time></small>
  </header>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading resume-heading">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-12 col-sm-4">
              <figure>
                <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
              </figure>
              
              <div class="row">
                <div class="col-xs-12 social-btns">
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-google">
                        <i class="fa fa-google"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-facebook">
                        <i class="fa fa-facebook"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-twitter">
                        <i class="fa fa-twitter"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-linkedin">
                        <i class="fa fa-linkedin"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-github">
                        <i class="fa fa-github"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-stackoverflow">
                        <i class="fa fa-stack-overflow"></i> </a>
                    </div>
                  
                </div>
              </div>
              
            </div>

            <div class="col-xs-12 col-sm-8">
              <ul class="list-group">
                <li class="list-group-item">John Doe</li>
                <li class="list-group-item">Software Engineer</li>
                <li class="list-group-item">Google Inc. </li>
                <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
                <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Tentang Anda</h4>
        <p>
         Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
         te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
        </p>
        <p>
            Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
            Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.

        </p>
        
        <a href="#" class="btn btn-info" role="button">Edit..</a>
      </div>
    

      <div class="bs-callout bs-callout-danger">
        <h4>Riwayat Artikel Anda</h4>
        <ul class="list-group">
          <a class="list-group-item inactive-link" href="#">
			  
			  
            
			  
			  <?php
			  foreach($hasil as $index => $array)
{
   
    
    //echo $hasil[$index]['tgl_artikel'];
    
    echo '
    
    <a class="list-group-item inactive-link" href="#">
    <h4 class="list-group-item-heading">
            '.  $hasil[$index]['nama_artikel'] .'
            </h4>
            <p class="list-group-item-text">
              '.$hasil[$index]['isi_artikel'].'
            </p>
          <p>
          
          <a href="'. base_url().'index.php/akun/User_edit_artikel?id='.$index.'" class="btn btn-info" role="button">Edit..</a>
          </p>
          </a>';
    
}
		
			  ?>
			  
            <p></p>
          </a>
        </ul>
        <a href="<?php echo base_url().'index.php/akun/User_buat_artikel'?>" class="btn btn-info" role="button">New Article</a>
        
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Forum anda</h4>
        <ul class="list-group">
          <li class="list-group-item"> [THREAD] : {wkwkw} </li>
          <li class="list-group-item"> [THREAD] : {wkwkw} </li>
          <li class="list-group-item"> [THREAD] : {wkwkw} </li>
          


        </ul>
        <a href="#" class="btn btn-info" role="button">Buka forum..</a>
      </div>
      
    </div>

  </div>
</div>
    
</div>

</div>
<script type="text/javascript">

</script>
</body>
</html>
