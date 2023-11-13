<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};

blog::create([     
    'tittle' => 'Judul Ketiga',  
    'slug'  => 'judul-Ketiga',
    'excerpt' => 'Lorem ipsum Ketiga',     
    'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quasi esse perspiciatis?</p><p> Eaque magni aspernatur a enim illum blanditiis ad asperiores eligendi praesentium eos? Aut, veniam provident, tempora explicabo in blanditiis, eum facere aliquid commodi odit beatae maiores tempore aperiam sed quisquam eligendi est delectus nesciunt? Voluptas neque illo,</p><p> temporibus eveniet odio porro nam numquam soluta, illum eaque veniam necessitatibus consectetur omnis excepturi quibusdam quas a dicta dolor ipsa praesentium animi provident nesciunt laudantium! Pariatur consequatur aliquid error quidem ullam. Distinctio tempora beatae odit officiis expedita ipsum autem quibusdam. Molestiae, reiciendis voluptates? Earum dolores eaque dicta necessitatibus? Deserunt corporis, quod, pariatur mollitia possimus molestias laudantium repellat maxime, obcaecati officiis odit neque officia. Beatae corporis atque excepturi optio assumenda, cum provident sunt debitis earum expedita repudiandae fugiat ad ratione quis asperiores sit aut ipsa dolores. Fuga asperiores, delectus iste dolor accusantium temporibus facilis! Assumenda temporibus sit, nam earum architecto magnam veritatis.</p>' 
    ])

