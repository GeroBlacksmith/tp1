<?php

if ($_GET) {
    if ($_GET['id']) {
        if ($_GET['id'] == "tab-1") {
            echo "tab 1";
        } else {
            if ($_GET['id'] == "tab-2") {
                echo "tab 2";
            } else {
                if ($_GET['id'] == "tab-3") {
                    echo "tab 3";
                }
            }
        }
    }
}
