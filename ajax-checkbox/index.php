<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>dynamic dependent select-box</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery.js" type="text/javascript"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
  
   
</head>


<body>

<div class="main-heading my-3">
<div class="container">
<div class="row">
  <div class="col-lg-6">
    <h2>checkbox ajax</h2>
    <form id="student_form">
      <table class="table">
        <tr>
          <td> Name : </td>
          <td> <input type="text" name="first_name" class="form-control" id="first_name"></td>
            </tr>
            <tr>
             <td>Language : </td>
             <td>
             <div class="from-check">
             <input type="checkbox" class="lang form-check-input" value="HTML"> HTML </br>
             <input type="checkbox" class="lang form-check-input" value="CSS"> CSS </br>
             <input type="checkbox" class="lang form-check-input" value="JAVASCRIPT"> JAVASCRIPT </br>
             <input type="checkbox" class="lang form-check-input" value="jquery"> jquery </br>
             <input type="checkbox" class="lang form-check-input" value="Ajex"> Ajex </br>
             <input type="checkbox" class="lang form-check-input" value="PHP"> PHP </br>
             <input type="checkbox" class="lang form-check-input" value="SQL"> SQL </br>
             </div>
            </td>
            </tr>

            <tr>
            <td> <button type="submit" value="" class="btn btn-primary" id="submit-btn">Submit</button></td>
            </tr>
        
 
      </table>
    </form>

  </div>
</div>
</div>


</div>





<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
   $("#student_form").submit(function(e) {
    e.preventDefault();

    var fname = $('#first_name').val();
    var language = [];

    $(".lang").each(function() {
      if($(this).is(":checked")) {
        language.push($(this).val());
      }
    });
    language = language.toString();
      if(fname !='' && language.length !== 0) {
          $.ajax({
          url : "insert-data.php",
          type : "POST",
          data : {name : fname, language : language},
          success : function(data) {
            $("#student_form").trigger("reset");
            alert(data);
          }
          });
      }else {
         alert("Please fill the required from fields");
      }

   });



});

</script>

</body>
</html>