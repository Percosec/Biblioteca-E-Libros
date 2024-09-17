<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = new Book();
        $book->title = "El Señor de los Anillos";
        $book->author = "J.R.R. Tolkien";
        $book->description = "Reedición recopilatoria de la saga.Los Anillos de Poder fueron forjados en antiguos tiempos por los herreros Elfos, y Sauron, el Señor Oscuro, forjó el Anillo Único. Pero en una ocasión se lo quitaron, y aunque lo buscó por toda la Tierra Media nunca pudo encontrarlo.";
        $book->image = "https://images.cdn1.buscalibre.com/fit-in/360x360/35/2e/352e63af40b5cc4eada5cee03da49412.jpg";
        $book->price = 247.83;
        $book->save();

        $book2 = new Book();
        $book2->title = "La Metamorfosis";
        $book2->author = "Franz Kafka";
        $book2->description = "Al despertar Gregorio Samsa una mañana, tras un sueño intranquilo, se encontró en su cama convertido en un monstruoso insecto. Tal es el abrupto comienzo, que nos sitúa de raíz bajo unas reglas distintas, de La metamorfosis, sin duda alguna la obra de Franz Kafka que ha alcanzado mayor celebridad.";
        $book2->image = "https://images.cdn3.buscalibre.com/fit-in/360x360/57/3b/573b138eb66205768eea6ca1cf09ffe3.jpg";
        $book2->price = 59.17;
        $book2->save();


        $book3 = new Book();
        $book3->title = "Invitacion al viaje y otros cuentos ineditos";
        $book3->author = "Julio Ramón Ribeyro";
        $book3->description = "Julio Ramón Ribeyro es el mayor cuentista de la literatura peruana, por lo que la publicación de Invitación al viaje y otros cuentos inéditos configura un auténtico acontecimiento literario.";
        $book3->image = "https://images.cdn3.buscalibre.com/fit-in/360x360/cb/fd/cbfdb75d14cbd6a3fe0b0c5c21e359a7.jpg";
        $book3->price = 57.23;
        $book3->save();
        

        $book4 = new Book();
        $book4->title = "En agosto nos vemos";
        $book4->author = "Gabriel García Márquez";
        $book4->description = "Cada mes de agosto Ana Magdalena Bach toma el transbordador hasta la isla donde está enterrada su madre para visitar la tumba en la que yace. Esas visitas acaban suponiendo una irresistible invitación a convertirse en una persona distinta durante una noche al año.";
        $book4->image = "https://images.cdn3.buscalibre.com/fit-in/360x360/0f/11/0f1142b32f0dd6af6f1c654030420866.jpg";
        $book4->price = 57.23;
        $book4->save();

        $book5 = new Book();
        $book5->title = "Shogun";
        $book5->author = "James Clavell";
        $book5->description = "La clásica novela épica sobre el Japón feudal que cautivó el corazón de una cultura y la imaginación del mundo, escrita por James Clavell, autor best seller de The New York Times y maestro sin parangón de la ficción histórica.";
        $book5->image = "https://images.cdn2.buscalibre.com/fit-in/360x360/d8/4a/d84a38b16289248a41c641d2d9e6f9ea.jpg";
        $book5->price = 89.95;
        $book5->save();

        $book6 = new Book();
        $book6->title = "100 grandes triunfos. Épicos partidos en cien años de garra";
        $book6->author = "Varios Autores";
        $book6->description = "Es un emocionante repaso por los cien años de historia del Club Universitario de Deportes. Gracias a informaciones, anécdotas, reflexiones, datos y fotografías inéditas, once cronistas deportivos identificados con la U narran, con buen estilo, los cien triunfos de gloria y garra del equipo crema.";
        $book6->image = "https://images.cdn2.buscalibre.com/fit-in/360x360/db/4a/db4aaac6980bbc12b0743d150f2f98c2.jpg";
        $book6->price = 46.56;
        $book6->save();

        $book7 = new Book();
        $book7->title = "El Libro de Bill";
        $book7->author = "Alex Hirsch";
        $book7->description = "El demonio que aterrorizó Gravity Falls está de vuelta desde el más allá para contar por fin su versión de la historia en El libro de Bill, escrito nada menos que por el mismísimo Bill Clave.";
        $book7->image = "https://images.cdn2.buscalibre.com/fit-in/360x360/18/89/1889c9c15f3f57e16314beace0f92827.jpg";
        $book7->price = 46.56;
        $book7->save();

        $book8 = new Book();
        $book8->title = "El Perfil del Lagarto";
        $book8->author = "Carlos Paredes";
        $book8->description = "El perfil de uno de los actores políticos más polémicos de la escena nacional que propició el destape del vacunagate peruano, el caso de corrupción más grande de los últimos tiempos.";
        $book8->image = "https://images.cdn3.buscalibre.com/fit-in/360x360/27/33/2733173fc79918515d225c6ced47964f.jpg";
        $book8->price = 38.70;
        $book8->save();
    }
}
