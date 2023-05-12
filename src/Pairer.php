<?php

namespace Daniel\KataPairer;

class Pairer
{
    /**
     * @param Round $round1
     */
    public function round2(Round $round): Round
    {
        $round = $round->switchRoles();
        $navigators = $round->navigators();
        $newPairs = [];
        $offset = 1;
        $pairs = [];
        foreach ($round as $pair) {
            $newDriver = $round->atOffset($offset++)->navigator;
            $pairs[] = $pair->withNavigator($newDriver);
        }

        return new Round($pairs);
    }
}
