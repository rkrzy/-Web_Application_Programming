<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Request Result</title>
</head>
<body>

<div>GET value(s):</div>
<table border="1">
    <tr>
        <td style="text-align: left;">Name</td>
        <td><?php echo htmlspecialchars($_GET['name']); ?></td>
    </tr>
    <tr>
        <td style="text-align: left;">Language</td>
        <td><?php echo htmlspecialchars($_GET['language']); ?></td>
    </tr>
</table>

</body>
</html>