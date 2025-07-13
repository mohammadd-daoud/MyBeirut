<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landline Registration</title>
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
        <h1>Landline Registration Form</h1>
        <form action="submit_landlineregistration.php" method="POST">
            <input type="hidden" name="form_title" value="Landline Registration">
            <input type="hidden" name="form_type" value="landline_registration">

            <label for="name">Name:</label>
            <input type="text" id="name" name="form_content[name]" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="form_content[email]" placeholder="Enter your email address" required>

            <label for="phone-number">Phone Number:</label>
            <input type="text" id="phone-number" name="form_content[phone_number]" placeholder="Enter your phone number" required>

            <label for="landline-plan">Landline Plan:</label>
            <select id="landline-plan" name="form_content[landline_plan]" required>
                <option value="" disabled selected>Select a landline plan</option>
                <option value="basic">Basic Plan</option>
                <option value="standard">Standard Plan</option>
                <option value="premium">Premium Plan</option>
            </select>

            <label for="details">Additional Details:</label>
            <textarea id="details" name="form_content[details]" rows="4" placeholder="Provide any additional details about your registration" required></textarea>

            <button type="submit">Submit Registration</button>
        </form>
    </div>
</body>

</html>
