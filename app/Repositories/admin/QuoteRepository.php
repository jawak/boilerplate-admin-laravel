<?php

namespace App\Repositories\admin;

use App\Models\admin\Quote;
use App\Repositories\BaseRepository;

class QuoteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'content',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Quote::class;
    }
}
