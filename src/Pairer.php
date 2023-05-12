<?php

namespace Daniel\KataPairer;

class Pairer
{
    public function round2(Round $round): Round
    {
        $round = $round->switchRoles();
        $navigators = $round->navigators();
        $offset = 1;
        $pairs = [];
        foreach ($round as $pair) {
            $newDriver = $round->atOffset($offset++)->navigator;
            $pairs[] = $pair->withNavigator($newDriver);
        }

        return new Round($pairs);
    }
}
