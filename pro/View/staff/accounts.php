<?php
     
     require_once 'header.php';
     require_once "../../Model/staff/alumni.php";
     require_once "../../Controller/staff/accountHandler.php";
       $new_alumni = new Alumni;
       $handler =new AlumniHandler();


    if( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['bdate']) && isset($_POST['password']) && isset($_POST['phonenumber']) && isset($_POST['jobtitle'])){
      if( !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['bdate']) && !empty($_POST['password']) && !empty($_POST['phonenumber']) && !empty($_POST['jobtitle'])){


            $new_alumni->set_first_name(htmlspecialchars($_POST['firstname']));
            $new_alumni->set_last_name(htmlspecialchars($_POST['lastname']));
            $new_alumni->set_email($_POST['email']);
            $new_alumni->set_address(htmlspecialchars($_POST['address']));
            $new_alumni->set_birth_date(htmlspecialchars($_POST['bdate']));
            $new_alumni->set_password(htmlspecialchars($_POST['password']));
            $new_alumni->set_phone(htmlspecialchars($_POST['phonenumber']));
            $new_alumni->set_job_title(htmlspecialchars($_POST['jobtitle']));
            $handler->add_alumni($new_alumni);
    

      }

    }

      

  ?>



<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :Manage Accounts</title>
  </head>
  <body>



        <!----form --->
  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">

        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Manage Accounts</h6>
            <h2>Alumni are the backbone of every educational institution, and managing their accounts is key to maintaining strong relationships and building a thriving community.</h2>
            <p>Managing accounts involves keeping track of financial information related to 
                personal or business finances. This includes organizing income and expenses, monitoring cash flow, tracking investments, and staying on top of bills and payments. Effective account management helps individuals and businesses make informed decisions about their finances, reduce stress and anxiety related to money, and achieve long-term financial stability.


.</p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">

           

    

                <!---->
                 <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form">First Name:</label>
                    <input type="text" name="firstname"  required="">
                  </fieldset>
                </div>
                 <!---->
                <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form">Last name:</label>
                    <input type="text" name="lastname" id= "title"  required="">
                  </fieldset>
                </div>

                 <!---->
                <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form" class="label_form">Email:</label>
                    <input type="text" name="email"  pattern="[^ @]*@[^ @]*" placeholder="as ams@gmail.com" required="">
                  </fieldset>
                </div>

                <!---->
                <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form" class="label_form">Address:</label>
                    <input type="text" name="address"   required="">
                  </fieldset>
                </div>

                <!---->
                <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form" class="label_form">Birth Date:</label>
                    <input type="date" name="bdate" required="" >
                  </fieldset>
                </div>

                <!---->
                <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form" class="label_form">Password:</label>
                    <input type="password" name="password"    required="">
                  </fieldset>
                </div>

                <!---->
                <div class="col-lg-12">
                  <fieldset>
                  <label class="label_form" class="label_form">Phone Number:</label>
                    <input type="text" name="phonenumber"    required="">
                  </fieldset>
                </div>

                <!---->
                <div class="col-lg-12">
                  <fieldset>
                  <label class="label_form" class="label_form">Job Title:</label>
                    <input type="text" name="jobtitle"  required="">
                  </fieldset>
                </div>

                <!---->

                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="add" value="add" id="form-submit" class="orange-button">add Alumni</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!----End form -->

</body>

<?php require_once 'footer.php'; ?> 
</body>
</html>