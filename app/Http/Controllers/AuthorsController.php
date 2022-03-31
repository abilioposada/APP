<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
	private $client;

	public function __construct ()
	{
		$this->client = new Client( [ "base_uri" => ( env( "API_URI", "http://localhost:8000/api" ) ) . "/authors/" ] );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index ()
	{
		$json = $this->client->request( "GET" )->getBody();

		$data = json_decode( $json )->data;

		return view( "authors.index", [ "authors" => $data ] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create ()
	{
		return view( "authors.create" );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store ( Request $request )
	{
		$this->client->post( "", [
			"json" => $request->all()
		] );

		return redirect( "authors" );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show ( $id )
	{
		$json = $this->client->get( $id );

		$data = json_decode( $json->getBody() )->data;

		return view( "authors.show", [ "author" => $data ] );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit ( $id )
	{
		$json = $this->client->get( $id );

		$data = json_decode( $json->getBody() )->data;

		return view( "authors.edit", [ "author" => $data ] );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update ( Request $request, $id )
	{
		$this->client->put( $id, [
			"json" => $request->all()
		] );

		return redirect( "authors" );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy ( $id )
	{
		$this->client->delete( $id );

		return redirect( "authors" );
	}
}
