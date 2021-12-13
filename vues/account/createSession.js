var token = $('#token').val();

function createSession() {
    $.ajax({
        type: "POST",
        url: "https://api.themoviedb.org/3/authentication/session/new?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c",
        data: {
            "request_token": token
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            window.location.replace('/vues/films/homepage.php?sessionId=' + response.session_id);
        },
        error: function(err) {
            console.log(err);
        }

    });
}

createSession();