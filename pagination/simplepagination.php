<?php 
error_reporting(0);
$num_rec_per_page=10;
mysql_connect('localhost','root','');
mysql_select_db('icampus');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM students LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['phone']; ?></td>            
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM students"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
echo $total_pages;
echo "<a href='simplepagination.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='simplepagination.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='simplepagination.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>