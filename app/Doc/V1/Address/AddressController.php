<?php

namespace App\Doc\V1\Address;

/**
 
 * 
 * @OA\Get(
 * path="/api/v1/user/addresses", 
 * tags={"Address"},
 * @OA\Parameter(ref="#/components/parameters/OA_listType"),
 * @OA\Parameter(ref="#/components/parameters/OA_listQ"),
 * @OA\Parameter(ref="#/components/parameters/OA_listPage"),
 * @OA\Parameter(ref="#/components/parameters/OA_SortBy"),
 * @OA\Parameter(ref="#/components/parameters/OA_OrderBy"),
 * @OA\Parameter(ref="#/components/parameters/OA_limit"),
 * @OA\Parameter(ref="#/components/parameters/OA_Relations"),
 * security={{"bearerAuth":{}}},
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 * 
 * 
 * @OA\Get(
 * path="/api/v1/user/addresses/{id}", 
 * tags={"Address"},
 * @OA\Parameter(ref="#/components/parameters/OA_id"),
 * @OA\Parameter(ref="#/components/parameters/OA_Relations"),
 * security={{"bearerAuth":{}}},
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 * 
 * 
 * @OA\Parameter(
 *   parameter="ApiAddressRequest_name",
 *   name="name",
 *   schema={"type": "string"},
 *   in="query",
 *   required=true
 * )
 * 
 * @OA\Post(
 * path="/api/v1/user/addresses", 
 * tags={"Address"},
 * @OA\Parameter(ref="#/components/parameters/ApiAddressRequest_name"),
 * 
 * @OA\Parameter(ref="#/components/parameters/OA_Relations"),
 * security={{"bearerAuth":{}}},
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 * 
 * @OA\Put(
 * path="/api/v1/user/addresses/{id}", 
 * tags={"Address"},
 * @OA\Parameter(ref="#/components/parameters/OA_id"),
 * @OA\Parameter(ref="#/components/parameters/ApiAddressRequest_name"),
 * 
 * @OA\Parameter(ref="#/components/parameters/OA_Relations"),
 * security={{"bearerAuth":{}}},
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 * 
 * @OA\Delete(
 * path="/api/v1/user/addresses/{id}", 
 * tags={"Address"},
 * @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * security={{"bearerAuth":{}}},
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

class AddressController
{
}
