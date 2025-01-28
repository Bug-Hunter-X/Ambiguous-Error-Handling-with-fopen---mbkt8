```php
$file = fopen('somefile.txt', 'r');
if ($file === false) {
    $error = error_get_last();
    if ($error) {
        $errorMessage = $error['message'];
    } else {
        $errorMessage = 'Unknown error opening file.';
    }
    // Handle the specific error using error messages 
    switch ($errorMessage) {
        case 'failed to open stream: No such file or directory':
            //handle file not found
            break;
        case 'failed to open stream: Permission denied':
            //Handle permission denied
            break;
        default:
            //Handle other errors
            break;
    }
    echo "Error: " . $errorMessage;
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line of the file
    }
    fclose($file);
}
```