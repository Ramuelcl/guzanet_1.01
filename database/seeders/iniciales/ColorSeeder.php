<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = array(
    array(
        "name" => "Alice azul",
        "hexa" => "F0F8FF",
        "rgb" => "rgb (240,248,255)",
    ),
    array(
        "name" => "Blanco antiguo",
        "hexa" => "FAEBD7",
        "rgb" => "rgb (250,235,215)",
    ),
    array(
        "name" => "Agua",
        "hexa" => "00FFFF",
        "rgb" => "rgb (0,255,255)",
    ),
    array(
        "name" => "Aguamarina",
        "hexa" => "7FFFD4",
        "rgb" => "rgb (127,255,212)",
    ),
    array(
        "name" => "Azur",
        "hexa" => "F0FFFF",
        "rgb" => "rgb (240,255,255)",
    ),
    array(
        "name" => "Beige",
        "hexa" => "F5F5DC",
        "rgb" => "rgb (245,245,220)",
    ),
    array(
        "name" => "Sopa de mariscos",
        "hexa" => "FFE4C4",
        "rgb" => "rgb (255,228,196)",
    ),
    array(
        "name" => "Negro",
        "hexa" => "000000",
        "rgb" => "rgb (0,0,0)",
    ),
    array(
        "name" => "BlanchedAlmond",
        "hexa" => "FFEBCD",
        "rgb" => "rgb (255,235,205)",
    ),
    array(
        "name" => "Azul",
        "hexa" => "0000FF",
        "rgb" => "rgb (0,0,255)",
    ),
    array(
        "name" => "Violeta Azul",
        "hexa" => "8A2BE2",
        "rgb" => "rgb (138,43,226)",
    ),
    array(
        "name" => "marrón",
        "hexa" => "A52A2A",
        "rgb" => "rgb (165,42,42)",
    ),
    array(
        "name" => "BurlyWood",
        "hexa" => "DEB887",
        "rgb" => "rgb (222,184,135)",
    ),
    array(
        "name" => "CadetBlue",
        "hexa" => "5F9EA0",
        "rgb" => "rgb (95,158,160)",
    ),
    array(
        "name" => "Monasterio",
        "hexa" => "7FFF00",
        "rgb" => "rgb (127,255,0)",
    ),
    array(
        "name" => "Chocolate",
        "hexa" => "D2691E",
        "rgb" => "rgb (210,105,30)",
    ),
    array(
        "name" => "Coral",
        "hexa" => "FF7F50",
        "rgb" => "rgb (255,127,80)",
    ),
    array(
        "name" => "Aciano Azul",
        "hexa" => "6495ED",
        "rgb" => "rgb (100,149,237)",
    ),
    array(
        "name" => "Seda de maiz",
        "hexa" => "FFF8DC",
        "rgb" => "rgb (255,248,220)",
    ),
    array(
        "name" => "carmesí",
        "hexa" => "DC143C",
        "rgb" => "rgb (220,20,60)",
    ),
    array(
        "name" => "Cian",
        "hexa" => "00FFFF",
        "rgb" => "rgb (0,255,255)",
    ),
    array(
        "name" => "Azul oscuro",
        "hexa" => "00008B",
        "rgb" => "rgb (0,0,139)",
    ),
    array(
        "name" => "DarkCyan",
        "hexa" => "008B8B",
        "rgb" => "rgb (0,139,139)",
    ),
    array(
        "name" => "DarkGoldenRod",
        "hexa" => "B8860B",
        "rgb" => "rgb (184,134,11)",
    ),
    array(
        "name" => "Gris oscuro",
        "hexa" => "A9A9A9",
        "rgb" => "rgb (169,169,169)",
    ),
    array(
        "name" => "Verde oscuro",
        "hexa" => "006400",
        "rgb" => "rgb (0,100,0)",
    ),
    array(
        "name" => "DarkKhaki",
        "hexa" => "BDB76B",
        "rgb" => "rgb (189,183,107)",
    ),
    array(
        "name" => "DarkMagenta",
        "hexa" => "8B008B",
        "rgb" => "rgb (139,0,139)",
    ),
    array(
        "name" => "DarkOliveGreen",
        "hexa" => "556B2F",
        "rgb" => "rgb (85,107,47)",
    ),
    array(
        "name" => "Naranja oscuro",
        "hexa" => "FF8C00",
        "rgb" => "rgb (255,140,0)",
    ),
    array(
        "name" => "Orquídea Oscura",
        "hexa" => "9932CC",
        "rgb" => "rgb (153,50,204)",
    ),
    array(
        "name" => "Rojo oscuro",
        "hexa" => "8B0000",
        "rgb" => "rgb (139,0,0)",
    ),
    array(
        "name" => "Salmón oscuro",
        "hexa" => "E9967A",
        "rgb" => "rgb (233,150,122)",
    ),
    array(
        "name" => "DarkSeaGreen",
        "hexa" => "8FBC8F",
        "rgb" => "rgb (143,188,143)",
    ),
    array(
        "name" => "DarkSlateBlue",
        "hexa" => "483D8B",
        "rgb" => "rgb (72,61,139)",
    ),
    array(
        "name" => "DarkSlateGrey",
        "hexa" => "2F4F4F",
        "rgb" => "rgb (47,79,79)",
    ),
    array(
        "name" => "DarkTurquoise",
        "hexa" => "00CED1",
        "rgb" => "rgb (0,206,209)",
    ),
    array(
        "name" => "Violeta oscuro",
        "hexa" => "9400D3",
        "rgb" => "rgb (148,0,211)",
    ),
    array(
        "name" => "Rosa profundo",
        "hexa" => "FF1493",
        "rgb" => "rgb (255,20,147)",
    ),
    array(
        "name" => "DeepSkyBlue",
        "hexa" => "00BFFF",
        "rgb" => "rgb (0,191,255)",
    ),
    array(
        "name" => "DimGrey",
        "hexa" => "696969",
        "rgb" => "rgb (105,105,105)",
    ),
    array(
        "name" => "DodgerBlue",
        "hexa" => "1E90FF",
        "rgb" => "rgb (30,144,255)",
    ),
    array(
        "name" => "Ladrillo refractario",
        "hexa" => "B22222",
        "rgb" => "rgb (178,34,34)",
    ),
    array(
        "name" => "FloralWhite",
        "hexa" => "FFFAF0",
        "rgb" => "rgb (255,250,240)",
    ),
    array(
        "name" => "Bosque verde",
        "hexa" => "228B22",
        "rgb" => "rgb (34,139,34)",
    ),
    array(
        "name" => "Fucsia",
        "hexa" => "FF00FF",
        "rgb" => "rgb (255,0,255)",
    ),
    array(
        "name" => "Gainsboro",
        "hexa" => "DCDCDC",
        "rgb" => "rgb (220,220,220)",
    ),
    array(
        "name" => "Fantasma blanco",
        "hexa" => "F8F8FF",
        "rgb" => "rgb (248,248,255)",
    ),
    array(
        "name" => "Oro",
        "hexa" => "FFD700",
        "rgb" => "rgb (255,215,0)",
    ),
    array(
        "name" => "Vara de oro",
        "hexa" => "DAA520",
        "rgb" => "rgb (218,165,32)",
    ),
    array(
        "name" => "Gris",
        "hexa" => "808080",
        "rgb" => "rgb (128,128,128)",
    ),
    array(
        "name" => "Verde",
        "hexa" => "008000",
        "rgb" => "rgb (0,128,0)",
    ),
    array(
        "name" => "Verde amarillo",
        "hexa" => "ADFF2F",
        "rgb" => "rgb (173,255,47)",
    ),
    array(
        "name" => "Gotas de miel",
        "hexa" => "F0FFF0",
        "rgb" => "rgb (240,255,240)",
    ),
    array(
        "name" => "Rosa caliente",
        "hexa" => "FF69B4",
        "rgb" => "rgb (255,105,180)",
    ),
    array(
        "name" => "IndianRed",
        "hexa" => "CD5C5C",
        "rgb" => "rgb (205,92,92)",
    ),
    array(
        "name" => "Índigo",
        "hexa" => "4B0082",
        "rgb" => "rgb (75,0,130)",
    ),
    array(
        "name" => "Marfil",
        "hexa" => "FFFFF0",
        "rgb" => "rgb (255,255,240)",
    ),
    array(
        "name" => "Caqui",
        "hexa" => "F0E68C",
        "rgb" => "rgb (240,230,140)",
    ),
    array(
        "name" => "Lavanda",
        "hexa" => "E6E6FA",
        "rgb" => "rgb (230,230,250)",
    ),
    array(
        "name" => "LavenderBlush",
        "hexa" => "FFF0F5",
        "rgb" => "rgb (255,240,245)",
    ),
    array(
        "name" => "Césped verde",
        "hexa" => "7CFC00",
        "rgb" => "rgb (124,252,0)",
    ),
    array(
        "name" => "Limón chiffon",
        "hexa" => "FFFACD",
        "rgb" => "rgb (255,250,205)",
    ),
    array(
        "name" => "Azul claro",
        "hexa" => "ADD8E6",
        "rgb" => "rgb (173,216,230)",
    ),
    array(
        "name" => "LightCoral",
        "hexa" => "F08080",
        "rgb" => "rgb (240,128,128)",
    ),
    array(
        "name" => "Cian claro",
        "hexa" => "E0FFFF",
        "rgb" => "rgb (224,255,255)",
    ),
    array(
        "name" => "LightGoldenRodYellow",
        "hexa" => "FAFAD2",
        "rgb" => "rgb (250,250,210)",
    ),
    array(
        "name" => "Gris claro",
        "hexa" => "D3D3D3",
        "rgb" => "rgb (211,211,211)",
    ),
    array(
        "name" => "Verde claro",
        "hexa" => "90EE90",
        "rgb" => "rgb (144,238,144)",
    ),
    array(
        "name" => "Rosa claro",
        "hexa" => "FFB6C1",
        "rgb" => "rgb (255,182,193)",
    ),
    array(
        "name" => "Salmón de luz",
        "hexa" => "FFA07A",
        "rgb" => "rgb (255,160,122)",
    ),
    array(
        "name" => "LightSeaGreen",
        "hexa" => "20B2AA",
        "rgb" => "rgb (32,178,170)",
    ),
    array(
        "name" => "LightSkyBlue",
        "hexa" => "87CEFA",
        "rgb" => "rgb (135,206,250)",
    ),
    array(
        "name" => "LightSlateGray",
        "hexa" => "778899",
        "rgb" => "rgb (119,136,153)",
    ),
    array(
        "name" => "LightSteelBlue",
        "hexa" => "B0C4DE",
        "rgb" => "rgb (176,196,222)",
    ),
    array(
        "name" => "Amarillo claro",
        "hexa" => "FFFFE0",
        "rgb" => "rgb (255,255,224)",
    ),
    array(
        "name" => "Lima",
        "hexa" => "00FF00",
        "rgb" => "rgb (0,255,0)",
    ),
    array(
        "name" => "Verde lima",
        "hexa" => "32CD32",
        "rgb" => "rgb (50,205,50)",
    ),
    array(
        "name" => "Lino",
        "hexa" => "FAF0E6",
        "rgb" => "rgb (250,240,230)",
    ),
    array(
        "name" => "Magenta",
        "hexa" => "FF00FF",
        "rgb" => "rgb (255,0,255)",
    ),
    array(
        "name" => "Granate",
        "hexa" => "800000",
        "rgb" => "rgb (128,0,0)",
    ),
    array(
        "name" => "MedioAquaMarine",
        "hexa" => "66CDAA",
        "rgb" => "rgb (102,205,170)",
    ),
    array(
        "name" => "Azul medio",
        "hexa" => "0000CD",
        "rgb" => "rgb (0,0,205)",
    ),
    array(
        "name" => "MediumOrchid",
        "hexa" => "BA55D3",
        "rgb" => "rgb (186,85,211)",
    ),
    array(
        "name" => "Mediano",
        "hexa" => "9370DB",
        "rgb" => "rgb (147,112,219)",
    ),
    array(
        "name" => "MediumSeaGreen",
        "hexa" => "3CB371",
        "rgb" => "rgb (60,179,113)",
    ),
    array(
        "name" => "MediumSlateBlue",
        "hexa" => "7B68EE",
        "rgb" => "rgb (123,104,238)",
    ),
    array(
        "name" => "MediumSpringGreen",
        "hexa" => "00FA9A",
        "rgb" => "rgb (0,250,154)",
    ),
    array(
        "name" => "MediumTurquoise",
        "hexa" => "48D1CC",
        "rgb" => "rgb (72,209,204)",
    ),
    array(
        "name" => "MediumVioletRed",
        "hexa" => "C71585",
        "rgb" => "rgb (199,21,133)",
    ),
    array(
        "name" => "MidnightBlue",
        "hexa" => "191970",
        "rgb" => "rgb (25,25,112)",
    ),
    array(
        "name" => "MintCream",
        "hexa" => "F5FFFA",
        "rgb" => "rgb (245,255,250)",
    ),
    array(
        "name" => "MistyRose",
        "hexa" => "FFE4E1",
        "rgb" => "rgb (255,228,225)",
    ),
    array(
        "name" => "Mocasín",
        "hexa" => "FFE4B5",
        "rgb" => "rgb (255,228,181)",
    ),
    array(
        "name" => "Navajoblanco",
        "hexa" => "FFDEAD",
        "rgb" => "rgb (255,222,173)",
    ),
    array(
        "name" => "Armada",
        "hexa" => "000080",
        "rgb" => "rgb (0,0,128)",
    ),
    array(
        "name" => "Antiguo lace",
        "hexa" => "FDF5E6",
        "rgb" => "rgb (253,245,230)",
    ),
    array(
        "name" => "Aceituna",
        "hexa" => "808000",
        "rgb" => "rgb (128,128,0)",
    ),
    array(
        "name" => "Verde oliva",
        "hexa" => "6B8E23",
        "rgb" => "rgb (107,142,35)",
    ),
    array(
        "name" => "naranja",
        "hexa" => "FFA500",
        "rgb" => "rgb (255,165,0)",
    ),
    array(
        "name" => "Rojo naranja",
        "hexa" => "FF4500",
        "rgb" => "rgb (255,69,0)",
    ),
    array(
        "name" => "Orquídea",
        "hexa" => "DA70D6",
        "rgb" => "rgb (218,112,214)",
    ),
    array(
        "name" => "PaleGoldenRod",
        "hexa" => "EEE8AA",
        "rgb" => "rgb (238,232,170)",
    ),
    array(
        "name" => "Verde pálido",
        "hexa" => "98FB98",
        "rgb" => "rgb (152,251,152)",
    ),
    array(
        "name" => "PaleTurquoise",
        "hexa" => "AFEEEE",
        "rgb" => "rgb (175,238,238)",
    ),
    array(
        "name" => "PaleVioletRed",
        "hexa" => "DB7093",
        "rgb" => "rgb (219,112,147)",
    ),
    array(
        "name" => "PapayaWhip",
        "hexa" => "FFEFD5",
        "rgb" => "rgb (255,239,213)",
    ),
    array(
        "name" => "Peachpuff",
        "hexa" => "FFDAB9",
        "rgb" => "rgb (255,218,185)",
    ),
    array(
        "name" => "Perú",
        "hexa" => "CD853F",
        "rgb" => "rgb (205,133,63)",
    ),
    array(
        "name" => "Rosado",
        "hexa" => "FFC0CB",
        "rgb" => "rgb (255,192,203)",
    ),
    array(
        "name" => "ciruela",
        "hexa" => "DDA0DD",
        "rgb" => "rgb (221,160,221)",
    ),
    array(
        "name" => "Azul pálido",
        "hexa" => "B0E0E6",
        "rgb" => "rgb (176,224,230)",
    ),
    array(
        "name" => "Púrpura",
        "hexa" => "800080",
        "rgb" => "rgb (128,0,128)",
    ),
    array(
        "name" => "RebeccaPurple",
        "hexa" => "663399",
        "rgb" => "rgb (102,51,153)",
    ),
    array(
        "name" => "rojo",
        "hexa" => "FF0000",
        "rgb" => "rgb (255,0,0)",
    ),
    array(
        "name" => "RosyBrown",
        "hexa" => "BC8F8F",
        "rgb" => "rgb (188,143,143)",
    ),
    array(
        "name" => "Azul real",
        "hexa" => "4169E1",
        "rgb" => "rgb (65,105,225)",
    ),
    array(
        "name" => "SaddleBrown",
        "hexa" => "8B4513",
        "rgb" => "rgb (139,69,19)",
    ),
    array(
        "name" => "Salmón",
        "hexa" => "FA8072",
        "rgb" => "rgb (250,128,114)",
    ),
    array(
        "name" => "SandyBrown",
        "hexa" => "F4A460",
        "rgb" => "rgb (244,164,96)",
    ),
    array(
        "name" => "Mar verde",
        "hexa" => "2E8B57",
        "rgb" => "rgb (46,139,87)",
    ),
    array(
        "name" => "Concha",
        "hexa" => "FFF5EE",
        "rgb" => "rgb (255,245,238)",
    ),
    array(
        "name" => "Tierra de siena",
        "hexa" => "A0522D",
        "rgb" => "rgb (160,82,45)",
    ),
    array(
        "name" => "Plata",
        "hexa" => "C0C0C0",
        "rgb" => "rgb (192,192,192)",
    ),
    array(
        "name" => "Cielo azul",
        "hexa" => "87CEEB",
        "rgb" => "rgb (135,206,235)",
    ),
    array(
        "name" => "SlateBlue",
        "hexa" => "6A5ACD",
        "rgb" => "rgb (106,90,205)",
    ),
    array(
        "name" => "SlateGray",
        "hexa" => "708090",
        "rgb" => "rgb (112,128,144)",
    ),
    array(
        "name" => "Nieve",
        "hexa" => "FFAFA",
        "rgb" => "rgb (255,250,250)",
    ),
    array(
        "name" => "Primavera verde",
        "hexa" => "00FF7F",
        "rgb" => "rgb (0,255,127)",
    ),
    array(
        "name" => "Azul acero",
        "hexa" => "4682B4",
        "rgb" => "rgb (70,130,180)",
    ),
    array(
        "name" => "Bronceado",
        "hexa" => "D2B48C",
        "rgb" => "rgb (210,180,140)",
    ),
    array(
        "name" => "Teal",
        "hexa" => "008080",
        "rgb" => "rgb (0,128,128)",
    ),
    array(
        "name" => "Cardo",
        "hexa" => "D8BFD8",
        "rgb" => "rgb (216,191,216)",
    ),
    array(
        "name" => "Tomate",
        "hexa" => "FF6347",
        "rgb" => "rgb (255,99,71)",
    ),
    array(
        "name" => "Turquesa",
        "hexa" => "40E0D0",
        "rgb" => "rgb (64,224,208)",
    ),
    array(
        "name" => "Violeta",
        "hexa" => "EE82EE",
        "rgb" => "rgb (238,130,238)",
    ),
    array(
        "name" => "Trigo",
        "hexa" => "F5DEB3",
        "rgb" => "rgb (245,222,179)",
    ),
    array(
        "name" => "Blanco",
        "hexa" => "FFFFFF",
        "rgb" => "rgb (255,255,255)",
    ),
    array(
        "name" => "Humo blanco",
        "hexa" => "F5F5F5",
        "rgb" => "rgb (245,245,245)",
    ),
    array(
        "name" => "Amarillo",
        "hexa" => "FFFF00",
        "rgb" => "rgb (255,255,0)",
    ),
    array(
        "name" => "Amarillo verde",
        "hexa" => "9ACD32",
        "rgb" => "rgb (154,205,50)",
    ),
);
        foreach ($colors as  $v) {
            dump($v);
            $sql="INSERT INTO Colors (`name`,`hexa`,`rgb`) VALUES ('".$v['name']."', '#".$v['hexa']."', '".$v['rgb']."');";
            DB::statement($sql);
        }
        // DB::select($sql);

        DB::statement($sql);
        // Color::factory()->count(5)->create();
    }
}
