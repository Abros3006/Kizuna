<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
        <!-- include navbar -->
<?php include './navbar.html';

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://jobs-api14.p.rapidapi.com/list?query=Web%20Developer&location=Japan&distance=1.0&language=en_GB&remoteOnly=false&datePosted=month&employmentTypes=fulltime%3Bparttime%3Bintern%3Bcontractor&index=0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: jobs-api14.p.rapidapi.com",
		"X-RapidAPI-Key: f421f92b89msh65d9abb0157ff84p16c6bcjsnc76f322a94d5"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// DECODE THE DATA
$data = json_decode($response, true);

if (!empty($data['jobs'])) {
    echo '<div class="job-listings">';
    foreach ($data['jobs'] as $job) {
        echo '<div class="job-card">';
		
        echo '<div class="job-header">';
        if (isset($job['title'])) {
            echo '<h3>' . $job['title'] . '</h3>';
        }
        if (isset($job['company'])) {
            echo '<p class="company">' . $job['company'] . '</p>';
        }
        echo '</div>';
        echo '<div class="job-details-row">';
        echo '<div class="other-details">';
        if (isset($job['location'])) {
            echo '<p class="location"><strong>Location:</strong> ' . $job['location'] . '</p>';
        }
        if (isset($job['employmentType'])) {
            echo '<p class="employment-type"><strong>Employment Type:</strong> ' . $job['employmentType'] . '</p>';
        }
        if (isset($job['datePosted'])) {
            echo '<p class="date-posted"><strong>Date Posted:</strong> ' . $job['datePosted'] . '</p>';
        }
        if (isset($job['salaryRange'])) {
            echo '<p class="salary-range"><strong>Salary Range:</strong> ' . $job['salaryRange'] . '</p>';
        }
        if (isset($job['jobProviders'])) {
            echo '<div class="job-providers"><strong>Job Providers:</strong>';
            foreach ($job['jobProviders'] as $provider) {
                echo '<a href="' . $provider['url'] . '" target="_blank">' . $provider['jobProvider'] . '</a>';
            }
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo 'No job listings found.';
}
?>
</body>
</html>