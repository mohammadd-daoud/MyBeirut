<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Your Bill</title>
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
        select {
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
        select:focus {
            border-color: var(--hover-color);
            box-shadow: 0 0 5px var(--hover-color);
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
        <h1>Pay Your Bill</h1>
        <form class="payment-form" action="submit_pay_bill.php" method="POST">
            <input type="hidden" name="form_title" value="Pay Your Bill">
            <input type="hidden" name="form_type" value="pay_bill">

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="bill-number">Bill Number</label>
            <input type="text" id="bill-number" name="bill_number" placeholder="Enter your bill number" required>

            <label for="bill">Bill Type</label>
            <select id="bill" name="bill_type" required>
                <option value="" disabled selected>Select bill type</option>
                <option value="Water Bill">Water Bill</option>
                <option value="Phone Bill">Phone Bill</option>
                <option value="Electricity Bill">Electricity Bill</option>
            </select>

            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount to pay" required>

            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card_number" placeholder="1234 5678 9012 3456" maxlength="16" required>

            <label for="expiry-date">Expiry Date</label>
            <input type="month" id="expiry-date" name="expiry_date" required>

            <label for="cvv">CVV</label>
            <input type="password" id="cvv" name="cvv" placeholder="123" maxlength="3" required>

            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>

</html>
