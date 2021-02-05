# imdb2.0

+--------+----------+------------------+------+----------------------------------------------+------------+
| Domain | Method   | URI              | Name | Action                                       | Middleware |
+--------+----------+------------------+------+----------------------------------------------+------------+
|        | GET|HEAD | /                |      | Closure                                      | web        |
|        | POST     | api/createMovie  |      | App\Http\Controllers\MovieController@create  | api        |
|        | POST     | api/createReview |      | App\Http\Controllers\ReviewController@create | api        |
|        | POST     | api/createUser   |      | App\Http\Controllers\UserController@create   | api        |
|        | DELETE   | api/deleteMovie  |      | App\Http\Controllers\MovieController@delete  | api        |
|        | DELETE   | api/deleteReview |      | App\Http\Controllers\ReviewController@delete | api        |
|        | DELETE   | api/deleteUser   |      | App\Http\Controllers\UserController@delete   | api        |
|        | GET|HEAD | api/getMovie     |      | App\Http\Controllers\MovieController@get     | api        |
|        | GET|HEAD | api/getReview    |      | App\Http\Controllers\ReviewController@get    | api        |
|        | GET|HEAD | api/getUser      |      | App\Http\Controllers\UserController@get      | api        |
|        | GET|HEAD | api/listMovies   |      | App\Http\Controllers\MovieController@list    | api        |
|        | GET|HEAD | api/listReviews  |      | App\Http\Controllers\ReviewController@list   | api        |
|        | GET|HEAD | api/listUsers    |      | App\Http\Controllers\UserController@list     | api        |
+--------+----------+------------------+------+----------------------------------------------+------------+
