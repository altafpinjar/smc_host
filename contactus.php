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
  </head>
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
   <div class="Maincontainer">

 <div class="col-md-12 container-fluid m-0 p-0 ">
  <div id="ad-tpadding">
 <section id="ad-imgheader1" class="header lg-12">
<div class="l-container-center l-container--tiny">
<div class="l-lg-12">
<h1 id="ad-mainheading" class="hero-header__title">Contact Us</h1>
<h3 class="hero-header__subtitle"></h3>
</div>
</div>
</section>
</div>
</div>


<div class="container-fluid">
  <div class="row">
  <div class="col-md-2">
    <!-- this is left2 -->
  </div>
  <div id="ad-tpaddingtop" class="col-md-5">
     <!--  this is 6grid -->

 <h3>Contact Customer Support</h3><hr>
        <p>Your question may already be answered in our Support Center.<br> If not, send us a message:</p>
      
       <form>
       
          <div class="col-md-10 multi-horizontal" data-for="name" >
                                <div class="form-group ">
                                    <label  class="form-control-label">Name</label>
                                    <input id="ad-forms"  type="text" class="form-control" name="name" data-form-field="Name" required="">
                                </div>
                            </div>
                             <div class="col-md-10 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4t">Email</label>
                                    <input id="ad-forms"  type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-10 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label">Phone</label>
                                    <input id="ad-forms" type="tel" class="form-control" name="phone" data-form-field="Phone">
                                </div>
                            </div>
                            <div class="col-md-10 multi-horizontal" data-for="form-group">
    <label  for="exampleFormControlSelect1">How can we help you?</label>
    <select id="ad-forms" class="form-control" id="exampleFormControlSelect1">
      <option>None</option>
      <option>I have questions about plan and priceing</option>
      <option>I have questions about payment and invoice</option>
      <option>I am having technical difficulties</option>
      <option>I would like to cancel my current plan</option>
    </select>
  </div><br>
                <div class="col-10 multi-horizontal" data-for="message">
                            <label class="form-control-label">Message</label>
                            <textarea id="ad-forms" type="text" class="form-control " name="message" rows="7" data-form-field="Message"></textarea>
                        
                        <div class="container" style="padding-top: 10px;">

                        <span  class="input-group-btn">
                            <button  id="ad-forms" href="#" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </span>            

        </div>
        </div>
       </form>


  </div>
  <div class="col-3-md" id="ad-tpaddingtop"> 
   <!--  2 grid -->
        
          <div class="container-fluid">
            <div class="h" id="ad-paddingdiv">
            <b>  <h3>Phone Support</h3>
              <hr>
              <br>
              <p>phone number</p></b>
              <p>084958 13777</p>
             <b> <p><b>E-Mail</b></p></b>
              <p>sellmyclick@gmail.com</p>
              <hr>
              <h5><b>Address:</b></h5>
              <p>S No.158, Near Ashoka gardan., Dharwad Rd, Haliyal, Karnataka 581329</p>
<h5>Hours: Open 24 hours</h5>
  <br>
  <hr>
 
    <h6><b>Social Support</b></h6>


            </div>
          </div>
          <div class="container-fluid">
    <table>
      <tr>
        <td>
       <a class="btn btn-social-icon btn-twitter">
   <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
  </a></td>
   <td>
       <a class="btn btn-social-icon btn-twitter">
   <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
  </a></td>
</tr>
</table>
</div>
<hr>

<div class="col-md-12">
  <b>Jobs:</b>
  <br>
  <a href="#">See Available Positions</a>
</div>

    
  </div>

  <div class="col-md-2">
    <!-- right -->
  </div>
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