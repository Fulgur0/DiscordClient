var tokens = localStorage.getItem("tokens");
if (tokens) {
    for (var i = 0; i < tokens.length; i++) {
        var token = tokens[i];
        console.log(token);
    }
}