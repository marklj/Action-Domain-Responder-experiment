<?php namespace App\Actions;

use App\Http\Requests\TestRequest;
use App\Responders\SomeActionResponder;

class SomeAction
{
    /**
     * @param \App\Http\Requests\TestRequest      $request
     * @param \App\Responders\SomeActionResponder $responder
     *
     * @return mixed
     */
    public function __invoke(TestRequest $request, SomeActionResponder $responder)
    {
        $number = $request->get('n', 'four');

        // In a real life application, this could be a repository or an Eloquent result
        $result = collect(['one', 'two', 'three', $number]);

        return $responder($result);
    }
}