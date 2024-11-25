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


$answers = [];
foreach ($questionsList as $question) {
    $answers[] = trim(substr($question[5], strpos($question[5], ":") + 1));
}


$score = 0;
foreach ($_POST as $key => $userAnswer) {
    $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả bài thi</title>
    <script src="/Tailwind/Tailwind/tailwind.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-10 p-4">
    <h1 class="text-center text-3xl font-bold mb-6">Kết quả bài thi trắc nghiệm</h1>

    
    <div class="bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-center mb-4">
            <?php if ($score === count($answers)): ?>
                <div class="text-green-600 font-semibold text-xl">Chúc mừng bạn đã trả lời đúng tất cả các câu hỏi!</div>
            <?php elseif ($score >= count($answers) / 2): ?>
                <div class="text-yellow-500 font-semibold text-xl">Bạn đã hoàn thành bài thi một cách xuất sắc!</div>
            <?php else: ?>
                <div class="text-red-600 font-semibold text-xl">Cố gắng lần sau nhé! Bạn có thể làm tốt hơn.</div>
            <?php endif; ?>
        </div>

        <p class="text-center text-lg">Bạn đã trả lời đúng <span class="font-bold text-2xl"><?php echo $score; ?></span> / <?php echo count($answers); ?> câu hỏi.</p>

        <div class="mt-6 text-center">
            <a href="index.php" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Làm lại</a>
        </div>
    </div>
</div>

</body>
</html>
