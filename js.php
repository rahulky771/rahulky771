<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <title></title>
</head>
<body>


   <input type=""  id="para_id" name="">
   <button id="btn_use" >submit</button>

 <!-- <button id="btn_use" onclick="getValue()" >submit</button> -->


</body>


<script type="text/javascript">
    
  function getValue(){
     var para = $("#para_id").val();

     alert(para); 

  }

// $("#btn_use").on("click", function(){

//         var para = $("#para_id").val();

//      alert(para); 

   //   $(document).ready(function(){
   // alert("sumit");

// });

// // $(function(){


// // });


// })

</script>


</html>