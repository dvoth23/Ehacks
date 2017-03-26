$(document).ready(function(){
	$('#questionForm').validate({
        rules: {
            question: {
                required: true
            },
            q1: {
                required: true,
            },
            q2: {
                required: true,
            },
            q3: {
                required: true,
            },
            q4: {
                required: true,
            }
        }
    });

});