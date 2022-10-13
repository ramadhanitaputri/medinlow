<!DOCTYPE html>
<html>
<head>
    <title>Print Invoice</title>
    <style>
        .page
        {           
            padding:2cm;
        }
        table
        {
            border-spacing:0;
            border-collapse: collapse; 
            width:100%;
        }

        table td, table th
        {
            border: 1px solid #ccc;
        }
		
		table th
        {
            background-color:red;
        }
    </style>
</head>
<body>	
    <div class="page">	
        <h1>Data Lomba</h1>
        <table border="0">
        <tr>
                <th>No</th>
                <th>Nama Lomba</th>
                <th>Deskripsi Lomba</th>
        </tr>
        <?php
        $no = 1;
        foreach($dataProvider->getModels() as $lomba){ 
        ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $lomba->nama_lomba ?></td>
                <td><?= $lomba->deskripsi_lomba ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>   
</body>
</html>