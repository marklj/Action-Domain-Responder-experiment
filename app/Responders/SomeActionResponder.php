<?php namespace App\Responders;


use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Collection;

class SomeActionResponder
{

    /**
     * @var \Illuminate\Contracts\Routing\ResponseFactory
     */
    private $response;

    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Collection $data
     */
    public function __invoke(Collection $data)
    {
        return $this->response->view('test', compact('data'));
    }
    
}