<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class LabelsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $labels = [];
    }


    /**
     * Generate labels functionality
     *
     * @return array
     */

    public function generateLabels(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $pages = $request->pages;

        if ($pages) {
            foreach (range($start, ($start + ($pages * 42)) - 1 ) as $key => $new_label) {
                $num_str = sprintf("%08d", $start);
                $labels[] = [
                        'qr_id' => 'ei_' . $num_str,
                ];
                $start++;
            }
        } else {
            foreach (range($start, $start + $length - 1) as $key => $new_label) {
                $num_str = sprintf("%08d", $start);
                $labels[] = [
                        'qr_id' => 'ei_' . $num_str,
                ];
                $start++;
            }
        }

        $rows = array_chunk($labels, 6);

        return view('pdf.labels', compact('rows', 'request'));
    }


    /**
     * Generate a PDF with the labels on it
     *
     * @return array
     */

    public function generatePDF(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $pages = $request->pages;

        if ($pages) {
            foreach (range($start, ($start + ($pages * 42)) - 1 ) as $key => $new_label) {
                $num_str = sprintf("%08d", $start);
                $labels[] = [
                        'qr_id' => 'ei_' . $num_str,
                ];
                $start++;
            }
        } else {
            foreach (range($start, $start + $length - 1) as $key => $new_label) {
                $num_str = sprintf("%08d", $start);
                $labels[] = [
                        'qr_id' => 'ei_' . $num_str,
                ];
                $start++;
            }
        }

        $rows = array_chunk($labels, 6);

        $date_stamp = date("d-m-Y");
        $time_stamp = date("H-i-s");

        $pdf = PDF::loadView('pdf.labels', compact('rows', 'request')) ->setPaper('a4')
                                                            ->setOrientation('landscape')
                                                            ->setOption('margin-top', '0mm')
                                                            ->setOption('margin-bottom', '0mm')
                                                            ->setOption('margin-left', '0mm')
                                                            ->setOption('margin-right', '0mm')
                                                            ->setOption('disable-smart-shrinking', true)
                                                            ->setOption('print-media-type', true)
                                                            ;
        return $pdf->download('Labels_Printable_' . $date_stamp . '_' . $time_stamp . '.pdf');
    }

}
