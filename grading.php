<?php function determineGrade($score) {
    if ($score >= 70 && $score <= 100) {
        return "A";
    } elseif ($score >= 60 && $score < 70) {
        return "B";
    } elseif ($score >= 50 && $score < 60) {
        return "C";
    } elseif ($score >= 45 && $score < 50) {
        return "D";
    } elseif ($score >= 0 && $score < 45) {
        return "F";
    } else {
        return "Invalid Score";
    }
}

?>
