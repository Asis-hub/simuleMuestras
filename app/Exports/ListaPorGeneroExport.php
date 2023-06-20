<?php

namespace App\Exports;

use App\Models\ListaPorGenero;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ListaPorGeneroExport implements FromCollection, WithHeadings
{
    protected $listaporgenero;

    public function __construct(ListaPorGenero $listaporgenero)
    {
        $this->listaporgenero = $listaporgenero;
    }

    public function collection()
    {
        // Return the collection of surveyor data to export
        return collect([
            [
                'ID' => $this->listaporgenero->getId(),
                'Entidad' => $this->listaporgenero->getEntidad(),
                'Municipio' => $this->listaporgenero->getMunicipio(),
                'URL de la lista por género' => $this->listaporgenero->getUrlListaPorGenero(),
                'Mujeres' => $this->listaporgenero->getListaMujeres(),
                'Hombres' => $this->listaporgenero->getListaHombres(),
                'Lista Total (Mujeres y hombres)' => $this->listaporgenero->getListaTotal(),
                'Autor' => $this->listaporgenero->getAutor(),
                'Creación' => $this->listaporgenero->getCreatedAt(),
                'Última modificación' => $this->listaporgenero->getUpdatedAt(),
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
            'URL de la lista por género',
            'Mujeres',
            'Hombres',
            'Lista Total (Mujeres y hombres)',
            'Autor',
            'Creación',
            'Última modificación'
        ];
    }
}
