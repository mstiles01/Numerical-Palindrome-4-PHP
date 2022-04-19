<?php

if(is_string($num) == true || $num < 0) {
            return "Not valid";
        }

        $num_reverse = strrev($num);

        if ($num <= 10) {
            return 11;
        }

        if ($num == $num_reverse) {
            return $num;
        } else {

            $adding = 0;
            $subtract = 0;
            $adding_done = false;
            $num_for_adding = $num;
            $num_for_sub = $num;
            $adding_num = 0;
            $sub_num = 0;



                while ($num_for_adding != $num_reverse) {

                    if ($num_for_adding == strrev($num_for_adding)) {
                        $adding_done = true;
                        $adding_num = $num_for_adding++;
                        break;
                    }
                    $num_for_adding++;
                   $adding++;

                }

            if ($adding_done == true) {
                while ($num_for_sub != $num_reverse) {
                    if ($num_for_sub == strrev($num_for_sub)) {
                        $sub_num = $num_for_sub--;
                        break;
                    }
                    $subtract++;
                    $num_for_sub--;
                }
            }
            if($subtract > $adding ) {
                return $subtract;
            } elseif ($subtract < $adding) {
                return $sub_num;
            }
        }
