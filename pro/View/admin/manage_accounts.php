<?php
require_once 'header.php';
require_once '../../Controller/admin/accountHandler.php';
require_once '../../Controller/database.php';
$account_handler = new AccountHandler;
$success_message = ''; 


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
            <form id="contact-form" action="manage_accounts.php" method="post">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="firstname" placeholder="First name..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="lastname"  placeholder="Last name..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="address"  placeholder="Address ..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="date" name="bdate" required="" >
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="password" name="password" id="email"  placeholder="Password..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="phonenumber" id="email"  placeholder="Phone Number..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="jobtitle" id="email"  placeholder="Job Title..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                <select class="form-select mb-3"
		          name="role" >
              <option value="admin">Admin</option>
              <option selected value="student">student</option>
			        <option value="alumni">Alumni</option>
              <option value="staff">Staff</option>
              <option value="support">Support</option>   
                </select>              
                </div>         
              </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="add" id="form-submit" class="orange-button">add Account</button>
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


  
  
  
  <div class="container">
  <div class="container search-container">
  <form action="" method="get">
  <div class="search-bar">
    <input type="text" name="admin_search" value="<?php if(isset($_GET['admin_search'])){echo $_GET['admin_search'];}   ?>" class="search-input" placeholder="Search...">
    <button class="search-button" type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>

  </div>
  <table>  
    <h3>Admin</h3>
                          <tr>  
                               <td >id</td>  
                               <td >First Name</td>  
                               <td >Last Name</td>  
                               <td >Email</td>  
                               <td >Password</td>  
                               <td >Option</td>
                          </tr>  
                          <?php  
                           $account_handler->searchForAdminandselect();
                          ?>  
                     </table>
  </div>
  <div class="container">
  <div class="container search-container">
  <form action="" method="get">
  <div class="search-bar">
    <input type="text" name="student_search" value="<?php if(isset($_GET['student_search'])){echo $_GET['student_search'];}   ?>" class="search-input" placeholder="Search...">
    <button class="search-button" type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>
  </div>
  <table>  
    <h3>Student</h3>
                          <tr>  
                               <td >id</td>  
                               <td >First Name</td>  
                               <td >Last Name</td>  
                               <td >Email</td>
                               <td >Address</td>  
                               <td >BirthDate</td>  
                               <td >Password</td>  
                               <td >PhoneNumber</td>  
                               <td >JobTitle</td>  
                               <td >Option</td>  
                               <!-- <td >Delete</td>  -->
                          </tr>  
                          <?php  
                          $account_handler->searchForStudentandselect();
                          ?>  
                     </table>
  </div>
  <div class="container">
  <div class="container search-container">
  <form action="" method="get">
  <div class="search-bar">
    <input type="text" name="alumni_search" value="<?php if(isset($_GET['alumni_search'])){echo $_GET['alumni_search'];}   ?>" class="search-input" placeholder="Search...">
    <button class="search-button" type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>  
  </div>
  <table>  
    <h3>Alumni</h3>
                          <tr>  
                               <td >id</td>  
                               <td >First Name</td>  
                               <td >Last Name</td>  
                               <td >Email</td>
                               <td >Address</td>  
                               <td >BirthDate</td>  
                               <td >Password</td>  
                               <td >PhoneNumber</td>  
                               <td >JobTitle</td>  
                               <td >Option</td>  
                               <!-- <td >Delete</td>  -->
                          </tr>  
                          <?php  
                          $account_handler->searchForAlumniandselect(); 
                          ?>  
                     </table>
  </div>
  <div class="container">
  <div class="container search-container">
  <form action="" method="get">
  <div class="search-bar">
    <input type="text" name="staff_search" value="<?php if(isset($_GET['staff_search'])){echo $_GET['staff_search'];}   ?>" class="search-input" placeholder="Search...">
    <button class="search-button" type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>
  </div>
  <table>  
    <h3>Staff</h3>
                          <tr>  
                               <td >id</td>  
                               <td >First Name</td>  
                               <td >Last Name</td>  
                               <td >Email</td>
                               <td >Address</td>  
                               <td >BirthDate</td>  
                               <td >Password</td>  
                               <td >PhoneNumber</td>
                               <td >Option</td>  
                               <!-- <td >Delete</td>  -->
                          </tr>  
                          <?php  
                          $account_handler->searchForStaffandselect();
                          ?>  
                     </table>
  </div>
  <div class="container">
  <div class="container search-container">
  <form action="" method="get">
  <div class="search-bar">
    <input type="text" name="support_search" value="<?php if(isset($_GET['support_search'])){echo $_GET['support_search'];}   ?>" class="search-input" placeholder="Search...">
    <button class="search-button" type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>
  </div>
  <table>  
    <h3>Support</h3>
                          <tr>  
                               <td >id</td>  
                               <td >First Name</td>  
                               <td >Last Name</td>  
                               <td >Email</td>
                               <td >Address</td>  
                               <td >BirthDate</td>  
                               <td >Password</td>  
                               <td >PhoneNumber</td>  
                               <td >JobTitle</td>  
                               <td >Option</td>  
                               <!-- <td >Delete</td>  -->
                          </tr>  
                          <?php  
                          $account_handler->searchForSupportandselect();
                          ?>  
                     </table>
  </div>



 <!-- File input -->
 <div class="card">
                   





</body>

 





<?php require_once 'footer.php'; ?> 
</body>
</html>
 