<?php

namespace App\Exports;

use App\Models\Surveyor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SurveyorExport implements FromCollection, WithHeadings
{
    protected $surveyor;

    public function __construct(Surveyor $surveyor)
    {
        $this->surveyor = $surveyor;
    }

    public function collection()
    {
        // Return the collection of surveyor data to export
        return collect([
            [
                'ID' => $this->surveyor->getId(),
                'Error' => $this->surveyor->getError(),
                'Proporción Necesaria' => $this->surveyor->getProporcionNecesaria(),
                'Proporción Restante' => $this->surveyor->getProporcionRestante(),
                'Estratos' => $this->surveyor->getEstratos(),
                'Encuestadores' => $this->surveyor->getEncuestadores(),
                'Creación' => $this->surveyor->getCreatedAt(),
                'Última modificación' => $this->surveyor->getUpdatedAt(),
            ],
        ]);
    }

    public function headings(): array
    {
        // Return the column headings for the exported data
        return [
            'ID',
            'Error',
            'Proporción Necesaria',
            'Proporción Restante',
            'Estratos',
            'Encuestadores',
            'Creación',
            'Última modificación',
        ];
    }
}
