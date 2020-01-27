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
            $table->string('menuroles');
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
        Schema::create('facebook_leads', function (Blueprint $table) {
            $table->string('facebook_id');
            $table->dateTime('registered_date');
            $table->string('email');
            $table->string('full_name');
            $table->string('phone_number');
            $table->timestamps();
            $table->increments('id');
        });
        Schema::create('flagship_styles', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('image_url')->nullable();
            $table->text('description');
        });
        Schema::create('home_how_it_works',function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('image_url')->nullable();
            $table->text('description');
            $table->string('title');
            $table->boolean('is_published');
        });
        Schema::create('how_it_works', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(false);
            $table->integer('index')->unique()->nullable();
        });
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue');
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
            $table->index(['queue', 'reserved_at']);
        });
        Schema::create('leather', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('color');
            $table->text('description');
            $table->string('picture')->nullable();
        });
        Schema::create('leather_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('leather_id');
            $table->integer('shoe_category_id');
        });
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('height')->nullable();
            $table->string('height_unit')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_unit')->nullable();
            $table->string('race')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('left_foot_length')->nullable();
            $table->string('left_toes_girth')->nullable();
            $table->string('left_ball_girth')->nullable();
            $table->string('left_ball_width')->nullable();
            $table->string('left_instep_height')->nullable();
            $table->string('right_foot_length')->nullable();
            $table->string('right_toes_girth')->nullable();
            $table->string('right_ball_girth')->nullable();
            $table->string('right_ball_width')->nullable();
            $table->string('right_instep_height')->nullable();
            $table->string('platform')->nullable();
            $table->string('code')->nullable();
        });
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('news_category_id');
            $table->text('title');
            $table->longText('content');
            $table->text('subtitle');
            $table->string('image_1')->nullable();
            $table->boolean('is_published')->default(false);
        });
        Schema::create('news_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_en');
            $table->string('name_vi');
        });
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_en');
            $table->string('title_vi');
            $table->string('description_en');
            $table->string('description_vi');
            $table->boolean('is_shown')->default(true);
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
        Schema::create('outsole_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('description');
            $table->string('picture')->nullable();
        });
        Schema::create('outsole_types_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('outsole_type_id');
            $table->integer('shoe_category_id');
        });
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('is_published');
            $table->string('page_name');
            $table->text('video')->nullable();
        });
        Schema::create('pages_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('page_id');
            $table->string('key');
            $table->longText('value')->nullable();
            $table->boolean('available')->default(false);
        });
        Schema::create('pre_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('package_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
        });
        Schema::create('product_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_published')->default(false);
            $table->integer('index')->unique()->nullable();
        });
        Schema::create('product_feature_details', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->integer('product_feature')->nullable();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->longText('content');
            $table->integer('owner');
            $table->integer('views')->default(0);
            $table->boolean('is_published')->default(false);
        });
        Schema::create('product_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('price');
            $table->integer('volume');
            $table->text('description');
            $table->boolean('available')->default(false);
            $table->integer('shoe_category_id');
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('index')->default(0);
        });
        Schema::create('shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
        });

        Schema::create('shoe_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::create('shoe_styles',function (Blueprint $table){
            $table->increments('id');
            $table->integer('shoe_types_id');
            $table->string('name');
            $table->text('description');
            $table->text('sub_description');
            $table->bigInteger('price');
            $table->string('image_url')->nullable();
            $table->timestamps();
            $table->bigInteger('discount_price');
            $table->longText('extra')->nullable();
        });
        Schema::create('shoe_styles_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('shoe_style_id');
            $table->integer('shoe_category_id');
        });
        Schema::create('shoe_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('main_name')->unique();
            $table->string('image_url')->nullable();
            $table->text('description');
            $table->integer('index')->unique()->nullable();
            $table->string('sub_name');
            $table->longText('description_home')->nullable();
            $table->longText('description_shoe_types')->nullable();
        });
        Schema::create('shoe_types_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('shoe_types_id');
            $table->integer('shoe_category_id');
        });
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_published')->default(false);
        });
        Schema::create('toe_shapes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('description');
            $table->string('picture')->nullable();
        });
        Schema::create('toe_shapes_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('toe_shape_id');
            $table->integer('shoe_category_id');
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
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('notes');
        Schema::dropIfExists('status');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('menu_role');
        Schema::drop('about_us');
        Schema::drop('about_us_description');
        Schema::drop('activity_histories');
        Schema::drop('buyer_contacts');
        Schema::drop('configurations');
        Schema::drop('email_templates');
        Schema::drop('facebook_leads');
        Schema::drop('flagship_styles');
        Schema::drop('home_how_it_works');
        Schema::drop('how_it_works');
        Schema::drop('jobs');
        Schema::drop('leather');
        Schema::drop('leather_shoe_categories');
        Schema::drop('measurements');
        Schema::drop('news');
        Schema::drop('news_categories');
        Schema::drop('notifications');
        Schema::drop('orders');
        Schema::drop('outsole_types');
        Schema::drop('outsole_types_shoe_categories');
        Schema::drop('pages');
        Schema::drop('pages_meta');
        Schema::drop('pre_orders');
        Schema::drop('product_feature');
        Schema::drop('product_feature_details');
        Schema::drop('product_packages');
        Schema::drop('shoe_categories');
        Schema::drop('shoe_sizes');
        Schema::drop('shoe_styles');
        Schema::drop('shoe_styles_shoe_categories');
        Schema::drop('shoe_types');
        Schema::drop('shoe_types_shoe_categories');
        Schema::drop('slider');
        Schema::drop('toe_shapes');
        Schema::drop('toe_shapes_shoe_categories');
    }
}
