<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application 2 - CI/CD</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.15);
            padding: 60px 80px;
            border-radius: 30px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            max-width: 600px;
        }
        h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 25px;
            margin: 10px 0;
            font-size: 1.1em;
        }
        .info-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 15px;
            margin-top: 30px;
        }
        .info-item {
            margin: 12px 0;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎨 Web Application 2</h1>
        <div class="badge">✅ Deployed via GitHub Actions</div>
        <div class="badge">📍 Port 3000</div>
        
        <div class="info-box">
            <div class="info-item">
                <strong>🕐 Server Time:</strong> <?php echo date('Y-m-d H:i:s'); ?>
            </div>
            <div class="info-item">
                <strong>🐘 PHP Version:</strong> <?php echo phpversion(); ?>
            </div>
            <div class="info-item">
                <strong>🖥️ Server Name:</strong> <?php echo php_uname('n'); ?>
            </div>
            <div class="info-item">
                <strong>🌐 Your IP:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?>
            </div>
        </div>
        
        <div style="margin-top: 20px; font-size: 0.9em; opacity: 0.8;">
            Version 1.0 - Auto-deployed with CI/CD
        </div>
    </div>
</body>
</html>