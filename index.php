<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                
    <h1>EMPLOYEE</h1>
    <table class="table">
        <tr>
            <td>EMPLOYEE CODE</td>
            <td><input id="ec" type="text" class="form-control"></td>
        </tr>
     <tr>
         <td>EMPLOYEE NAME</td>
         <td><input id="en" type="text" class="form-control"></td>
     </tr>
     <tr>
         <td>DESIGNATION</td>
         <td><input id="dn" type="text" class="form-control"></td>
     </tr>
     <tr>
         <td>ADDRESS</td>
         <td><input id="ad" type="text" class="form-control"></td>
     </tr>
     <tr>
         <td>MOBILE NO</td>
         <td><input id="mb" type="text" class="form-control"></td>
     </tr>
     <tr>
         <td>USERNAME</td>
         <td><input id="un" type="text" class="form-control"></td>
     </tr>
     <tr>
         <td>PASSWORD</td>
         <td><input id="pass" type="text" class="form-control"></td>

     </tr>

     <tr>
         <td>CONFIRM PASSWORD</td>
         <td><input id="cpass" type="text" class="form-control"></td>
     </tr>
    <tr>
        <td></td>
        <td><Button onclick="eapp()" class="btn btn-success">REGISTER</Button></td>
    </tr>
    </table>
            </div>
            <div class="colcol-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 "></div>
        </div>
    </div>
    <script>
        function eapp(){
            var getEcode=document.getElementById("ec").value
            var getEname=document.getElementById("en").value
            var getDesignation=document.getElementById("dn").value
            var getAddress=document.getElementById("ad").value
            var getMobNo=document.getElementById("mb").value
            var getUname=document.getElementById("un").value
            var getPassword=document.getElementById("pass").value
            var getCpassword=document.getElementById("cpass").value


            console.log(getEcode)
            console.log(getEname)
            console.log(getDesignation)
            console.log(getAddress)
            console.log(getMobNo)
            console.log(getUname)
            console.log(getPassword)
            console.log(getCpassword)
        }
    </script>
</body>
</html>