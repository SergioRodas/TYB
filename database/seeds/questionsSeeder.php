<?php

use Illuminate\Database\Seeder;

class questionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //PREGUNTAS SOBRE DEPORTES


      $preguntaUnoDeportes = DB::table("preguntas")->insert(
        [
          "id" => 1,
          "detalle" => "¿Cada cuánto se juega un mundial de fútbol?",
          "categoria_id" => 1
        ]
      );
      $preguntaDosDeportes = DB::table("preguntas")->insert(
        [
          "id" => 2,
          "detalle" => "¿Cuál es el país que mas veces ganó la Copa Davis?",
          "categoria_id" => 1
        ]
      );
      $preguntaTresDeportes = DB::table("preguntas")->insert(
        [
          "id" => 3,
          "detalle" => "¿En qué deporte se destaca Tiger Woods?",
          "categoria_id" => 1
        ]
      );
      $preguntaCuatroDeportes = DB::table("preguntas")->insert(
        [
          "id" => 4,
          "detalle" => "¿Cuál de estos pilotos ganó más campeonatos del mundo en la Fórmula 1?(2020)",
          "categoria_id" => 1
        ]
      );
      $preguntaCincoDeportes = DB::table("preguntas")->insert(
        [
          "id" => 5,
          "detalle" => "¿Cuál de estos jugadores es el máximo goleador de la historia de los mundiales de fútbol (2020)?",
          "categoria_id" => 1
        ]
      );

      //PREGUNTAS SOBRE CURIOSIDADES


      $preguntaUnoCuriosidades = DB::table("preguntas")->insert(
        [
          "id" => 6,
          "detalle" => "¿Cuántos corazones tiene un pulpo?",
          "categoria_id" => 2
        ]
      );
      $preguntaDosCuriosidades = DB::table("preguntas")->insert(
        [
          "id" => 7,
          "detalle" => "¿De qué está conformada la lluvia en Júpiter y Saturno?",
          "categoria_id" => 2
        ]
      );
      $preguntaTresCuriosidades = DB::table("preguntas")->insert(
        [
          "id" => 8,
          "detalle" => "¿Cuál es el metal más caro del mundo?",
          "categoria_id" => 2
        ]
      );
      $preguntaCuatroCuriosidades = DB::table("preguntas")->insert(
        [
          "id" => 9,
          "detalle" => "¿Cuál es el animal con más dientes del mundo?",
          "categoria_id" => 2
        ]
      );
      $preguntaCincoCuriosidades = DB::table("preguntas")->insert(
        [
          "id" => 10,
          "detalle" => "¿Cuál de estas ciudades es considerada la mas fría del mundo?",
          "categoria_id" => 2
        ]
      );


      //PREGUNTAS SOBRE GAME OF THRONES


      $preguntaUnoGOT = DB::table("preguntas")->insert(
        [
          "id" => 11,
          "detalle" => "¿Cómo se llama el lobo huargo de Jon Snow?",
          "categoria_id" => 3
        ]
      );
      $preguntaDosGOT = DB::table("preguntas")->insert(
        [
          "id" => 12,
          "detalle" => "¿Cuántos hijos tiene Ned?",
          "categoria_id" => 3
        ]
      );
      $preguntaTresGOT = DB::table("preguntas")->insert(
        [
          "id" => 13,
          "detalle" => "¿Quién es conocida como La Reina de las Espinas?",
          "categoria_id" => 3
        ]
      );
      $preguntaCuatroGOT = DB::table("preguntas")->insert(
        [
          "id" => 14,
          "detalle" => "¿A quién mató La Montaña?",
          "categoria_id" => 3
        ]
      );
      $preguntaCincoGOT = DB::table("preguntas")->insert(
        [
          "id" => 15,
          "detalle" => "¿A qué deidad sigue Melisandre?",
          "categoria_id" => 3
        ]
      );


            //PREGUNTAS SOBRE ANIMALES


            $preguntaUnoAnimales = DB::table("preguntas")->insert(
              [
                "id" => 16,
                "detalle" => "¿Quién es el principal depredador de las jirafas?",
                "categoria_id" => 4
              ]
            );
            $preguntaDosAnimales = DB::table("preguntas")->insert(
              [
                "id" => 17,
                "detalle" => "Las moscas, zumban siempre en una escala musical. ¿Sabrías cual?",
                "categoria_id" => 4
              ]
            );
            $preguntaTresAnimales = DB::table("preguntas")->insert(
              [
                "id" => 18,
                "detalle" => "¿Cuál es el mamífero mas veloz sobre la tierra?",
                "categoria_id" => 4
              ]
            );
            $preguntaCuatroAnimales = DB::table("preguntas")->insert(
              [
                "id" => 19,
                "detalle" => "¿Cuál es el felino más grande del mundo?",
                "categoria_id" => 4
              ]
            );
            $preguntaCincoAnimales = DB::table("preguntas")->insert(
              [
                "id" => 20,
                "detalle" => "¿En qué estación del año el ciervo pierde sus cuernos?",
                "categoria_id" => 4
              ]
            );

            //PREGUNTAS SOBRE SUPERHÉROES


            $preguntaUnoSuperheroes = DB::table("preguntas")->insert(
              [
                "id" => 21,
                "detalle" => "¿Cuál es el nombre real de Deadpool?",
                "categoria_id" => 5
              ]
            );
            $preguntaDosSuperheroes = DB::table("preguntas")->insert(
              [
                "id" => 22,
                "detalle" => "¿Cuál de estos personajes es hijo de Charles Xavier?",
                "categoria_id" => 5
              ]
            );
            $preguntaTresSuperheroes = DB::table("preguntas")->insert(
              [
                "id" => 23,
                "detalle" => "¿Con qué Vengador formó equipo Wolverine en 'Old Man Logan'?",
                "categoria_id" => 5
              ]
            );
            $preguntaCuatroSuperheroes = DB::table("preguntas")->insert(
              [
                "id" => 24,
                "detalle" => "¿Cuál es el trabajo diurno de Daredevil?",
                "categoria_id" => 5
              ]
            );
            $preguntaCincoSuperheroes = DB::table("preguntas")->insert(
              [
                "id" => 25,
                "detalle" => "¿A quién golpea el Capitán América en la portada de su primer comic?",
                "categoria_id" => 5
              ]
            );

            //PREGUNTAS SOBRE HISTORIA


            $preguntaUnoHistoria = DB::table("preguntas")->insert(
              [
                "id" => 26,
                "detalle" => "¿En qué guerra participó Juana de Arco?",
                "categoria_id" => 6
              ]
            );
            $preguntaDosHistoria = DB::table("preguntas")->insert(
              [
                "id" => 27,
                "detalle" => "¿Cuál era la capital del Imperio Inca?",
                "categoria_id" => 6
              ]
            );
            $preguntaTresHistoria = DB::table("preguntas")->insert(
              [
                "id" => 28,
                "detalle" => "¿Quién fue el primer emperador romano?",
                "categoria_id" => 6
              ]
            );
            $preguntaCuatroHistoria = DB::table("preguntas")->insert(
              [
                "id" => 29,
                "detalle" => "¿Por qué condenó la Iglesia a Galileo Galilei?",
                "categoria_id" => 6
              ]
            );
            $preguntaCincoHistoria = DB::table("preguntas")->insert(
              [
                "id" => 30,
                "detalle" => "¿En que isla murió Napoleón?",
                "categoria_id" => 6
              ]
            );

            //PREGUNTAS SOBRE LOS SIMPSONS


            $preguntaUnoSimpsons = DB::table("preguntas")->insert(
              [
                "id" => 31,
                "detalle" => "¿Cuál es el nombre de la exitosa periodista amiga de Marge?",
                "categoria_id" => 7
              ]
            );
            $preguntaDosSimpsons = DB::table("preguntas")->insert(
              [
                "id" => 32,
                "detalle" => "El segundo nombre de Milhouse van Houten es...",
                "categoria_id" => 7
              ]
            );
            $preguntaTresSimpsons = DB::table("preguntas")->insert(
              [
                "id" => 33,
                "detalle" => "¿Quién le disparó al Sr. Burns?",
                "categoria_id" => 7
              ]
            );
            $preguntaCuatroSimpsons = DB::table("preguntas")->insert(
              [
                "id" => 34,
                "detalle" => "¿Cuál es el correo electrónico de Homero?",
                "categoria_id" => 7
              ]
            );
            $preguntaCincoSimpsons = DB::table("preguntas")->insert(
              [
                "id" => 35,
                "detalle" => "¿A qué es alérgico Bart?",
                "categoria_id" => 7
              ]
            );

            //PREGUNTAS SOBRE ANIMES


            $preguntaUnoAnimes = DB::table("preguntas")->insert(
              [
                "id" => 36,
                "detalle" => "¿Cuál es el verdadero nombre de Kira en Death Note?",
                "categoria_id" => 8
              ]
            );
            $preguntaDosAnimes = DB::table("preguntas")->insert(
              [
                "id" => 37,
                "detalle" => "¿Cuál de estos no es un villano de Dragon Ball Z?",
                "categoria_id" => 8
              ]
            );
            $preguntaTresAnimes = DB::table("preguntas")->insert(
              [
                "id" => 38,
                "detalle" => "¿Cuál es el personaje más fuerte del anime?",
                "categoria_id" => 8
              ]
            );
            $preguntaCuatroAnimes = DB::table("preguntas")->insert(
              [
                "id" => 39,
                "detalle" => "En 'Toradora', ¿cómo llaman a Taiga?",
                "categoria_id" => 8
              ]
            );
            $preguntaCincoAnimes = DB::table("preguntas")->insert(
              [
                "id" => 40,
                "detalle" => "¿Cuántos pokémon pseudo-legendarios existen, además de Dragonite?",
                "categoria_id" => 8
              ]
            );

            //PREGUNTAS SOBRE HARRY POTTER


            $preguntaUnoHP = DB::table("preguntas")->insert(
              [
                "id" => 41,
                "detalle" => "¿Cómo se llama la calle donde vive la familia Dursley?",
                "categoria_id" => 9
              ]
            );
            $preguntaDosHP = DB::table("preguntas")->insert(
              [
                "id" => 42,
                "detalle" => "¿Qué regalo por parte de sus amos hace libres a los elfos domésticos?",
                "categoria_id" => 9
              ]
            );
            $preguntaTresHP = DB::table("preguntas")->insert(
              [
                "id" => 43,
                "detalle" => "¿En qué trabaja Charlie Weasley?",
                "categoria_id" => 9
              ]
            );
            $preguntaCuatroHP = DB::table("preguntas")->insert(
              [
                "id" => 44,
                "detalle" => "¿Qué animales tiran del carruaje que lleva a Hogwarts?",
                "categoria_id" => 9
              ]
            );
            $preguntaCincoHP = DB::table("preguntas")->insert(
              [
                "id" => 45,
                "detalle" => "¿Cuál es la fecha de cumpleaños de Harry Potter?",
                "categoria_id" => 9
              ]
            );





    }
}
