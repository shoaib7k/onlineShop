<?php include "os_menu2.html" ?>
<form action="iu_kw.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Image Upload</legend>
<label for="userFile">Small image to upload: </label>
<input type="file" size="40" name="userFile" id="userFile"/><br />
<br />
<label for="altText">Description of image</label>
<input type="text" size="60" name="altText" id="altText"/><br />
<br />
<input type="submit" value="Upload File" />
</fieldset>
</form>