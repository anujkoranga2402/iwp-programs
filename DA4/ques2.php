<!DOCTYPE html>
<html>

<head>
	<title>22MCA0125 DA4 Ques 2</title>
	<link rel="stylesheet" href="styling.css">
</head>

<body>

	<div class="main_container">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="uploadedFile" required>
			<input type="submit" value="Upload">
		</form>
	</div>

	<div class="error_box">
		<?php
		//function to check if the file is valid type (.doc, .docx, and pdf files)
		function isFileAllowed($fileType)
		{
			$allowedTypes = array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf');
			return in_array($fileType, $allowedTypes);
		}

		//function to check if the file size is within the limit (10 MB)
		function isFileSizeAllowed($fileSize)
		{
			$maxSize = 10 * 1024 * 1024; //10 MB in bytes
			return ($fileSize <= $maxSize);
		}

		//file upload
		if (isset($_FILES['uploadedFile'])) {
			$file = $_FILES['uploadedFile'];
			$uploadDir = 'uploads/';
			$uploadPath = $uploadDir . basename($file['name']);

			//check if file is valid type
			if (!isFileAllowed($file['type'])) {
				$fileTypeError = "Invalid file format. Only .doc, .docx, and pdf files are allowed.";
			}

			//check if the file size is less than 10 MB
			if (!isFileSizeAllowed($file['size'])) {
				$fileSizeError = "File size exceeds the limit. Maximum file size allowed is 10 MB.";
			}

			//check for errors
			if (empty($fileTypeError) && empty($fileSizeError)) {
				//check if the file already exists
				if (!file_exists($uploadPath)) {
					//move the uploaded file to the destination directory with its original name
					if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
						echo "File uploaded successfully.";
					} else {
						echo "Error uploading the file.";
					}
				} else {
					//display if file already exists
					echo "File already exists.";
				}
			} else {
				//display if error has occurred
				if (!empty($fileTypeError)) {
					echo $fileTypeError;
				}
				if (!empty($fileSizeError)) {
					echo $fileSizeError;
				}
			}
		}
		?>
	</div>
</body>

</html>