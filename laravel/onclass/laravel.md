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

// Chạy dự án:
php artisan serve

#### VALIDATION

Cách 1:
$this->validate($request, [
"name" => "required|min:5|max:50",
"image" => "required",
"price" => "required|numeric|min:1000|max:5000000",
], [
"name.required" => "Name not empty",
"name.min" => "Name at least 5 characters",
"name.max" => "Name at maximum 50 characters",
"image.required" => "Name not empty",
"price.required" => "Price not empty",
"price.min" => "Price at least 1000",
"price.max" => "Price at maximum 5000000",
]);
CÁCH 2: dùng custom lại REQUEST
php artisan make:request ProductAdminRequest

- nhớ
  public function authorize(): bool
  {
  return true;
  }
- thêm rules () và message()

##### PHẦN VIEW

old('fieldName')
