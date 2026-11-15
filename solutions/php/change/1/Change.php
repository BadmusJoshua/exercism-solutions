<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

function findFewestCoins(array $coins, int $amount): array
{
    // 1. Check for negative amount
    if ($amount < 0) {
        throw new InvalidArgumentException(
            'Cannot make change for negative value'
        );
    }

    // 3. Remove invalid and duplicate coins
    $coins = array_unique(array_filter(
        $coins,
        fn($coin) => is_int($coin) && $coin > 0
    ));

    // 5. Check if amount is smaller than smallest coin
    if ($amount > 0 && $amount < min($coins)) {
        throw new InvalidArgumentException(
            'No coins small enough to make change'
        );
    }

    // 6. Initialize DP arrays
    $dp = array_fill(0, $amount + 1, PHP_INT_MAX);
    $previousCoin = array_fill(0, $amount + 1, 0);

    $dp[0] = 0;

    // 7. Calculate minimum number of coins
    for ($i = 1; $i <= $amount; $i++) {
        foreach ($coins as $coin) {

            if ($coin > $i) {
                continue;
            }

            if ($dp[$i - $coin] !== PHP_INT_MAX) {
                $count = $dp[$i - $coin] + 1;

                if ($count < $dp[$i]) {
                    $dp[$i] = $count;
                    $previousCoin[$i] = $coin;
                }
            }
        }
    }

    // 8. Check if exact change is possible
    if ($dp[$amount] === PHP_INT_MAX) {
        throw new InvalidArgumentException(
            'No combination can add up to target'
        );
    }

    // 9. Reconstruct the selected coins
    $result = [];

    while ($amount > 0) {
        $coin = $previousCoin[$amount];

        $result[] = $coin;
        $amount -= $coin;
    }

    return $result;
}
