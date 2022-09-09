<?php

namespace App\Http\Controllers\admin;

use App\DataTables\admin\QuoteDataTable;
use App\Http\Requests\admin\CreateQuoteRequest;
use App\Http\Requests\admin\UpdateQuoteRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\admin\QuoteRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class QuoteController extends AppBaseController
{
    /** @var QuoteRepository $quoteRepository*/
    private $quoteRepository;

    public function __construct(QuoteRepository $quoteRepo)
    {
        $this->quoteRepository = $quoteRepo;
    }

    /**
     * Display a listing of the Quote.
     */
    public function index(QuoteDataTable $quoteDataTable)
    {
    return $quoteDataTable->render('admin.quotes.index');
    }


    /**
     * Show the form for creating a new Quote.
     */
    public function create()
    {
        return view('admin.quotes.create');
    }

    /**
     * Store a newly created Quote in storage.
     */
    public function store(CreateQuoteRequest $request)
    {
        $input = $request->all();

        $quote = $this->quoteRepository->create($input);

        Flash::success('Quote saved successfully.');

        return redirect(route('admin.quotes.index'));
    }

    /**
     * Display the specified Quote.
     */
    public function show($id)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('admin.quotes.index'));
        }

        return view('admin.quotes.show')->with('quote', $quote);
    }

    /**
     * Show the form for editing the specified Quote.
     */
    public function edit($id)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('admin.quotes.index'));
        }

        return view('admin.quotes.edit')->with('quote', $quote);
    }

    /**
     * Update the specified Quote in storage.
     */
    public function update($id, UpdateQuoteRequest $request)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('admin.quotes.index'));
        }

        $quote = $this->quoteRepository->update($request->all(), $id);

        Flash::success('Quote updated successfully.');

        return redirect(route('admin.quotes.index'));
    }

    /**
     * Remove the specified Quote from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('admin.quotes.index'));
        }

        $this->quoteRepository->delete($id);

        Flash::success('Quote deleted successfully.');

        return redirect(route('admin.quotes.index'));
    }
}
