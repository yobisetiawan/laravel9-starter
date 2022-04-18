<?php

namespace App\Http\Controllers\Api\V1\Profile;

use App\Http\Modules\BaseCrud;
use App\Http\Resources\V1\Profile\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ProfileController extends BaseCrud
{
    public $model = User::class;
    public $resource = UserResource::class;


    public function index(Request $req)
    {
        $user = Auth::user();
        return $this->show($user->uuid);
    }
}
