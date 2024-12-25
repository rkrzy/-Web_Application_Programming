<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Request Result</title>
</head>
<body>

<div>POST value(s):</div>

<table border="1">
    <tr>
        <td style="text-align: left;" >Name</td>
        <td><?php echo htmlspecialchars($_POST['name']); ?></td>
    </tr>
    <tr>
        <td style="text-align: left;">Language</td>
        <td><?php echo htmlspecialchars($_POST['language']); ?></td>
    </tr>
</table>

</body>
</html>