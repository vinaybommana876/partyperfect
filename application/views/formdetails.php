<!DOCTYPE html>
<html lang="en">

<?php include "partials/head.php"; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    .container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .overview,
    .booking-summary {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .overview {
        flex: 2;
        margin-right: 20px;
    }

    .booking-summary {
        flex: 1;
        max-width: 350px;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .back {
        display: flex;
        align-items: center;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .back i {
        margin-right: 10px;
    }

    .booking-details {
        display: flex;
        flex-wrap: wrap;
    }

    .booking-details div {
        flex: 1 1 45%;
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .number-of-people {
        display: flex;
        align-items: center;
    }

    .number-of-people button {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 5px;
        cursor: pointer;
        border-radius: 5px;
    }

    .number-of-people input {
        width: 50px;
        text-align: center;
    }

    .apply-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #5a2c82;
        color: white;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .summary-item:last-child {
        font-weight: bold;
    }
</style>

<body>

    <?php include "partials/header.php"; ?>
    <?php include "partials/pop_up.php"; ?>

    <main id="main">
        <!-- ======= About Boxes Section ======= -->
        <section id="about-boxes" class="about-boxes">
            <div class="container">
                <div class="overview">
                    <div class="section-title">
                        <h2>
                            <a href="<?php echo base_url() ?>" style="text-decoration: none; color: inherit;">
                                <i class="ri-arrow-left-line"></i>Back
                            </a>
                        </h2>
                        <p>Booking Details</p>
                    </div>
                    <?php
                    $monthNames = [
                        1 => 'January',
                        2 => 'February',
                        3 => 'March',
                        4 => 'April',
                        5 => 'May',
                        6 => 'June',
                        7 => 'July',
                        8 => 'August',
                        9 => 'September',
                        10 => 'October',
                        11 => 'November',
                        12 => 'December'
                    ];
                    $formattedDate = $day . ' ' . $monthNames[$month] . ', ' . $year;
                    ?>

                    <!-- Summary Section -->
                    <div class="summary-item">
                        <span><i class="fas fa-star"></i> Standard Theatre, MVP Colony</span>
                        <span><i class="fas fa-calendar-alt"></i> <?php echo $formattedDate; ?></span>
                        <span>
                            <?php
                            // Format and display time slots with AM/PM
                            foreach ($slots as $slot):
                                // Assuming slots are in "HH:MM - HH:MM" format
                                list($start, $end) = explode(' - ', $slot);
                                $startTime = date("g:i A", strtotime($start)); // Format to 12-hour with AM/PM
                                $endTime = date("g:i A", strtotime($end));
                                echo '<span><i class="fas fa-clock"></i> ' . htmlspecialchars($startTime . ' - ' . $endTime) . '</span><br>'; // Use <br> for line breaks
                            endforeach;
                            ?>
                        </span>
                    </div>
                    <form id="booking-form" action="<?php echo site_url('index.php/Dashboard/save_booking_details'); ?>" method="post">
                        <div class="booking-details">
                            <div>
                                <label for="booking-name">Booking Name *</label>
                                <input type="text" id="booking-name" name="booking-name" placeholder="Type here" required>
                            </div>
                            <div style="padding-left:25px;">
                                <label for="number-of-people">Number of people</label>
                                <div class="number-of-people">
                                    <button type="button" onclick="changePeople(-1)">-</button>
                                    <input type="number" id="number-of-people" name="number-of-people" value="2" min="1" required>
                                    <button type="button" onclick="changePeople(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <label for="whatsapp-number">Whatsapp Number *</label>
                                <input type="text" id="whatsapp-number" name="whatsapp-number" placeholder="Type here" required>
                            </div>
                            <div style="padding-left:20px;">
                                <label for="email-id">Email ID *</label>
                                <input type="email" id="email-id" name="email-id" placeholder="Type here" required>
                            </div>
                            <div>
                                <label for="decoration">Do you want decoration? *</label>
                                <select id="decoration" name="decoration" required>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="apply-btn">Apply</button>
                    </form>
                </div>

                <div class="booking-summary">
                    <h2>Booking summary</h2>
                    <div class="summary-item">
                        <span>Theater (2 ppl)</span>
                        <span>₹ 999</span>
                    </div>
                    <div class="summary-item">
                        <span>Decoration</span>
                        <span>₹ 600</span>
                    </div>
                    <div class="summary-item">
                        <span>Subtotal</span>
                        <span>₹ 1599</span>
                    </div>
                    <div class="summary-item">
                        <span>Advance amount payable</span>
                        <span>₹ 750</span>
                    </div>
                    <div class="summary-item">
                        <span>Balance amount</span>
                        <span>₹ 849</span>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->


    <?php include "partials/footer.php"; ?>
    <?php include "partials/script.php"; ?>
    <?php include "partials/scripts.php"; ?>



</body>

</html>