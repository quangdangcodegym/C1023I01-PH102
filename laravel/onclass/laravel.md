#### Tạo controller

php artisan make:controller ProductController

### Chạy migration

php artisan migrate

### tạo migration - tạo mới bảng

php artisan make:migration create_users_table --create=users

### migration - sửa bảng

php artisan make:migration add_votes_to_users_table --table=users
php artisan make:migration add_fk_class_name_id --table=students

##### Tạo khóa ngoại

$table->foreign('user_id')->references('id')->on('users');

### rollback migration

php artisan migrate:rollback

#### Tạo seeeder

php artisan make:seeder UsersTableSeeder

Chạy seeder (DatabaseSeeder):
php artisan db:seed

// ORM: object relational mapping

// Tạo Model
php artisan make:model User

// Tạo controller

php artisan make:controller ProductController
