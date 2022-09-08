    public function index(Request $request)
    {
        return view('{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->snakePlural }}.index');
    }
