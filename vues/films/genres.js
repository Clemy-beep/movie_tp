$.ajax({
    type: "GET",
    url: "https://api.themoviedb.org/3/genre/movie/list?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US",
    dataType: "json",
    success: function(response) {
        displayGenres(response.genres);
    }
});

function displayGenres(genres) {
    genres.forEach(genre => {
        $("#genres").append(`<div id="genre" onclick="window.location.replace('/vues/films/genres.php?id=${genre.id}')">${genre.name}</div>`);

    });
}

var id = $("#id").val();
var major = $("#major").val();
console.log(major);
console.log(id);
if (id !== "")
    $.ajax({
        type: "GET",
        url: "https://api.themoviedb.org/3/discover/movie?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US&include_adult=" + major + "&with_genres=" + id,
        dataType: "json",
        success: function(response) {
            displayFilms(response.results);
        }
    });

function displayFilms(films) {
    var title = "";

    films.forEach(film => {
        if (film.title === undefined) {
            title = film.original_name;
        } else title = film.title;
        $("#searchResult").append("<div style='width:25%' class='film' id='film" + film.id + "'></div>");
        $("#film" + film.id).append(`<div class="card" id="cardDay"  onclick="window.location.replace('/vues/films/film.php?id=${film.id}')"><div class="title"><div class="rating"><span class="material-icons-outlined">star_half</span>${film.vote_average}</div><h2>${title}</h2></div><img id="poster" src="http://image.tmdb.org/t/p/w300/${film.poster_path}" alt="poster"></div>`);
    });
}