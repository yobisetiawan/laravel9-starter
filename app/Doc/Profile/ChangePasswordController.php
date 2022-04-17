<?php

namespace App\Doc\Profile;

/**
 * @OA\Parameter(
 *   parameter="ApiChangePasswordRequest_password",
 *   name="password",
 *   schema={"type": "string"},
 *   in="query",
 *   required=true
 * )
 * 
 * @OA\Parameter(
 *   parameter="ApiChangePasswordRequest_password_confirmation",
 *   name="password_confirmation",
 *   schema={"type": "string"},
 *   in="query",
 *   required=true
 * )
 * 
 * @OA\Post(
 * path="/api/v1/user/change-password", 
 * tags={"Profile"},
 * @OA\Parameter(ref="#/components/parameters/ApiChangePasswordRequest_password"),
 * @OA\Parameter(ref="#/components/parameters/ApiChangePasswordRequest_password_confirmation"),
 * @OA\Parameter(ref="#/components/parameters/OA_Relations"),
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

class ChangePasswordController
{
}
