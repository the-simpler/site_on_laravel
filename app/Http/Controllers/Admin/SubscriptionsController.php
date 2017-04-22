<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Subscriptions;
use App\Http\Requests\CreateSubscriptionsRequest;
use App\Http\Requests\UpdateSubscriptionsRequest;
use Illuminate\Http\Request;



class SubscriptionsController extends Controller {

	/**
	 * Display a listing of subscriptions
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $subscriptions = Subscriptions::all();

		return view('admin.subscriptions.index', compact('subscriptions'));
	}

	/**
	 * Show the form for creating a new subscriptions
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.subscriptions.create');
	}

	/**
	 * Store a newly created subscriptions in storage.
	 *
     * @param CreateSubscriptionsRequest|Request $request
	 */
	public function store(CreateSubscriptionsRequest $request)
	{
	    
		Subscriptions::create($request->all());

		return redirect()->route(config('quickadmin.route').'.subscriptions.index');
	}

	/**
	 * Show the form for editing the specified subscriptions.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$subscriptions = Subscriptions::find($id);
	    
	    
		return view('admin.subscriptions.edit', compact('subscriptions'));
	}

	/**
	 * Update the specified subscriptions in storage.
     * @param UpdateSubscriptionsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSubscriptionsRequest $request)
	{
		$subscriptions = Subscriptions::findOrFail($id);

        

		$subscriptions->update($request->all());

		return redirect()->route(config('quickadmin.route').'.subscriptions.index');
	}

	/**
	 * Remove the specified subscriptions from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Subscriptions::destroy($id);

		return redirect()->route(config('quickadmin.route').'.subscriptions.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Subscriptions::destroy($toDelete);
        } else {
            Subscriptions::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.subscriptions.index');
    }

}
