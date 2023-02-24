
<html>
    <head>
        <title>form</title>
        <style type="text/css">
            *{
    margin:0;
    padding: 0;

}
        body{
            background-image:url("bg.jpg");
            background-position:center;
            background-size:contain;
            font-family:sans-serif;
            margin-top: 40px;


     } 
   .Student{
      width: 800px;
      background-color: rgb(0,0,0,0.6);
      margin: auto;
      color: #FFFFFF;
      padding: 10px 0px 10px 0px;
      text-align: center;
      border-radius: 15px 15px 0px 0px; 
   }
   .main{
       background-color: rgb(0,0,0,0.3);
       width: 800px;
       margin: auto;

   }
    form{
        padding: 20px;
    }
    #name{
        width: 100%;
        height: 100px;
    }
    .Name{
        margin-left: 25px;
        margin-top: 30px;
        width: 125px;
        color: white;
        font-size: 16px;
        font-weight: 600;
    }
    .firstname{
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        font-weight: 500;
    }
    .lastname{
        position: relative;
        left: 417px;
        top: -80px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555; 
        font-weight: 500;
    }
    .firstlabel{
        position: relative;
        color: #e5e5e5;
        text-transform:capitalize ;
        font-size: 14px;
        left: 203px;
        top: -45px;
    }
    .lastlabel{
        position: relative;
        color: #e5e5e5;
        text-transform:capitalize ;
        font-size: 14px;
        left: 175px;
        top: -45px;
    }
    .index{
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 250px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    .option{
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        height: 40px;
        width: 250px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
        overflow: hidden;
    }
    .code{
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 250px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    .reason{
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 250px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    .inp{
        position: relative;
        left: 230px;
        top: -37px;
        line-height: 40px;
        width: 250px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555; 
    }
    .subbtn{
        position: relative;
        left: 260px;
        top: 10px;
        line-height: 30px;
        width: 100px;
        border-radius: 10px;
        padding: 0 22px;
        font-size: 15px;
        color:rgb(12, 12, 12);
        background-color: #0ae0c4;
    
    }
    .subbtn:hover{
        background-color: #5390F5}

    .cta{
        position: relative;
        left: 25px;
        top: 20px;
        width: 250px;
        padding: 0 22px;
        font-size: 16px;
        background-color: antiquewhite;
     
    }
        </style>

    </head>
    <body>
      <nav><a href="#" class="btn-area"></a></nav>
<div class="Student Details"><h1>Student Details</h></div>
<div class="main">
<form > 
    <div id="name">
        <h2 class="Name">Name</h2>
        <input class="FirstName" type="text" name="First_Name"><br>
        <label class="Firstlabel">First Name</label>
        <input class="lastname" type="text" name="Last_Name">
        <label class="lastlabel">Last Name</label>
    </div>

    <h2 class="name">Index Number</h2>
    <input class="index no" type="text" name="index no">
    
    <h2 class="name">Intake</h2>
    <select class="option" name="Intake">
    <option disabled="disabled" selelcted="selelcted">--choose option--</option>
    <option>35</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    </select>
    
    <h2 class="name">Phone Number</h2>
    <input class="code" type="text" name="phone">

    <h2 class="name">Reason</h2>
    <input class="reason" type="text" name="raeson"> 

    <input type="file" name="avatar" class="inp"><br>
    <input type="submit" name="submit" value="SUBMIT" class="subbtn"><br>
    <br>
    <a href="#" type="button" class="cta"> STAFF LOGIN</a>


</form>


</div>

    </body>
</html>