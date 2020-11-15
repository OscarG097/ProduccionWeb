<?php
    /*CATEGORIAS:
        1.- Calzado
        2.- Camperas
        3.- Camisetas
        4.- Accesorios
     MARCAS:
        1.- Adidas
        2.-- Nike
        3.-Reebok
        4.-Topper
        5.-Everlast
    */
    $productos = array(
        1=>array(
            'id' => 1,
            'marca' => 1,
            'categoria' => 1,
            'nombre' => 'Botin Adidas',
            'modelo' => 'Predator 19.4',            
            'precio' => '$30.00',
            'cantidad' => 1500,
            'destacado' => FALSE,
            'puntuacion' => 3,
            'imagen' => 'calzado-1.jpg'
        ),
        2=> array(
            'id' => 2,
            'marca' => 2,
            'categoria' => 4,
            'nombre' => 'Guantes Nike',
            'modelo' => 'GK Spyne Pro',
            'precio' => '$30.00',
            'cantidad' => 1000,
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'accesorio-1.jpg'
        ),
        3=>array(
            'id' => 3,
            'marca' => 1,
            'categoria' => 3,
            'nombre' => 'Camiseta Adidas',
            'modelo' => 'Juventus \'20',
            'precio' => '$30.00',
            'cantidad' => 1500,
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'camiseta-1.jpg'
        ),
        4=>array(
            'id' => 4,
            'marca' => 2,
            'categoria' => 1,
            'nombre' => 'Botin Nike',
            'modelo' => 'Mercuriarl Superfly',
            'precio' => '$30.00',
            'cantidad' => 100,
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'calzado-2.jpg'
        ),
        5=>array(
            'id' => 5,
            'marca' => 1,
            'categoria' => 2,
            'nombre' => 'Campera Adidas',
            'modelo' => 'Bayern Munich \'20',
            'precio' => '$30.00',
            'cantidad' => 100,
            'destacado' => FALSE,
            'puntuacion' => 4,
            'imagen' => 'campera-1.jpg'
        ),
        6=>array(
            'id' => 6,
            'marca' => 2,
            'categoria' => 4,
            'nombre' => 'Canillera Nike',
            'modelo' => 'Mercurial Lite',
            'precio' => '$30.00',
            'cantidad' => 1000,
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'accesorio-2.jpg'
        ),
        7=>array(
            'id' => 7,
            'marca' => 2,
            'categoria' => 2,
            'nombre' => 'Camiseta Nike',
            'modelo' => 'Barcelona \'20',
            'precio' => '$30.00',
            'cantidad' => 1000,
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'camiseta-2.jpg'
        ),
        8=>array(
            'id' => 8,
            'marca' => 1,
            'categoria' => 4,
            'nombre' => 'Pelota Adidas',
            'modelo' => 'UCL Final \'20',
            'precio' => '$30.00',
            'cantidad' => '1000',
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'accesorio-3.jpg'
        ),
        9=>array(
            'id' => 9,
            'marca' => 1,
            'categoria' => 4,
            'nombre' => 'Guantes Adidas',
            'modelo' => 'BearBox Y',
            'precio' => '$30.00',
            'cantidad' => '1000',
            'destacado' => FALSE,
            'puntuacion' => 5,
            'imagen' => 'accesorio-4.jpg'
        ),
        10=>array(
            'id' => 10,
            'marca' => 3,
            'categoria' => 1,
            'nombre' => 'Botas Boxeo Reebok',
            'modelo' => 'Master',
            'precio' => '$30.00',
            'cantidad' => 1000,
            'destacado' => FALSE,
            'puntuacion' => 4,
            'imagen' => 'calzado-3.jpg'
        ),
        11=>array(
            'id' => 11,
            'marca' => 1,
            'categoria' => 1,
            'nombre' => 'Calzado Adidas',
            'modelo' => 'Hockey Narma',
            'precio' => '$30.00',
            'cantidad' => 30,
            'destacado' => FALSE,
            'puntuacion' => 4,
            'imagen' => 'calzado-4.jpg'
        ),
        12=>array(
            'id' => 12,
            'marca' => 2,
            'categoria' => 2,
            'nombre' => 'Campera Nike',
            'modelo' => 'WindRunner',
            'precio' => '$30.00',
            'cantidad' => 35,
            'destacado' => FALSE,
            'puntuacion' => 4,
            'imagen' => 'campera-2.jpg'
        ),
        13=>array(
            'id' => 13,
            'marca' => 1,
            'categoria' => 4,
            'nombre' => 'Pelota Adidas',
            'modelo' => 'Tsubasa League',
            'precio' => '$30.00',
            'cantidad' => 1000,
            'destacado' => TRUE,
            'puntuacion' => 4,
            'imagen' => 'mini-accesorio-3.jpg'
        ),
        14=>array(
            'id' => 14,
            'marca' => 1,
            'categoria' => 3,
            'nombre' => 'Camiseta Adidas',
            'modelo' => 'Manchester United \'20',
            'precio' => '$30.00',
            'cantidad' => 30,
            'destacado' => TRUE,
            'puntuacion' => 5,
            'imagen' => 'mini-camiseta-1.jpg'
        ),
        15=>array(
            'id' => 15,
            'marca' => 1,
            'categoria' => 4,
            'nombre' => 'Pelota Adidas',
            'modelo' => 'Unifornia \'20',
            'precio' => '$30.00',
            'cantidad' => 70,
            'destacado' => TRUE,
            'puntuacion' => 4,
            'imagen' => 'mini-accesorio-1.jpg'
        ),
        16=>array(
            'id' => 16,
            'marca' => 1,
            'categoria' => 4,
            'nombre' => 'Pelota Adidas',
            'modelo' => 'Argentum \'19',
            'precio' => '',
            'cantidad' => 'Sin Stock',
            'destacado' => TRUE,
            'puntuacion' => 5,
            'imagen' => 'mini-accesorio-2.jpg'
        ),
        17=>array(
            'id' => 17,
            'marca' => 1,
            'categoria' => 1,
            'nombre' => 'Botines Adidas',
            'modelo' => 'Nemeziz 19+',
            'precio' => '$30.00',
            'cantidad' => '1000',
            'destacado' => TRUE,
            'puntuacion' => 4,
            'imagen' => 'mini-calzado-1.jpg'
        ),
        18=>array(
            'id' => 18,
            'marca' => 1,
            'categoria' => 4,
            'nombre' => 'Guantes Adidas',
            'modelo' => 'BearBox',
            'precio' => '$30.00',
            'cantidad' => 40,
            'destacado' => TRUE,
            'puntuacion' => 4,
            'imagen' => 'mini-accesorio-4.jpg'
        ),
        19=>array(
            'id' => 19,
            'marca' => 5,
            'categoria' => 4,
            'nombre' => 'Guantes Everlast',
            'modelo' => 'Classic',
            'precio' => '$33.000',
            'cantidad' => '1000',
            'destacado' => TRUE,
            'puntuacion' => 5,
            'imagen' => 'mini-accesorio-5.jpg'
        ),
    );
    
    echo json_encode($productos);
?>