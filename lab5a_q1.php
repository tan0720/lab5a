<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>

    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }

        td {
            padding: 10px;
            border: 1px solid black;
        }

        th {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
        // Define variables for details
        $name = "Tan Bo Jan";
        $matric_number = "DI220048";
        $course = "Bachelor of Computer Science";
        $year_of_study = "3";
        $address = "No.11, Jalan Putera 7/11, Bandar Putera, 83000 Batu Pahat, Johor.";
    ?>

    <table>
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
