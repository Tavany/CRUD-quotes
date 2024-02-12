<form>
    
</form>

<?php
$nilai = $_POST ['nilai'];
if ($nilai >= 80) {
    echo "A"
} elif ($nilai >= 70) {
    echo "B"
} elif ($nilai >= 60) {
    echo "C"
} elif ($nilai >= 50) {
    echo "D"
} else {
    echo "E"
}

