<?php

namespace Dovcha\%SERVICE_NAME%\Controllers;

use Dovcha\%SERVICE_NAME%\Models\Example;
use SultanovSolutions\LaravelBase\Controllers\BaseController;
use Illuminate\Database\Eloquent\Builder;
use SultanovSolutions\LaravelBase\Models\BaseModel as Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class ExampleController extends BaseController
{
    protected mixed $model = Example::class;

    protected string $scope = 'example';
}
