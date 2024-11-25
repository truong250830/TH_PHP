<?php

$filename = "questions.txt";
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$current_question = [];
foreach ($questions as $line) {
    if (strpos($line, "Câu") === 0) {
        if (!empty($current_question)) {
            $questionsList[] = $current_question;
        }
        $current_question = [];
    }
    $current_question[] = $line;
}
if (!empty($current_question)) {
    $questionsList[] = $current_question;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thi trắc nghiệm</title>
    <script src="/Tailwind/Tailwind/tailwind.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>

<div class="container mx-auto mt-5 p-4">
    <h1 class="text-center text-2xl font-semibold mb-4">Bài thi trắc nghiệm</h1>
    <form action="submit.php" method="POST">
        <?php foreach ($questionsList as $index => $question): ?>
            <div class='bg-white shadow-lg rounded-lg mb-6'>
                <div class='bg-gray-200 p-4 font-semibold'><?php echo $question[0]; ?></div>
                <div class='p-4'>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <div class='flex items-center mb-2'>
                            <input class='mr-2' type='radio' name='question<?php echo $index + 1; ?>' value='<?php echo chr(65 + $i - 1); ?>' id='question<?php echo $index + 1; ?><?php echo chr(65 + $i - 1); ?>'>
                            <label for='question<?php echo $index + 1; ?><?php echo chr(65 + $i - 1); ?>'><?php echo $question[$i]; ?></label>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Nộp bài</button>
    </form>
</div>

</body>
</html>
