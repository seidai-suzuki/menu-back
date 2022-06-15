<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\DeleteRequest;
use App\Http\Requests\Menu\SearchRequest;
use App\Http\Requests\Menu\ShowRequest;
use App\Http\Requests\Menu\StoreRequest;
use App\Http\Requests\Menu\UpdateRequest;
use App\Http\Resources\Menu\MenuResource;
use App\UseCases\Menu\DeleteMenu;
use App\UseCases\Menu\SearchMenu;
use App\UseCases\Menu\ShowMenu;
use App\UseCases\Menu\StoreMenu;
use App\UseCases\Menu\UpdateMenu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    public function index(SearchRequest $request, SearchMenu $useCase): JsonResponse{
        return response()->json(MenuResource::collection($useCase->invoke($request)), Response::HTTP_OK);
    }

    public function store(StoreRequest $request, StoreMenu $useCase): JsonResponse {
        return response()->json(
            new MenuResource($useCase->invoke($request)),
            Response::HTTP_OK
        );
    }

    public function show(ShowRequest $request, ShowMenu $useCase): JsonResponse {
        return response()->json(
            new MenuResource($useCase->invoke($request)),
            Response::HTTP_OK
        );
    }

    public function update(UpdateRequest $request, UpdateMenu $useCase): JsonResponse {
        return response()->json(
            new MenuResource($useCase->invoke($request)),
            Response::HTTP_OK
        );
    }

    public function destroy(DeleteRequest $request, DeleteMenu $useCase): JsonResponse {
        $useCase->invoke($request);
        return response()->json(['message' => '処理に成功しました。'], Response::HTTP_OK);
    }
}
