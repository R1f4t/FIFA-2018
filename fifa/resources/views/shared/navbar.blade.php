<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    
* {
    box-sizing: border-box;
}

body,h2,h3 {
    font-family:Helvetica;
    text-align: center;
}

.header {
    padding: 68px;
    text-align: center;
    background-image: url(fifa1.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
}

.navbar {
    display: flex;
    background-color: #14184F;
    position: center;
    font-size: 16px;
    text-align: right;
    margin: 1 px solid black;
}

.navbar a {
    color: white;
    padding: 12px 18px;
    text-decoration: none;
    text-align: right;
    position: center; 
}

.navbar a:hover {
    background-color: #dedede;
    color: black;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 700px) {
     .navbar {   
        flex-direction: column;
    }
}
</style>

</head>
<body>
<!-- Header -->
<div class="header">
  
  <br><br><br>
</div>

<!-- Navigation Bar -->
<nav class="navbar navbar-success" >
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('/match') }}">Matches</a></li>
      <li><a href="{{ url('/player') }}">Players</a></li>
      <li><a href="{{ url('/team') }}">Teams</a></li>
      <li><a href="{{ url('/stadium') }}">Stadiums</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>

</body>
</html>