</section>

    <!-- Main content -->
          <?php
$counter_file = 'counter.txt'; // filename for the counter storage

// check if the counter file exists, if not create it with empty array
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, serialize(array()));
}

// load the existing counter data
$counter_data = unserialize(file_get_contents($counter_file));

// get the current page URL and remove the query string (if any)
$page_url = strtok($_SERVER["REQUEST_URI"],'?');

// increment the page view count for this page
if (isset($counter_data[$page_url])) {
    $counter_data[$page_url]++;
} else {
    $counter_data[$page_url] = 1;
}

// save the updated counter data to the file
file_put_contents($counter_file, serialize($counter_data));

// return the page view count for this page
echo $counter_data[$page_url];
?>

<script>
function updatePageViews() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("page-views").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "counter.php", true); // replace "/path/to/" with the actual path to your counter.php file
    xhttp.send();
}
</script>

<script>
updatePageViews();
</script>