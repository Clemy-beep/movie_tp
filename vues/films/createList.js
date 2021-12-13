var sessionId = $("#session_id").val();

function createList() {

}

$("form").submit(function(e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "https://api.themoviedb.org/3/list?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&session_id=" + sessionId,
        data: {
            "name": $("#name").val(),
            "description": $("#description").val()
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            if (response.success) {
                window.location.replace('/vues/films/user.php');
            }
        },
        error: function(err) {
            console.log(err);
            window.location.replace('/vues/films/creation_error.php');
        }
    });
});