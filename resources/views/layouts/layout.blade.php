<!DOCTYPE HTML>
<html>

<head>
  <title>Student Management System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="/style/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="main">
    <div id="header">
     
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="{{ Request::path()==='/' ? 'selected' : '' }}"><a href="/">Home</a></li>
          <li class="{{ Request::path()==='student' ? 'selected' : ''}}"><a href="/student">Student Managment</a></li>
          <li class="{{ Request::path()==='mark' ? 'selected' : ''}}"><a href="/mark">Mark Details</a></li>

        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
     
	  <div id="sidebar_container">
      </div>
    @yield("content")
    
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="/">Home</a> | Student Mangement System |</p>
      <p>Copyright &copy; simplestyle_horizon | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
