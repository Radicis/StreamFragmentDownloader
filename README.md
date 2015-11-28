# StreamFragmentDownloader

This script was created to solve a very important problem. When your girlfriend wants to watch the Toy show on your raspberry Pi and you can't stream it.

Inspection of the RTA player showed that the stream was provided in fragments so the solution was to download them all in sequence them combine into one video file.

Runing getter.php will download all of the F4F fragments into the root directory. 
Upon completion run combine.php in the same directory to combine fragments into .flv
