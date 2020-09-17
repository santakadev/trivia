<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class TriviaTest extends TestCase
{
    public function test(): void
    {
        srand(2);
        ob_start();
        include __DIR__ . '/../src/GameRunner.php';
        $result = ob_get_contents();
        ob_get_clean();

        $expected = "Chet was added
They are player number 1
Pat was added
They are player number 2
Sue was added
They are player number 3
Chet is the current player
They have rolled a 1
Chet's new location is 1
The category is Science
Science Question 0
Question was incorrectly answered
Chet was sent to the penalty box
Pat is the current player
They have rolled a 6
Pat's new location is 6
The category is Sports
Sports Question 0
Answer was corrent!!!!
Pat now has 1 Gold Coins.
Sue is the current player
They have rolled a 3
Sue's new location is 3
The category is Rock
Rock Question 0
Answer was corrent!!!!
Sue now has 1 Gold Coins.
Chet is the current player
They have rolled a 1
Chet is getting out of the penalty box
Chet's new location is 2
The category is Sports
Sports Question 1
Answer was correct!!!!
Chet now has 1 Gold Coins.
Pat is the current player
They have rolled a 3
Pat's new location is 9
The category is Science
Science Question 1
Answer was corrent!!!!
Pat now has 2 Gold Coins.
Sue is the current player
They have rolled a 1
Sue's new location is 4
The category is Pop
Pop Question 0
Answer was corrent!!!!
Sue now has 2 Gold Coins.
Chet is the current player
They have rolled a 6
Chet is not getting out of the penalty box
Pat is the current player
They have rolled a 4
Pat's new location is 1
The category is Science
Science Question 2
Answer was corrent!!!!
Pat now has 3 Gold Coins.
Sue is the current player
They have rolled a 2
Sue's new location is 6
The category is Sports
Sports Question 2
Question was incorrectly answered
Sue was sent to the penalty box
Chet is the current player
They have rolled a 3
Chet is getting out of the penalty box
Chet's new location is 5
The category is Science
Science Question 3
Answer was correct!!!!
Chet now has 2 Gold Coins.
Pat is the current player
They have rolled a 5
Pat's new location is 6
The category is Sports
Sports Question 3
Answer was corrent!!!!
Pat now has 4 Gold Coins.
Sue is the current player
They have rolled a 2
Sue is not getting out of the penalty box
Chet is the current player
They have rolled a 2
Chet is not getting out of the penalty box
Pat is the current player
They have rolled a 5
Pat's new location is 11
The category is Rock
Rock Question 1
Answer was corrent!!!!
Pat now has 5 Gold Coins.
Sue is the current player
They have rolled a 4
Sue is not getting out of the penalty box
Chet is the current player
They have rolled a 6
Chet is not getting out of the penalty box
Pat is the current player
They have rolled a 3
Pat's new location is 2
The category is Sports
Sports Question 4
Answer was corrent!!!!
Pat now has 6 Gold Coins.
";

        $this->assertSame($expected, $result);
    }
}