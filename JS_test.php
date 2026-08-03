<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="data_js">
        hello
</div>    
<button onclick="data_change()">
    click
</button>    
    <script>
        function data_change(){
        //get data
        var str = document.getElementById('data_js').innerText;//used for fetching
        //document.write(str + "from JS");
        //set data
        var data = document.getElementById('data_js');
        data.innerHTML = "<h3>hello this is new data</h3>";
}
//innerhtml used to make changes like adding tags 
//elements "S" at last means iit is used for arrays
//same tagname
//javascript data is always visible other data like php,python is not display because it is rendered on browser.

    </script>    
</body>
</html>