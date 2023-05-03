<!DOCTYPE html>
<html lang="en">
<head>
     <meat http-eqiv="refresh"  content="1"/>
     <style>
          p {
               color:yellow;
               font-size:90px;
               position:absolute;
               top:40%;
               left:50%;
               transform:translate(-50%,-50%);
          }
          body{
               background-color:maroon;
          }
     </style>
     <?php
     echo date("h:1:s A");
     ?>
</head>

//transform:translate (-50%,-50%);//

//reason for transform translate it is required because center of the element to line up with center of it's parent.
translates(-50%) & translate (-50%) moving  left towards by 50% by width alongwith x axis
