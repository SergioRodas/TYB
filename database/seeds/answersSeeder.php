<?php

use Illuminate\Database\Seeder;

class answersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Respuestas a las preguntas de Deportes
      $respuestaUnoDeportes = DB::table("respuestas")->insert(
        [
          "id" => 1,
          "detalle" => "Cada 4 años",
          "is_correct" => true,
          "pregunta_id" => 1
        ]
      );
      $respuestaDosDeportes = DB::table("respuestas")->insert(
        [
          "id" => 2,
          "detalle" => "Cada 2 años",
          "is_correct" => false,
          "pregunta_id" => 1
        ]
      );
      $respuestaTresDeportes = DB::table("respuestas")->insert(
        [
          "id" => 3,
          "detalle" => "Cada 6 años",
          "is_correct" => false,
          "pregunta_id" => 1
        ]
      );
      $respuestaCuatroDeportes = DB::table("respuestas")->insert(
        [
          "id" => 4,
          "detalle" => "Estados Unidos",
          "is_correct" => true,
          "pregunta_id" => 2
        ]
      );
      $respuestaCincoDeportes = DB::table("respuestas")->insert(
        [
          "id" => 5,
          "detalle" => "Australia",
          "is_correct" => false,
          "pregunta_id" => 2
        ]
      );
      $respuestaSeisDeportes = DB::table("respuestas")->insert(
        [
          "id" => 6,
          "detalle" => "Francia",
          "is_correct" => false,
          "pregunta_id" => 2
        ]
      );
      $respuestaSieteDeportes = DB::table("respuestas")->insert(
        [
          "id" => 7,
          "detalle" => "Golf",
          "is_correct" => true,
          "pregunta_id" => 3
        ]
      );
      $respuestaOchoDeportes = DB::table("respuestas")->insert(
        [
          "id" => 8,
          "detalle" => "Basketball",
          "is_correct" => false,
          "pregunta_id" => 3
        ]
      );
      $respuestaNueveDeportes = DB::table("respuestas")->insert(
        [
          "id" => 9,
          "detalle" => "Tenis",
          "is_correct" => false,
          "pregunta_id" => 3
        ]
      );
      $respuestaDiezDeportes = DB::table("respuestas")->insert(
        [
          "id" => 10,
          "detalle" => "Michael Schumacher",
          "is_correct" => true,
          "pregunta_id" => 4
        ]
      );
      $respuestaOnceDeportes = DB::table("respuestas")->insert(
        [
          "id" => 11,
          "detalle" => "Lewis Hamilton",
          "is_correct" => false,
          "pregunta_id" => 4
        ]
      );
      $respuestaDoceDeportes = DB::table("respuestas")->insert(
        [
          "id" => 12,
          "detalle" => "Juan Manuel Fangio",
          "is_correct" => false,
          "pregunta_id" => 4
        ]
      );
      $respuestaTreceDeportes = DB::table("respuestas")->insert(
        [
          "id" => 13,
          "detalle" => "Miroslav Klose",
          "is_correct" => true,
          "pregunta_id" => 5
        ]
      );
      $respuestaCatorceDeportes = DB::table("respuestas")->insert(
        [
          "id" => 14,
          "detalle" => "Ronaldo Nazário",
          "is_correct" => false,
          "pregunta_id" => 5
        ]
      );
      $respuestaQuinceDeportes = DB::table("respuestas")->insert(
        [
          "id" => 15,
          "detalle" => "Gerd Müller",
          "is_correct" => false,
          "pregunta_id" => 5
        ]
      );



      //Respuestas a las preguntas de Curiosidades
      $respuestaUnoCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 16,
          "detalle" => "3",
          "is_correct" => true,
          "pregunta_id" => 6
        ]
      );
      $respuestaDosCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 17,
          "detalle" => "5",
          "is_correct" => false,
          "pregunta_id" => 6
        ]
      );
      $respuestaTresCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 18,
          "detalle" => "1",
          "is_correct" => false,
          "pregunta_id" => 6
        ]
      );
      $respuestaCuatroCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 19,
          "detalle" => "Llueven diamantes",
          "is_correct" => true,
          "pregunta_id" => 7
        ]
      );
      $respuestaCincoCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 20,
          "detalle" => "Llueven partículas de fuego",
          "is_correct" => false,
          "pregunta_id" => 7
        ]
      );
      $respuestaSeisCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 21,
          "detalle" => "Llueve ácido sulfúrico",
          "is_correct" => false,
          "pregunta_id" => 7
        ]
      );
      $respuestaSieteCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 22,
          "detalle" => "El rodio",
          "is_correct" => true,
          "pregunta_id" => 8
        ]
      );
      $respuestaOchoCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 23,
          "detalle" => "El oro",
          "is_correct" => false,
          "pregunta_id" => 8
        ]
      );
      $respuestaNueveCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 24,
          "detalle" => "El platino",
          "is_correct" => false,
          "pregunta_id" => 8
        ]
      );
      $respuestaDiezCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 25,
          "detalle" => "El caracol",
          "is_correct" => true,
          "pregunta_id" => 9
        ]
      );
      $respuestaOnceCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 26,
          "detalle" => "El pez gato",
          "is_correct" => false,
          "pregunta_id" => 9
        ]
      );
      $respuestaDoceCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 27,
          "detalle" => "El armadillo gigante",
          "is_correct" => false,
          "pregunta_id" => 9
        ]
      );
      $respuestaTreceCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 28,
          "detalle" => "Oimiakón, Rusia",
          "is_correct" => true,
          "pregunta_id" => 10
        ]
      );
      $respuestaCatorceCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 29,
          "detalle" => "Ulán Bator, Mongolia",
          "is_correct" => false,
          "pregunta_id" => 10
        ]
      );
      $respuestaQuinceCuriosidades = DB::table("respuestas")->insert(
        [
          "id" => 30,
          "detalle" => "Barrow, Alaska (EEUU)",
          "is_correct" => false,
          "pregunta_id" => 10
        ]
      );



      //Respuestas a las preguntas de Game of Thrones
      $respuestaUnoGOT = DB::table("respuestas")->insert(
        [
          "id" => 31,
          "detalle" => "Fantasma",
          "is_correct" => true,
          "pregunta_id" => 11
        ]
      );
      $respuestaDosGOT = DB::table("respuestas")->insert(
        [
          "id" => 32,
          "detalle" => "Oscuro",
          "is_correct" => false,
          "pregunta_id" => 11
        ]
      );
      $respuestaTresGOT = DB::table("respuestas")->insert(
        [
          "id" => 33,
          "detalle" => "Niebla",
          "is_correct" => false,
          "pregunta_id" => 11
        ]
      );
      $respuestaCuatroGOT = DB::table("respuestas")->insert(
        [
          "id" => 34,
          "detalle" => "6",
          "is_correct" => true,
          "pregunta_id" => 12
        ]
      );
      $respuestaCincoGOT = DB::table("respuestas")->insert(
        [
          "id" => 35,
          "detalle" => "5",
          "is_correct" => false,
          "pregunta_id" => 12
        ]
      );
      $respuestaSeisGOT = DB::table("respuestas")->insert(
        [
          "id" => 36,
          "detalle" => "3",
          "is_correct" => false,
          "pregunta_id" => 12
        ]
      );
      $respuestaSieteGOT = DB::table("respuestas")->insert(
        [
          "id" => 37,
          "detalle" => "Olenna Tyrell",
          "is_correct" => true,
          "pregunta_id" => 13
        ]
      );
      $respuestaOchoGOT = DB::table("respuestas")->insert(
        [
          "id" => 38,
          "detalle" => "Margaery Tyrell",
          "is_correct" => false,
          "pregunta_id" => 13
        ]
      );
      $respuestaNueveGOT = DB::table("respuestas")->insert(
        [
          "id" => 39,
          "detalle" => "Cersei Lannister",
          "is_correct" => false,
          "pregunta_id" => 13
        ]
      );
      $respuestaDiezGOT = DB::table("respuestas")->insert(
        [
          "id" => 40,
          "detalle" => "Oberyn Martell",
          "is_correct" => true,
          "pregunta_id" => 14
        ]
      );
      $respuestaOnceGOT = DB::table("respuestas")->insert(
        [
          "id" => 41,
          "detalle" => "Ned Stark",
          "is_correct" => false,
          "pregunta_id" => 14
        ]
      );
      $respuestaDoceGOT = DB::table("respuestas")->insert(
        [
          "id" => 42,
          "detalle" => "Jon Snow",
          "is_correct" => false,
          "pregunta_id" => 14
        ]
      );
      $respuestaTreceGOT = DB::table("respuestas")->insert(
        [
          "id" => 43,
          "detalle" => "R'hllor",
          "is_correct" => true,
          "pregunta_id" => 15
        ]
      );
      $respuestaCatorceGOT = DB::table("respuestas")->insert(
        [
          "id" => 44,
          "detalle" => "Dios",
          "is_correct" => false,
          "pregunta_id" => 15
        ]
      );
      $respuestaQuinceGOT = DB::table("respuestas")->insert(
        [
          "id" => 45,
          "detalle" => "K'hllor",
          "is_correct" => false,
          "pregunta_id" => 15
        ]
      );



      //Respuestas a las preguntas de Animales
      $respuestaUnoAnimales = DB::table("respuestas")->insert(
        [
          "id" => 46,
          "detalle" => "Los leones",
          "is_correct" => true,
          "pregunta_id" => 16
        ]
      );
      $respuestaDosAnimales = DB::table("respuestas")->insert(
        [
          "id" => 47,
          "detalle" => "Los guepardos",
          "is_correct" => false,
          "pregunta_id" => 16
        ]
      );
      $respuestaTresAnimales = DB::table("respuestas")->insert(
        [
          "id" => 48,
          "detalle" => "Los tigres",
          "is_correct" => false,
          "pregunta_id" => 16
        ]
      );
      $respuestaCuatroAnimales = DB::table("respuestas")->insert(
        [
          "id" => 49,
          "detalle" => "Fa Mayor",
          "is_correct" => true,
          "pregunta_id" => 17
        ]
      );
      $respuestaCincoAnimales = DB::table("respuestas")->insert(
        [
          "id" => 50,
          "detalle" => "Mi Menor",
          "is_correct" => false,
          "pregunta_id" => 17
        ]
      );
      $respuestaSeisAnimales = DB::table("respuestas")->insert(
        [
          "id" => 51,
          "detalle" => "Re Mayor",
          "is_correct" => false,
          "pregunta_id" => 17
        ]
      );
      $respuestaSieteAnimales = DB::table("respuestas")->insert(
        [
          "id" => 52,
          "detalle" => "Guepardo",
          "is_correct" => true,
          "pregunta_id" => 18
        ]
      );
      $respuestaOchoAnimales = DB::table("respuestas")->insert(
        [
          "id" => 53,
          "detalle" => "Gacela",
          "is_correct" => false,
          "pregunta_id" => 18
        ]
      );
      $respuestaNueveAnimales = DB::table("respuestas")->insert(
        [
          "id" => 54,
          "detalle" => "Ardilla de las Carolinas",
          "is_correct" => false,
          "pregunta_id" => 18
        ]
      );
      $respuestaDiezAnimales = DB::table("respuestas")->insert(
        [
          "id" => 55,
          "detalle" => "El ligre",
          "is_correct" => true,
          "pregunta_id" => 19
        ]
      );
      $respuestaOnceAnimales = DB::table("respuestas")->insert(
        [
          "id" => 56,
          "detalle" => "Tigre siberiano",
          "is_correct" => false,
          "pregunta_id" => 19
        ]
      );
      $respuestaDoceAnimales = DB::table("respuestas")->insert(
        [
          "id" => 57,
          "detalle" => "La pantera",
          "is_correct" => false,
          "pregunta_id" => 19
        ]
      );
      $respuestaTreceAnimales = DB::table("respuestas")->insert(
        [
          "id" => 58,
          "detalle" => "En primavera",
          "is_correct" => true,
          "pregunta_id" => 20
        ]
      );
      $respuestaCatorceAnimales = DB::table("respuestas")->insert(
        [
          "id" => 59,
          "detalle" => "En invierno",
          "is_correct" => false,
          "pregunta_id" => 20
        ]
      );
      $respuestaQuinceAnimales = DB::table("respuestas")->insert(
        [
          "id" => 60,
          "detalle" => "En otoño",
          "is_correct" => false,
          "pregunta_id" => 20
        ]
      );



      //Respuestas a las preguntas de Superhéroes
      $respuestaUnoSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 61,
          "detalle" => "Wade Wilson",
          "is_correct" => true,
          "pregunta_id" => 21
        ]
      );
      $respuestaDosSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 62,
          "detalle" => "Slade Wilson",
          "is_correct" => false,
          "pregunta_id" => 21
        ]
      );
      $respuestaTresSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 63,
          "detalle" => "Ryan Reynolds",
          "is_correct" => false,
          "pregunta_id" => 21
        ]
      );
      $respuestaCuatroSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 64,
          "detalle" => "Legion",
          "is_correct" => true,
          "pregunta_id" => 22
        ]
      );
      $respuestaCincoSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 65,
          "detalle" => "Phoenix",
          "is_correct" => false,
          "pregunta_id" => 22
        ]
      );
      $respuestaSeisSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 66,
          "detalle" => "X-23",
          "is_correct" => false,
          "pregunta_id" => 22
        ]
      );
      $respuestaSieteSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 67,
          "detalle" => "Ojo de Halcón",
          "is_correct" => true,
          "pregunta_id" => 23
        ]
      );
      $respuestaOchoSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 68,
          "detalle" => "Profesor X",
          "is_correct" => false,
          "pregunta_id" => 23
        ]
      );
      $respuestaNueveSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 69,
          "detalle" => "Bestia",
          "is_correct" => false,
          "pregunta_id" => 23
        ]
      );
      $respuestaDiezSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 70,
          "detalle" => "Abogado",
          "is_correct" => true,
          "pregunta_id" => 24
        ]
      );
      $respuestaOnceSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 71,
          "detalle" => "Escritor",
          "is_correct" => false,
          "pregunta_id" => 24
        ]
      );
      $respuestaDoceSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 72,
          "detalle" => "Oficial de Policía",
          "is_correct" => false,
          "pregunta_id" => 24
        ]
      );
      $respuestaTreceSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 73,
          "detalle" => "A Hitler",
          "is_correct" => true,
          "pregunta_id" => 25
        ]
      );
      $respuestaCatorceSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 74,
          "detalle" => "A Stalin",
          "is_correct" => false,
          "pregunta_id" => 25
        ]
      );
      $respuestaQuinceSuperheroes = DB::table("respuestas")->insert(
        [
          "id" => 75,
          "detalle" => "A Franco",
          "is_correct" => false,
          "pregunta_id" => 25
        ]
      );



      //Respuestas a las preguntas de Historia
      $respuestaUnoHistoria = DB::table("respuestas")->insert(
        [
          "id" => 76,
          "detalle" => "La guerra de los 100 años",
          "is_correct" => true,
          "pregunta_id" => 26
        ]
      );
      $respuestaDosHistoria = DB::table("respuestas")->insert(
        [
          "id" => 77,
          "detalle" => "La guerra de los 30 años",
          "is_correct" => false,
          "pregunta_id" => 26
        ]
      );
      $respuestaTresHistoria = DB::table("respuestas")->insert(
        [
          "id" => 78,
          "detalle" => "Primera cruzada",
          "is_correct" => false,
          "pregunta_id" => 26
        ]
      );
      $respuestaCuatroHistoria = DB::table("respuestas")->insert(
        [
          "id" => 79,
          "detalle" => "Cuzco",
          "is_correct" => true,
          "pregunta_id" => 27
        ]
      );
      $respuestaCincoHistoria = DB::table("respuestas")->insert(
        [
          "id" => 80,
          "detalle" => "Machu Picchu",
          "is_correct" => false,
          "pregunta_id" => 27
        ]
      );
      $respuestaSeisHistoria = DB::table("respuestas")->insert(
        [
          "id" => 81,
          "detalle" => "Quito",
          "is_correct" => false,
          "pregunta_id" => 27
        ]
      );
      $respuestaSieteHistoria = DB::table("respuestas")->insert(
        [
          "id" => 82,
          "detalle" => "Cesar Augusto",
          "is_correct" => true,
          "pregunta_id" => 28
        ]
      );
      $respuestaOchoHistoria = DB::table("respuestas")->insert(
        [
          "id" => 83,
          "detalle" => "Calígula",
          "is_correct" => false,
          "pregunta_id" => 28
        ]
      );
      $respuestaNueveHistoria = DB::table("respuestas")->insert(
        [
          "id" => 84,
          "detalle" => "Julio Cesar",
          "is_correct" => false,
          "pregunta_id" => 28
        ]
      );
      $respuestaDiezHistoria = DB::table("respuestas")->insert(
        [
          "id" => 85,
          "detalle" => "Por decir que la Tierra giraba alrededor del Sol",
          "is_correct" => true,
          "pregunta_id" => 29
        ]
      );
      $respuestaOnceHistoria = DB::table("respuestas")->insert(
        [
          "id" => 86,
          "detalle" => "Por decir que la tierra era redonda",
          "is_correct" => false,
          "pregunta_id" => 29
        ]
      );
      $respuestaDoceHistoria = DB::table("respuestas")->insert(
        [
          "id" => 87,
          "detalle" => "Por negar la existencia de Dios",
          "is_correct" => false,
          "pregunta_id" => 29
        ]
      );
      $respuestaTreceHistoria = DB::table("respuestas")->insert(
        [
          "id" => 88,
          "detalle" => "Santa Elena",
          "is_correct" => true,
          "pregunta_id" => 30
        ]
      );
      $respuestaCatorceHistoria = DB::table("respuestas")->insert(
        [
          "id" => 89,
          "detalle" => "Elba",
          "is_correct" => false,
          "pregunta_id" => 30
        ]
      );
      $respuestaQuinceHistoria = DB::table("respuestas")->insert(
        [
          "id" => 90,
          "detalle" => "Cerdeña",
          "is_correct" => false,
          "pregunta_id" => 30
        ]
      );



      //Respuestas a las preguntas de Los Simpsons
      $respuestaUnoLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 91,
          "detalle" => "Chloe Talbot",
          "is_correct" => true,
          "pregunta_id" => 31
        ]
      );
      $respuestaDosLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 92,
          "detalle" => "Christine Savoy",
          "is_correct" => false,
          "pregunta_id" => 31
        ]
      );
      $respuestaTresLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 93,
          "detalle" => "Claire Watson",
          "is_correct" => false,
          "pregunta_id" => 31
        ]
      );
      $respuestaCuatroLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 94,
          "detalle" => "Mussolini",
          "is_correct" => true,
          "pregunta_id" => 32
        ]
      );
      $respuestaCincoLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 95,
          "detalle" => "Stalin",
          "is_correct" => false,
          "pregunta_id" => 32
        ]
      );
      $respuestaSeisLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 96,
          "detalle" => "Salazar",
          "is_correct" => false,
          "pregunta_id" => 32
        ]
      );
      $respuestaSieteLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 97,
          "detalle" => "Maggie Simpsons",
          "is_correct" => true,
          "pregunta_id" => 33
        ]
      );
      $respuestaOchoLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 98,
          "detalle" => "Waylon Smithers",
          "is_correct" => false,
          "pregunta_id" => 33
        ]
      );
      $respuestaNueveLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 99,
          "detalle" => "Moe Szyslak",
          "is_correct" => false,
          "pregunta_id" => 33
        ]
      );
      $respuestaDiezLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 100,
          "detalle" => "amantedelacomida53@aol.com",
          "is_correct" => true,
          "pregunta_id" => 34
        ]
      );
      $respuestaOnceLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 111,
          "detalle" => "reydelasdonas@aol.com",
          "is_correct" => false,
          "pregunta_id" => 34
        ]
      );
      $respuestaDoceLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 112,
          "detalle" => "homeroamamarge@aol.com",
          "is_correct" => false,
          "pregunta_id" => 34
        ]
      );
      $respuestaTreceLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 113,
          "detalle" => "Camarones",
          "is_correct" => true,
          "pregunta_id" => 35
        ]
      );
      $respuestaCatorceLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 114,
          "detalle" => "Maní",
          "is_correct" => false,
          "pregunta_id" => 35
        ]
      );
      $respuestaQuinceLosSimpsons = DB::table("respuestas")->insert(
        [
          "id" => 115,
          "detalle" => "Fresas",
          "is_correct" => false,
          "pregunta_id" => 35
        ]
      );



      //Respuestas a las preguntas de Animes
      $respuestaUnoAnimes = DB::table("respuestas")->insert(
        [
          "id" => 116,
          "detalle" => "Light Yagami",
          "is_correct" => true,
          "pregunta_id" => 36
        ]
      );
      $respuestaDosAnimes = DB::table("respuestas")->insert(
        [
          "id" => 117,
          "detalle" => "Riuk Yagami",
          "is_correct" => false,
          "pregunta_id" => 36
        ]
      );
      $respuestaTresAnimes = DB::table("respuestas")->insert(
        [
          "id" => 118,
          "detalle" => "L",
          "is_correct" => false,
          "pregunta_id" => 36
        ]
      );
      $respuestaCuatroAnimes = DB::table("respuestas")->insert(
        [
          "id" => 119,
          "detalle" => "Krilin",
          "is_correct" => true,
          "pregunta_id" => 37
        ]
      );
      $respuestaCincoAnimes = DB::table("respuestas")->insert(
        [
          "id" => 120,
          "detalle" => "Cell",
          "is_correct" => false,
          "pregunta_id" => 37
        ]
      );
      $respuestaSeisAnimes = DB::table("respuestas")->insert(
        [
          "id" => 121,
          "detalle" => "Freezer",
          "is_correct" => false,
          "pregunta_id" => 37
        ]
      );
      $respuestaSieteAnimes = DB::table("respuestas")->insert(
        [
          "id" => 122,
          "detalle" => "Kami Tenchi de Tenchi Muyo",
          "is_correct" => true,
          "pregunta_id" => 38
        ]
      );
      $respuestaOchoAnimes = DB::table("respuestas")->insert(
        [
          "id" => 123,
          "detalle" => "Wiss de Dragon Ball",
          "is_correct" => false,
          "pregunta_id" => 38
        ]
      );
      $respuestaNueveAnimes = DB::table("respuestas")->insert(
        [
          "id" => 124,
          "detalle" => "Naruto de....Naruto",
          "is_correct" => false,
          "pregunta_id" => 38
        ]
      );
      $respuestaDiezAnimes = DB::table("respuestas")->insert(
        [
          "id" => 125,
          "detalle" => "Tigre compacto",
          "is_correct" => true,
          "pregunta_id" => 39
        ]
      );
      $respuestaOnceAnimes = DB::table("respuestas")->insert(
        [
          "id" => 126,
          "detalle" => "Bestia Parda",
          "is_correct" => false,
          "pregunta_id" => 39
        ]
      );
      $respuestaDoceAnimes = DB::table("respuestas")->insert(
        [
          "id" => 127,
          "detalle" => "Tigre Furioso",
          "is_correct" => false,
          "pregunta_id" => 39
        ]
      );
      $respuestaTreceAnimes = DB::table("respuestas")->insert(
        [
          "id" => 128,
          "detalle" => "6",
          "is_correct" => true,
          "pregunta_id" => 40
        ]
      );
      $respuestaCatorceAnimes = DB::table("respuestas")->insert(
        [
          "id" => 129,
          "detalle" => "7",
          "is_correct" => false,
          "pregunta_id" => 40
        ]
      );
      $respuestaQuinceAnimes = DB::table("respuestas")->insert(
        [
          "id" => 130,
          "detalle" => "0",
          "is_correct" => false,
          "pregunta_id" => 40
        ]
      );



      //Respuestas a las preguntas de Harry Potter
      $respuestaUnoHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 131,
          "detalle" => "4 Privet Drive",
          "is_correct" => true,
          "pregunta_id" => 41
        ]
      );
      $respuestaDosHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 132,
          "detalle" => "13 Grimmauld Place",
          "is_correct" => false,
          "pregunta_id" => 41
        ]
      );
      $respuestaTresHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 133,
          "detalle" => "25 Magnolia Crescent",
          "is_correct" => false,
          "pregunta_id" => 41
        ]
      );
      $respuestaCuatroHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 134,
          "detalle" => "Una prenda de vestir",
          "is_correct" => true,
          "pregunta_id" => 42
        ]
      );
      $respuestaCincoHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 135,
          "detalle" => "Un plato caliente",
          "is_correct" => false,
          "pregunta_id" => 42
        ]
      );
      $respuestaSeisHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 136,
          "detalle" => "Un anillo",
          "is_correct" => false,
          "pregunta_id" => 42
        ]
      );
      $respuestaSieteHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 137,
          "detalle" => "Entrena dragones en Rumanía",
          "is_correct" => true,
          "pregunta_id" => 43
        ]
      );
      $respuestaOchoHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 138,
          "detalle" => "Prepara elfos en Islandia",
          "is_correct" => false,
          "pregunta_id" => 43
        ]
      );
      $respuestaNueveHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 139,
          "detalle" => "Con los Gringotts en Egipto",
          "is_correct" => false,
          "pregunta_id" => 43
        ]
      );
      $respuestaDiezHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 140,
          "detalle" => "Los thestral",
          "is_correct" => true,
          "pregunta_id" => 44
        ]
      );
      $respuestaOnceHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 141,
          "detalle" => "Los centauros",
          "is_correct" => false,
          "pregunta_id" => 44
        ]
      );
      $respuestaDoceHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 142,
          "detalle" => "Los aethonan",
          "is_correct" => false,
          "pregunta_id" => 44
        ]
      );
      $respuestaTreceHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 143,
          "detalle" => "31 de julio",
          "is_correct" => true,
          "pregunta_id" => 45
        ]
      );
      $respuestaCatorceHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 144,
          "detalle" => "30 de junio",
          "is_correct" => false,
          "pregunta_id" => 45
        ]
      );
      $respuestaQuinceHarryPotter = DB::table("respuestas")->insert(
        [
          "id" => 145,
          "detalle" => "25 de marzo",
          "is_correct" => false,
          "pregunta_id" => 45
        ]
      );



    }
}
