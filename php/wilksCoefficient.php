<?php
    function wilksMensKG($bodyweight, $total) {
        $wilks = $total * 500 / (-216.0475144 + 16.2606339 * $bodyweight - 0.002388645 * pow($bodyweight,2) - 0.00113732 * pow($bodyweight,3) + 0.00000701863 * pow($bodyweight,4) - 0.00000001291 * pow($bodyweight,5));
        echo $wilks;
    }
    
    function wilksMensLB($bodyweight, $total) {
        $bodyweightLBS = $bodyweight*0.453592;
        $totalLBS = $total*0.453592;
        $wilks = $totalLBS * 500 / (-216.0475144 + 16.2606339 * $bodyweightLBS - 0.002388645 * pow($bodyweightLBS,2) - 0.00113732 * pow($bodyweightLBS,3) + 0.00000701863 * pow($bodyweightLBS,4) - 0.00000001291 * pow($bodyweightLBS,5));
        echo $wilks;
    }
    
    function wilksWomensKG($bodyweight, $total) {
        $wilks = $total * 500 / (594.31747775582 - 27.23842536447 * $bodyweight + 0.82112226871 * pow($bodyweight,2) - 0.00930733913 * pow($bodyweight,3) + 0.00004731582 * pow($bodyweight,4) - 0.00000009054 * pow($bodyweight,5));
        echo $wilks;
    }
    
    function wilksWomensLB($bodyweight, $total) {
        $bodyweightLBS = $bodyweight*0.453592;
        $totalLBS = $total*0.453592;
        $wilks = $totalLBS * 500 / (594.31747775582 - 27.23842536447 * $bodyweightLBS + 0.82112226871 * pow($bodyweightLBS,2) - 0.00930733913 * pow($bodyweightLBS,3) + 0.00004731582 * pow($bodyweightLBS,4) - 0.00000009054 * pow($bodyweightLBS,5));
        echo $wilks;
    }
    
?>