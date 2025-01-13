<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SlideShare Downloader</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        main {
            padding: 20px;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select, button {
            padding: 10px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button {
            background-color: #4CAF50;
            color: white;
        }
        button:hover {
            background-color: #45a049;
        }
        footer {
            margin-top: 20px;
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SlideShare Downloader</h1>
    </header>
    <main>
        <h2>Download SlideShare Slides in PPT, PDF, ZIP, or JPG Format</h2>
        <p>Follow the steps below to download your favorite SlideShare presentations for free!</p>
        <form action="#" method="get">
            <input type="text" placeholder="Paste SlideShare URL here..." required>
            <br>
            <label for="quality">Select Quality:</label>
            <select id="quality" name="quality">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <br>
            <button type="submit">Download</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 SlideShareDL. All Rights Reserved.</p>
    </footer>
</body>
</html>
