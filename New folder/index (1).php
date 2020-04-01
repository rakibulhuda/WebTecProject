<html>
  <head>
    <meta>
    <title>Web_1_4</title>
    </style>
    <script>
      function search()
      {
        http=new XMLHttpRequest();
        var sk=document.getElementById('search_word').value;
        http.onreadystatechange = function()
        {
          if(http.readyState==4 && http.status==200)
          {
            //alert(http.responseText);
            document.getElementById('search_results').innerHTML=http.responseText;
          }
        }
        http.open("GET","search_product.php?sk="+sk,true);
        http.send();
      }

      function details()
      {
        http=new XMLHttpRequest();
        var sk=document.getElementById('search_word').value;
        http.onreadystatechange = function()
        {
          if(http.readyState==4 && http.status==200)
          {
            document.getElementById('search_results').innerHTML=http.responseText;
          }
        }
        http.open("GET","details.php?sk="+sk,true);
        http.send();
      }
    </script>
  </head>
  <body>
    <div>
        <span>Search : </span>
        <input type="text" onkeyup="search()" id="search_word" placeholder="Search products...">
        <button type="button" onclick="details()" id="search_button">See Details</button>
    </div>
    <div id="search_results"></div>
    <divid="search_details"></div>
  </body>
</html>
