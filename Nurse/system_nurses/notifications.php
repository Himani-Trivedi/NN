<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse - Notification</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
       
    </style>
</head>

<body>
    <div class="fluid-container">

        <!-- Notification1 -->
        <div class="fluid-container border border-3 border-secondary d-flex flex-row p-1">
            <i class="fa fa-2x fa-user ms-3 user"></i>

            <div class="info h5 ms-4 mt-2" id="reqInfo">
                Admin has approved your profile you may now schedule further
            </div>

            <div class="end d-flex position-absolute end-0 me-3">
                <a href="profile.php" class="btn btn mx-2" id="openReq" style="background-color:rgba(63,187,192,255) ;">Schedule</a>
                <button type="button" class="btn btn-danger mx-2" id="rejectReq">Cancel</button>

                <div class="time mt-2 h6 border rounded-pill border-4" id="notificationTime1">
                    <i class="fa fa-2x fa-clock"></i>
                </div>
            </div>
        </div>

    </div>

</body>
<script>
    function gettime(id) {
        notificationTime = document.getElementById(id);

        time = new Date();
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        month = monthNames[time.getMonth()];

        timestr = time.getDate() + " " + month + " " + time.getHours() + ":" + time.getMinutes();

        notificationTime.innerText = timestr;
    }

    gettime('notificationTime1');


</script>

</html>