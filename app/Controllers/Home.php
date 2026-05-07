<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use Psr\Log\LoggerInterface;

class Home extends BaseController
{

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function index(): string
    {
        $data['title'] = lang("App.home.meta.title");
        $data['description'] = lang("App.home.meta.description");

        return view('pages/home', $data);
    }

    public function view(string $page)
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data['title'] = lang("App.{$page}.meta.title");
        $data['description'] = lang("App.{$page}.meta.description");

        return view('pages/' . $page, $data);
    }

    public function pageNotFound()
    {
        $this->response->setStatusCode(404);
        $data['isHome'] = false;
        $data['title'] = lang("Error.meta.title");
        $data['description'] = lang("Error.meta.description");

        return view('errors/error404', $data);
    }

    function sendContactForm()
    {
        if ($this->request->isAJAX()) {
            $response = json_decode($this->request->getBody());
            $data = [
                'name'          => $response->fName,
                'account_no'    => $response->mNumber,
                'email'         => $response->email,
                'phone'         => $response->phone,
                'subject'       => $response->subject,
                'comment'       => $response->comments,
            ];

            $json = [
                'status'    => true,
                'message'   => 'Thank you. Your request has been received!'
            ];
            sleep(1);
            return json_encode($json);
            exit();
        }
    }
}
