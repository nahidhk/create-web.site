<?php
if(isset($_GET['password'])) {
    $password = $_GET['password'];
    $jsonFilePath = $password . '.json';

    if(file_exists($jsonFilePath)) {
        $jsonData = file_get_contents($jsonFilePath);

        if($jsonData !== false) {
            // JSON ডেটা পার্স করুন
            $decodedData = json_decode($jsonData, true);

            if($decodedData !== null) {
                // JSON ডেটা সঠিকভাবে ডিকোড হয়েছে

                // এই সেকশনে টেবিলে ডেটা দেখানো হয়
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>JSON ডাটা টেবিলে দেখানো</title>
                    <style>
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        th, td {
                            border: 1px solid black;
                            padding: 8px;
                            text-align: left;
                        }

                        th {
                            background-color: #f2f2f2;
                        }
                    </style>
                </head>
                <body>
                    <table>
                        <tr>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                        <?php
                        // JSON ডেটা টেবিলে দেখানো
                        echo '<tr>
                                <td>' . $decodedData['email'] . '</td>
                                <td>' . $decodedData['username'] . '</td>
                                <td>' . $decodedData['password'] . '</td>
                              </tr>';
                        ?>
                    </table>
                </body>
                </html>
                <?php
            } else {
                echo "JSON ডেটা সঠিকভাবে পার্স করা যায়নি।";
            }
        } else {
            echo "ফাইল ডেটা লোড করা যায়নি।";
        }
    } else {
        echo "সংশ্লিষ্ট ফাইল খুঁজে পাওয়া যায়নি।";
    }
} else {
    echo "কোনো ব্যবহারকারীর নাম পাওয়া যায়নি।";
}
?>
