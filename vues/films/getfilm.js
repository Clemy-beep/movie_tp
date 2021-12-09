var id = $("#movie_id").val();

$.ajax({
    type: "GET",
    url: "https://api.themoviedb.org/3/movie/" + id + "?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c&language=en-US&append_to_response=videos",
    dataType: "json",
    success: function(response) {
        displayFilm(response);
    },
    error: function(err) {
        showNotFOund();
        console.log(err);
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
        case 'pl':
            language = "Polish";
            break;
        default:
            language = "Undefined";
            break;
    }
    console.log(film);
    $("#movietitle").append(`<h1 style = "padding-left:4em;">${film.title}</h1><div class="rating"><span class="material-icons-outlined">star_half</span>${film.vote_average}</div>`);
    if (film.poster_path !== null)
        $("#movie-infos").append(`<img src="http://image.tmdb.org/t/p/w300/${film.poster_path}" alt="poster">`);
    if (film.homepage !== "")
        $("#movie-specs").append(`<h2><span class="material-icons-outlined">other_houses</span> Homepage</h2><a id="homepage" href="${film.homepage}">${film.homepage}</a>`);
    if (film.tagline !== "")
        $("#movie-specs").append(`<h2><span class="material-icons-outlined">label_important</span> Tagline</h2><p>${film.tagline}</p>`);
    $("#movie-specs").append(`<h2><span class="material-icons-outlined">description</span> Resume</h2><p>${film.overview}</p>`);
    $("#movie-specs").append(`<h2><span class="material-icons-outlined">language</span> Original language</h2><p>${language}</p>`);
    if (film.videos.results.length > 0) {
        $("#movie-specs").append("<h2><span class='material-icons-outlined'>videocam</span> Videos</h2><div id='videos'></div>");
        film.videos.results.forEach(video => {
            getVideo(video.site, video.key);
        });
    }
    $("#movie-specs").append("<h2><span class='material-icons-outlined'>category</span> Genres</h2><div id='genres'></div>");
    film.genres.forEach(genre => {
        $("#genres").append(`<div id="genre" onclick="window.location.replace('/vues/films/genres.php?id=${genre.id}')">${genre.name}</div>`);
    });
}

function showNotFOund() {
    $("#movietitle").append("<h1>Film not found</h1>");
    $("#movie-specs").append("<p>We couldn't find the film you're searching for. You can still look at other films by going back to <a href='./homepage.php'>Home</a></p>");
}

function getVideo(site, key) {
    var url = "";
    switch (site) {
        case 'Youtube':
            url = "https://www.youtube.com/watch?v=";
            break;
        case 'Vimeo':
            url = " https://vimeo.com/";
            break;
        default:
            url = "https://www.youtube.com/watch?v=";
            break;
    }
    $("#videos").append(`<a href="${url + key}">${site} Trailer</a>`);
}