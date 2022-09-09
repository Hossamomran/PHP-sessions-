<?php
// Start the session
session_start();

if(isset($_SESSION['page_count'])){
    $_SESSION['page_count'] = $_SESSION['page_count'] + 1;  // add 1 to view 
} else {
    $_SESSION['page_count'] = 1 ; // if 1st visit show 1 
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "You have viewed my website for {$_SESSION['page_count']}";
// print how many times user viewed my website 
/* Extra About Is the counter will reset if I opened the page after few days ?
* If I close the browser and reopen it after  immediatly or after day or two it will Restart the session and make 
new PHPSESSI
* I tried to close apache and change date of windows to next day and then reopen Apache server and browser and It restart counting
* Conclusion :- Session PHPSESSI Will only be saved as soos as I open a browser and didnt close it ( or stay unactive for long time)
 */

?>

</body>

</html>
