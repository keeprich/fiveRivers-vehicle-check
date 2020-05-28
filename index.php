<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle check App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Scroll indicator -->

<div class="header">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>

<!-- Scroll indicator -->

<div class="content">

    <section class="sectionOne">
<h3 class="text-center">Please complet all Sections</h3>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
     <h1>form1</h1>
     <form>

     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <!-- <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div> -->
  <!-- <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div> -->

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
  </fieldset>

</form>
    </div>
    <div class="col-sm-6">
<h1>form2</h1>

<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

<!--  -->
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
<!--  -->

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  
  <!-- <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div> -->
  <!-- <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div> -->
</form>

    </div>
  </div>
</div>
</section>
<br> 
<hr>
<br> 
<section class="sectionTwo">

<div class="container">
<h3>MANDATORY</h3>
<h5>Please circle PASS or FAIL for all items (if FAIL, please specify)</h5>
<h5 class="operat">Operator</h5>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2 ">
    
<!--  -->
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
<!--  -->

    </div>
    <div class="col-sm-2">
     <p>Less than 5</p>
    </div>
    <div class="col-sm-2">
    <p>More than 5</p>
    </div>
    <div class="col-sm-3">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-3">
    <p>Comments:</p>
    </div>

  </div>
</div>

<br>
<div class="container">
<h5 class="operat">Vehicle: Safety Features Must be Present and Demonstrated as Working Correctly.</h5>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
</section>
<!--  -->

<section class="sectionThree">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 ?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
</section>
<!--  -->
<br>

<section class="sectionFour">

<div class="container">
<h5 class="operat">Driver (Not part of the gate checks for Transport).</h5>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 ?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
<!--  -->
<div  class="text-center">
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
</div>
<!--  -->

    </div>
     
    <div class="col-sm-4">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-4">
    <p>Comments:</p>
    </div>

  </div>
</div>


</div>
</div>
</div>

</section>

<section>

<div class="container">
<h3>MANDATORY</h3>
<h5>Please circle PASS or FAIL for all items (if FAIL, please specify)</h5>
<h5 class="operat">Operator</h5>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2 ">
    
<!--  -->
<span>
<small>Fail</small>
</span>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<span>
<small>Pass</small>
</span>
<!--  -->

    </div>
    <div class="col-sm-2">
     <p>Less than 5</p>
    </div>
    <div class="col-sm-2">
    <p>More than 5</p>
    </div>
    <div class="col-sm-3">
    <p>how many times have you visited a HS2 site?</p>
    </div>
    <div class="col-sm-3">
    <p>Comments:</p>
    </div>

  </div>
</div>

<br>
 

   <!--RANGE SLIDER  -->
<div class="container">
   <div class="slidecontainer1">
  <input type="range" min="1" max="3" value="50" class="slider1" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>
</div>
   <!--RANGE SLIDER  -->

</section>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="scripts.js"></script>

</body>
</html>