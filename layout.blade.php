<html>
    <head>

<!-- CSS FILE WEBRTC DEFAULT-->      
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
    </head>
    <body>
        
       <!-- header --><!-- LINK -->
       <div class="w3-bar w3-border w3-light-grey">
        <a href="/homes" class="w3-bar-item w3-button">Home</a>
        
        <a href="/cr" class="w3-bar-item w3-button">Attendance</a>
    
        <a href="/qrt" class="w3-bar-item w3-button">Create QR CODE</a>
  
        <a href="" class="w3-bar-item w3-button">Sign Out</a>
        
        <a href="" class="w3-bar-item w3-button">Settings</a>

        </div>
        @show
        <br>
        <div class="container">
            @yield('content')
        </div>

    </body>
    
</html>