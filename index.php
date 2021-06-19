<html>

<head>
<title>Form 2</title>
<link /> 
<meta charset="utf-8" />  
</head>

<body>
  <form action="phpL21.php" method="post">

    <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <div class="form">
           <div class="inputfield" >
              <label>First Name  <small> *required</small> </label>
              <input type="text" name ="fname" class="input" placeholder="Enter your First Name">
           </div>  
            <div class="inputfield" >
              <label>Last Name <small> *required</small></label> 
              <input type="text" name ="lname"  class="input" placeholder="Enter your Last Name">
           </div>  
           
         <div class="inputfield">
            <label>Country</label>
            <div class="custom_select">
              <select name="country">
                <option value="egypt">egypt</option>
                <option value="sudan">sudan</option>
                <option value="UAE">UAE</option>
                <option value="libaya">libaya</option>
                <option value="turkey">turkey</option>
  
              </select>
            </div>
         </div> <br>
  
            <div class="inputfield">
              <label>Gender</label>
              <div class="custom_select">
                <select name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
           </div> 
        
          
          <div class="inputfield" >
              <label>Address</label>
              <textarea class="textarea" name="address"></textarea>
           </div> <br>

           <fieldset >
            <legend>Skills:</legend>
            <input type="checkbox" name="php" id="php" value="PHP">
            <label for="php">PHP</label><br>


            <input type="checkbox" name="j2se" id="j2se" value="J2SE">
            <label for="j2se">J2SE</label><br>


            <input type="checkbox" name="mysql" id="mysql" value="MYSQL">
            <label for="mysql">MYSQL</label><br>

            <input type="checkbox" name="postgree" id="postgree" value="PostgreeSQL">
            <label for="postgree">PostgreeSQL</label><br>

        </fieldset><br>

        

   
   
 <div class="inputfield" >
    <label>Username  <small> *required</small> </label>
    <input type="text" name="username" class="input" placeholder="Enter your User Name">
 </div>  

 <div class="inputfield" >
    <label>Password <small> *required</small></label>
    <input type="password" name="password" class="input">
 </div>  

 <div class="inputfield" >
    <label>Department  <small> *required</small> </label>
    <input type="text" name="dept" class="input" placeholder="Enter your Department">
 </div>  
          <div class="inputfield">
            <input type="submit" value="Submit" class="btn">
          </div>
          <div class="inputfield">
            <input type="reset" value="Reset" class="btn">
          </div>
        </div>
    </div>
  </form>

</body>
</html>