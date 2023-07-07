<?php

function emptyMsg()
{
    echo "<script>setTimeout(function() {
        var notyf = new Notyf({
            duration: 4000,
            position: {
                x: 'right',
                y: 'bottom',
            },
        });
        notyf.error('Please enter your details');
    }, 1000)</script>";
}

function successMsg($text)
{
    echo "<script>setTimeout(function() {
        var notyf = new Notyf({
            duration: 4000,
            ripple: false,
            position: {
                x: 'right',
                y: 'bottom',
            },
        });
        notyf.success('$text');
    }, 1000)</script>";
}

function invalidMsg($text)
{
    echo "<script>setTimeout(function() {
        var notyf = new Notyf({
            duration: 4000,
            position: {
                x: 'right',
                y: 'bottom',
            },
        });
        notyf.error('{$text}');
    }, 1000)</script>";
}
