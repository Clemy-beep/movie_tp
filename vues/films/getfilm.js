var id = $("#movie_id").html();

$.ajax({
    type: "GET",
    url: "https://api.themoviedb.org/3/movie/" + id + "?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US",
    dataType: "json",
    success: function(response) {
        displayFilm(response);
    }
});

function displayFilm(film) {
    let language;
    switch (film.original_language) {
        case 'en':
            language = "English";
            break;
        case 'jp':
            language = "Japanese";
            break;
        case 'fr':
            language = "French";
            break;
        default:
            language = "Undefined";
            break;
    }
    console.log(film);
    $("#movietitle").append(`<h1>${film.title}</h1><div class="rating"><span class="material-icons-outlined">star_half</span>${film.vote_average}</div>`);
    $("#movie-infos").append(`<img src="http://image.tmdb.org/t/p/w300/${film.poster_path}" alt="poster">`);
    $("#movie-specs").append(`<h2><span class="material-icons-outlined">description</span> Resume</h2><p>${film.overview}</p>`);
    $("#movie-specs").append(`<h2><span class="material-icons-outlined">language</span> Original language</h2><p>${language}</p>`);


}