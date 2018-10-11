<?php
$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["import"]))
{
    $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
    $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
    if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
    
 {
    $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
    include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
    $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

    $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
    $highestRow = $worksheet->getHighestRow();
    for($row=2; $row<=$highestRow; $row++)
   {
        $output .= "<tr>";
        $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
        $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
        $query = "INSERT INTO tbl_excel(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
        mysqli_query($connect, $query);
        $output .= '<td>'.$name.'</td>';
        $output .= '<td>'.$email.'</td>';
        $output .= '</tr>';
   }
  } 
    $output .= '</table>';

 }
    else
 {
    $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
    <head>
        <title>ExcelToMysql</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container box">
            <h3 align="center">Import Excel to Mysql</h3><br />
            <form method="post" enctype="multipart/form-data">
                <label>Select Excel File</label>
                <input type="file" name="excel" />
                <br />
                <input type="submit" name="import" class="btn btn-info" value="Import" />
            </form>
            <br />
            <br />
            <?php
            echo $output;
            ?>
        </div>
    </body>
</html>