<html>  
      <head>  
           <title>MysqlToExcel</title>  
           <script src="../js/jquery.min.js"></script>  
           <link rel="stylesheet" href="../css/bootstrap.min.css" />  
           <script src="../js/bootstrap.min.js"></script>  
           <style>  
                body  
                {  
                     margin:0;  
                     padding:0;  
                     background-color:#f1f1f1;  
                }  
                .box  
                {  
                     width:900px;  
                     padding:20px;  
                     background-color:#fff;  
                     border:1px solid #ccc;  
                     border-radius:5px;  
                     margin-top:100px;  
                }  
           </style>  
      </head>  
      <body>  
           <div class="container box">  
                <h3 align="center">Export Mysql to Excel</h3>  
                <br /><br />  
                <br /><br />  
                <form mehtod="post" id="export_excel">  
                     <label>Select Excel</label>  
                     <input type="file" name="excel_file" id="excel_file" />  
                </form>  
                <br />  
                <br />  
                <div id="result">  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#excel_file').change(function(){  
           $('#export_excel').submit();  
      });  
      $('#export_excel').on('submit', function(event){  
           event.preventDefault();  
           $.ajax({  
                url:"export.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#result').html(data);  
                     $('#excel_file').val('');  
                }  
           });  
      });  
 });  
 </script>  