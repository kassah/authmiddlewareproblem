Demo repository in support of a question of how to combine logic with Authentication middleware.

Specifically, there is desire to be able to decouple it selectively by using withoutMiddeware, but by default have it included.

Primary breaking changes happened in:
https://github.com/kassah/authmiddlewareproblem/commit/84a18d6a1cdaaa620b418c9653f156e20807e0ce

which immediately breaks these tests that were previously passing:
- test: https://github.com/kassah/authmiddlewareproblem/blob/main/tests/Feature/PasswordConfirmationTest.php
- passing (before): https://github.com/kassah/authmiddlewareproblem/runs/7960734087?check_suite_focus=true
- failing (after): https://github.com/kassah/authmiddlewareproblem/runs/7960749285?check_suite_focus=true


due to the use of guards with the authentication middleware (that Laravel Forge uses internally).
