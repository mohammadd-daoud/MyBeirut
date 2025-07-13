<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permit Application</title>
    <style>
        :root {
            --primary-bg: #ffffff;
            --primary-text: #2c3e50;
            --hover-color: #3498db;
            --border-color: #e0e0e0;
            --input-bg: #f8f9fa;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --button-hover: #216ba5;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            color: var(--primary-text);
        }

        .container {
            padding: 30px;
            max-width: 600px;
            margin: 50px auto;
            background: var(--primary-bg);
            border-radius: 8px;
            box-shadow: 0 4px 8px var(--shadow-color);
        }

        h1 {
            text-align: center;
            color: var(--primary-text);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 500;
            color: var(--primary-text);
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            background: var(--input-bg);
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--hover-color);
            box-shadow: 0 0 5px var(--hover-color);
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: var(--hover-color);
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: var(--button-hover);
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Permit Application Form</h1>
        <form action="submit_permit.php" method="POST">
            <input type="hidden" name="form_title" value="Permit Application">
            <input type="hidden" name="form_type" value="permit_application">

            <label for="name">Name:</label>
            <input type="text" id="name" name="form_content[name]" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="form_content[email]" placeholder="Enter your email address" required>

            <label for="permit-type">Permit Type:</label>
            <select id="permit-type" name="form_content[permit_type]" required>
                <option value="" disabled selected>Select a permit type</option>
                <option value="demolition">Demolition Permit</option>
                <option value="construction">Construction Permit</option>
                <option value="zoning">Zoning Permit</option>
                <option value="parking">Parking Permit</option>
                <option value="other">Other</option>
            </select>

            <label for="location">Permit Location (URL):</label>
            <input type="url" id="location" name="form_content[location]" placeholder="Enter the location URL (e.g., Google Maps link)" required>

            <label for="details">Details:</label>
            <textarea id="details" name="form_content[details]" rows="4" placeholder="Provide more details about your permit application" required></textarea>

            <button type="submit">Submit Application</button>
        </form>
    </div>
</body>

</html>
