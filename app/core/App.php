<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        $url_1 = !empty($url[1]) ? $url[1] : defaultcontroller;
        //controller
        if (file_exists('../app/controllers/' . $url_1 . '.php')) {
            $this->controller = $url_1;
            unset($url_1);
        }

        include '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if (isset($url[2])) {
            if (method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($url['2']);
            }
        }

        //params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //jalankan controller method dan params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        $url = "$_SERVER[REQUEST_URI]";
        $url = rtrim($url, '/'); //menghilangkan tanda /
        $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan dari karakter 
        $url = explode('/', $url);

        return $url;
    }
}
