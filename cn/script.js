// 定义一个函数，用于获取当前时间
function getCurrentTime() {
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var hour = date.getHours();
    var minute = date.getMinutes();
    var second = date.getSeconds();
    return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
}

// 获取留言数组
const messages = JSON.parse(localStorage.getItem('messages')) || [];

// 提交留言
document.getElementById('messageForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const message = document.getElementById('messageInput').value;
  // 在留言内容前面添加时间戳标题
  const messageWithTime = getCurrentTime() + "\n" + message;
  messages.push(messageWithTime); // 添加留言
  localStorage.setItem('messages', JSON.stringify(messages)); // 保存留言
  displayMessages(); // 显示留言
  document.getElementById('messageInput').value = ''; // 清空输入框
});

// 显示留言
function displayMessages() {
  document.getElementById('messages').innerHTML = messages.map(message => {
    return `<li>${message}</li>`;
  }).join('');
}

// 定义一个函数，用于清除所有的留言
function clearMessages() {
  // 清空留言数组
  messages.length = 0;

  // 清空本地存储中的留言
  localStorage.clear();

  // 清空页面上的留言
  document.getElementById('messages').innerHTML = '';
}

displayMessages();
