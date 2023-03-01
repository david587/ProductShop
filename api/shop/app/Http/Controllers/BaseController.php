<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller {

    public function sendResponse( $result ) {

        // $response = [

        //     "success" => true,
        //     "data" => $result,
        //     "message" => $message
        // ];
        $response = $result;

        return response()->json( $response, 200 );
    }

    public function sendError( $error, $errorMessages = [], $code = 404 ) {

        $response = [

            "success" => false,
            "message" => $error
        ];

        if( !empty( $errorMessages )) {

            $response[ "data" ] = $errorMessages;
        }

        return response()->json( $response, $code );

    }
}
