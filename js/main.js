$(document).ready(function(){
	$("#submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var lada = $('#lada').val();
		var phone = $('#phone').val();
		var zip = $("#cp").val();
		var place = $('#place').val();
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'name1='+ name + '&email1='+ email + '&lada1='+ lada + '&phone1='+ phone + '&zip1=' + zip + '&place1=' + place;
		if(name==''||email==''||lada==''||phone==''||zip == '' || place == '') {
			alert("Please Fill All Fields");
		}else{
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: "php/script.php",
				data: dataString,
				cache: false,
				success: function(result){
					alert(result);
				}
			});
		}
	return false;
	});
	$('#nombre').bind('keypress', function(e) {
	    if($('#nombre').val().length == 0){
	        var k = e.which;
	        var ok = k >= 65 && k <= 90 || // A-Z
	            k >= 97 && k <= 122 || // a-z
	            k >= 48 && k <= 57; // 0-9
	        
	        if (!ok){
	            e.preventDefault();
	        }
	    }
	}); 
	$("#lada").keydown(function(event) {
	   	// Allow only backspace and delete
	   	if ( event.keyCode == 46 || event.keyCode == 8 ) {
	   		// let it happen, don't do anything
	   	}
	   	else {
	   		// Ensure that it is a number and stop the keypress
	   		if (event.keyCode < 48 || event.keyCode > 57 ) {
	   			event.preventDefault();	
	   		}	
	   	}
	});
	$('#lada').bind('keypress', function(e) {
	    if($('#lada').val().length == 0){
	        var k = e.which;
	        var ok = k >= 65 && k <= 90 || // A-Z
	            k >= 97 && k <= 122 || // a-z
	            k >= 48 && k <= 57; // 0-9
	        
	        if (!ok){
	            e.preventDefault();
	        }
	    }
	}); 
	$("#tel").keydown(function(event) {
	   	// Allow only backspace and delete
	   	if ( event.keyCode == 46 || event.keyCode == 8 ) {
	   		// let it happen, don't do anything
	   	}
	   	else {
	   		// Ensure that it is a number and stop the keypress
	   		if (event.keyCode < 48 || event.keyCode > 57 ) {
	   			event.preventDefault();	
	   		}	
	   	}
	});
	$('#tel').bind('keypress', function(e) {
	    if($('#tel').val().length == 0){
	        var k = e.which;
	        var ok = k >= 65 && k <= 90 || // A-Z
	            k >= 97 && k <= 122 || // a-z
	            k >= 48 && k <= 57; // 0-9
	        
	        if (!ok){
	            e.preventDefault();
	        }
	    }
	    $("#cp").keydown(function(event) {
	       	// Allow only backspace and delete
	       	if ( event.keyCode == 46 || event.keyCode == 8 ) {
	       		// let it happen, don't do anything
	       	}
	       	else {
	       		// Ensure that it is a number and stop the keypress
	       		if (event.keyCode < 48 || event.keyCode > 57 ) {
	       			event.preventDefault();	
	       		}	
	       	}
	    });
	    $('#cp').bind('keypress', function(e) {
	        if($('#cp').val().length == 0){
	            var k = e.which;
	            var ok = k >= 65 && k <= 90 || // A-Z
	                k >= 97 && k <= 122 || // a-z
	                k >= 48 && k <= 57; // 0-9
	            
	            if (!ok){
	                e.preventDefault();
	            }
	        }
	    }); 
	}); 

});