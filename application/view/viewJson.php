 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>

    <div id="placeholder"></div>

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>

	$.getJSON('../model/createJson.php', function(data) {
  	
        var output="<ul>";
        for (var i in data.users) {
            output+="<li>" + data.users[i].firstName + " " + data.users[i].lastName + "--" 
			+ data.users[i].joined.month+"--" 
			+ data.users[i].joined.year+"</li>";
        }

        output+="</ul>";
        console.log(output);
        // Assign HTML to the placeholder tag yuisnbg JQuery .htnl() method
        $('#placeholder').html(output);
       
        // Alternatively, you can use the JavaScript document.getElelementById() method
        //document.getElementById("placeholder").innerHTML=output;
  	});
    </script>
</body>
</html>