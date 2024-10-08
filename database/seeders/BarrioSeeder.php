<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barrios = [
            // Barrios de UPZ 1
            ['nombreBarrio' => 'Brisas del Playón', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Trebol', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Oasis', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Primavera II', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Los Laureles', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Sauces', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Divino Niño', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Pinos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'El Jordan', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Cedritos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Nueva Victoria', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Independencia', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Saman', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Bachue', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Panorama', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Nutibara', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Las Acacias', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Alcaraván', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Everest', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'San José', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Dorado Alto', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Ciudadela Buenos Aires', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Mirador de las Palmas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Portal de las Palmas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Yacare', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa del Prado', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '1', 'zona' => 'barrio'],

            // Barrios de UPZ 2
            ['nombreBarrio' => 'Altos de la Florida', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Florida', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Las Colinas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Cimarron', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Llano Verde II', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Llano Verde III', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Balcones de San Diego', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Nueva Jerusalem', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Asovivienda', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Rincón del Bachue', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Bachue', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'El Paraiso', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Pradera', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Coralina', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'El Bosque', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'San José', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Palma', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Pablo Sexto', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Atahualpa', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Grupo los 18', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Magaly', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Los Olivos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Don Bosco', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Lucia', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Violetas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Gaviotas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa del Llano', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Magüensi', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Asociación de Amigos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'San Thomas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Castilla', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Nuevo Horizonte', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Altos de Covicom', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Prados de Codem', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Bella Suiza', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Cedros', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Aurora II', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Aurora I', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Aires de Acacias', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Ciudadela San Antonio', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'El Lago', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Orquídea', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Los Andes Profuturo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Los Cedros', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Rincones de San Felipe', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'San Camilo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Sierra Nevada', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Saint Thomas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villas del Mediterraneo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa del Sol', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Colonial', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Fontana', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '2', 'zona' => 'barrio'],

            // Barrios de UPZ 3
            ['nombreBarrio' => 'Malecom', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Brisas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Arrayanes', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Pablo Emilio Riveros', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Dorado Bajo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Cooperativo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Naranjos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Balcones de Santa Isabel', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Santa Isabel', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'El Retorno', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Las Ferias', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Llano Mar', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Ciudad Jardín', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Centro', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Unión', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Balmoral', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Chorrera', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Juan Mellao', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Las Vegas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Flor Amarillo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Llano Hermoso', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Los Cayenos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],
            ['nombreBarrio' => 'San Luis', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '3', 'zona' => 'barrio'],

            // Barrios de UPZ 4
            ['nombreBarrio' => 'Mancera', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'San Cristobal', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Las Vegas', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Teresa', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Palermo', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Popular', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Bambú', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Alborada', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Portales', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villas de San Carlos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Morichal I', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Morichal II', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Esperanza', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Santa Ana', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Araguaney', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'El Trébol', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Guaratara', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Palmar de Jerusalem', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Ciudadela el Constructor', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Nuevo Milenio', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Conjunto Villa Maria', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Tiza', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Guaratara II', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Ciudadela Los Angeles', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Estrella', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Manuela', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Complejo Ganadero', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Altos del Moral', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'La Hormiga', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Los Naranjos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Maria Alejandra', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Portales de San Carlos', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Alejandra', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Sahara', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Villa Lucrecia', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],
            ['nombreBarrio' => 'Portal del Llano', 'tipoUnidad' => 'UPZ', 'codigoNumero' => '4', 'zona' => 'barrio'],

            // Veredas de UPR 1
            ['nombreBarrio' => 'Patio Bonito', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Montebello', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],
            ['nombreBarrio' => 'La Primavera', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],
            ['nombreBarrio' => 'San Isidro de Chichimene', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Santa Rosa', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Loma de Tigre', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],
            ['nombreBarrio' => 'El Triunfo', 'tipoUnidad' => 'UPR', 'codigoNumero' => '1', 'zona' => 'vereda'],

            // Veredas de UPR 2
            ['nombreBarrio' => 'Dinamarca', 'tipoUnidad' => 'UPR', 'codigoNumero' => '2', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Quebraditas', 'tipoUnidad' => 'UPR', 'codigoNumero' => '2', 'zona' => 'vereda'],
            ['nombreBarrio' => 'La Loma', 'tipoUnidad' => 'UPR', 'codigoNumero' => '2', 'zona' => 'vereda'],
            ['nombreBarrio' => 'San José de las Palomas', 'tipoUnidad' => 'UPR', 'codigoNumero' => '2', 'zona' => 'vereda'],

            // Veredas de UPR 5
            ['nombreBarrio' => 'Las Blancas', 'tipoUnidad' => 'UPR', 'codigoNumero' => '5', 'zona' => 'vereda'],
            ['nombreBarrio' => 'El Diamante', 'tipoUnidad' => 'UPR', 'codigoNumero' => '5', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Loma del', 'tipoUnidad' => 'UPR', 'codigoNumero' => '5', 'zona' => 'vereda'],  // Loma del parece incompleto, ajusta el nombre completo si lo tienes

            // Veredas de UPR 3
            ['nombreBarrio' => 'San Cayetano', 'tipoUnidad' => 'UPR', 'codigoNumero' => '3', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Las Margaritas', 'tipoUnidad' => 'UPR', 'codigoNumero' => '3', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Caño Hondo', 'tipoUnidad' => 'UPR', 'codigoNumero' => '3', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Montelíbano', 'tipoUnidad' => 'UPR', 'codigoNumero' => '3', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Santa Teresita', 'tipoUnidad' => 'UPR', 'codigoNumero' => '3', 'zona' => 'vereda'],
            ['nombreBarrio' => 'Montelíbano Bajo', 'tipoUnidad' => 'UPR', 'codigoNumero' => '3', 'zona' => 'vereda'],
        ];

        DB::table('barrios')->insert($barrios);
    }
}
