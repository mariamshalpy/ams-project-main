
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

 	<link rel="stylesheet" type="text/css" href="../View/signup.css">
	<title></title>
</head>
<body>


<section class="background-radial-gradient overflow-hidden">
  

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          The best offer <br />
          <span style="color: hsl(218, 81%, 75%)">for your business</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form  method="post" action="signupcheck.php">
              <h1>Sign Up</h1><br>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="name" required  class="form-control" >
                    <label class="form-label"  for="name">Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="address" required  class="form-control" >
                    <label class="form-label" for="address">address</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" name="email" required  class="form-control" >
                <label class="form-label" for="email">Email address</label>
              </div>

              <!-- Password input -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="date" name="bdate" required  class="form-control" >
                    <label class="form-label" for="bdate">Date of birth</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="password" required  class="form-control" >
                    <label class="form-label" for="password">Password</label>
                  </div>
                </div>
              </div>
              
				<div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="phonenumber" required  class="form-control" >
                    <label class="form-label" for="phonenumber">Phone Number</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="student">student</option>
			  <option value="alumni">Alumni</option>
		  </select>
                    <label class="form-label" for="role"></label>
                  </div>
                </div>
              </div>
              <div class="form-outline mb-4">
                <input type="text" required placeholder="Job title" name="jobtitle" class="form-control" >
                <label class="form-label" for="jobtitle">Job Title</label>
              </div>
              

              <!-- Submit button -->
              <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign up">
                
              <p>Already Registered ?<a href="./login.php">Login Here</a></p>

                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block --></body>
</html>
