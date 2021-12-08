$.ajax({
    type: "GET",
    url: " https://api.themoviedb.org/3/trending/all/week?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c",
    dataType: "json",
    success: function(response) {
        createCard(response.results);
    }
});

function createCard(films) {
    var title = "";
    var major = $("#major").html();
    if (!major) {
        films.filter(film => film.adult === true);
    }
    if (films.length > 0) {
        films.forEach(film => {
            if (film.title === undefined) {
                title = film.original_name;
            } else title = film.title;

            console.log(film.id);
            $("#carousel").append(`<div class="card"  onclick="window.location.replace('/vues/films/film.php?id=${film.id}')"><div class="title"><div class="rating"><span class="material-icons-outlined">star_half</span>${film.vote_average}</div><h2>${title}</h2></div><img src="http://image.tmdb.org/t/p/w300/${film.poster_path}" alt="poster"></div>`);
        });

    } else $("#carousel").append("<h2>We have no film to show you at the moment</h2>");
}