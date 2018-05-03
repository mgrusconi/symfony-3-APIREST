<?php

namespace Application\SomeBundle\Controller;

use Swagger\Annotations as SWG;


class DefaultController extends Base
{

    /**
     * @SWG\Get(
     *   summary="Method that returns the health of the application",
     *   operationId="postAction",
     *   consumes={"application/json"},
     *   produces={"application/json", "application/xml"},
     *   @SWG\Response(
     *     response=200,
     *     description="{'statusCode': 200, 'status': 'ok'}"
     *   )
     * )
     */

    public function healthcheckAction()
    {
        $res = array(
            'statusCode' => 200,
            'status' => 'ok'
        );
        return $this->getJsonResponse($res);
    }
}
