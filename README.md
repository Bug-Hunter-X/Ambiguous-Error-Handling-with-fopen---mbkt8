# Ambiguous Error Handling in PHP's `fopen()`

This example demonstrates a common issue in PHP's file handling. The `fopen()` function returns `false` on failure, but this can be caused by various issues beyond the file simply not existing.  This lack of specificity makes robust error handling difficult.

The `bug.php` file shows the problem: it lacks detailed error checking.  The `bugSolution.php` file offers a more robust solution.
