<?php

use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deportes = DB::table("categorias")->insert(
          [
            "id" => 1,
            "nombre" => "Deportes",
            "descripcion" => "¿Crees que sabes mucho sobre deportes en general? Pon a prueba tus conocimientos sobre fútbol, tenis, basket, handball y muchas otras disciplinas.",
            "imagen" => "img/deportes.jpg"
          ]
        );
        $curiosidades = DB::table("categorias")->insert(
          [
            "id" => 2,
            "nombre" => "Curiosidades",
            "descripcion" => "Datos curiosos que no todo el mundo conoce, juega y descubre si eres de ese pequeño porcentaje de la gente que puede responder bien estas preguntas. Anímate, puede resultar muy interesante!",
            "imagen" => "img/pregunta.jpg"
          ]
        );
        $gameOfThrones = DB::table("categorias")->insert(
          [
            "id" => 3,
            "nombre" => "Game Of Thrones",
            "descripcion" => "Esta serie relata las vivencias de un grupo de personajes de distintas casas nobiliarias en el continente ficticio Poniente para tener el control del Trono de Hierro y gobernar los siete reinos que conforman el territorio. Cuenta con 8 temporadas, y es la serie mas premiada de la historia. Eres un verdadero aficionado? Demuestralo..",
            "imagen" => "img/got.jpg"
          ]
        );
        $animales = DB::table("categorias")->insert(
          [
            "id" => 4,
            "nombre" => "Animales",
            "descripcion" => "Preguntas acerca de los seres vivos que integran el reino animal. Si eres un amante de los animales y sabes mucho sobre ellos, de seguro te irá bien... Descubre animalia!",
            "imagen" => "img/animaleshd2.jpg"
          ]
        );
        $superheroes = DB::table("categorias")->insert(
          [
            "id" => 5,
            "nombre" => "Superhéroes",
            "descripcion" => "¿Marvel? ¿DC? Preguntas sobre superhéroes y villanos, si eres un fan de los comics podrás responderlas, evalúa cuánto sabes",
            "imagen" => "img/superheroes.jpg"
          ]
        );
        $historia = DB::table("categorias")->insert(
          [
            "id" => 6,
            "nombre" => "Historia",
            "descripcion" => "Sección de interrogantes sobre historia general, todos deberíamos conocer las respuestas. ¡Vuélvete un poco mas culto!",
            "imagen" => "img/historia.jpg"
          ]
        );
        $losSimpson = DB::table("categorias")->insert(
          [
            "id" => 7,
            "nombre" => "Los Simpson",
            "descripcion" => "Los Simpson son una familia políticamente incorrecta, de clase media, que habita en la ficticia localidad estadounidense de Springfield. Pon a prueba tu fanatismo por la familia más amarilla de la televisión",
            "imagen" => "img/the-simpson.jpg"
          ]
        );
        $animes = DB::table("categorias")->insert(
          [
            "id" => 8,
            "nombre" => "Animes",
            "descripcion" => "Midamos tu conocimiento sobre algunos conceptos típicos del anime y también de algunas series de este tipo. Si eres un verdadero otaku, responderás las preguntas sin ningún problema",
            "imagen" => "img/animes.jpg"
          ]
        );
        $harryPotter = DB::table("categorias")->insert(
          [
            "id" => 9,
            "nombre" => "Harry Potter",
            "descripcion" => "Eres un verdadero fan de la mágica saga de J. K. Rowling? ¿Eres de la auténtica Generación Potter? Responde estas preguntas y compruebalo. Si eres un experto podrás lucirte!",
            "imagen" => "img/HarryPotter.jpg"
          ]
        );
    }
}
