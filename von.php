<!DOCTYPE html>
<html>
<head>
    <title>Voucher Code Generator</title>
    <style>
        body {
            font-family: Arial;
            padding: 40px;
            background: #f5f5f5;
        }
        form {
            background: #fff;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type=submit] {
            padding: 10px;
            width: 100%;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }
        .voucher {
            margin-top: 20px;
            padding: 15px;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <h2>Generate Your Voucher</h2>
    <form method="post">
        <input type="submit" name="generate" value="Generate Voucher">
    </form>

    <?php
    // Function to generate a random voucher code
    function generateVoucherCode($prefix = "VOUCH", $length = 6) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $voucher = '';
        for ($i = 0; $i < $length; $i++) {
            $voucher .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $prefix . '-' . $voucher;
    }

    // If form submitted
    if (isset($_POST['generate'])) {
        $newCode = generateVoucherCode();

        // Save to file
        $filePath = "vouchers.txt";
        $file = fopen($filePath, "a");
        if ($file) {
            fwrite($file, $newCode . PHP_EOL);
            fclose($file);

            // Show the code
            echo "<div class='voucher'>Your Voucher Code: <strong>$newCode</strong></div>";
        } else {
            echo "<p style='color:red;'>Error: Cannot write to file.</p>";
        }
    }
    ?>

</body>
</html>
