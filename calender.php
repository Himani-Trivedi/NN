<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
<div class="container" style="width: 300px;">
    <form>
      <table class="table">
      <thead style="background-color:rgba(63,187,192,255); color:white">
        <tr>
          <th scope="col">Timing</th>
          <th scope="col">Mon</th>
          <th scope="col">Tue</th>
          <th scope="col">Wed</th>
          <th scope="col">Thu</th>
          <th scope="col">Fri</th>
          <th scope="col">Sat</th>
          <th scope="col">Sun</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">07:00</th>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
            <td>
              <input type="checkbox" name="mon[]" value="7">
            </td>
        </tr>

        <tr>
          <th scope="row">08:00</th>
               <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
            <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
            <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
            <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
            <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
            <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
            <td>
              <input type="checkbox" name="tue[]" value="8">
            </td>
        </tr>
        <tr>
          <th scope="row">3</th>
           <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="7">
                <input type="submit" name="set" value="Set" class="btn" style="background-color:rgba(63,187,192,255); color:white">
          </td>                   
        </tr>
      </form>
      </tbody>
</table>
</div>
</div>

</body>
</html>

