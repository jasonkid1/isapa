<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src ="js/jquery-3.2.1.min.js"></script>
  <script src = "js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function printlayer(layer) 
    {
      var generator=window.open(",'name,");
      var layetext = document.getElementById(layer);
      generator.document.write(layetext.innerHTML.replace("Print Me"));

      generator.document.close();
      generator.print();
      generator.close();
    }
  </script>
</head>
<body>
<h3>
  <a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Report Print</a>
</h3>

<div class="container" id="div-id-name">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
