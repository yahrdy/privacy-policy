<?php

namespace Hridoy\PrivacyPolicy\Http\Controllers;

use App\Http\Controllers\Controller;
use Hridoy\PrivacyPolicy\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $privacyPolicy = PrivacyPolicy::all();
        return response()->json(['data' => $privacyPolicy], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): \Illuminate\Http\Response
    {
        $privacyPolicy = PrivacyPolicy::create($request->only('privacy_policy'));
        return response($privacyPolicy);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param PrivacyPolicy $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $privacyPolicy): \Illuminate\Http\Response
    {
        $privacyPolicy = PrivacyPolicy::findOrFail($privacyPolicy);
        $privacyPolicy->update($request->only('privacy_policy'));
        return response($privacyPolicy);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PrivacyPolicy $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy($privacyPolicy): \Illuminate\Http\Response
    {
        $privacyPolicy = PrivacyPolicy::findOrFail($privacyPolicy);
        $privacyPolicy->delete();
        return response($privacyPolicy);
    }
}
