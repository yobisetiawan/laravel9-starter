<?php

namespace App\Doc\Auth;

/**
 * @OA\Parameter(
 *   parameter="ApiRegisterRequest_email",
 *   name="email",
 *   @OA\Schema(
 *     type="string"
 *   ),
 *   in="query",
 *   required=true
 * )
 * @OA\Parameter(
 *   parameter="ApiRegisterRequest_password",
 *   name="password",
 *   @OA\Schema(
 *     type="string"
 *   ),
 *   in="query",
 *   required=true
 * )
 * @OA\Parameter(
 *   parameter="ApiRegisterRequest_password_confirm",
 *   name="password_confirmation",
 *   @OA\Schema(
 *     type="string"
 *   ),
 *   in="query",
 *   required=true
 * )
 *     
 * @OA\Post(
 * path="/api/v1/auth/register", 
 * tags={"Auth"},
 *   @OA\Parameter(ref="#/components/parameters/ApiRegisterRequest_email"),
 *   @OA\Parameter(ref="#/components/parameters/ApiRegisterRequest_password"),
 *   @OA\Parameter(ref="#/components/parameters/ApiRegisterRequest_password_confirm"),
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 * 
 */

class RegisterController
{
}
