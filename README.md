# Base de datos

Hay dos estrategias:

* **Database First** Crear la base y luego adaptar el codigo.   
* **Code First** Creo el codigo, y este crea la base de datos.

# Code First

* Crear el modelo

```php
php artisan make:model Producto 
```

* Crear el factory

El factory sirve para crear una fila en la base de datos.  Usualmente factory sirve para llenar la base de datos con datos ficticios.

```php
php artisan make:factory ProductoFactory
```

y modificar la funcion definitions() con los datos iniciales que deberia tener

```php
    public function definition(): array
    {
        return [
            'nombre'=>'cocacola',
            'precio'=>0,
            'cantidad'=>0
        ];
    }
```

* seeder

Se puede crear un nuevo seeder, o usar el seeder que ya existe

Agregue la siguiente linea a la funcion run del seeder:

```php
 public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Producto::factory(10)->create();
    }
```

* migracion

```bash
php artisan make:migration nombremigracion
```

y modifique el archivo de migración como sigue:

```php
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('precio');
            $table->integer('cantidad');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
```

Luego, modifique el modelo e indique que el modelo tiene un factory

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;
}

```

## Ejecutar migracion
Esto borra la base de datos (tablas y datos), y vuelve a crear las tablas. No agrega datos
```bash
php artisan migrate:fresh 
```

## Ejecutar seeder
Esto agrega datos a las tablas. Cuidado, ya que puede duplicar datos (si se corre mas de una vez)

```bash
php artisan db:seed
```