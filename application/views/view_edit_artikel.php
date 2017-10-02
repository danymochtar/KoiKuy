<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah artikel baru...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit artikelnya...</h2>
  <form role="form" action="<?php echo base_url().'index.php/akun/user_edit_artikel_post'?>"   method="post">
    <div class="form-group">
      <label for="email">Nama Artikel:</label>
      <input type="text" class="form-control" id="email" placeholder="Nama artikel anda.." name="nama_artikel" value="<?php echo $artikel[0]['nama_artikel']; ?>">
    </div>
    
     <div class="form-group">
  <label for="comment">Isi:</label>
  <textarea class="form-control" rows="5" id="comment" name="isi_artikel" ><?php echo $artikel[0]['isi_artikel']; ?></textarea>
</div> 
    
    <input type="hidden" class="form-control" id="email" placeholder="Nama artikel anda.." name="tgl_artikel" value="tanggalan">
    
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
