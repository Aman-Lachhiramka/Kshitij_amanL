<?php $ path = "files/"; $path = $path . basename( $_FILES['Kshitij']['name']);

if(move_uploaded_file($_FILES['Kshitij']['tmp_name'], $path)) { echo "Success uploading". basename($_FILES['Kshitij']['name']); } else{ echo "Error when uploading file."; } ?>