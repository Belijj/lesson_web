$(document).ready(function() {
    $("#add").on('click', function(event) {
        event.preventDefault();
        $.post("./request.php", $("#productForm").serialize(), function(data) {
            console.log("Response: ", data);
        });
    });
});