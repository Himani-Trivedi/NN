<?php

    include 'connect.php';

    if(!(isset($_SESSION['user']['terms'])) && !(isset($_SESSION['user']['nurse_re_1'])) && !(isset($_SESSION['user']['rn_Cert']))){
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

                        <div class="form-group">
                            <label>From<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="from" style="color:black;" name="from[]">
                        </div>

                        <div class="form-group">
                            <label>To<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="to"  style="color:black;" name="to[]">
                        </div>
                        <input type="hidden" name="yrs" id="yrs">
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
                <label><sapn id="years"><label>

            </fieldset>

            <div class="btn-block">
                 <button type="button" name="add" id="add" class="btn" style="background-color:#3fbbc0; color:white;">Other Certificates</button> 
                <button type="submit" name="goto_bio" id="bio_btn" class="btn" style="background-color:#3fbbc0; color:white;" disabled  formaction="bio.php">Bio</button>
            </div>
        </form>
    </div>

    <?php

        if(isset($_POST['goto_bio']) ){
               $_SESSION['user']['exp']=$_POST;
               $_SESSION['user']['exp']['letter']=$_FILES['exp_let'];
                header('location:bio.php');   
        }

    ?>
</body>

<script>
    
    $(document).ready(function(){  
      var i=0;  
      $('#add').click(function(){  
           i++;  

           $('#dynamic_exp').append(` <div class="box" id="col`+ i +`" style="box-shadow: 10px 5px 8px rgba(63,187,192,0.7);padding: 3px;">
                <span style="color:red;">Experience `+i+` : </span>
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
                        <div class="form-group">
                            <label>From<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="from`+i+`"  style="color:black;" name="from[]">
                        </div>

                        <div class="form-group">
                            <label>To<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="to`+i+`" style="color:black;" name="to[]">
                        </div>
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


            $('#from'+ i).datepicker({
                dateFormat:"dd-mm-yy",
                changeYear:true,
                changeMonth:true,
                maxDate:0,
                onClose: function( selectedDate ) {
                $( "#to"+ i).datepicker( "option", "minDate", selectedDate );
            },
            onSelect: function(dateText, inst) { 
                var date = $(this).datepicker('getDate'),
                day  = date.getDate(),  
                month = date.getMonth(),              
                year =  date.getFullYear();
                from[i]=new Date(year,month,day);
                if (typeof  from[i] !== 'undefined' && typeof to[i] != 'undefined') {
                    calcDate(i); 
                    console.log(from);
                }
            }
            });

            $('#to' +i).datepicker({
                dateFormat:"dd-mm-yy", 
                changeYear:true,
                changeMonth:true,
                maxDate:0,
                onClose: function( selectedDate ) {
                $( "#from"+i).datepicker( "option", "maxDate", selectedDate );},
                onSelect: function(dateText, inst) { 
                    var date = $(this).datepicker('getDate'),
                    day  = date.getDate(),  
                    month = date.getMonth(),              
                    year =  date.getFullYear();
                    to[i]=new Date(year,month,day);
                    if (typeof from[i] !== 'undefined' && typeof to[i] != 'undefined') {
                        calcDate(i); 
                        console.log(to);
                    }
                }
            }); 

      });

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#col'+button_id).remove();  
           y[button_id]=0;
           expCount();
      }); 

      $('#from').datepicker({
            dateFormat:"dd-mm-yy",
            changeYear:true,
            changeMonth:true,
            maxDate:0,
            onClose: function( selectedDate ) {
                $( "#to" ).datepicker( "option", "minDate", selectedDate );
            },
            onSelect: function(dateText, inst) { 
                var date = $(this).datepicker('getDate'),
                day  = date.getDate(),  
                month = date.getMonth(),              
                year =  date.getFullYear();
                from[0]=new Date(year,month,day);
                if (typeof from[0] !== 'undefined' && typeof to[0] != 'undefined') {
                    calcDate(0); 
                    console.log(from[0]);
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
            to[i]=new Date(year,month,day);
            if (typeof from[0] !== 'undefined' && typeof to[0] != 'undefined') {
                calcDate(0); 
                console.log(to[0]);
            }
        }
    });  
 });

    var from=[],to=[],fromdate=[],todate=[];
    var y=[];

    function calcDate(no){
         // To calculate the time difference of two dates
            var Difference_In_Time = to[no].getTime() - from[no].getTime() ;
            var total=0;
            // To calculate the no. of days between two dates
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
            y[no]=Difference_In_Days;
            expCount();
           
    }

    function expCount(){
        var total=0;
        for(var i=0;i<y.length;i++){
                total+=y[i];
            }
            total/=365;
            total=Math.trunc(total);
            console.log(y);
            console.log(total);

            if(total >= 2){
                document.getElementById("years").innerHTML=total + " Years Experience";
                document.getElementById("yrs").value=total + " years ";
                $('#bio_btn').removeAttr('disabled');
                $('#done_btn').removeAttr('disabled');
            }else{
                document.getElementById("years").innerHTML=total +" Years Not Enough"; 
                document.getElementById("yrs").value=total + " Years ";
                $('#bio_btn').prop('disabled',true);
                $('#done_btn').prop('disabled',true);             
            }
    }

</script>

</html>
