# PHP Type Juggling and isset() Pitfall
This repository demonstrates a subtle bug in PHP related to type juggling and the use of the `isset()` function.  The example highlights how comparing an unset variable to 0 using `==` can lead to unexpected results.

The `bug.php` file contains the erroneous code, while `bugSolution.php` shows the corrected version.

This is a common error that can be easily overlooked, emphasizing the importance of careful type handling and comparison in PHP.