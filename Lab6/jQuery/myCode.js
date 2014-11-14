$(document).ready(function(){
   $('#searchExpr').keyup(function () {
     var t = this;
     $("#TxtHint").load("employeeSearcher.php?searchExpr=" + t.value);
   });
 });



