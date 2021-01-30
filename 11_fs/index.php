<?php
// Magic constants
echo __DIR__.'<br>' ; //>>C:\xampp\htdocs\php-crash-course-2020\11_fs  ))>> shows in which directory is file
echo __FILE__.'<br>'; //>>C:\xampp\htdocs\php-crash-course-2020\11_fs\index.php ))>> shows which file 
echo __LINE__.'<br>'; //>>5  ))>> shows from which line is code executing

// Create directory
mkdir('test'); //>> creates a directory

// Rename directory
rename('test', 'test2');

// Delete directory
rmdir('test2');

// Read files and folders inside directory
$files = scandir('./'); //>> specify the path  || and it will shop up the files and "." and  ".." previous and current dir

echo '<pre>';
var_dump($files); 
echo '<pre>';

// file_get_contents, file_put_contents
file_get_contents('lorem.txt');       //>> read the file and the return the output
file_put_contents('sample.txt', 'Some Content'); //>> syntax: file_put_contents('fileName', 'Content');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson;

$users = json_decode($usersJson); //>> turns JSON format into an array; json_decode($usersJson, true>> associative array not into an object)

echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
file_exists('simple.txt'); // file_exists >> returns true

is_dir('test');  // is_dir>> checks for the directory returns true or false 
// filemtime
// filesize
// disk_free_space
// file

// PHP File Open/Read/Close
$myfile = fopen("lorem.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("lorem.txt"));
fclose($myfile);
//>> The file may be opened in one of the following modes:

/*
Modes 	Description
r 	Open a file for read only. File pointer starts at the beginning of the file
w 	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a 	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x 	Creates a new file for write only. Returns FALSE and an error if file already exists
r+ 	Open a file for read/write. File pointer starts at the beginning of the file
w+ 	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ 	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+ 	Creates a new file for read/write. Returns FALSE and an error if file already exists
*/

// fread(); >> reads from an open file
// syntax : fread($myfile, filesize("lorem.txt")); file, size



//fclose(); >> used to close an open file;
// syntax : fclose($myfile);



// fgets(); >> used to read a single line from a file
$myfile = fopen("lorem.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
// ** After a call to the fgets() function, the file pointer has moved to the next line.



// feof(); >> check end of file 
//  checks if the "end-of-file" (EOF) has been reached
// useful for looping through the data of unknown length 
$myfile = fopen("lorem.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);



// fgetc() =>  used to read a single character from a file
$myfile = fopen("lorem.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);

// -/-/-//-/-/-/-/-/-/-/-/-/-/  PHP File Create/Write  -/-/-/-/-//-/-/-/-/-/-/

// fopen() >> on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

$myfile = fopen("testfile.txt", "w");//>> created test file

//PHP Write to File - fwrite() >> used to write to a file 
// syntax : fwrite(file, string to be written)
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

//  -/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/        PHP File Upload -/-/-//-/-/-/-/-/-/-/-/-/-/-/-
// First, ensure that PHP is configured to allow file uploads
// In your "php.ini" file, search for the file_uploads directive, and set it to On
// file_uploads = On