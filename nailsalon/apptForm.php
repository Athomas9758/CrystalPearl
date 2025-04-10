<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nail Salon</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <!-- Logo Section -->
        <div class="logo">
            <img src="images/logo.png" alt="Nail Salon Logo">
        </div>

        <!-- Navigation Section -->
        <nav class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="apptForm.php">Book</a></li>
            </ul>
        </nav>
    </header>
<body>
        <form action="appts.php" method="post" id="apptForm">
            <div class="form-container">
                <h2>Book an appointment with us!</h2>
                <div>
                    <br>
                    <label for="FName">First Name</label>
                    <input type="text" id="FName" name="FName" required>
                </div>

                <div>
                    <br>
                    <label for="LName">First Name</label>
                    <input type="text" id="fName" name="fName" required>
                </div>

                <div>
                    <br>
                    <label for="fName">First Name</label>
                    <input type="text" id="fName" name="fName" required>
                </div>

                <div>
                    <br>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div>
                    <br>
                    <label for="fName">Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </div>
                <div>
                    <br>
                    <label for="date">Date for Appointment</label>
                    <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>">
                </div>
                <div>
                    <br>
                    <label for="service_type">Service Type</label>
                    <select id="service_type" name="service_type" required>
                    <?php
                        $service_types = array(
                            'Manicure',
                            'Pedicure',
                            'Acrylic Nails',
                            'Gel Nails',
                            'Nail Polish',
                            'Nail Extensions',
                            'Nail Repair',
                            'Nail Removal',
                            'Nail Design'
                        );
                        foreach($service_types as $service_type) {
                            echo "<option value =\"$service_type\">$service_type</option>";
                        }
                    ?>
                    </select>
                </div>
                    <br>
                    <label for="staff">Preferred Staff</label>
                    <select id="staff" name="staff" required>
                    <?php
                        $staff = array(
                            'Any Staff',
                            'Genna Brent',
                            'Ashley Thomas',
                            'Gus The Bus',
                            'Mozzie',
                            'Odin',
                            'Coby',
                            'Zoey'
                        );
                        foreach($staff as $staff_member) {
                            echo "<option value =\"$staff_member\">$staff_member</option>";
                        }
                    ?>
                    </select>
                </div>
                <br>
                <button action="submit" type="submit">Submit</button>
                    </form>
        </form>
    </div>

    <div id="footer"> 
        <h3>Follow us on our social Media</h3>
        <p id="social-media">
            <a href="https://www.instagram.com/">Instagram</a> |
            <a href="https://x.com/">Twitter</a> |
            <a href="https://ca.pinterest.com/">Pinterest</a> |
            <a href="https://www.tiktok.com/">TikTok</a> |
            <a href="https://www.facebook.com/">Facebook</a>
        </p>        
        <p>&copy Nail Salon 2025</p>
        <p>Genna Brent 8997203 & Ashley Thomas 6749758</p>
    </div>


</body>
</html>