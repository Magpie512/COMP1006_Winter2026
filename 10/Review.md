# Lab Five Review and Questions
I enjoyed this lab alot. I have been looking forward to both acount creation as well as image uploading. I already implemented this into the blogs sql. 

### 1. What is the purpose of the $_FILES superglobal in PHP?

$_FILES is a built-in PHP array that gives you access to information about a file that was uploaded through a form. It contains details like the file's original name, its temporary location on the server, its size, its MIME type, and any upload error codes.

It's worth stating that MIME types are the images format.

### 2. Why does a form need special settings to upload files?

A regular HTML form only sends text data by default. To include file data, the form needs enctype="multipart/form-data" (encodeType) added to the <form> tag. Without it, the file contents are never actually sent to the server, thusly PHP won't receive anything in $_FILES.

### 3. What function is used to move uploaded files to a folder?

move_uploaded_file() is used to move an uploaded file from its temporary location (where PHP stores it briefly during the request) to a permanent folder on the server. It also verifies that the file was actually uploaded via HTTP POST, which adds a layer of security.

### 4. Why is it important to control where uploaded files are stored?

If you let users upload files without restrictions, they could upload malicious scripts and potentially execute them on the server. Controlling the destination folder, validating the file type using mime_content_type(), and generating a safe unique filename (like we did with uniqid()) helps prevent attackers from using file uploads as a security exploit.