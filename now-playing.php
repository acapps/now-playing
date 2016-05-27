<?php
/**
 * Copyright (c) 2016 Alan Capps
 *
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE. OTHER DEALINGS IN THE SOFTWARE.
 */

define('TITLE', 0);
define('ARTIST', 1);
define('INPUT_DELIMITER', '\n');
define('OUTPUT_FORMAT', "%s<br /><i>%s</i>");

define('DEFAULT_TITLE', 'Unknown');
define('DEFAULT_ARTIST', 'Not Applicable');

$formatOutput = function($songTitle = '', $songArtist = '') {
    return sprintf(OUTPUT_FORMAT, $songTitle, $songArtist);
};

// TODO: Fill in appropriate Path to Song Information.
// $fileContents = file_get_contents(/** Path to file **/);
$fileContents = 'Song Title\nArtist Name';

// TODO: Modify delimiter to match delimiter of file format.
$fileParts = explode(INPUT_DELIMITER, $fileContents);

// The approach taken, if we have fewer than 2 parts then the file is probably corrupt
// and we fall back to the default response.
if (!$fileParts || (count($fileParts) < 2)) {
    // Parsing Error.
    echo $formatOutput(DEFAULT_TITLE, DEFAULT_ARTIST); // Error condition, default response;
    exit();
}

echo $formatOutput($fileParts[TITLE], $fileParts[ARTIST]);
exit();

