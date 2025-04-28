<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $municipality = $_POST['municipality'];
    $ward_no = $_POST['ward_no'];
    $tole = $_POST['tole'];
    $telephone = $_POST['telephone'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $post_at_retirement = $_POST['post_at_retirement'];
    $pension_lease_no = $_POST['pension_lease_no'];
    $office = $_POST['office'];
    $date_commencement = $_POST['date_commencement'];
    $date_decision_grant = $_POST['date_decision_grant'];
    $date_retirement = $_POST['date_retirement'];
    $membership_no = $_POST['membership_no'];
    $registration_no = $_POST['registration_no'];
    $date_fillup = $_POST['date_fillup'];
    $place = $_POST['place'];

    // Handle file or image uploads
    $file_or_image = $_FILES['file_or_image'];
    $file_or_image_type = strtolower(pathinfo($file_or_image["name"], PATHINFO_EXTENSION));
    $upload_ok = 1;

    // Define directories for file and image
    $file_dir = 'uploads/authorization/';
    $image_dir = 'uploads/photos/';

    // Determine if the upload is a file or an image
    if (!empty($file_or_image["name"])) {
        if (isset($_POST['upload_type']) && $_POST['upload_type'] == 'file') {
            // Validate file type (PDF)
            if ($file_or_image_type != 'pdf') {
                echo "Only PDF files are allowed for documents.";
                $upload_ok = 0;
            }
        } elseif (isset($_POST['upload_type']) && $_POST['upload_type'] == 'image') {
            // Validate image type (JPG, JPEG, PNG)
            if (!in_array($file_or_image_type, ['jpg', 'jpeg', 'png'])) {
                echo "Only JPG, JPEG, and PNG images are allowed.";
                $upload_ok = 0;
            }
        }
    }

    // If validation passes, upload the file or image
    if ($upload_ok == 1) {
        if (isset($_POST['upload_type']) && $_POST['upload_type'] == 'file') {
            $upload_path = $file_dir . basename($file_or_image["name"]);
        } elseif (isset($_POST['upload_type']) && $_POST['upload_type'] == 'image') {
            $upload_path = $image_dir . basename($file_or_image["name"]);
        }

        if (move_uploaded_file($file_or_image["tmp_name"], $upload_path)) {
            echo "Form submitted successfully! <a href='registration_success.php'>Thank you!</a>";
        } else {
            echo "Sorry, there was an error uploading your file/image.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-header h2 {
            font-size: 2rem;
            color: #333;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            border-radius: 8px;
        }
        .form-group input[type="file"] {
            padding: 5px 10px;
        }
        .btn-custom {
            background-color: #0066cc;
            color: white;
            border-radius: 50px;
            width: 100%;
            padding: 10px;
            font-size: 1.1rem;
        }
        .btn-custom:hover {
            background-color: #004c99;
            color: white;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
        }
        .footer-text a {
            text-decoration: none;
            color: #0066cc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 form-container">
            <div class="form-header">
                <h2>Registration Form</h2>
                <p>Please fill out the form below</p>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                
                <!-- Personal Details Section -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="province" class="form-label">Province</label>
                        <input type="text" class="form-control" id="province" name="province" required>
                    </div>
                    <div class="col-md-6">
                        <label for="district" class="form-label">District</label>
                        <input type="text" class="form-control" id="district" name="district" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="municipality" class="form-label">Municipality</label>
                        <input type="text" class="form-control" id="municipality" name="municipality" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ward_no" class="form-label">Ward No.</label>
                        <input type="number" class="form-control" id="ward_no" name="ward_no" required>
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="mb-3">
                    <label for="tole" class="form-label">Tole (Locality)</label>
                    <input type="text" class="form-control" id="tole" name="tole" required>
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Telephone No.</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile No.</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" pattern="\d{10}" title="Mobile number must be 10 digits" required>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <!-- Employment and Retirement Details Section -->
                <div class="mb-3">
                    <label for="post_at_retirement" class="form-label">Post at the time of retirement</label>
                    <input type="text" class="form-control" id="post_at_retirement" name="post_at_retirement" required>
                </div>

                <div class="mb-3">
                    <label for="pension_lease_no" class="form-label">Pension Lease No.</label>
                    <input type="text" class="form-control" id="pension_lease_no" name="pension_lease_no" required>
                </div>

                <div class="mb-3">
                    <label for="office" class="form-label">Office</label>
                    <input type="text" class="form-control" id="office" name="office" required>
                </div>

                <div class="mb-3">
                    <label for="date_commencement" class="form-label">Service start date</label>
                    <input type="date" class="form-control" id="date_commencement" name="date_commencement" required>
                </div>

                <div class="mb-3">
                    <label for="date_decision_grant" class="form-label">Date of Decision Grant</label>
                    <input type="date" class="form-control" id="date_decision_grant" name="date_decision_grant" required>
                </div>

                <div class="mb-3">
                    <label for="date_retirement" class="form-label">Service retirement date</label>
                    <input type="date" class="form-control" id="date_retirement" name="date_retirement" required>
                </div>

                <div class="mb-3">
                    <label for="membership_no" class="form-label">Membership No.</label>
                    <input type="text" class="form-control" id="membership_no" name="membership_no" required>
                </div>

                <div class="mb-3">
                    <label for="registration_no" class="form-label">Registration No.</label>
                    <input type="text" class="form-control" id="registration_no" name="registration_no" required>
                </div>

                <div class="mb-3">
                    <label for="date_fillup" class="form-label">Date of Fill-up</label>
                    <input type="date" class="form-control" id="date_fillup" name="date_fillup" required>
                </div>

                <div class="mb-3">
                    <label for="place" class="form-label">Place</label>
                    <input type="text" class="form-control" id="place" name="place" required>
                </div>

                <!-- File/Image Upload Option -->
                <div class="mb-3">
                    <label class="form-label">Upload Option</label><br>
                    <input type="radio" id="file_option" name="upload_type" value="file" required>
                    <label for="file_option">Upload Document (PDF)</label><br>
                    <input type="radio" id="image_option" name="upload_type" value="image" required>
                    <label for="image_option">Upload Image (JPG, JPEG, PNG)</label><br><br>

                    <input type="file" class="form-control" id="file_or_image" name="file_or_image" required>
                </div>

                <!-- Submit button and Back button centered -->
                <div class="text-center">
                    <button type="submit" class="btn btn-custom">Submit</button>
                    <button type="button" class="btn btn-secondary mt-3" onclick="window.history.back();">Back</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

</body>
</html>
