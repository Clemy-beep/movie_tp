var sessionId = $("#sessionId").val();
$.ajax({
    type: "GET",
    url: " https://api.themoviedb.org/3/account/{account_id}/lists?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US&session_id=" + sessionId + "&page=1",
    dataType: "json",
    success: function(response) {
        console.log(response.results);
        if (response.results === []) {
            $("#lists").append(`<h2>You don't have any list we could find. Try to <a href="#">create</a> one ! </h2>`);
        } else showLists(response.results);
    },
    error: function(err) {
        console.log("tamere");
        console.log(err);
        $("#lists").append(`<h2>You don't have any list we could find. Try to <a href="./createList.php">create</a> one ! </h2>`);

    }
});

function showLists(lists) {
    if (lists.length > 0) {
        lists.forEach(list => {
            $("#lists").append('<div class="listitem"></div>');
            $(".listitem").append(` <a href="#"> <span class="material-icons-outlined"> link </span>${list.name}</a>`);
            $(".listitem").append(` <p> ${list.description } </p>`);
        });
    }
    $("#createLink").append();
}