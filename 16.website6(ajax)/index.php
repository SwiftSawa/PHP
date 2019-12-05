<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" />
    <script>
        function showSuggestion(str){
            if(str.length ==0){
                document.getElementById('output').innerHTML='';
                // above line of code will set the output which is comming from the HTML to nothing
                // first we are getting thr element using its id which is output

            }else{
                //AJAX
                var xhttp= new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("output").innerHTML = this.responseText;
                        // above statement is part of DOM manupulation in which 
                        // document.getElementById("output") pich up element by id in this case output
                        // innerHTML method put the output in spam tag in this example
                    }
                };
                xhttp.open("GET", "suggest.php?q="+str, true);
                xhttp.send();
            }
            
           // console.log(str);         // this will console log every thing which we write in text box
        }


    </script>
</head>
<body>
    <div class="container">
        <h1>Search User</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
            <!-- onkeyup => this will call the function in the brackets with latest updated value -->
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>