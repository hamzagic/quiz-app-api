<?php

namespace quiz\database;

class RequestHandler
{
    private $error = null;
    private $routes = [];
    private $class;
    const ERROR_MALFORMED_JSON = 'malformed_json';
    const ERROR_UNSUPPORTED_MEDIA_TYPE = 'unsupported_media_type';

    public function init()
    {
        $routes = include '../src/routes/routes.php';
        $this->setRoutes($routes);

        $route = $this->getRouteArray();
        $this->getRequestContentType();
        $dir = '../src/api';
        $path = $dir . $route['handler_path'];
        include_once $path;
        $this->class = $route['handler_class'];
        $this->class = new $this->class($param);
    }

    public function setRoutes($routes)
    {
        $this->routes = $routes;
    }

    public function getRouteArray()
    {
        $matched_route = null;
        $request_method = strtolower($_SERVER['REQUEST_METHOD']);

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = ltrim($url, '/');
            $url2 = explode('/', $url);

            $filtered_routes = array_filter($this->routes, function ($route) use ($request_method) {
                return strtolower($route['method']) === $request_method;
            });

            foreach ($filtered_routes as $route) {
                if (preg_match($route['uri_path_pattern'], $url, $matches)) {
                    $matched_route = $route;

                    if (isset($url2[1])) {
                        $param = $url2[1];

                        $param = filter_var($param, FILTER_SANITIZE_NUMBER_INT) || filter_var($param, FILTER_SANITIZE_STRING);
                    }
                    // $class = $matched_route['handler_class_name'];    
                    // $path = BASE . $class; 
                    // $this->class = new $path();
                    return $matched_route;
                }
            }
            if (empty($matched_route)) {
                echo "No page found";
            }
        }
    }

    public function getRequestContentType()
    {
        $content_type = $_REQUEST['CONTENT_TYPE'];
        if (empty($content_type) || $content_type == 'application/json') {
            $content_type = 'application/json';
        }

        if ($content_type == 'multipart/form-data') {
            $content_type = 'multipart/form-data';
        }

        return $content_type;
    }

    public function getRequestBody()
    {
        $result = null;
        $content_type = $this->getRequestContentType();
        switch ($content_type) {
            case 'application/json':
                $request_body = file_get_contents('php://input', 'r');
                if (empty($request_body)) {
                    $result = array();
                } else {
                    $request_body = json_decode($request_body, true);
                    $json_last_error = json_last_error();
                    if ($json_last_error === JSON_ERROR_NONE) {
                        $result = $request_body;
                    } else {
                        $this->error = self::ERROR_MALFORMED_JSON;
                        $result = false;
                    }
                }
                break;

            case 'multipart/form-data':
                $result = array();
                break;

            default:
                $this->error = self::ERROR_UNSUPPORTED_MEDIA_TYPE;
                $result = false;
        }
        return $result;
    }
}
