  <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from templates.scriptsbundle.com/opportunities-v3/demo/company-dashboard-edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2017 14:22:39 GMT -->
<head>
...
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places">

</script>
...
</head>
<body>
...
<input id="searchTextField" type="text" size="50">
...
</body>
<script type=text/javascript>
function initialize() {

var input = document.getElementById('searchTextField');
var autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</html>
