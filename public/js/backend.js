$(function() { 
	function weather(city){
		if(city == 'Tokyo'){
			var countryCode = 'jp'; 
		}
		$.ajax({
		  method: "GET",
		  url: "https://api.openweathermap.org/data/2.5/forecast?q="+city+","+countryCode+"&appid=91ac1fc0ee2e0b58006a5b9c06e677f8",
		  success: function(data) {
	         console.log(data); 
	         $('#city').text(data.city.name);
	         $('#population').text(data.city.population);
	         $('#timezone').text(getTimeZone(data.city.timezone));
	         $('#sunrise').text(EpochToDate(data.city.sunrise));
	         $('#sunset').text(EpochToDate(data.city.sunset));
	         for(var x=0; x < 2; x++){
	         	console.log(data.list[x]['main']['temp_min']);
	         	var iconcode = data.list[x]['weather'][0]['icon'];
	         	var iconurl = "http://openweathermap.org/img/w/" + iconcode + ".png";
	         	$('#wicon'+x).attr('src', iconurl);
	         	$('#temp'+x).text(temperatureConverter(data.list[x]['main']['temp']));
	         	$('#temp_min'+x).text(temperatureConverter(data.list[x]['main']['temp_min']));
	         	$('#temp_max'+x).text(temperatureConverter(data.list[x]['main']['temp_max']));
	         	$('#wind'+x).text(data.list[x]['wind']['speed']);
	         	$('#clouds'+x).text(data.list[x]['clouds']['all']);
	         	$('#pressure'+x).text(data.list[x]['main']['pressure']);
	         }
	      }
		});
	}
	var city = $(window.location).attr("href").split('/').pop();
	weather(city);


	function Epoch(date) {
    	return Math.round(new Date(date).getTime() / 1000.0);
	}

	//Epoch To Date
	function EpochToDate(epoch) {
	    if (epoch < 10000000000)
	        epoch *= 1000; // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
	    var epoch = epoch + (new Date().getTimezoneOffset() * -1); //for timeZone        
	    return new Date(epoch);
	}

	function getTimeZone() {
	    return /\((.*)\)/.exec(new Date().toString())[1];
	}

	function temperatureConverter(valNum) {
	  valNum = parseFloat(valNum);
	  return Math.round(valNum-273.15);
	}
});
