<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

/* Route to the labels preview page */

Route::get('labels', function () {

    $labels = [];

    foreach (range(0,41) as $key => $new_label) {
        $num_str = sprintf("%08d", mt_rand(1, 99999999));
        $labels[] = [
                'qr_id' => 'ei_' . $num_str,
        ];
    }

    $rows = array_chunk($labels, 6);

    return view('pdf.labels', compact('rows'));
})->name('labels');


/* Route to the label generator */

Route::get('/label-generate', function () {
    $labels = [];

    foreach (range(0,41) as $key => $new_label) {
        $num_str = sprintf("%08d", mt_rand(1, 99999999));
        $labels[] = [
                'qr_id' => 'ei_' . $num_str,
        ];
    }

    $rows = array_chunk($labels, 6);

    /* Creates the PDF using the generated data above */

    $pdf = PDF::loadView('pdf.labels', compact('rows')) ->setPaper('a4')
                                                        ->setOrientation('landscape')
                                                        ->setOption('margin-top', '0mm')
                                                        ->setOption('margin-bottom', '0mm')
                                                        ->setOption('margin-left', '0mm')
                                                        ->setOption('margin-right', '0mm')
                                                        ->setOption('disable-smart-shrinking', true)
                                                        ->setOption('print-media-type', true)
                                                        ;
    return $pdf->download('Labels_Printable.pdf');
})->name('labels.generate');
