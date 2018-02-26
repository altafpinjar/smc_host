<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
    <style type="text/css">
      .btnsmc {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
.danger {
  border-color: #f44336;
  color: red;
}







    </style>
  </head>
  <body >
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
  <br>
  <br>
 <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <img src="images/money.png">
      </div>
      <div class="col-lg-8 text-justify">
        <h2>Know more about Editorail</h2>
       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
       
        <a href="e-upload.php"><button type="button" class="btn btn-outline-danger btnsmc" style="float: right;">Try Now</button></a>
      </div>
    </div><br>
    <div class="row">
      
      <div class="col-lg-8 text-justify">
        <h2>Know more about Selling your Images</h2>
       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and crambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
         <a href="s-upload.php"><button type="button" class="btn btn-outline-danger btnsmc">Try Now</button></a>
      </div>
      <div class="col-lg-4">
        <img src="images/money3.png" >
      </div>
    </div><br>
        <div class="row">
      <div class="col-lg-4">
        <img src="images/think.png" style="height: 230px; width: 250px;">
      </div>
      <div class="col-lg-8 text-justify">
        <h2>Know more about Uploading</h2>
       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
         <a href="u-upload.php"><button type="button" class="btn btn-outline-danger btnsmc" style="float: right;">Try Now</button></a>
      </div>
    </div>

  </div>



    
<br>

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>