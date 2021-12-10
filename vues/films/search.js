function setPage() {
    var pageNumber = 1;
    search(pageNumber);
    $("#next").on("click", function() {
        pageNumber++;
        search(pageNumber);
    });
    $("#previous").on("click", function() {
        if (pageNumber > 1)
            pageNumber--;
        search(pageNumber);
    });
}

function search(pageNumber) {
    var major = $("input[type=hidden]").val();
    var input = $("input[type=text]").val();
    selected = $('select').val();
    console.log(selected);
    console.log(input);
    $.ajax({
        type: "GET",
        url: "https://api.themoviedb.org/3/search/movie?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US&query=" + input + "&page=" + pageNumber + "&include_adult=" + major,
        dataType: "json",
        success: function(response) {
            console.log(response);
            console.log(pageNumber);
            $("#queryResult").empty();
            displayFilms(response.results);
            $("#marks").empty();
            $("#marks").append(`<p>Page ${response.page} out of ${response.total_pages}</p>`);
        }
    });
}

function displayFilms(films) {
    var title = "";
    var poster_path = "";
    $("#queryResult").empty();

    if (films.length > 0) {
        films.forEach(film => {
            if (film.title === undefined) {
                title = film.original_name;
            } else title = film.title;
            if (film.poster_path !== null) {
                poster_path = "http://image.tmdb.org/t/p/w300/" + film.poster_path;
            } else poster_path = "https://via.placeholder.com/300x450?text=Poster+not+found";
            $("#queryResult").append("<div class='film' id='film" + film.id + "'></div>");
            $("#film" + film.id).append(`<div class="card" id="cardGenre"  onclick="window.location.replace('/vues/films/film.php?id=${film.id}')"><div class="title"><div class="rating"><span class="material-icons-outlined">star_half</span>${film.vote_average}</div><h2>${title}</h2></div><img id="poster" src="${poster_path}" alt="poster"></div>`);

        });
    } else {
        $("#queryResult").append("<h2>We have no corresponding film to show you at the moment. Search again or look at our most <a href='./homepage.php'>popular films</a></h2>");
    }
}