<?php

    include 'connect.php';

    if(!((isset($_SESSION['user']['terms'])) && (isset($_SESSION['user']['nurse_re_1'])) && (isset($_SESSION['user']['rn_Cert'])))){
        header('location:conditions.php');
    }

?>
    
                                
<!DOCTYPE html>
<html>
<head>
    <title>Nurse Registration </title>
    <link href="../logo.jpeg" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 

      <script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"> </script> 
  
    <script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"> </script> 
  
    <link href= "http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css"
        rel="stylesheet" type="text/css" /> 


    <style type="text/css">
         li,label{
          color: #2f2f2f;
          font-family: "Roboto", sans-serif;

        }
         input{
            color: black;
        }
        form{
          box-shadow: 5px 5px 8px rgba(63,187,192,0.7);
        }

        h3{
            position: relative;
            color:white;
            font-size: 33px;
            font-family: "Roboto", sans-serif;
            padding-bottom: 10%;
        }

        .box{
            box-shadow: -500px -500px 8px rgba(63,187,192,0.7);
            padding: 3px;
            margin-top: 10px;
        }
  </style>

</head>
<body>

    <div class="testbox">
        <form method="post" enctype="multipart/form-data">
            <div class="banner">
                <h3>Experience Details</h3>
            </div>
            <br />
            <fieldset id="dynamic_exp">

                <div class="colums">
                    <div class="item">
                        <label for="donation">Hospital Name<span>*</span></label>
                        <input type="text" name="hos_name[]" placeholder="Hospital Name" class="form-control name_list" required />
                    </div>

                    <div class="item">
                        <label for="donation">Job Title<span>*</span></label>
                        <input type="text" name="job[]" placeholder="Designation" class="form-control name_list" required />
                    </div>
                </div>

                  <div class="colums">
                        <!-- <div class="item">
                            <label for="certificate">From<span>*</span><label>
                            <input type="date" class="form-control" name="from[]" id="fromdate" required onfocusout="fromFun(this.value,'years')">
                        </div>

                        <div class="item">
                            <label for="certificate">To<span>*</span><label>
                            <input type="date" class="form-control" name="To[]" id="todate" required onfocusout="toFun(this.value,'years')">
                        </div>
                        <label ><span id="years"></span><label> -->


                        <div class="form-group">
                            <label>From</label>
                            <input type="text" class="form-control" id="from" style="color:black;">
                        </div>

                        <div class="form-group">
                            <label>To</label>
                            <input type="text" class="form-control" id="to"  style="color:black;">
                        </div>
                        <label ><span id="years"> </span><label>

                 </div>

                <div class="colums">
                    <div class="colums">
                        <div class="item">
                            <label for="certificate">Hospital Address<span>*</span><label>
                             <textarea id="donation" rows="3" style="resize: none; color:black;"  maxlength="300" required  name="add[]" id="" required></textarea>
                        </div>
                    </div>
                    <div class="item">
                        <label for="certificate">Experience Letter<span>*</span><label>
                        <input type="file" class="fileToUpload form-control" name="exp_let[]" id="" accept="application/pdf" required>
                    </div>
                </div>

            </fieldset>

            <div class="btn-block">
                 <button type="button" name="add" id="add" class="btn" style="background-color:#3fbbc0; color:white;">Other Certificates</button> 
                <button type="submit" id="bio_btn" class="btn" style="background-color:#3fbbc0; color:white;" disabled name="goto_bio" formaction="bio.php">Bio</button>
                <button type="submit" name="sub_exp" class="btn" style="background-color:#3fbbc0; color:white;" id="done_btn" disabled>Done</button>
            </div>
        </form>
    </div>

    <?php

        if(isset($_POST['sub_exp']) || (isset($_POST['goto_bio']))){
               $_SESSION['user']['exp']=$_POST;
               $_SESSION['user']['exp']['letter']=$_FILES['exp_let'];
                if(isset($_POST['sub_exp']))
                    header('location:data.php');
                else{
                    header('location:bio.php');
                }
        }

    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    
    $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  

           $('#dynamic_exp').append(` <div class="box" id="col`+ i +`" style="box-shadow: 10px 5px 8px rgba(63,187,192,0.7);padding: 3px;"><span>Experience `+i+` : </span><div class="colums"><div class="item"> <label for="donation">Hospital Name<span>*</span></label><input type="text" name="hos_name[]" placeholder="Hospital Name" class="form-control name_list" required /></div><div class="item"><label for="donation">Job Title<span>*</span></label><input type="text" name="job[]" placeholder="Designation" class="form-control name_list" required />
                        </div></div><div class="colums">
                        <div class="item"><label for="certificate">From<span>*</span><label><input type="date" class="form-control" name="from[]" required onfocusout="fromFun(this.value,'year`+i+`')">
                        </div>

                        <div class="item">
                            <label for="certificate">To<span>*</span><label>
                            <input type="date" class="form-control" name="To[]" onfocusout="toFun(this.value,'year`+i+`')" required>
                        </div>
                        <label><span id="year`+i+`"></span><label>

                 </div>

                  <div class="colums">
                    <div class="colums">
                        <div class="item">
                            <label for="certificate">Hospital Address<span>*</span><label>
                             <textarea id="donation" rows="3" style="resize: none;color:black;"  maxlength="300" required  name="add[]" id="" required></textarea>
                        </div>
                    </div>
                    <div class="item">
                        <label for="certificate">Experience Letter<span>*</span><label>
                        <input type="file" class="fileToUpload form-control" name="exp_let[]" id="" accept="application/pdf" required>
                    </div>

                    <div class="item"><a type="button" name="remove" id="`+i+`" class="btn btn_remove" style="background-color:#3fbbc0; color:white;">X</a></div>
                </div>                    
                </div>
            </div>`);

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#col'+button_id).remove();  
      }); 


 });

    var from,to,fromdate,todate;
    var years,total;

    function fromFun(e,i){
       from = new Date(e);
       if (typeof from !== 'undefined' && typeof to != 'undefined') {
            calcDate(i);         
        }
    }

    function toFun(e,i){
        to = new Date(e);
         if (typeof from !== 'undefined' && typeof to != 'undefined') {
            calcDate(i);        
        }
    }

    function calcDate(){
         // To calculate the time difference of two dates
            var Difference_In_Time = to.getTime() - from.getTime() ;
              
            // To calculate the no. of days between two dates
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
              
            years=Difference_In_Days/365;
            var y=Math.trunc(years);

            if(y >= 2){
                document.getElementById("years").innerHTML=y + " Years Experience";
                $('#bio_btn').removeAttr('disabled');
                $('#done_btn').removeAttr('disabled');
                console.log(total + "\n" + years);
            }else{
                document.getElementById("years").innerHTML=y +" Years Not Enough"; 
                $('#bio_btn').prop('disabled',true);
                $('#done_btn').prop('disabled',true);             
            }
    }

    $(function(){
        $('#from').datepicker({
            dateFormat:"dd-mm-yy",
            changeYear:true,
            changeMonth:true,
            maxDate:0,
            onClose: function( selectedDate ) {
                $( "#to" ).datepicker( "option", "minDate", selectedDate );
                fromdate=($(this).datepicker('getDate'));
                console.log(fromdate);
            },
            onSelect: function(dateText, inst) { 
                var date = $(this).datepicker('getDate'),
                day  = date.getDate(),  
                month = date.getMonth(),              
                year =  date.getFullYear();
                from=new Date(year,month,day);
                if (typeof from !== 'undefined' && typeof to != 'undefined') {
                    calcDate(); 
                    console.log(from);
                }
            }
        });

        $('#to').datepicker({
            dateFormat:"dd-mm-yy", 
            changeYear:true,
            changeMonth:true,
            maxDate:0,
            onClose: function( selectedDate ) {
                $( "#from" ).datepicker( "option", "maxDate", selectedDate );
               
            },
            onSelect: function(dateText, inst) { 
                var date = $(this).datepicker('getDate'),
                day  = date.getDate(),  
                month = date.getMonth(),              
                year =  date.getFullYear();
                to=new Date(year,month,day);
                if (typeof from !== 'undefined' && typeof to != 'undefined') {
                    calcDate(); 
                    console.log(to);
                }
            }
        });  
    });
</script>

</html>