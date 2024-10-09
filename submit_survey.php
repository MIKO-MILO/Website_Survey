
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveypm_db";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];

    $sql = "INSERT INTO survey_responses (question1, question2, question3, question4, question5) 
            VALUES ('$question1', '$question2', '$question3', '$question4', '$question5')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman sukses setelah data berhasil disimpan
        header("Location: success.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
