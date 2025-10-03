<?php
try {
    // Create a new Phar object
    $phar = new Phar('build/studytracker.phar', 0);

    // Add files to the archive
    $phar->buildFromDirectory(__DIR__ . '/app');

    // Set the default stub file
    $phar->setDefaultStub('index.php');

    // Save the archive
    $phar->stopBuffering();

    echo "Phar archive created successfully.";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
