<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innoleadsasds</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script>
    function test(){
      const doc = new jsPDF({
        orientation: "p",
        unit: "in",
        format: [6.5, 4.25]
      });
    
    doc.text("Hello world!", 10, 10);
    doc.save("custompdf.pdf");
    }
    
    </script>
</head>

<body>
    <button onclick="test()">Save PDF</button>
    
</body>
</html>