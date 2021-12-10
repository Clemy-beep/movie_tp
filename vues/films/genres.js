//declaration of functions

function displayGenres(genres) {
    genres.forEach(genre => {
        $("#genres").append(`<div id="genre" onclick="window.location.replace('/vues/films/genres.php?id=${genre.id}&page=1')">${genre.name}</div>`);

    });
}


function setPage() {
    search(page);
    $("#next").on("click", function() {
        page++;
        search(page);
    });
    $("#previous").on("click", function() {
        if (page > 1)
            page--;
        search(page);
    });
}

function search(page) {
    selected = $('select').val();
    if (id !== "")
        $.ajax({
            type: "GET",
            url: "https://api.themoviedb.org/3/discover/movie?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US&sort_by=" + selected + "&page=" + page + "&include_adult=" + major + "&with_genres=" + id,
            dataType: "json",
            success: function(response) {
                console.log(selected);
                displayFilms(response.results);
                $("#marks").empty();
                $("#marks").append(`<p>Page ${response.page} out of ${response.total_pages}</p>`);
            }
        });
}

function displayFilms(films) {
    var title = "";
    var poster_path = "";
    $("#searchResult").empty();
    films.forEach(film => {
        if (film.title === undefined) {
            title = film.original_name;
        } else title = film.title;
        if (film.poster_path !== null) {
            poster_path = "http://image.tmdb.org/t/p/w300/" + film.poster_path;
        } else poster_path = "https://via.placeholder.com/300x450?text=Poster+not+found";
        $("#searchResult").append("<div class='film' id='film" + film.id + "'></div>");
        $("#film" + film.id).append(`<div class="card" id="cardGenre"  onclick="window.location.replace('/vues/films/film.php?id=${film.id}')"><div class="title"><div class="rating"><span class="material-icons-outlined">star_half</span>${film.vote_average}</div><h2>${title}</h2></div><img id="poster" src="${poster_path}" alt="poster"></div>`);

    });
}

//execution of functions


var id = $("#id").val();
var major = $("#major").val();
var page = $("#page").val();

$.ajax({
    type: "GET",
    url: "https://api.themoviedb.org/3/genre/movie/list?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US",
    dataType: "json",
    success: function(response) {
        displayGenres(response.genres);
    }
});


setPage();
console.log(major);
console.log(id);


$('select').on('change', function() {
    search(page);
});