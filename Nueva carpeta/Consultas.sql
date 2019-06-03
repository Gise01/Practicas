SELECT * FROM movies WHERE release_date>'2000-01-01';

SELECT * FROM movies WHERE release_date BETWEEN '2000-01-01' AND '2010_12-31';

SELECT * FROM actors WHERE first_name <> 'Mark';

SELECT * FROM actors WHERE first_name = 'Sam' OR first_name = 'Mark'; 

SELECT * FROM movies WHERE (release_date<'2000-01-01' OR release_date>'2009-01-01') AND id>10;

SELECT * FROM actors ORDER BY first_name, last_name;

SELECT * FROM movies ORDER BY release_date;

SELECT * FROM movies WHERE release_date > '2000-01-01' ORDER BY release_date, title;

SELECT * FROM movies WHERE release_date > '2000-01-01' ORDER BY release_date LIMIT 3 OFFSET 7;

SELECT * FROM movies WHERE release_date BETWEEN '1999-10-01' AND '2004-12-31' ORDER BY release_date DESC;

SELECT * FROM actors WHERE first_name BETWEEN 'He%' AND 'To%' ORDER BY first_name;

SELECT * FROM movies WHERE title LIKE 'T%' ORDER BY title;

SELECT * FROM movies WHERE (release_date LIKE '%-10-%' OR release_date LIKE '1999-%-%') ORDER BY release_date, title DESC;
SELECT * FROM movies WHERE month(release_date) = 10 OR year(release_date) = 1999 ORDER BY release_date, title DESC;

SELECT * FROM actors WHERE (last_name LIKE '%DE%' OR last_name LIKE '%LL%') AND first_name LIKE '%A%' ORDER BY first_name;

SELECT * FROM movies WHERE (title LIKE '%TOY STORY%' OR title LIKE '%HARRY POTTER%') AND length>119 ORDER BY title, length DESC;

SELECT * FROM movies WHERE rating = '8.3' OR rating = '9.1' OR rating = '9.0' ORDER BY rating;
SELECT * FROM movies WHERE rating IN (8.3, 9.0, 9.1) ORDER BY rating;

SELECT * FROM movies WHERE (length <> 120 AND length <> 150) ORDER BY title;

SELECT id AS id_genero, `name` AS nombre_genero FROM genres ORDER BY nombre_genero;

SELECT movies.titles, genres.nmae FROM movies, genres WHERE movies.genre_id = genres.id ORDER BY movies.title;

SELECT movies.title, actors.first_name FROM movies, actors, actor_movie WHERE actor_movie.actor_id=actors.id AND actor_movie.movie_id=movies.id  ORDER BY movies.title,  actors.first_name;

SELECT actors.first_name, actors.last_name, movies.title FROM movies, actors, actor_movie WHERE actor_movie.actor_id=actors.id AND actor_movie.movie_id=movies.id  ORDER BY movies.title,  actors.first_name;

SELECT COUNT(seasons.serie_id) AS temporadas, series.title FROM seasons, series WHERE series.id = seasons.serie_id GROUP BY seasons.serie_id ORDER BY temporadas DESC;

