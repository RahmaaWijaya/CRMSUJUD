<x-app-layout>
    <title>Import Tansaksi</title>
    <style>
        /* Container for the form */
        .form-container {
            width: 850px;
            height: 400px;
            margin: 100px auto;
            background-color: #FFF4EA;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h3 {
            margin-bottom: 20px;
        }
        .form-container input[type="file"] {
            display: none;
        }
        .form-container label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .form-container button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .form-container a {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .form-container .button-group {
            margin-top: 20px;
        }
        .form-container .button-group button {
            width: 100px;
        }
        .file-container {
            display: flex;
            align-items: center; /* Aligns items vertically centered */
        }

        .file-container i {
            margin-right: 8px; /* Adds some space between the icon and the text */
            margin-left: 10px;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <div class="file-container">
            <i class="fa-solid fa-file"></i>
            <h1>From File</h1>
        </div>
        <form action="{{route('import.deals')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <p>Drag and drop your file here<br></p>
            <br>
            <p>-or-</p>
            <div>
                <label for="file">Browse</label>
                <input type="file" id="file" name="file" accept=".csv,.xls,.xlsx" required>
                <!-- Elemen untuk menampilkan nama file yang dipilih -->
                <p id="file-name"></p>
            </div>
            <br>
            <br>
            <!-- <a href="#">Download sample file CSV or XLSX</a> -->
            <p>You can import up to 5000 records through an .xls, .xlsx, .vcf, or .csv file. To import more than 5000 records at a time, use a .csv file.</p>
            <div class="button-group">
                <button type="button" onclick="window.location.href='{{ url()->previous() }}'">Cancel</button>
                <button type="submit">Next</button>
            </div>
        </form>
    </div>
</body>
    <script>
        document.getElementById('file').addEventListener('change', function(event) {
            // Ambil nama file yang dipilih
            var fileName = event.target.files[0].name;
            // Tampilkan nama file ke elemen dengan id "file-name"
            document.getElementById('file-name').textContent = 'File selected: ' + fileName;
        });
    </script>
</html>

</x-app-layout>