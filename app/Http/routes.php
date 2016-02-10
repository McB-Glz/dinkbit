<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', ['as' => 'home', function () use ($app) {
    return view('index');
}]);

$app->get('/proyectos', ['as' => 'proyectos', function () use ($app) {
    $projects = config('portfolio');
    $slug = '';

    return view('projects.index', compact('projects', 'slug'));
}]);

$app->get('/proyectos/categoria/{slug}', ['as' => 'projects.category', function ($slug) {

    $projects = config('portfolio');

    $categories = [
        'identidad',
        'activaciones',
        'apps',
        'desarrolloWeb',
        'campanasDigitales',
        'multimedia',
    ];

    if (!in_array($slug, $categories)) {
        abort(404);
    }

    return view('projects.index', compact('projects', 'slug'));
}]);

$app->get('/proyectos/{slug}', ['as' => 'proyectos.single', function ($slug) {

    if (array_key_exists($slug, config('projects_aliases'))) {
        $slug = config('projects_aliases.'.$slug);

        return redirect()->route('proyectos.single', ['slug' => $slug]);
    }

    $data['project'] = config('portfolio.'.$slug);
    $data['page_id'] = $slug;

    if (empty($data['project'])) {
        if (!env('APP_DEBUG')) {
            app('bugsnag')->notifyError('Project not found', $slug);
        }
        abort(404);
    }

    return view('projects.single', $data);
}]);

$app->get('/equipo', ['as' => 'equipo', function () use ($app) {
    $personas = config('equipo');

    return view('equipo', compact('personas'));
}]);

$app->get('/contacto', ['as' => 'contacto', function () use ($app) {
    return view('contacto');
}]);

$app->get('/blog', ['as' => 'blog', function () use ($app) {
    return view('blog');
}]);

$app->get('/datos-bancarios', ['as' => 'datos-bancarios', function () use ($app) {
    return view('datos-bancarios');
}]);

$app->get('/datosbancarios', ['as' => 'datosbancarios', function () use ($app) {
    return view('datos-bancarios');
}]);

$app->get('aviso-privacidad', ['as' => 'aviso-privacidad', function () {
    return redirect()->to('aviso-de-privacidad.pdf');
}]);

$app->post('send-email', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'name'    => 'required',
        'email'   => 'required|email',
        'tel'     => 'required|numeric|digits_between:8,14',
        'message' => 'required',
    ]);

    $data['name'] = $app->request->input('name');
    $data['email'] = $app->request->input('email');
    $data['tel'] = $app->request->input('tel');
    $data['message'] = $app->request->input('message');
    $data['subject'] = 'Contacto Web | '.$data['email'];

    $data['message'] = '
DATOS DE CONTACTO

Nombre:
'.$data['name'].'

Email:
'.$data['email'].'

Teléfono:
'.$data['tel'].'

Mensaje:
'.$data['message'].'
    ';

    $mail = Mail::raw($data['message'], function ($message) use ($data) {
        $message->getHeaders()->addTextHeader('X-MC-Subaccount', env('MAIL_SUBACCOUNT'));
        $message->subject($data['subject']);
        $message->to(env('MAIL_TO'));
        $message->replyTo($data['email'], $data['name']);
    });

    if ($mail) {
        $response = ['status' => 'ok'];
        $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
    }

    echo json_encode($response);
    die();
  // }

});
