<?php
// Array of quotes
$quotes = [
    "People ask for criticism, but they only want praise. - W. Somerset Maugham",
    "I don't believe in intuition. When you get sudden flashes of perception, it is just the brain working faster than usual. But you've been getting ready to know it for a long time, and when it comes, you feel you've known it always.
- Katherine Anne Porter",
    "The trouble with lies was that once started, the fiction had to be continued, and it was hard always to be remembering details that you had made up upon the spur of the moment.
- Elizabeth Aston",
    "Man invented language to satisfy his deep need to complain.
- Lily Tomlin",
    "Do not be too moral. You may cheat yourself out of much life. Aim above morality. Be not simply good; be good for something.
- Henry David Thoreau",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>
