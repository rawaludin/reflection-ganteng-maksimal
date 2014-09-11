<?php
include_once "Twitter.php";
$twSusi = new Twitter("susi", "Pria sejati datang menemui orang tua gadis pujaannya bukan mengajak si gadis ke tempat2 sepi. Itu.");
echo "Class dari \$twSusi adalah : " . get_class($twSusi) . "\n";
echo "Methods dari \$twSusi adalah : \n";
print_r(get_class_methods($twSusi));
echo "Parent class dari \$twSusi` : " . get_parent_class($twSusi) . "\n";
