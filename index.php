<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    
        <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>القرعة</title>
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/233a60d6f5.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">



</head>
<body style="background: #000; color: #fff;     background-size: cover;
    background-image: url(assets/img/back.png);">

<div style="    margin-top: 200px;" class="container-fluid">
    <div style="margin: auto;" class="col-7">

<form id="myform" style="direction: rtl;
    text-align: right;" method="POST">
<select style="    height: 300px;"  class="msel form-control" id="exampleFormControlSelect2" name="g[]" multiple="multiple">
  <option value="كرم">كرم</option>
  <option value="حسين">حسين</option>
  <option value="علاء">علاء</option>
    <option value="هادي">هادي</option>
  <option value="احمد انور">احمد انور</option>
    <option value="حسين علي">حسين علي</option>

  <option value="نائل">نائل</option>
  <option value="استاذ علي">استاذ علي</option>
  <option value="رائد رعد">رائد رعد</option>
  <option value="احمد بشير">احمد بشير</option>
  <option value="وليد احمد">وليد احمد</option>
  <option value="وليد محمد">وليد محمد</option>
  <option value="سلام محمد">سلام محمد</option>
  <option value="محمد علي">محمد علي</option>

</select>
      <button onsubmit="event.preventDefault()" onclick="checkinfo()" type="submit" class="btn btn-primary">Next</button>

</form>


</div>
</div>

<div style="   margin-top: -100px; " class="container-fluid">
    <div style="margin: auto;" class="col-8">

<div class="load">
  <img style="    width: 100%;" src="assets/img/balls.jpg">
</div>

<div class="show">
  <span class="namesh" style="    background-color: #fff;
    color: black;
    font-weight: 500;
    line-height: 66px;
    font-size: 22px;    position: absolute;
    left: 38%;
    top: 18%;
    width: 16.5%;
    height: 73px;
    text-align: center;">كرم</span>
  <img style="    width: 100%;" src="assets/img/show.jpg">
</div>

<div class="names" style="    width: 300px;
    margin: auto;
    height: 300px;
    background-color: rgb(255, 255, 255);
    color: rgb(0, 0, 0);
    text-align: -webkit-center;
    padding: 13px;">
  
</div>
</div>
</div>
</body>




  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>

</html>

<script type="text/javascript">
  $('#myform').submit(function () {
 return false;
});
  var i=0;
  var obj;
  var timeo;
  $('.load').hide();
  $('.show').hide();
  $('.names').hide();
  function checkinfo(){
    i=0;
     var fd = new FormData();

                var story = $('.msel').val();
               console.log(story);
                fd.append('g',story);
        // body...

        $.ajax({
                    url:"api.php",
                    type:'POST',
                     data: {s: story},
                    
                    success:function(response){
                         obj = $.parseJSON(response);

                      console.log(obj);
                      $('#myform').hide(330);
                          $('.load').show(330);
                     timeo=  setInterval(function(){
                          $('.load').hide(330); 
                           }, 3500);
                     setTimeout(showw, 3000);
                  


                     


                    }
                });
            
    }

    function showw(x) {
      // body...
      if (i<Object.keys(obj).length) {

      setInterval(function(){
      
       if (i>=Object.keys(obj).length) {
        myStopFunction();
       }else{
         $('.show').show(330);$('.namesh').html(obj[i]);i++; console.log(i); 
       }  }, 5000);

     

      
        
      }   
      

  
    }
    var detials="";
    function myStopFunction() {
      detials="";
        $('.show').hide(500);
          for(var i=0;i<Object.keys(obj).length;i++){
        detials+=`<tr>
                                <th>`+obj[i]+`</th>
                                
                              
                    </tr>`
              console.log(obj[i]['name']);
                }
        $('.names').html(detials);
        $('.names').show(500);

          clearInterval(timeo);
}
</script>
