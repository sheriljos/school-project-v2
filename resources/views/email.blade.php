<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
</head>
<body>
    <h2>A new mail : Holy Trinity</h2>
    <div class="w3-container w3-orange">
        <p>
            <b>You have mail from :</b><span
                style="color: #5839e3; background: #EEE";> {{ $bodyName }}</span>
        </p>
        <p>
            <b>The message is :</b><span
                style="color: #e36c39; background: #EEE";> {{ $bodyMessage }}</span>
        </p>
        <p>
            <b>Reach back in :</b><span
                style="color: #e36c39; background: #EEE";> {{ $email }}</span>
        </p>
    </div>
</body>
</html>