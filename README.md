## Start the Project
Clone or Download the Project<br/>
<br/>

## Create MySQL Database
Create 'notes' table:<br/>
<br/>
mysql> create table notes (<br/>
    id int not null auto_increment,<br/>
    title varchar(100) not null,<br/>
    body text not null,<br/>
    primary key(id)<br/>
);<br/>
<br/>
Check table:<br/>
<br/>
mysql> show tables;<br/>
+-----------------+<br/>
| Tables_in_notes |<br/>
+-----------------+<br/>
| notes           |<br/>
+-----------------+<br/>
<br/>
mysql> show columns from notes;<br/>
+-------+--------------+------+-----+---------+----------------+<br/>
| Field | Type         | Null | Key | Default | Extra          |<br/>
+-------+--------------+------+-----+---------+----------------+<br/>
| id    | int          | NO   | PRI | NULL    | auto_increment |<br/>
| title | varchar(100) | NO   |     | NULL    |                |<br/>
| body  | text         | NO   |     | NULL    |                |<br/>
+-------+--------------+------+-----+---------+----------------+<br/>
<br/>

## Routes
<br/>
Show all: <br/>
Route::get('/notes', [NoteController::class, 'all']); <br/>
GET - http://127.0.0.1:8000/api/notes <br/>
<br/>
Show one: <br/>
Route::get('/note/{id}', [NoteController::class, 'one']); <br/>
GET - http://127.0.0.1:8000/api/note/1 <br/>
<br/>
Create new note: <br/>
Route::post('/note', [NoteController::class, 'new']); <br/>
POST - http://127.0.0.1:8000/api/note <br/>
<br/>
Update a note: <br/>
Route::put('/note/{id}', [NoteController::class, 'edit']); <br/>
PUT - http://127.0.0.1:8000/api/note/1<br/>
<br/>
delete a note: <br/>
Route::delete('/note/{id}', [NoteController::class, 'delete']); <br/>
DELETE - http://127.0.0.1:8000/api/note/1 <br/>
<br/>

## Serve
<br/>
php artisan serve<br/>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
