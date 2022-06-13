<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointStoreRequest;
use App\Models\Company;
use App\Models\Point;
use Illuminate\Http\JsonResponse;

class PointController extends Controller
{
    /**
     * store.
     */
    public function store(int $companyId, int $clientId, PointStoreRequest $request): JsonResponse
    {
        $client = Company::findOrFail($companyId)->clients()->findOrFail($clientId);
        $point = Point::create([...$request->validated(), ...['card_id' => $client->pivot->id]]);

        return response()->json(['message' => 'Successfully created', 'data' => $point]);
    }
}
