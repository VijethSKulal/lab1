<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>

<body>
  <div id="h">
    <script>
      var v = 0, f = 1, t = "TEXT-GROWING", color;
      function a() {
        if (f == 1) {
          v += 5;
          color = "red";
        }
        
        else {
          v -= 5;
          color = "blue";
        }
        document.getElementById("h").innerHTML = "
        
        "<h1 style=\"font-size: " + v + "px; margin: 0px; color: " + color + "\"><b>" + t + "</b></h1>";
        if (v == 50) {
          f = 0;
          t = "TEXT-SHRINKING";
        }
        if (v == 5) {
          f = 1;
          t = "TEXT-GROWING";
        }
        c();
      }
      function c() {
        setTimeout(a, 200);
      }
      c();
    </script> 
  </div>
</body>

</html>