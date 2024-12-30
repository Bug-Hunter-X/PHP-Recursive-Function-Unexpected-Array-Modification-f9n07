# PHP Recursive Function Bug

This repository demonstrates a common error in PHP involving unexpected modification of arrays within recursive functions. The issue arises from PHP's pass-by-reference behavior for arrays.  The provided `bug.php` file contains a recursive function that attempts to process nested data structures. However, due to the pass-by-reference, modifications made within the recursive calls affect the original array.

The solution, found in `bugSolution.php`, addresses the problem by using `array_map` and value cloning to ensure that the original array remains unchanged. This ensures that operations within the recursive calls do not affect the original data structure.