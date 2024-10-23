<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Testing Page</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }
    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>API Testing Page</h1>
  <button id="testApiBtn">Test API</button>
  <p id="apiResponse"></p>

  <script>
    $(document).ready(function() {
      $('#testApiBtn').click(function() {
        var url = localStorage.getItem('url');
        $.ajax({
          url: url + '/api/test/',
          method: 'GET',
          dataType: 'json',
          success: function(data) {
            $('#apiResponse').text('Response: ' + data.message);
          },
          error: function() {
            $('#apiResponse').text('API is not working!');
            console.log('API request failed');
          }
        });
      });
    });
  </script>
</body>
</html>
