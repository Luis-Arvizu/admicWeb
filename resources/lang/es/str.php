<?php

return [
  'menu' => [




    'home' => [
      'titulo'  => 'Inicio',
      'welcome' => '¡Bienvenido a Guanajoven!',
      'icono'   => url('img/logo_guanajoven.png'),
    ],









    'menu_1' => [
      'titulo' => 'Usuarios',
      'tabla'  => [
        'error'=> 'No hay datos',
        'col0' => 'Código',
        'col1' => 'Nombre',
        'col2' => 'Apellido Paterno',
        'col3' => 'Apellido Materno',
        'col4' => 'CURP',
        'col5' => 'Correo electrónico',
        'col6' => 'Teléfono',
        'col7' => 'Rol',
        'col8' => 'Puesto',
      ],
      'registro' => [
        'titulo' => 'Nuevo Usuario',
      ],
    ],











    'menu_2' => [
      'titulo' => 'Jóvenes',
      'tabla'  => [
        'error'=> 'No hay datos',
        'col0' => 'Código',
        'col1' => 'Nombre',
        'col2' => 'Apellido Paterno',
        'col3' => 'Apellido Materno',
        'col4' => 'CURP',
        'col5' => 'Correo electrónico',
        'col6' => 'Municipio',
        'col7' => 'Género',
        'col8' => 'Edad',
        'col9' => 'Fecha de registro',
      ],
    ],











    'menu_3' => [
      'titulo' => 'Eventos',
      'tabla'  => [
        'error'=> 'No hay datos',
        'col0' => 'Título',
        'col1' => 'Descripción',
        'col2' => 'Inicia',
        'col3' => 'Termina',
        'col4' => 'Estadísticas',
        'col5' => 'Editar',
        'col6' => 'Eliminar',
      ],
      'detalles' => [
        'titulo' => 'Evento :nombre',
        'tabla' => [
          'titulo' => 'Lista de asistentes',
          'error' => 'No hay datos',
          'col0' => '#',
          'col1' => '',
          ]
      ],
    ],










    'menu_4' => [
      'titulo' => 'Publicidad',
    ],












    'menu_5' => [
      'titulo' => 'Convocatorias',
    ],










    'menu_6' => [
      'titulo' => 'Promiciones',
    ],



    'menu_7' => [
      'titulo' => 'Notificaciones',
    ],



    'menu_8' => [
      'titlul' => 'Chat',
    ],



    'cerrar' => 'Cerrar sesión',
  ]

];
