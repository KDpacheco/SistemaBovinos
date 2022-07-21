<?php

use Illuminate\Database\Seeder;

class VentasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ventas')->delete();
        
        \DB::table('ventas')->insert(array (
            0 => 
            array (
                
                'animal_id' => 'MES0043',
                'ventas_valor' => '300',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:29:13',
                'updated_at' => '2022-06-20 16:29:13',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            1 => 
            array (
                
                'animal_id' => 'MES0044',
                'ventas_valor' => '250',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:29:56',
                'updated_at' => '2022-06-20 16:29:56',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            2 => 
            array (
                
                'animal_id' => 'MES0045',
                'ventas_valor' => '300',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:30:53',
                'updated_at' => '2022-06-20 16:30:53',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            3 => 
            array (
                
                'animal_id' => 'MES0046',
                'ventas_valor' => '150',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:32:02',
                'updated_at' => '2022-06-20 16:32:02',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            4 => 
            array (
                
                'animal_id' => 'MES0047',
                'ventas_valor' => '200',
                'ventas_fecha' => '2016-08-29',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:33:08',
                'updated_at' => '2022-06-20 16:33:08',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            5 => 
            array (
                
                'animal_id' => 'BRA0001',
                'ventas_valor' => '1010',
                'ventas_fecha' => '2020-02-28',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:33:40',
                'updated_at' => '2022-06-20 16:33:40',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            6 => 
            array (
                
                'animal_id' => 'MBG0011',
                'ventas_valor' => '200',
                'ventas_fecha' => '2018-09-10',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:26:41',
                'updated_at' => '2022-06-20 16:26:41',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            7 => 
            array (
                
                'animal_id' => 'MBG0012',
                'ventas_valor' => '100',
                'ventas_fecha' => '2018-09-10',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:27:50',
                'updated_at' => '2022-06-20 16:27:50',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
            8 => 
            array (
                
                'animal_id' => 'MBG0013',
                'ventas_valor' => '100',
                'ventas_fecha' => '2018-09-10',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:28:24',
                'updated_at' => '2022-06-20 16:28:24',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => NULL,
            ),
        ));
        
        
    }
}