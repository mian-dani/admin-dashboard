<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uint8Array</title>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
</head>
<body>
    


    <script>

            const pdfPath = '../../public/pdf/security.pdf';
            var pdfFile = "";

            async function fetchPdf(){
                try {
                    const response = await fetch(pdfPath);
                    const blob = await response.blob();
                    pdfFile = new Uint8Array(await blob.arrayBuffer());
                    
                    // Use the PDF file as needed
                    console.log('PDF file:', pdfFile);
                } catch (error) {
                    console.error('Error fetching PDF file:', error);
                }
            }


            async function sendPdfData(pdfFile) {
            try {
                const response = await fetch('/convert-pdf', {
                    method: 'POST',
                    body: pdfFile,
                });

                if (response.ok) {
                    const result = await response.json();
                    console.log('API response:', result);
                } else {
                    throw new Error('API request failed.');
                }
            } catch (error) {
                console.error('Error sending PDF data:', error);
            }
        }
            

                fetchPdf();
                sendPdfData();

           


    </script>
</body>
</html>