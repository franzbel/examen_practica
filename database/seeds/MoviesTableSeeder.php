<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Franz
 * Date: 28/05/2015
 * Time: 10:24 PM
 */

class MoviesTableSeeder extends Seeder {
    public function run()
    {
        \DB::table('movies')->insert(array(
           'name' => 'EL PADRINO',
            'description' => 'América, años 40. Don Vito Corleone es  el respetado y temido
                            jefe  de  una  de las cinco  familias de la mafia de Nueva York.
                            Tiene cuatro hijos:  Connie,  el  impulsivo Sonny, el pusilánime
                            Freddie y Michael, que no quiere saber nada de los negocios de su
                            padre.  Cuando Corleone,  en contra  de los consejos de Tom Hagen,
                            se niega a intervenir en el negocio de las drogas, el jefe de otra
                            banda ordena su asesinato. '
        ));
        \DB::table('movies')->insert(array(
            'name' => 'LA VIDA ES BELLA',
            'description' => 'En 1939, a  punto  de  estallar  la Segunda Guerra Mundial
                             (1939-1945), el  extravagante Guido llega a Arezzo (Toscana)
                             con la intención  de  abrir una librería. Allí conoce a Dora
                             y, a  pesa r de  que  es la prometida del fascista Ferruccio,
                             se casa con ella y tiene un hijo. Al estallar la guerra, los
                             tres son  internados  en un  campo de exterminio, donde Guido
                             hará lo imposible para hacer  creer a su hijo que la terrible
                             situación que están padeciendo es tan sólo un juego.'
        ));
    }
}