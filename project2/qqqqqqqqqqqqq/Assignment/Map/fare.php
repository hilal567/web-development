<select name="test" id="mySelect" onchange="myFair()">
        <option value="Kiambu, Kenya">Kiambu ,Kenya</option>
        <option value="Kitengela ,Kenya">Kitengela ,Kenya</option>
        <option value="Railway bus stop ,Kenya">Nairobi ,Kenya</option>
        <option value="Ongata rongai ,Kenya">Ongata rongai ,Kenya</option>
        <option value="Thika ,Kenya">Thika ,Kenya</option>
</select>
        
        <p id="demo"></p>
        <script>
        function myFair() {
            var x = document.getElementById("mySelect").value;
            if(x == "Kitengela ,Kenya"){
               document.getElementById("demo").innerHTML = "You are to pay 120";
            }else if (x =="Railway bus stop ,Kenya"){
           document.getElementById("demo").innerHTML = "You are to pay:150 " ;
        }else if (x =="Kiambu ,Kenya"){
           document.getElementById("demo").innerHTML = "You are to pay:170 " ;
        }else if (x =="Ongata rongai ,Kenya"){
           document.getElementById("demo").innerHTML = "You are to pay:100 " ;
        }else if (x =="Thika ,Kenya"){
            document.getElementById("demo").innerHTML = "You are to pay:130 " ;}
        }
        </script>