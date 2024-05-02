$(document).ready(function() {
    console.log("Loaded");

    $("#register").on('click', function(event) {
        event.preventDefault();
        $.post("./register.php", $("#productForm").serialize(), function(data) {
            if (data === "Email already exists!") {
                alert("Email already exists!");
            } else {
                alert("Account created");
            }
        });
    });

    $("#loginbtn").on('click', function(event) {
        event.preventDefault();
        $.post("./login.php", $("#productForm").serialize(), function(data) {
            if (data === "reg ok") {
                alert("Registration successful");
            } else if (data === "pass not ok") {
                alert("Password incorrect");
            } else {
                alert("User not found");
            }
        });
    });
});