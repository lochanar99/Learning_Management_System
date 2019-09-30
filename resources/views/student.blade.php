<html>
<head>
<body>
<form method = "post" action="/saveAddCourse">
  {{csrf_field()}}
<h2>Saved Successfully</h2>
<style>
  .button {
  background-color: tomato; /* Green */
  border: none;
  color: white;
  padding: 6px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 8px;
  cursor: pointer;
  }
  .button:hover {
  background-color: #E58422; /* Green */
  color: white;
  } 

  .button3 {padding: 8px 29px; border-radius: 12px;}


  </style>
</form>
<br>
<a href="http://127.0.0.1:8000/Students"  class="button button3">View</a>
</head>
</body>
<html>