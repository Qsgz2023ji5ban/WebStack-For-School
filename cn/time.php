<?php
// 检查是否存在id的cookie，如果不存在，则创建一个
if (!isset($_COOKIE['id'])) {
    $cookie_value = uniqid(); // 生成一个唯一的ID
    setcookie('id', $cookie_value, time() + (86400 * 30), "/"); // 设置cookie，有效期为30天
}

// 使用cookie中的id或默认值来确定背景图片
$userId = isset($_COOKIE['id']) ? $_COOKIE['id'] : 'default';
$backgroundImage = 'uploads/' . $userId . '.png';
if (!file_exists($backgroundImage)) {
    $backgroundImage = 'background.png'; // 如果没有找到用户的图片，使用默认图片
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Time</title>
    <link rel="shortcut icon" href="../assets/images/favicon.png">
    <style>
        /* 设置背景图片 */
        body {
            background-image: url('<?php echo $backgroundImage; ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: "微软雅黑", sans-serif;
        }
       /* 其他样式保持不变 */
/* 设置时间的字号和字体 */
        .time, .text {
            text-align: center;
            color: white;
        }
        .time {
            font-size: 250px; /* 默认字号 */
            margin-top: 5%;
        }
        .text {
            font-size: 50px; /* 默认字号 */
            margin-top: 0%;
            color: #bbbbbb;
        }

        /* 添加按钮样式 */
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 14px;
            margin: 5px; /* 间距 */
        }

        /* 控制区域样式 */
        .controls {
            text-align: center; /* 居中控制区域 */
        }
    </style>
    <script>
        // 每秒更新时间
        setInterval(() => {
            const date = new Date();
            const time = date.toLocaleTimeString();
            document.querySelector('.time').textContent = time;
        }, 1000);

        // JavaScript 函数，用于更改字号
        function changeFontSize(change) {
            const elements = document.querySelectorAll('.time, .text'); // 只影响.time和.text
            elements.forEach(element => {
                const currentSize = parseFloat(window.getComputedStyle(element).fontSize);
                const newSize = currentSize + change;
                element.style.fontSize = newSize + 'px';
            });
        }

        // JavaScript 函数，用于更改字体
        function changeFontFamily() {
            const selectedFont = document.getElementById('fontSelector').value;
            const elements = document.querySelectorAll('.time, .text'); // 只影响.time和.text
            elements.forEach(element => {
                element.style.fontFamily = selectedFont;
            });
        }

        // JavaScript 函数，用于全屏和还原
        function toggleFullScreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        }
    </script>
    </style>
</head>
<body>
    <!-- 省略其他内容 -->
<div class="text"><p>当前时间：</p></div>
    <div class="time"></div>

    <!-- 控制区域 -->
    <div class="controls">
        <!-- 添加字体选择下拉菜单 -->
        <select id="fontSelector" class="btn">
            <option value="微软雅黑">微软雅黑</option>
            <option value="黑体">黑体</option>
            <option value="宋体">宋体</option>
            <!-- 添加更多字体选项 -->
        </select>

        <!-- 添加按钮 -->
        <button class="btn" onclick="changeFontFamily()">更改字体</button>
        <button class="btn" onclick="changeFontSize(-10)">减小字号</button>
        <button class="btn" onclick="changeFontSize(10)">增大字号</button>
        <button class="btn" onclick="toggleFullScreen()">全屏/还原</button>
    </div>

   <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align: center;">
        <label for="background" class="btn" style="background-color: #007bff; color: #ffffff;">选择图片：</label>
        <input type="file" name="background" id="background" class="btn">
        <input type="submit" value="上传图片" name="submit" class="btn">
    </form>


    <!-- 省略其他内容 -->
</body>
</html>
