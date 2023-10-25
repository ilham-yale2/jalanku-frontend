<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
</head>
<body class="bg-slate-200">
    <div class="flex justify-center w-full min-h-screen">

        <div class="w-full max-w-md px-4 py-5 bg-slate-100">
            
            <div>
                <video id="webcam" autoplay></video>
            </div>

    
        </div>
    </div>
    <script>
        // Check for navigator.mediaDevices.getUserMedia availability
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            // Get the webcam video feed
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    var video = document.getElementById("webcam");
                    video.srcObject = stream;
                })
                .catch(function (error) {
                    console.log("Error accessing webcam: " + error.message);
                });
        } else {
            console.log("getUserMedia is not available in this browser.");
        }
    </script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>