<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {

        $table -> bigInteger('category_id') -> unsigned() -> index();//tabella riferimento
        $table -> foreign('category_id', 'relationPostCategory')
               -> references('id')//colonna
               -> on('categories');//tabella
      });

      Schema::table('post_tag', function (Blueprint $table) {

        $table -> bigInteger('post_id') -> unsigned() -> index();//tabella riferimento
        $table -> foreign('post_id', 'relationPostsTags')
               -> references('id')//colonna
               -> on('posts');//tabella

        $table -> bigInteger('tag_id') -> unsigned() -> index();//tabella riferimento
        $table -> foreign('tag_id', 'relationTagsPosts')
               -> references('id')//colonna
               -> on('tags');//tabella
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function (Blueprint $table) {

        $table -> dropForeign('relationPostCategory');
        $table -> dropColumn('category_id');

        $table -> dropForeign('relationPostsTags');
        $table -> dropColumn('post_id');

        $table -> dropForeign('relationTags-Posts');
        $table -> dropColumn('tag_id');
      });
    }
}
