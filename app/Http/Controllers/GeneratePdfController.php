<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


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


        public function uint8Array(){
            $filePath = public_path('/pdf/security.pdf');
                
            if (!file_exists($filePath)) {
                return response()->json(['error' => 'PDF file not found'], 404);
            }
                
            $fileContents = file_get_contents($filePath);
            $uint8Array = $this->convertToUint8Array($fileContents);
                
            return response()->json([ $uint8Array]);
        }
        
            private function convertToUint8Array($fileContents)
            {
                $uint8Array = array_values(unpack('C*', $fileContents));
                return $uint8Array;
            }




        
                // this function converts in base 64
            public function base64(){
                $filePath = public_path('/pdf/security.pdf');
        
                if (!file_exists($filePath)) {
                    return response()->json(['error' => 'PDF file not found'], 404);
                }
                
                $fileContents = file_get_contents($filePath);
                $base64String = base64_encode($fileContents);
            
                return response()->json(['pdf' => $base64String]);

                // $response = Http::timeout(60000)->post('http://127.0.0.1:8000/save-pdf', [
                //     'pdf' => $base64String,
                // ]);
        
                // if ($response->ok()) {
                //     // PDF saved successfully
                //     return response()->json(['message' => 'PDF saved']);
                // } else {
                //     // Failed to save PDF
                //     return response()->json(['error' => 'Failed to save PDF'], $response->status());
                // }


            }


            public function savePdf(Request $request)
            {
                $base64String = $request->getContent();
                $decodedPdf = base64_decode($base64String);
                
                $filename = 'saved_ui8.pdf';
                Storage::disk('public')->put($filename, $decodedPdf);
                
                return response()->json(['message' => 'PDF saved']);
            }


            public function savePdfUint(Request $request)
            {
                $encodedPdfString = $request->getContent();
                
                $encodedPdfArray = json_decode($encodedPdfString);
                // Convert the Uint8Array to a string
                $encodedPdfString = implode(array_map("chr", $encodedPdfArray));
                
                // Decode the Base64-encoded PDF content
                // $decodedPdf = base64_decode($encodedPdfString);
                $decodedPdf = $encodedPdfString;
                $filename = 'saved_file_uint.pdf';
                Storage::disk('public')->put($filename, $decodedPdf);
                
                // You can perform additional actions or logic here, if needed
                
                return response()->json(['message' => 'PDF saved']);
            }
}
