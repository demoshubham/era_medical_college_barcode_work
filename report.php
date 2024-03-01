
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Era Lucknow Medical College</title>
        <!-- Include JsBarcode library -->
        <script src="js/JsBarcode.all.min.js"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing:border-box;
            }
            .imgcont{
                position:relative;
                width:350mm;
                height:215mm;
            }
            .breakpage{
                page-break-after: always;
            }
            /* .barcodeleft{
                position: absolute;
                z-index: 2;
                top:45mm;
                left:19mm;
            } */
            .barcodeleft{
                /* height:55px;
                position: absolute;
                z-index: 2;
                top: 134mm;
                left: 115mm;    */
                height: 55px;
                position: absolute;
                z-index: 2;
                top: 139mm;
                left: 88mm;
            }
            /* .barcoderight{
                position: absolute;
                z-index: 2;
                top:48mm;
                left:250mm;
            } */
            .barcoderight{
                height: 55px;
                position: absolute;
                z-index: 2;
                top: 136mm;
                left: 251mm;
            }
            .barcodenum{
                /* position: absolute;
                z-index: 2;
                /* top: 46mm; */
                /* top: 40mm;
                right: 44mm;
                font-size: 1.5rem; */ 
                position: absolute;
                z-index: 2;
                top: 35mm;
                right: 43mm;
                font-size: 1.5rem;
            }
            @media print {
                @page {
                    size: legal landscape;
                    margin:0; 
                }       
            }
            

            

        </style>
    </head>
    <body>
        <?php
        for ($i = $_POST['serialnum']; $i < $_POST['serialnum'] + $_POST['count']; $i++) {
          
            ?>
                <div class="imgcont" >
                    <img src="img/bg2.jpg" style="width:339mm;height:220mm;display:none;" alt="">
                    <svg id='<?php echo "barcode" . $i; ?>' class="barcodeleft"></svg>
                    <svg id='<?php echo "barcode" . $i; ?>' class="barcoderight"></svg>
                    <span class="barcodenum"><?php echo $i;?></span>
                    <?php
                        if($i <( $_POST['serialnum'] + $_POST['count'])-1){
                            echo '<div class="breakpage"></div>';
                        }
                    ?>
                    
                </div>
            <?php
        }
        ?>
        
        <!-- JavaScript code to generate barcodes -->
        <script type="text/javascript">
            // Function to generate barcodes for a range of serial numbers
            function generateBarcodes(start, count) {
                for (var i = start; i < start + count; i++) {
                    // Generate barcode for each serial number
                    JsBarcode("#barcode" + i, i.toString(), {
                        format: "codabar",
                        lineColor: "#000",
                        width: 3,
                        height: 40,
                        displayValue: false
                    });
                }
            }

            // Fetch serial number and count from PHP variables
            var startSerial = <?php echo $_POST['serialnum']; ?>;
            var barcodeCount = <?php echo $_POST['count']; ?>;

            // Generate barcodes for the specified range
            generateBarcodes(startSerial, barcodeCount);
        </script>
    </body>
</html>
