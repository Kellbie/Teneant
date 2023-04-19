<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo "done";
if (!empty($_POST)) {

} else {
// Form data has not been sent
// Display an error message or redirect to a different page
}
} else {
// Form has not been submitted using the POST method
// Display the form here
}
?>