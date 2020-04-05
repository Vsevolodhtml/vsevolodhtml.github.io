<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Чат</title>
  <style>
	body {
		padding: 5px;
	}
	.qwer {
		border: 5px double #e2e8eb;
		margin: 0 auto;
		width: 500px;
	}
	h2 {
		text-align: center;
	}
	#chat, table {
		margin: 0 auto;
	}
	#chat {
		border: 3px solid black;
		height: 350px;
		margin: 0 auto;
		overflow-x: none;
		overflow-y: auto;
		width: 300px;
	}
	p {
		margin: 0;
	}
	img {
		width: 250px;
	}
  </style>
  <script src="script_chat.js">

  </script>

</head>
<body onload="chat();">
<div class="qwer">
  <h2>Чат</h2>
  <div id="chat" class="chat" name="chat">
  </div>
  <br>
  <table>
    <tr>
      <td>Имя:</td>
      <td><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td>Cообщение:</td>
      <td><input type="text" name="message" id="message"></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="button" value="Отправить!" onclick="addMessage();">
      </td>
    </tr>
  </table>
</div>
</body>
</html>
