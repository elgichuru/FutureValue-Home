<?php
//set default values for variables
if (!isset($investment)){$investment='';}
if (!isset($interest_rate)){$interest_rate='';}
if (!isset($years)){$years='';}
?>
<!doctype html>
<head>
    <title>Future Value Application</title>
    <link rel="stylesheet" type="css/text" href="main.css">
    <link rel="icon" type="image/x-icon" href="favico.ico">
</head>
<body>
    <<main>
        <h1>Future value Calculator</h1>
        <?php if(!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="display_report.php" method="POST">
            <div id="data">
                <label>Investment:</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars>"
                
            </div>
        </form>
    </main>
</body>