<body>
<input type="image" src="submit_icon.jpg" class="open-button" onclick="openForm()">

<div class="chat-popup" id="myForm">     
  <form class="form-container">
 	<h1> <img src="" height="30px" width="50px;">
    ORTINDO</h1>

    <label for="msg"><b>Customer Support</b></label>
    <textarea readonly="readonly">Silahkan hubungi kami melalui chanel yang ada dibawah ini.</textarea>
	<center>
    <img src="" height="30px" width="50px;">
    <img src="" height="30px" width="50px;">
    <img src="" height="30px" width="50px;">
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