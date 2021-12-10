var listId = null;
$.ajax({
    type: "GET",
    url: "https://api.themoviedb.org/3/list/" + listId + "?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US",
    data: "data",
    dataType: "dataType",
    success: function(response) {
        console.log(response);
    },
    error: function(err) {

        $("#lists").append(`<h2>You don't have any list we could find. Try to <a href="#">create</a> one ! </h2>`);

    }
});