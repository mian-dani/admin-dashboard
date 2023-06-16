<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base 64</title>
</head>
<body>




<script>
    
    function convertAndSend() {
        
        const filePath = '../../public/pdf/security.pdf'; 
        
        // Step 2: Send a GET request to fetch the file
        fetch(filePath)
        .then(response => response.blob())
        .then(blob => {
            // Step 3: Encode the PDF file as base64
            const reader = new FileReader();
            reader.onloadend = function() {
            const pdfBase64 = reader.result.split(',')[1];
            console.log(pdfBase64);
            // Step 4: Prepare the request
            const apiEndpoint = 'https://api.example.com/upload';
            const payload = { file: pdfBase64 };
            
            // Step 5: Send the request
            fetch(apiEndpoint, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload)
            })
                .then(response => {
                // Step 6: Handle the response
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error(`Request failed with status code ${response.status}`);
                }
                })
                .then(data => {
                // Step 7: Handle the response data
                const decodedPdfData = atob(data.file);
                
                // Step 8: Save the PDF file after decoding it from base64
                const a = document.createElement('a');
                a.href = 'data:application/pdf;base64,' + decodedPdfData;
                a.download = 'decoded_file.pdf';
                a.click();
                console.log('PDF file saved successfully.');
                })
                .catch(error => {
                // Handle the request error
                console.error('An error occurred during the request:', error);
                });
            };
            
            reader.readAsDataURL(blob);
        })
        .catch(error => {
            // Handle the file retrieval error
            console.error('An error occurred while retrieving the file:', error);
        });
    }

    convertAndSend();
</script>
    

    <!-- <script>
        

            const pdfPath = '../../public/pdf/security.pdf';
            var pdfFile = "";

            async function fetchPdf(){
                try {
                    const response = await fetch(pdfPath);
                    const blob = await response.blob();

                    const reader = new FileReader();
                    reader.onloadend = function() {
                    pdfFile = reader.result.split(',')[1];
                    
                    console.log('pdfFile base 64 : ', pdfFile);
                    }
                } catch (error) {
                    console.error('Error fetching PDF file:', error);
                }
            }
        
            fetchPdf();
        

                // Step 4: Prepare the request
        //         const apiEndpoint = 'https://api.example.com/upload';
        //         const payload = { file: pdfBase64 };

        //         // Step 5: Send the request
        //         axios.post(apiEndpoint, payload)
        //         .then(response => {
        //             // Step 6: Handle the response
        //             if (response.status === 200) {
        //             // Successful response
        //             const decodedPdfData = atob(response.data.file);

        //             // Step 7: Save the PDF file after decoding it from base64
        //             const a = document.createElement('a');
        //             a.href = 'data:application/pdf;base64,' + decodedPdfData;
        //             a.download = 'decoded_file.pdf';
        //             a.click();
        //             console.log('PDF file saved successfully.');
        //             } else {
        //             // Handle the error case
        //             console.error(`Request failed with status code ${response.status}: ${response.data}`);
        //             }
        //         })
        //         .catch(error => {
        //             // Handle the request error
        //             console.error('An error occurred during the request:', error);
        //         });
        //     };
            
        //     // Read the PDF file as Data URL
        //     reader.readAsDataURL(file);
        //     }
        // }


        
    </script> -->


    <!-- <script>
        const  fs = require('fs');
        const axios = require('axios');

        // Step 1: Read the PDF file
        const filePath = 'path/to/file.pdf';
        const pdfData = fs.readFileSync(filePath);

        // Step 2: Encode the PDF file as base64
        const pdfBase64 = Buffer.from(pdfData).toString('base64');

        console.log("pdf base 64 : ", pdfBase64);
        // Step 3: Prepare the request
        const apiEndpoint = 'https://api.example.com/upload';
        const headers = { 'Content-Type': 'application/json' };
        const payload = { file: pdfBase64 };

        // Step 4: Send the request
        axios.post(apiEndpoint, payload, { headers })
        .then(response => {
            if (response.status === 200) {
            // Step 5: Handle the response
            const decodedPdfData = Buffer.from(response.data.file, 'base64');

            // Step 1: Save the PDF file after decoding it from base64
            const decodedFilePath = 'path/to/decoded_file.pdf';
            fs.writeFileSync(decodedFilePath, decodedPdfData);

            console.log('PDF file saved successfully.');
            } else {
            console.error(`Request failed with status code ${response.status}: ${response.data}`);
            }
        })
        .catch(error => {
            console.error('An error occurred while making the request:', error);
        });

    </script> -->
</body>
</html>