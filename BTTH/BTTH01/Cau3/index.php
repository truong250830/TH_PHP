<?php

$filename = "KTPM2.csv";
$sinhvien = [];

if (($handle = fopen($filename, "r")) !== FALSE) {
    
    $line = fgets($handle);
    if (substr($line, 0, 3) == "\xef\xbb\xbf") {
        $line = substr($line, 3); 
    }
    
    
    $headers = str_getcsv($line);

  
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        
        $data = array_map('trim', $data);

        
        if (count($data) < count($headers)) {
            $data[] = "Chưa có khóa học";  
        }

        $sinhvien[] = array_combine($headers, $data);
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="/Tailwind/Tailwind/tailwind.js"></script>
</head>
<body>
    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-3xl font-semibold text-center mb-6">Danh sách sinh viên</h1>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-4 py-2 border">Username</th>
                    <th class="px-4 py-2 border">Password</th>
                    <th class="px-4 py-2 border">Họ</th>
                    <th class="px-4 py-2 border">Tên</th>
                    <th class="px-4 py-2 border">Thành phố</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Khóa học</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sinhvien as $sv) {
                    echo "<tr class='hover:bg-gray-100'>";
                    echo "<td class='px-4 py-2 border'>{$sv['username']}</td>";
                    echo "<td class='px-4 py-2 border'>{$sv['password']}</td>";
                    echo "<td class='px-4 py-2 border'>{$sv['lastname']}</td>";
                    echo "<td class='px-4 py-2 border'>{$sv['firstname']}</td>";
                    echo "<td class='px-4 py-2 border'>{$sv['city']}</td>";
                    echo "<td class='px-4 py-2 border'>{$sv['email']}</td>";
                    echo "<td class='px-4 py-2 border'>{$sv['course1']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
