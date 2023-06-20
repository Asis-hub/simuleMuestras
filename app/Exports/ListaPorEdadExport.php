<?php

namespace App\Exports;

use App\Models\ListaPorEdad;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ListaPorEdadExport implements FromCollection, WithHeadings
{
    protected $listaporedad;

    public function __construct(ListaPorEdad $listaporedad)
    {
        $this->listaporedad = $listaporedad;
    }

    public function collection()
    {
        return collect([
            [
                'ID' => $this->listaporedad->getId(),
                'Entidad' => $this->listaporedad->getEntidad(),
                'Municipio' => $this->listaporedad->getMunicipio(),
                'URL de la lista por edad y género' => $this->listaporedad->getUrlListaPorEdad(),
                'Lista Total (Mujeres y hombres)' => $this->listaporedad->getListaTotal(),
                'Lista Mujeres 18-24' => $this->listaporedad->getListaMujeres_18_24(),
                'Lista Hombres 18-24' => $this->listaporedad->getListaHombres_18_24(),
                'Lista Mujeres 25-34' => $this->listaporedad->getListaMujeres_25_34(),
                'Lista Hombres 25-34' => $this->listaporedad->getListaHombres_25_34(),
                'Lista Mujeres 35-49' => $this->listaporedad->getListaMujeres_35_49(),
                'Lista Hombres 35-49' => $this->listaporedad->getListaHombres_35_49(),
                'Lista Mujeres 50-64' => $this->listaporedad->getListaMujeres_50_64(),
                'Lista Hombres 50-64' => $this->listaporedad->getListaHombres_50_64(),
                'Lista Mujeres 65 o más' => $this->listaporedad->getListaMujeres_65_mas(),
                'Lista Hombres 65 o más' => $this->listaporedad->getListaHombres_65_mas(),
                'Proporción Mujeres 18-24' => $this->listaporedad->getProporcionMujeres_18_24(),
                'Proporción Hombres 18-24' => $this->listaporedad->getProporcionHombres_18_24(),
                'Proporción Mujeres 25-34' => $this->listaporedad->getProporcionMujeres_25_34(),
                'Proporción Hombres 25-34' => $this->listaporedad->getProporcionHombres_25_34(),
                'Proporción Mujeres 35-49' => $this->listaporedad->getProporcionMujeres_35_49(),
                'Proporción Hombres 35-49' => $this->listaporedad->getProporcionHombres_35_49(),
                'Proporción Mujeres 50-64' => $this->listaporedad->getProporcionMujeres_50_64(),
                'Proporción Hombres 50-64' => $this->listaporedad->getProporcionHombres_50_64(),
                'Proporción Mujeres 65 o más'  => $this->listaporedad->getProporcionMujeres_65_mas(),
                'Proporción Hombres 65 o más'  => $this->listaporedad->getProporcionHombres_65_mas(),
                'Encuestadores Mujeres 18-24' => $this->listaporedad->getEncuestadoresMujeres_18_24(),
                'Encuestadores Hombres 18-24' => $this->listaporedad->getEncuestadoresHombres_18_24(),
                'Encuestadores Mujeres 25-34' => $this->listaporedad->getEncuestadoresMujeres_25_34(),
                'Encuestadores Hombres 25-34' => $this->listaporedad->getEncuestadoresHombres_25_34(),
                'Encuestadores Mujeres 35-49' => $this->listaporedad->getEncuestadoresMujeres_35_49(),
                'Encuestadores Hombres 35-49' => $this->listaporedad->getEncuestadoresHombres_35_49(),
                'Encuestadores Mujeres 50-64' => $this->listaporedad->getEncuestadoresMujeres_50_64(),
                'Encuestadores Hombres 50-64' => $this->listaporedad->getEncuestadoresHombres_50_64(),
                'Encuestadores Mujeres 65 o más'  => $this->listaporedad->getEncuestadoresMujeres_65_mas(),
                'Encuestadores Hombres 65 o más'  => $this->listaporedad->getEncuestadoresHombres_65_mas(),
                'Autor' => $this->listaporedad->getAutor(),
                'Creación' => $this->listaporedad->getCreatedAt(),
                'Última modificación' => $this->listaporedad->getUpdatedAt()
            ],
        ]);
    }

    public function headings(): array
    {
        // Return the column headings for the exported data
        return [
            'ID', 
            'Entidad', 
            'Municipio', 
            'URL de la lista por edad y género', 
            'Lista Total (Mujeres y hombres)' ,
            'Lista Mujeres 18-24', 
            'Lista Hombres 18-24', 
            'Lista Mujeres 25-34', 
            'Lista Hombres 25-34', 
            'Lista Mujeres 35-49', 
            'Lista Hombres 35-49', 
            'Lista Mujeres 50-64', 
            'Lista Hombres 50-64', 
            'Lista Mujeres 65 o más', 
            'Lista Hombres 65 o más', 
            'Proporción Mujeres 18-24', 
            'Proporción Hombres 18-24', 
            'Proporción Mujeres 25-34', 
            'Proporción Hombres 25-34', 
            'Proporción Mujeres 35-49', 
            'Proporción Hombres 35-49', 
            'Proporción Mujeres 50-64', 
            'Proporción Hombres 50-64', 
            'Proporción Mujeres 65 o más',  
            'Proporción Hombres 65 o más',  
            'Encuestadores Mujeres 18-24', 
            'Encuestadores Hombres 18-24', 
            'Encuestadores Mujeres 25-34', 
            'Encuestadores Hombres 25-34', 
            'Encuestadores Mujeres 35-49', 
            'Encuestadores Hombres 35-49', 
            'Encuestadores Mujeres 50-64', 
            'Encuestadores Hombres 50-64', 
            'Encuestadores Mujeres 65 o más',  
            'Encuestadores Hombres 65 o más',  
            'Autor', 
            'Creación', 
            'Última modificación'
        ];
    }
}
