<?php
include 'database.php';

$category_id = $_POST["category_id"];

// Fetch the category from the database
$result = mysqli_query($database, "SELECT * FROM `category` WHERE `id` = '$category_id'");
$rec = mysqli_fetch_array($result);
$db_sub_cat = $rec["subcategories"] ;
echo $db_sub_cat;
// Explode the subcategories into an array and trim each element
$all_sub_cat = explode(",", $db_sub_cat);

?>

<!-- Start of the select element -->
<option value="">Select SubCategory</option>

<?php
// Loop through each subcategory and create an option element
foreach ($all_sub_cat as $sub_cat) {
?>
    <option value="<?php echo $sub_cat; ?>"><?php echo $sub_cat; ?></option>
<?php
}
?>
