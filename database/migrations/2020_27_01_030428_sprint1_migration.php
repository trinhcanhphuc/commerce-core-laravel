<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Sprint1Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id')->nullable();
            $table->string('menuroles')->nullable();
            $table->string('phone', 20)->unique()->nullable();
            $table->boolean('is_locked')->default(false);
            $table->date('birth_day')->nullable();
            $table->string('address', 300)->nullable();
            $table->string('image_1')->nullable();
            $table->string('fb_uid')->nullable();
            $table->string('google_uid')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->string('note_type');
            $table->date('applies_to_date');
            $table->integer('users_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('class');
        });
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('href')->nullable();
            $table->string('icon')->nullable();
            $table->string('slug');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('menu_id')->unsigned();
            $table->integer('sequence');
        });
        Schema::create('menu_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role_name');
            $table->integer('menus_id')->unsigned();
        });
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->boolean('is_banner')->default(false);
        });
        Schema::create('about_us_description', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('description');
            $table->longText('sub_description');
        });
        Schema::create('activity_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('activity_type');
            $table->text('content');
        });
        Schema::create('buyer_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
        });
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('config_key');
            $table->text('config_value')->nullable();
            $table->string('title')->nullable();
            $table->boolean('is_published')->default(false);
        });
        Schema::create('email_templates', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('subject');
            $table->text('content');
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('total_price');
            $table->string('package_id');
            $table->string('email');
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_mine')->nullable();
            $table->string('indiegogo_order_code');
            $table->string('order_number');
            $table->string('type_id')->nullable();
            $table->string('style_id')->nullable();
            $table->string('toe_shape_id')->nullable();
            $table->string('leather_id')->nullable();
            $table->string('outsole_id')->nullable();
            $table->string('decorate')->nullable();
            $table->text('description')->nullable();
            $table->string('owner_id');
            $table->string('quantity');
            $table->string('shoe_size_id')->nullable();
            $table->integer('status')->default(1);
            $table->integer('flagship_style_id')->nullable();
            $table->text('shipping_address')->nullable();
            $table->boolean('measurement_id')->nullable();
        });
        Schema::create('shoe_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shoe_style_id');
            $table->timestamps();
        });
        Schema::create('shoe_styles',function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shoe_type_id');
            $table->string('main_name');
            $table->string('sub_name');
            $table->text('description');
            $table->text('sub_description');
            $table->bigInteger('price');
            $table->bigInteger('discount_price');
            $table->longText('extra')->nullable();
            $table->timestamps();
        });
        Schema::create('shoe_style_colors',function (Blueprint $table) {
            $table->integer('shoe_style_id');
            $table->string('color')->nullable();
            $table->string('image_url')->nullable();
            $table->bigInteger('color_price')->default(0);
            $table->timestamps();
        });
        Schema::create('shoe_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('full_name')->unique();
            $table->text('description');
            $table->integer('index')->unique()->nullable();
            $table->longText('description_home')->nullable();
            $table->longText('description_shoe_types')->nullable();
        });
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_published')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('notes');
        Schema::dropIfExists('status');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('menu_role');
        Schema::dropIfExists('about_us');
        Schema::dropIfExists('about_us_description');
        Schema::dropIfExists('activity_histories');
        Schema::dropIfExists('buyer_contacts');
        Schema::dropIfExists('configurations');
        Schema::dropIfExists('email_templates');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('shoe_sizes');
        Schema::dropIfExists('shoe_styles');
        Schema::dropIfExists('shoe_types');
        Schema::dropIfExists('slider');
    }
}
