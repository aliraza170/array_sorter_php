$("form#data").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
	 $('#response_here').html('');
    $.ajax({
        url: 'sort.php',
        type: 'POST',
        data: formData,
        success: function (data) {
            $('#response_here').html(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});