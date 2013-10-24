<html lang="en">
<head>

<script type="text/javascript" src="js/jquery-ui.min.js">
$(document).ready(function(){
    $('#datepicker').datepicker();

$('#datepicker').focus(function(){
    $('#datepicker').datepicker('show');
});

$('#datepicker').click(function(){
    $('#datepicker').datepicker('show');
});
//$('#ui-datepicker-div').show();
$('#datepicker').datepicker('show');
});
</script>
  <script>
$("#uvform").submit(function(e) {
    e.preventDefault();
    $.ajax({
        method : "post",
        url : this.action,
        data : jQuery(this).serialize(),
        success : function() {
            window.location = "http://www.parliamentchicago.com/";
        },
        error : function() {
            alert("Please verify that all required fields are filled in.");
        }
    });
});
</script>
</head>
<body>
<div class="entry" >

      <h3>Please fill out the reservation form</h3>
      <div class="group">
            <form id="uvfrom" action="http://parliament.urvenue.com/apis/prores.pc8" method="post"  class="reservations-form" onsubmit="MM_validateForm('resdate','','R','firstname','','R','lastname','','R','email','','RisEmail','phone','','R');return document.MM_returnValue">
            <input type="hidden" name="venueid" value="704678929">
            <input type="hidden" name="restypeid" value="704678933">
            <input type="hidden" name="ettstate" value="1">
            <input type="hidden" name="sourceid" value="110458069">
            Date:
            <input name="resdate" id="datepicker" type="text" class="subscribe-input hasDatepicker">
      Arrival Time:
            <select name="starttime" id="starttime" class="subscribe-input" >
              <option value="19:00">7:00pm</option>
              <option value="19:30">7:30pm</option>
              <option value="20:00">8:00pm</option>
              <option value="20:30">8:30pm</option>
              <option value="21:00" selected="">9:00pm</option>
              <option value="21:30">9:30pm</option>
              <option value="22:00">10:00pm</option>
              <option value="22:30pm">10:30pm</option>
              <option value="23:00pm">11:00pm</option>
              <option value="23:30pm">11:30pm</option>
              <option value="0:00">12:00am</option>
              <option value="0:30">12:30am</option>
            </select>
            <br>
      First Name:
            <input type="text" class="subscribe-input"  name="firstname">
            Last Name:
            <input type="text" class="subscribe-input"  name="lastname">
            Email:
            <input type="text" class="subscribe-input"  name="email">
            Phone:
            <input type="text" class="subscribe-input"  name="phone">
      Quantity of Female Guests:
            <select name="pfemale" id="pfemale" class="subscribe-input" >
              <option value="1" selected="">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
            <br>
            Quantity of Male Guests :
            <select name="pmale" id="pmale" class="subscribe-input" >
              <option value="1" selected="">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
            <br>
            Special Instructions or Requests:
            <textarea name="instructions" class="subscribe-input" ></textarea>
            <br>
            <button class="reservation-submit" type="submit"></button>
            </form>
            </div>
      
  

    
      <div class="clear"></div>   
    </div>
  </body>
</html>