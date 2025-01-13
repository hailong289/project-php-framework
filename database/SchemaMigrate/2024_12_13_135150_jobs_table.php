<?php
namespace App\Database\SchemaMigrate;
use Hola\Database\Structure\Table;
use Hola\Database\Structure\DBSchema;
use Hola\Database\TableMigration;

class CreateJobs extends TableMigration {
    public function up() {
        DBSchema::createTable('jobs', function(Table $table) {
            $table->integer('id', true)->notNull();
            $table->text('data')->null();
            $table->varchar('queue')->default('jobs');
            $table->dateTime('created_at')->defaultCurrentTimestamp();
            $table->dateTime('updated_at')->null();
        });
        DBSchema::createTable('failed_jobs', function(Table $table) {
            $table->integer('id', true)->notNull();
            $table->text('data')->null();
            $table->varchar('queue')->default('jobs');
            $table->text('exception')->null();
            $table->dateTime('created_at')->defaultCurrentTimestamp();
            $table->dateTime('updated_at')->null();
        });
    }
    public function down() {
        DBSchema::dropTable('jobs');
        DBSchema::dropTable('failed_jobs');
    }
    
}