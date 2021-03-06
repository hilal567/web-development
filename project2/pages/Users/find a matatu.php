<?php
    require_once('header.php');
?>





<!-- Page Content -->
<div style="margin-left:18%">
    
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title> Google Map Calculator </title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
			div {
				 padding:8px;
			    }
        }
    </style>
	 <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEFedPGm1TN4BgmArZqhIZgkTomGSZHrM&sensor=false&libraries=places"></script>
    <script type="text/javascript">

    $(document).ready(function () {
        $("#mat").hide();
        $("#pricez").hide();
        $("#durationz").hide();
        $("#sourcez").hide();
        $("#destinationz").hide();
        $("#submittrip").hide();



     });
	
		$(document).ready(function () {
 	var counter = 2;
	$("#addButton").click(function () {
            if (counter > 100) {
                alert("Only 100 textboxes allowed");
                return false;
            }
            $('<div/>',{'id':'TextBoxDiv' + counter}).html(
              $('<label/>').html( 'Destination #' + counter + ' : ' )
            )
            .append( $('<input type="text">').attr({'id':'textbox' + counter,'name':'textbox' + counter}) )
            .appendTo( '#TextBoxesGroup' )       
            counter++;
        });
 
});
    

<!-- 	google map start -->
        var initialLocation;
        if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(initialLocation);
            map.setZoom(14);
            document.getElementById("txtSource").value =initialLocation ;
        });
    }
    
        var source, destination;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('txtSource'));
            new google.maps.places.SearchBox(document.getElementById('txtDestination'));

            directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
        });

        function GetRoute() {
            $("#mat").show();
            $("#submittrip").show();
            var Nairobi = new google.maps.LatLng(-1.286541,36.828686);
            var mapOptions = {
                zoom: 7,
                center: Nairobi
            };
            map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('dvPanel'));

            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("txtSource").value;
            destination = document.getElementById("txtDestination").value;
		
            var request = {
                origin: source,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration.text;
                    var dvDistance = document.getElementById("dvDistance");
                    var str = distance.substring(0, distance.length - 5); 
                    var x = parseInt(str, 10); 
                    var price = x * 10;
                  

                    dvDistance.innerHTML = ""+ "<br />";
                    dvDistance.innerHTML += "Distance :  " + distance + "<br />"+ "<br />";
                    dvDistance.innerHTML += "Price :  " + price +" Ksh"+ "<br />"+ "<br />";
                   dvDistance.innerHTML += "Duration : " + duration;
                   

                   document.getElementById("pricez").value = price;
                   document.getElementById("durationz").value = duration;
                   document.getElementById("sourcez").value = source;
                   document.getElementById("destinationz").value = destination;






                } else {
                    alert("Unable to find the distance via road.");
                }
            });
        }
        
        
		<!-- add more option -->
    

    
    </script>
	
    <table border="0" cellpadding="0" cellspacing="3">
        <tr>
            <td colspan="2">
                Source:  <input type="text" id="txtSource" value="Bus Station, Temple Road, Nairobi, Kenya" style="width: 200px" />
               
                &nbsp; Destination:  <input type="text" placeholder="Enter Your Destination" id="txtDestination" value="" style="width: 200px" />
        <br/>   <br/>
			<div id='TextBoxesGroup'>
				 <div id="TextBoxDiv1">
					 <!-- <label> Destination #2 : </label> -->
					<!--  <input type='text' id="txtDestination" name="textbox1" value="Nikunja 2, Dhaka, Dhaka Division"/>  -->
				 </div>
			</div>
				
                <br />  <br />
                <input type="button" value="Get Route" onclick="GetRoute()" />
                <hr />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div id="dvDistance">
                </div>
                <div id="mat" ><br> Available Matatu : &nbsp;
                <?php require_once('findmatatu.php'); ?>   
                
                </div>
                <div id="">
                <form action="savetrip.php" method="get">
                        <div class="">
                            <input type="text" name="price" id="pricez" />
                            <input type="text" name="duration" id="durationz" />
                            <input type="text" name="source" id="sourcez" />
                            <input type="text" name="destination" id="destinationz" />
                            <button type="submit" name="register"  id="submittrip" align = "left">Submit Trip</button>

                        </div>
                </form>

                </div>

 
            </td>
        </tr>
        <tr>
            <td>
                <div id="dvMap" style="width: 800px; height: 800px">
                </div>
            </td>
            <td>

                <div id="dvPanel" style="width: 500px; height: 800px">
                </div>
            </td>
            
        </tr>
    </table>
    <br />
	
	

</body>
</html>




</div>
      
</body>
</html>




