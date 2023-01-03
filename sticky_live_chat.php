<body>
<input type="image" src="https://ortindo.com/wp-content/uploads/2023/01/live-chat.png" class="open-button" onclick="openForm()">

<div class="chat-popup" id="myForm">     
  <form class="form-container">
 	<h1> <img src="https://ortindo.com/wp-content/uploads/2020/12/cropped-Ortindo-Logo-26-Dec-2020-2-.png"  height="50px" width="50px;">
    ORTINDO</h1>
    <label for="msg"><b>Customer Support</b></label>
    <textarea readonly="readonly">Silahkan hubungi kami melalui chanel yang ada dibawah ini.</textarea>
	<center>
    <img src="https://ortindo.com/wp-content/uploads/2023/01/2-removebg-preview.png" height="53px" width="53px;">
    <img src="https://ortindo.com/wp-content/uploads/2023/01/3-removebg-preview.png" height="50px" width="50px;">
    <img src="https://ortindo.com/wp-content/uploads/2023/01/4-removebg-preview.png" height="50px" width="50px;">
    </center>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
