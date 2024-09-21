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
        <div class="data-section">
            <h2>IP Address</h2>
            <pre id="ipAddress">Loading...</pre>
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

        // Function to get necessary UTM parameters and referral from URL
        function getUTMParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                referral: params.get('referral') || '',
                utm_source: params.get('utm_source') || '',
                utm_medium: params.get('utm_medium') || '',
                utm_campaign: params.get('utm_campaign') || '',
                utm_term: params.get('utm_term') || '', // Added utm_term parameter
            };
        }

        // Function to send device information and get the fingerprint
        async function getFingerprint() {
            const deviceInfo = getDeviceInfo();
            const utmParams = getUTMParams();
            const event_type = 'some_event'; // Define your event type or get it dynamically if needed
            const combinedInfo = {...deviceInfo, ...utmParams, event_type};

            const response = await fetch('Device/generate_fingerprint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(combinedInfo),
            });

            if (response.ok) {
                const data = await response.json();
                document.getElementById('fingerprint').innerText = data.device_fingerprint;
                document.getElementById('ipAddress').innerText = data.ip_address;
                // Set the local storage value
                localStorage.setItem('referral', data.device_fingerprint);

                // Construct redirect URL
                const redirectUrl = `https://play.google.com/store/apps/details?id=com.tejkun.turbopaisa&referrer=utm_source=${utmParams.utm_source}&utm_medium=${utmParams.utm_medium}&utm_campaign=${utmParams.utm_campaign}`;

                // Redirect after 1 second
                setTimeout(() => {
                    window.location.href = redirectUrl;
                }, 1000);
            } else {
                document.getElementById('fingerprint').innerText = 'Error retrieving fingerprint';
                document.getElementById('ipAddress').innerText = 'Error retrieving IP address';
            }
        }

        // Call the function to get the fingerprint
        getFingerprint();
    </script>
</body>
</html>
