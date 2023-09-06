<?php function determineGrade($score) {
    if ($score >= 70 && $score <= 100) {
        return "A (Excellent)";
    } elseif ($score >= 60 && $score < 70) {
        return "B (Very Good)";
    } elseif ($score >= 50 && $score < 60) {
        return "C (Good)";
    } elseif ($score >= 45 && $score < 50) {
        return "D (Pass)";
    } elseif ($score >= 0 && $score < 45) {
        return "F (Fail)";
    } else {
        return "Invalid Score";
    }
}

?>
