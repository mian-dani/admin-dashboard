<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class GeneratePdfController extends Controller
{
    

        public function generatePdf()
        {

            

            $options = new Options();
            $options->set('chroot', realpath(''));
            
            // $data = [
            //     'field1' => 'Value 1',
            //     'field2' => 'Value 2',
            //     // Add more field values as needed
            // ];

            // Create a new instance of Dompdf 
            $dompdf = new Dompdf($options);

            
            // $html = view('pdf.postalentry', $data)->render();
            $html = view('pdf.postalentry')->render();
            
            // Load the HTML content into dompdf
            $dompdf->loadHtml($html);

            $dompdf->setPaper('C4', 'partrait');
            
            // $dompdf->setOptions([
            //     'isPhpEnabled' => true,
            // ]);

            // Render the PDF
            $dompdf->render();

            // Output the generated PDF
            $dompdf->stream('postal_entry.pdf', ['Attachment' => false]);
        }

}
