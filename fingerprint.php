<?php
// Function to generate a unique fingerprint based on device information
function generateFingerprint($deviceInfoJson) {
    return hash('sha256', $deviceInfoJson);
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the device information JSON from the POST request
    $deviceInfoJson = file_get_contents('php://input');
    
    // Generate the fingerprint
    $fingerprint = generateFingerprint($deviceInfoJson);
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode(['device_fingerprint' => $fingerprint]);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Fingerprint</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            padding: 20px;
            margin: 20px;
            box-sizing: border-box;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .data-section {
            margin: 20px 0;
        }
        .data-section h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .data-section pre {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Device Fingerprint</h1>
        <div class="data-section">
            <h2>Device Fingerprint</h2>
            <pre id="fingerprint">Loading...</pre>
        </div>
    </div>

    <script>
        // Function to get device information
        function getDeviceInfo() {
            return {
                screenResolution: `${screen.width}x${screen.height}`,
                colorDepth: screen.colorDepth,
                timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
                language: navigator.language,
                plugins: Array.from(navigator.plugins).map(plugin => plugin.name).join(', '),
                hardwareConcurrency: navigator.hardwareConcurrency,
                deviceMemory: navigator.deviceMemory,
            };
        }

        // Function to send device information and get the fingerprint
        async function getFingerprint() {
            const deviceInfo = getDeviceInfo();
            const response = await fetch(window.location.href, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(deviceInfo),
            });

            if (response.ok) {
                const data = await response.json();
                document.getElementById('fingerprint').innerText = data.device_fingerprint;
                // Set the local storage value
                localStorage.setItem('referral', data.device_fingerprint);
            } else {
                document.getElementById('fingerprint').innerText = 'Error retrieving fingerprint';
            }
        }

        // Call the function to get the fingerprint
        getFingerprint();
    </script>
</body>
</html>
