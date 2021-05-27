<?php

namespace App\Exports;

use App\Models\Admin\Newsletter;
use Maatwebsite\Excel\Concerns\FromCollection;

class NewsletterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Newsletter::select('id', 'email', 'created_at')->orderBy('id', 'Desc')->get();
    }
}
