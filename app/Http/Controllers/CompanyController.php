<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{
    /**
     * index.
     */
    public function index(): JsonResponse
    {
        $companies = Company::all();

        return response()->json($companies);
    }

    /**
     * show.
     */
    public function show(int $id): JsonResponse
    {
        $company = Company::findOrFail($id);

        return response()->json($company);
    }

    /**
     * store.
     */
    public function store(CompanyStoreRequest $request): JsonResponse
    {
        $company = Company::create($request->validated());

        return response()->json(['message' => 'Successfully created', 'data' => $company]);
    }
}
