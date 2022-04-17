<?php
namespace App\Doc\Auth;
/**
 * @OA\Parameter(
 *   parameter="AuthLogin_email",
 *   name="email",
 *   @OA\Schema(
 *     type="string"
 *   ),
 *   in="query",
 *   required=true
 * )
 * @OA\Parameter(
 *   parameter="AuthLogin_password",
 *   name="password",
 *   @OA\Schema(
 *     type="string"
 *   ),
 *   in="query",
 *   required=true
 * )
 *     
 * @OA\Post(
 * path="/api/v1/auth/login", 
 * tags={"Auth"},
 *   @OA\Parameter(ref="#/components/parameters/AuthLogin_email"),
 *   @OA\Parameter(ref="#/components/parameters/AuthLogin_password"),
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

 class LoginController{

 }
