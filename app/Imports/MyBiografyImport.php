<?php

namespace App\Imports;

use App\Models\Biography;
use App\Models\Occupation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class MyBiografyImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $occupation = Occupation::firstOrCreate([
                'name' => $row['occupation'], // ajusta el índice según tu estructura
            ]);

            Biography::create([
                'full_name' => Str::title(trim($row['full_name'])),
                'occupation_id' => $occupation->id,
                'birth_date' => $row['birth_date'],
                'biography' => $row['biography'],
                'image' => $row['image'],
                'featured' => $row['featured'],
            ]);
        }
    }
}
