 
<!DOCTYPE html>
<html>
<head>
<title>Google maps</title>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=ar"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
<script src="js/jquery-gmaps-latlon-picker.js"></script>
</head>

<body>
  <fieldset class="gllpLatlonPicker">
    <input type="text" class="gllpSearchField">
    <input type="button" class="gllpSearchButton" value="search">
    <br/><br/>
    <div class="gllpMap">Google Maps</div>
    <br/>
    lat/lon:
      <input type="text" class="gllpLatitude" value="30.946579788409778"/>
      /
      <input type="text" class="gllpLongitude" value="31.284332275390625"/>
    zoom: <input type="text" class="gllpZoom" value="3"/>
    <input type="button" class="gllpUpdateButton" value="update map">
    <br/>
  </fieldset>
	
</body>


</html>


                {{ Form::text('long' , null , array('class'=>'gllpLongitude') )}}
                {{ Form::text('lat' , null , array('class'=>'gllpLatitude') )}}
























