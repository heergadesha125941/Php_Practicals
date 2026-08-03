<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="data_js">
    hello ,
    heer this side   
</div>    
<button onclick="data_change()">
    click
</button>    
    <script>
        function data_change(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            document.getElementbyId("demo").innerHTML = this.responseText;
        }
            xhttp.open("GET", "ajax_info.txt",true);
            xhttp.send();
        }
    </script>    
</body>
</html>