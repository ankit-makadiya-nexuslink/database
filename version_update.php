<?php
$version_file = 'version.php';

// Get the current version number
require $version_file;
list($major, $minor, $patch) = explode('.', VERSION);

// Increment the patch version
$patch++;

// Update the version file
$new_version = "$major.$minor.$patch";
$contents = "<?php\ndefine('VERSION', '$new_version');\n?>";
file_put_contents($version_file, $contents);

echo "Version updated to $new_version\n";
?>
